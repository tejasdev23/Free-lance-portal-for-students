<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\usergivenprobs;
use Mail;

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


		     $name=$request['companyname'];
        $email=$request['email'];
        $abstract=$request['abstract'];
        $type=$request['type'];

          Mail::send('emails.giveprobs', ['name' => $name,'email'=>$email, 'abstract' => $abstract,'type'=>$type], function ($message)
        {

            $message->from('tejasnareshpatel23@gmail.com', 'Tejas Patel');

            $message->to('tejasnareshpatel23@gmail.com');

        });
          $msg="We will get back to you soon";
          Session::flash('success', $msg);
          return Redirect::to('/givechallenge');
	
	}

	
}







?>