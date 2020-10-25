<?php namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\Group;
use App\Models\Address;
use App\Models\Phone;
use Illuminate\Http\Request;

class UsersControllers extends Controller {

    use \TraitsFunc;

    public function validateUser($input){
        $rules = [
            'name' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'user_type' => 'required',
            'password' => 'required',
            'address' => 'required',
        ];

        $message = [
            'name.required' => "Sorry Name Required",
            'gender.required' => "Sorry Gender Required",
            'phone.required' => "Sorry Phone Required",
            'password.required' => "Sorry Password Required",
            'email.required' => "Sorry email Required",
            'email.email' => "Please check email format",
            'email.unique' => "This user exist",
            'user_type.required' => "Sorry User Type Required",
            'address.required' => "Sorry Address Required",
            'birth_date.required' => "Sorry Brith Date Required",
        ];

        $validate = \Validator::make($input, $rules, $message);

        return $validate;
    }

    public function validateCheckUser($input){
        $rules = [
            'name' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'user_type' => 'required',
            'address' => 'required',
        ];

        $message = [
            'name.required' => "Sorry Name Required",
            'gender.required' => "Sorry Gender Required",
            'phone.required' => "Sorry Phone Required",
            'password.required' => "Sorry Password Required",
            'email.required' => "Sorry email Required",
            'email.email' => "Please check email format",
            'user_type.required' => "Sorry User Type Required",
            'birth_date.required' => "Sorry Brith Date Required",
            'address.required' => "Sorry Address Required",
        ];

        $validate = \Validator::make($input, $rules, $message);

        return $validate;
    }


    public function index() {
        $usersList = User::usersList();
        return view('User.Views.index')
            ->with('data', (Object) $usersList);
    }

    public function edit($id) {
        $id = (int) $id;

        $userObj = User::with('Profile')
            ->whereHas('Profile', function() {})
            ->find($id);

        if($userObj == null) {
            return Redirect('404');
        }

        $profileObj = $userObj->Profile;
        if($profileObj == null) {
            return Redirect('404');
        }

        $dataObj = User::getData($userObj);

        $data['groups'] = Group::NotDeleted()->get();
        $data['permissions'] = array_diff(array_unique(config('permissions')), ['general','doLogin','login','logout']);
        $data['user'] = $dataObj;
        return view('User.Views.edit')->with('data', (object) $data);      
    }

    public function update($id,Request $request) {
        $id = (int) $id;

        $input = \Request::all();

        $userObj = User::with('Profile')->find($id);

        if($userObj == null) {
            return Redirect('404');
        }

        $profileObj = $userObj->Profile;

        if($profileObj == null) {
            return Redirect('404');
        }

        $validate = $this->validateCheckUser($input);

        if($validate->fails()){
            \Session::flash('error', $validate->messages()->first());
            return redirect()->back();
        }
        
        $checkEmail = User::checkUserByEmail($input['email'],$id);
        if($checkEmail){
            \Session::flash('error', "Email Already Exist !!");
            return redirect()->back();
        }

        $checkPhone = User::checkUserByPhone($input['phone'],$id);
        if($checkPhone){
            \Session::flash('error', "Phone Already Exist !!");
            return redirect()->back();
        }

        $details = json_decode($input['address_details']);
        $details->type = 1;

        $input['address_id'] = Address::checkAddressByLatLng($details);
        $input['phone_id'] = Phone::storeMobile($input['phone']);

        $name = explode(' ', $input['name'], 2);
        $input['first_name'] = $name[0];
        $input['last_name'] = isset($name[1]) ? $name[1]  : '';

        User::saveProfile($input,$userObj);

        $userObj->name = $input['name'];
        $userObj->email = $input['email'];
        $userObj->save();

        if($input['password'] != ''){
            if($input['password_confirmation'] != $input['password']){
                \Session::flash('error', "Password Confirmation Doesn't Match !!");
                return redirect()->back();
            }
            $userObj->password = \Hash::make($input['password']);
            $userObj->save();
        }
            // dd($input);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = \ImagesHelper::UploadImage('users', $image, $id);
            if($image == false || $fileName == false){
                \Session::flash('error', "Upload Image Failed !!");
                return redirect()->back();
            }
            $profileObj->image = $fileName;
            $profileObj->save();
        }

        \Session::flash('success', "Alert! Update Successfully");
        return \Redirect::back()->withInput();
    }

    public function add() {
        $data['groups'] = Group::NotDeleted()->get();
        $data['permissions'] = array_diff(array_unique(config('permissions')), ['general','doLogin','login','logout']);
        return view('User.Views.add')->with('data', (object) $data);
    }

    public function create(Request $request) {
        $input = \Request::all();
        $validate = $this->validateUser($input);

        if($validate->fails()){
            return \TraitsFunc::ValidationError($validate, 400);
        }

        $details = json_decode($input['address_details']);
        $details->type = 1;

        $input['address_id'] = Address::checkAddressByLatLng($details);
        $input['phone_id'] = Phone::storeMobile($input['phone']);

        $name = explode(' ', $input['name'], 2);
        $input['first_name'] = $name[0];
        $input['last_name'] = isset($name[1]) ? $name[1]  : '';

        $user_id = User::createOneUser($input);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = \ImagesHelper::UploadImage('users', $image, $user_id);
            if($image == false || $fileName == false){
                return \TraitsFunc::ErrorMessage("Upload Image Failed", 400);
            }
            $profileObj = Profile::where('user_id',$user_id)->first();
            $profileObj->image = $fileName;
            $profileObj->save();
        }
        return  \TraitsFunc::SuccessResponse("The application has been successfully submitted!");
    }

    public function changeStatus($id,Request $request){
        $input = \Request::all();
        $status = $input['status'] == 'false' ? 0 : 1;
        User::find($id)->update(['is_active'=>$status]);
        return 1;
    }

    public function delete($id) {
        $id = (int) $id;
        $userObj = User::getOne($id);
        \Helper::globalDelete($userObj->Profile);
        \Helper::globalDelete($userObj);
        \Session::flash('success', "User Deleted Successfully !!");
        return 1;
    }

}
