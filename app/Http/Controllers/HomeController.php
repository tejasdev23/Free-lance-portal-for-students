<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Redirect;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('afterlogin');
    }
    public function sendemail(Request $request)
    {
        $name=$request['name'];
        $email=$request['email'];
        $content=$request['message'];
          Mail::send('emails.contact', ['name' => $name,'email'=>$email, 'content' => $content], function ($message)
        {

            $message->from('tejasnareshpatel23@gmail.com', 'Tejas Patel');

            $message->to('tejasnareshpatel23@gmail.com');

        });
          $msg="We will get back to you soon";
          Session::flash('success', $msg);
          return Redirect::to('/index');

    }
 
    
}
