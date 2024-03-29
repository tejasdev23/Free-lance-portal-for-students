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
use Auth;


class postController extends Controller
{
	
	function __construct()
	{
		$this->middleware('auth');
	}
	public function enterdata(CreatePostRequest $request)
	{	



	$formdata=$request;
	$question=$formdata['question'];
	

	
	$type=$formdata['type'];
	$desc=$formdata['description'];

	$questions=new questions();
	$questions->question = $question;
	$questions->Username = Auth::user()->name;
	$questions->Type = $type;
	$questions->email = Auth::user()->email;
	$questions->description = $desc;
	$questions->user_id =Auth::user()->id;
	$questions->slug=$question;
	$cat_id=DB::table('categories')->where('name', $type)->value('id');
	

	$questions->category_id=$cat_id;
	$questions->save();
	Session::flash('success', 'Save successful');

return Redirect::to('/forum');




}
public function page()
{
	return view('POST');
}





}
?>