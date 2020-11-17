<?php namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Questionnaire;
use App\Models\UserRequest;

class HomeControllers extends Controller {

    use \TraitsFunc;

    public $userRequest;
    
    public function __construct(Request $request){
        $this->userRequest = UserRequest::findNewRequest($request->ip());
    }

    protected function validateQuestionnaire($input){
        $rules = [
            'f_name' => 'required',
            'l_name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'family_info' => 'required',
            'goal_1' => 'required',
            'goal_2' => 'required',
            'goal_3' => 'required',
            'style_1' => 'required',
            'style_2' => 'required',
            'style_3' => 'required',
            'style_4' => 'required',
            'treatment' => 'required',
            'measurement' => 'required',
        ];

        $message = [
            'f_name.required' => trans('main.valid_1'),
            'l_name.required' => trans('main.valid_2'),
            'address.required' => trans('main.valid_3'),
            'email.required' => trans('main.valid_4'),
            'email.email' => trans('main.valid_5'),
            'family_info.required' => trans('main.valid_7'),
            'goal_1.required' => trans('main.valid_8'),
            'goal_2.required' => trans('main.valid_9'),
            'goal_3.required' => trans('main.valid_10'),
            'style_1.required' => trans('main.valid_11'),
            'style_2.required' => trans('main.valid_12'),
            'style_3.required' => trans('main.valid_13'),
            'style_4.required' => trans('main.valid_14'),
            'treatment.required' => trans('main.valid_15'),
            'measurement.required' => trans('main.valid_16'),
        ];

        $validate = \Validator::make($input, $rules, $message);

        return $validate;
    }

    public function index()
    {      
        $data = $this->userRequest;
        return view('Home.Views.index')->with('data',(object) $data);
    }

    public function first()
    {      
        if($this->userRequest != null && $this->userRequest->step_1 != null){
            return Redirect::to('/second');
        }
        return view('Home.Views.first');
    }

    public function second(Request $request)
    {      
        if($this->userRequest != null && $this->userRequest->step_2 != null){
            return Redirect::to('/third');
        }
        if($request->method() == 'POST'){
            $requestObj = new UserRequest;
            $requestObj->ip_address = $request->ip();
            $requestObj->step_1 = $request->step;
            $requestObj->status = 2;
            $requestObj->created_at = DATE_TIME;
            $requestObj->created_by = 0;
            $requestObj->save();
        }
        return view('Home.Views.second');
    }

    public function third(Request $request)
    {      
        if($this->userRequest != null && $this->userRequest->step_3 != null){
            return Redirect::to('/fourth');
        }
        if($request->method() == 'POST'){
            $requestObj = $this->userRequest;
            $requestObj->step_2 = $request->step;
            $requestObj->save();
        }
        return view('Home.Views.third');
    }

    public function fourth(Request $request)
    {      
        if($this->userRequest != null && $this->userRequest->step_4 != null){
            return Redirect::to('/fifth');
        }
        if($request->method() == 'POST'){
            $requestObj = $this->userRequest;
            $requestObj->step_3 = $request->city_id;
            $requestObj->save();
        }
        return view('Home.Views.fourth');
    }

    public function fifth(Request $request)
    {      
        if($this->userRequest != null && $this->userRequest->step_5 != null){
            return Redirect::to('/sixth');
        }
        if($request->method() == 'POST'){
            $requestObj = $this->userRequest;
            $requestObj->step_4 = $request->step;
            $requestObj->save();
        }
        return view('Home.Views.fifth');
    }

    public function sixth(Request $request)
    {      
        if($this->userRequest != null && $this->userRequest->step_6 != null){
            return Redirect::to('/questionnaire');
        }
        if($request->method() == 'POST'){
            $requestObj = $this->userRequest;
            $requestObj->step_5 = $request->step;
            $requestObj->save();
        }
        return view('Home.Views.sixth');
    }

    public function questionnaire(Request $request)
    {      
        if($this->userRequest != null && $this->userRequest->questionnaire_id != null){
            return Redirect::to('/uploadPage');
        }
        if($request->method() == 'POST'){
            $requestObj = $this->userRequest;
            $requestObj->step_6 = $request->step;
            $requestObj->save();
        }
        return view('Home.Views.questionnaire');
    }

    public function uploadPage(Request $request)
    {   
        if($this->userRequest != null && $this->userRequest->images != null){
            \Session::flash('error', trans('main.upload_1'));
            return Redirect::to('/');
        }
        if($request->method() == 'POST'){

            $validate = $this->validateQuestionnaire($request->all());
            if($validate->fails()){
                \Session::flash('error', $validate->messages()->first());
                return redirect()->back()->withInput();
            }   

            $questionnaireObj = new Questionnaire;
            $questionnaireObj->f_name = $request->f_name;
            $questionnaireObj->l_name = $request->l_name;
            $questionnaireObj->email = $request->email;
            $questionnaireObj->address = $request->address;
            $questionnaireObj->family_info = $request->family_info;
            $questionnaireObj->goal_1 = $request->goal_1;
            $questionnaireObj->goal_2 = $request->goal_2;
            $questionnaireObj->goal_3 = $request->goal_3;
            $questionnaireObj->style_1 = serialize($request->style_1);
            $questionnaireObj->style_2 = $request->style_2;
            $questionnaireObj->style_3 = $request->style_3;
            $questionnaireObj->style_4 = $request->style_4;
            $questionnaireObj->treatment = $request->treatment;
            $questionnaireObj->measurement = $request->measurement;
            $questionnaireObj->created_at = DATE_TIME;
            $questionnaireObj->created_by = 0;
            $questionnaireObj->save();

            $requestObj = $this->userRequest;
            $requestObj->questionnaire_id = $questionnaireObj->id;
            $requestObj->save();
        }
        return view('Home.Views.uploadPage');
    }

    public function uploadFiles(Request $request){
        $names = [];
        foreach ($request->images as $image) {
            $fileName = \ImagesHelper::UploadImage('requests', $image, $this->userRequest->id);
            if($fileName == false){
                return \TraitsFunc::ErrorMessage(trans('main.upload_2'), 400);
            }
            $names[] = $fileName;
        }
        $requestObj = $this->userRequest;
        $requestObj->images = serialize($names);
        $requestObj->save();
        return \TraitsFunc::SuccessResponse(trans('main.upload_3'));
    }

    public function boxes()
    {      
        return view('Home.Views.boxes');
    }

    public function getStarted()
    {      
        return view('Home.Views.getStarted');
    }

    public function details()
    {      
        return view('Home.Views.details');
    }

    public function contactUs()
    {      
        return view('Home.Views.contactUs');
    }

    public function press()
    {      
        return view('Home.Views.press');
    }

    public function prices()
    {      
        return view('Home.Views.prices');
    }

    public function faqs()
    {      
        return view('Home.Views.faqs');
    }

    public function giftCard()
    {      
        return view('Home.Views.giftCard');
    }

    public function boxDetails($id)
    {
        if(in_array($id, [1,2,3,4])){
            return view('Home.Views.boxDetails'.$id);
        }else{
            return Redirect::to('/');
        }      

    }

    public function process()
    {      
        return view('Home.Views.process');
    }

    public function shipping()
    {      
        return view('Home.Views.shipping');
    }

    public function info()
    {      
        return view('Home.Views.info');
    }

    public function payment()
    {      
        return view('Home.Views.payment');
    }

    public function changeLang(Request $request){
        if($request->ajax()){
            if(!Session::has('locale')){
                Session::put('locale', $request->locale);
            }else{
                Session::forget('locale');
                Session::put('locale', $request->locale);
            } 
            return Redirect::back();
        }
    }
}
