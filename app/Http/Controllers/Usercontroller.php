<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Mail;
use \Storage;

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
   public function uploadprojects(Request $request)
   {
   		  if($request->hasFile('file'))
   		  {
			$file=$request->file('file');
			$filename=$file->getClientOriginalName();   	
			$destinationPath=config('app.fileDestinationPath').'/'/$filename;
			$uploaded=$storage::put($destinationPath,file_get_contents($file->getRealPath()))	  	
   		  }
   }
   




}


?>