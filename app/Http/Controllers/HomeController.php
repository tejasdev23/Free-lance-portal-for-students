<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function mailsend(Request $request)
    {
        echo "hit here";
        $formdata=$request;
        $email=$formdata['email'];
        $subject=$formdata['subject'];
        $message=$formdata['message'];

        
    });
    }
}
