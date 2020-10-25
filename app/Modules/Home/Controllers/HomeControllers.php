<?php namespace App\Http\Controllers;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class HomeControllers extends Controller {

    use \TraitsFunc;

    public function first()
    {      
        return view('Home.Views.first');
    }

    public function index()
    {      
        return view('Home.Views.index');
    }

    public function second()
    {      
        return view('Home.Views.second');
    }

    public function third()
    {      
        return view('Home.Views.third');
    }

    public function fourth()
    {      
        return view('Home.Views.fourth');
    }

    public function fifth()
    {      
        return view('Home.Views.fifth');
    }

    public function sixth()
    {      
        return view('Home.Views.sixth');
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

    public function uploadPage()
    {      
        return view('Home.Views.uploadPage');
    }

    public function boxDetails()
    {      
        return view('Home.Views.boxDetails');
    }

    public function questionnaire()
    {      
        return view('Home.Views.questionnaire');
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
