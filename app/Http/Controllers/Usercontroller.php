<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
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
}









?>