<?php namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class GroupsControllers extends Controller {

    use \TraitsFunc;

    protected function validateGroup($input){
        $rules = [
            'title' => 'required',
            'extra_rules' => 'required'
        ];

        $message = [
            'title.required' => "Sorry Title Required",
            'extra_rules.required' => 'Sorry Rules Required'
        ];

        $validate = \Validator::make($input, $rules, $message);

        return $validate;
    }

    public function index() {

        $groupsList = Group::groupsList();
        return view('Group.Views.index')
            ->with('data', (Object) $groupsList);
    }

    public function edit($id) {
        $id = (int) $id;

        $groupObj = Group::NotDeleted()->find($id);

        if($groupObj == null) {
            return Redirect('404');
        }

        $data['permissions'] = array_diff(array_unique(config('permissions')), ['general','doLogin','login','logout']);
        $data['data'] = Group::getData($groupObj);
        return view('Group.Views.edit')->with('data', (object) $data);      
    }

    public function update($id) {
        $id = (int) $id;

        $input = \Request::all();

        $groupObj = Group::NotDeleted()->find($id);

        if($groupObj == null) {
            return Redirect('404');
        }

        $validate = $this->validateGroup($input);
        if($validate->fails()){
            \Session::flash('error', $validate->messages()->first());
            return redirect()->back();
        }


        $groupObj->title = $input['title'];
        $groupObj->permissions = serialize($input['extra_rules']);
        $groupObj->updated_at = DATE_TIME;
        $groupObj->updated_by = USER_ID;
        $groupObj->save();

        \Session::flash('success', "Alert! Update Successfully");
        return \Redirect::back()->withInput();
    }

    public function add() {
        $data['permissions'] = array_diff(array_unique(config('permissions')), ['general','doLogin','login','logout']);
        return view('Group.Views.add')->with('data', (object) $data);
    }

    public function create() {
        $input = \Request::all();
        
        $validate = $this->validateGroup($input);
        if($validate->fails()){
            \Session::flash('error', $validate->messages()->first());
            return redirect()->back();
        }
        
        $groupObj = new Group;
        $groupObj->title = $input['title'];
        $groupObj->permissions = serialize($input['extra_rules']);
        $groupObj->created_at = DATE_TIME;
        $groupObj->created_by = USER_ID;
        $groupObj->save();

        \Session::flash('success', "Alert! Create Successfully");
        return redirect()->to('groups/');
    }

    public function delete($id) {
        $id = (int) $id;
        $groupObj = Group::getOne($id);
        return \Helper::globalDelete($groupObj);
    }
}
