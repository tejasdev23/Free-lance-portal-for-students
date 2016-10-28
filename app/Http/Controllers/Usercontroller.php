<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;


class Usercontroller extends Controller
{
	public function index()
	{


		return view('index');	
	}
	public function afterlogin()
	{
		return view('afterlogin');	
	}
	public function startprojects()
	{
		return view('startprojects');	
	}
	public function mysubmissions()
	{
		return view('mysubmissions');	
	} 
	public function givechallenge()
	{


		return view('givechallenge');	
	}
	 public function logout()
    {
        Auth::logout();
        return Redirect::to('index');
    }
   public function retproj()
   {
   	return view('projectstheme1');
   }




}


?>