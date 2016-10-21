<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\usergivenprobs;

class Probscontroller extends Controller
{
	public function pushformdata(Request $request)
	{	

/*old way  here

		$all=$request->all();
		$companyname=$all['companyname'];
		$email=$all['email'];
		$abstract=$all['Abstract'];
		$type=$all['type'];
		$conn=mysqli_connect('localhost','root','tejas','myDB');
		$query=mysqli_query($conn,"insert into myDB.giveproblems
(Company,Email,Abstract,Type)
values('$companyname','$email','$abstract','$type')"); 

*/
$prob=new usergivenprobs();
$prob->Company=$request['companyname'];
$prob->Email=$request['email'];
$prob->Abstract=$request['abstract'];
$prob->Type=$request['type'];
$prob->save();

Session::flash('success', 'Save successful');

return Redirect::to('givechallenge');
	
	}
	
}







?>