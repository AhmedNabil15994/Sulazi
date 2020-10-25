<?php namespace App\Http\Controllers;

use App\Models\Shop;
use App\Models\Category;
use App\Models\Address;
use App\Models\Phone;
use Illuminate\Http\Request;

class ShopsControllers extends Controller {

    use \TraitsFunc;

    public function validateShop($input){
        $rules = [
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ];

        $message = [
            'name.required' => "Sorry Name Required",
            'phone.required' => "Sorry Phone Required",
            'address.required' => "Sorry Address Required",
        ];

        $validate = \Validator::make($input, $rules, $message);

        return $validate;
    }

    public function index() {
        $usersList = Shop::usersList();
        return view('Shop.Views.index')
            ->with('data', (Object) $usersList);
    }

    public function edit($id) {
        $id = (int) $id;

        $userObj = Shop::getOne($id);

        if($userObj == null) {
            return Redirect('404');
        }

        $dataObj = Shop::getData($userObj);

        $data['groups'] = Category::NotDeleted()->get();
        $data['user'] = $dataObj;
        return view('Shop.Views.edit')->with('data', (object) $data);      
    }

    public function update($id,Request $request) {
        $id = (int) $id;
        $input = \Request::all();
        $userObj = Shop::getOne($id);
        if($userObj == null) {
            return Redirect('404');
        }

        $validate = $this->validateShop($input);

        if($validate->fails()){
            \Session::flash('error', $validate->messages()->first());
            return redirect()->back();
        }
        
        $checkPhone = Shop::checkByPhone($input['phone'],$id);
        if($checkPhone){
            \Session::flash('error', "Phone Already Exist !!");
            return redirect()->back();
        }

        $details = json_decode($input['address_details']);
        $details->type = 2;

        $input['address_id'] = Address::checkAddressByLatLng($details,2);
        $input['phone_id'] = Phone::storeMobile($input['phone']);

        $userObj->name = $input['name'];
        $userObj->address_id = $input['address_id'];
        $userObj->phone_id = $input['phone_id'];
        $userObj->category_id = $input['category_id'];
        $userObj->save();

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $fileName = \ImagesHelper::UploadImage('users', $image, $id);
        //     if($image == false || $fileName == false){
        //         \Session::flash('error', "Upload Image Failed !!");
        //         return redirect()->back();
        //     }
        //     $profileObj->image = $fileName;
        //     $profileObj->save();
        // }

        \Session::flash('success', "Alert! Update Successfully");
        return \Redirect::back()->withInput();
    }

    public function add() {
        $data['groups'] = Category::NotDeleted()->get();
        return view('Shop.Views.add')->with('data', (object) $data);
    }

    public function create(Request $request) {
        $input = \Request::all();
        $validate = $this->validateShop($input);

        if($validate->fails()){
            return \TraitsFunc::ValidationError($validate, 400);
        }

        $checkPhone = Shop::checkByPhone($input['phone']);
        if($checkPhone){
            \Session::flash('error', "Phone Already Exist !!");
            return redirect()->back();
        }

        $details = json_decode($input['address_details']);
        $details->type = 2;

        $input['address_id'] = Address::checkAddressByLatLng($details,2);
        $input['phone_id'] = Phone::storeMobile($input['phone']);

        $userObj = new Shop;
        $userObj->name = $input['name'];
        $userObj->address_id = $input['address_id'];
        $userObj->phone_id = $input['phone_id'];
        $userObj->category_id = $input['category_id'];
        $userObj->save();
        
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     $fileName = \ImagesHelper::UploadImage('users', $image, $user_id);
        //     if($image == false || $fileName == false){
        //         return \TraitsFunc::ErrorMessage("Upload Image Failed", 400);
        //     }
        //     $profileObj = Profile::where('user_id',$user_id)->first();
        //     $profileObj->image = $fileName;
        //     $profileObj->save();
        // }
        return  \TraitsFunc::SuccessResponse("The application has been successfully submitted!");
    }

    public function delete($id) {
        $id = (int) $id;
        $userObj = Shop::getOne($id);
        \Helper::globalDelete($userObj);
        \Session::flash('success', "Shop Deleted Successfully !!");
        return 1;
    }

}
