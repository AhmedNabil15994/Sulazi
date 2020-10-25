<?php namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CategoryControllers extends Controller {

    use \TraitsFunc;

    protected function validateCategory($input){
        $rules = [
            'title' => 'required',
        ];

        $message = [
            'title.required' => "Sorry Title Required",
        ];

        $validate = \Validator::make($input, $rules, $message);

        return $validate;
    }

    public function index() {

        $groupsList = Category::dataList();
        return view('Category.Views.index')
            ->with('data', (Object) $groupsList);
    }

    public function edit($id) {
        $id = (int) $id;

        $groupObj = Category::NotDeleted()->find($id);

        if($groupObj == null) {
            return Redirect('404');
        }

        $data['data'] = Category::getData($groupObj);
        return view('Category.Views.edit')->with('data', (object) $data);      
    }

    public function update($id) {
        $id = (int) $id;

        $input = \Request::all();

        $groupObj = Category::NotDeleted()->find($id);

        if($groupObj == null) {
            return Redirect('404');
        }

        $validate = $this->validateCategory($input);
        if($validate->fails()){
            \Session::flash('error', $validate->messages()->first());
            return redirect()->back();
        }


        $groupObj->title = $input['title'];
        $groupObj->description = $input['description'];
        $groupObj->updated_at = DATE_TIME;
        $groupObj->updated_by = USER_ID;
        $groupObj->save();

        \Session::flash('success', "Alert! Update Successfully");
        return \Redirect::back()->withInput();
    }

    public function add() {
        return view('Category.Views.add');
    }

    public function create() {
        $input = \Request::all();
        
        $validate = $this->validateCategory($input);
        if($validate->fails()){
            \Session::flash('error', $validate->messages()->first());
            return redirect()->back();
        }
        
        $groupObj = new Category;
        $groupObj->title = $input['title'];
        $groupObj->description = $input['description'];
        $groupObj->created_at = DATE_TIME;
        $groupObj->created_by = USER_ID;
        $groupObj->save();

        \Session::flash('success', "Alert! Create Successfully");
        return redirect()->to('categories/');
    }

    public function delete($id) {
        $id = (int) $id;
        $groupObj = Category::getOne($id);
        return \Helper::globalDelete($groupObj);
    }
}
