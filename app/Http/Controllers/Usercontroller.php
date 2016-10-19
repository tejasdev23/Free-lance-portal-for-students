<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
	public function pushformdata(Request $request)
	{	


		$all=$request->all();
		//print_r($all);
		//print_r($all['companyname']);
		$companyname=$all['companyname'];
		$email=$all['email'];
		$abstract=$all['Abstract'];
		$type=$all['type'];
		$conn=mysqli_connect('localhost','root','tejas','myDB');
		$query=mysqli_query($conn,"insert into myDB.giveproblems
(Company,Email,Abstract,Type)
values('$companyname','$email','$abstract','$type')"); 

		if($query)
		{
					Session::flash('success', 'Save successful');

					return Redirect::to('givechallenge');
		}
		else
		{	Session::flash('failure', 'Failed due to some problem');
				return Redirect::to('givechallenge');	
		}
	}
	//use Log;
	public function putdata(Request $request)
{			
			//$yo=$request->type;
	//		$all=$request->all();
		//	echo "<script>alert('$all')</script>";
	//		Console::info('sadhsa');
//$conn=mysqli_connect('localhost','root','tejas','myDB');
       

//	$problem=DB::insert("insert into myDB.giveproblems (Company,Email,Abstract,Type) values('$companyname','$email','$abstract','$type')");


		//	echo "hit here";
	}
}









?>