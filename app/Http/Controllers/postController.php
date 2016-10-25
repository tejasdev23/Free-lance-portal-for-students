<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Session;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\usergivenprobs;
use App\questions;
use App\categories;
use App\Http\Requests\CreatePostRequest;

class postController extends Controller
{
	
	function __construct()
	{
		$this->middleware('auth');
	}
	public function enterdata(CreatePostRequest $request)
	{	

echo "hit here";

	$formdata=$request;
	$question=$formdata['question'];
	

	$name=$formdata['name'];
	$email=$formdata['email'];
	$type=$formdata['type'];
	$desc=$formdata['description'];

	$questions=new questions();
	$questions->question = $question;
	$questions->Username = $name;
	$questions->Type = $type;
	$questions->email = $email;
	$questions->description = $desc;
	
	$cat_id=DB::table('categories')->where('name', $type)->value('id');
	echo $cat_id;

	$questions->category_id=$cat_id;
	$questions->save();
	Session::flash('success', 'Save successful');

return Redirect::to('/postaquestion');




}
public function page()
{
	return view('POST');
}





}
?>