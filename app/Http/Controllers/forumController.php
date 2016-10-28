<?php 

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Session;
use App\questions;
use App\replies;
use DB;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth;

class forumController extends Controller
{
	
	function __construct()
	{
		$this->middleware('auth');
	}
	


public function saveReply(Request $request)
{
	//dd("reply to be taken");
	echo "hit herre";
	$formdata=$request;
	//print_r($formdata);
	$comment=$formdata['comment'];
	$slugdata=$formdata['slug'];
	$reply=new replies();
	$reply->user_id=Auth::user()->id;
	$reply->questions_id=questions::where('slug','=',$slugdata)->value('id');
	$reply->body=$comment;
	$reply->save();
	$replies=replies::orderBy('created_at','desc')->get();
	$question=questions::where('slug','=',$slugdata)->first();
	return view('replies',compact('question','replies'));
}

public function home()
{	
  $questions = questions::orderBy('created_at','desc')->get();
  echo "<script>console.log('aaya')</script>";


return view('forum')->with('questions',$questions);
}

public function viewPost($slug)
{
//dd("view post page");
try
{	$replies=replies::orderBy('created_at','desc')->get();
	$question=questions::where('slug','=',$slug)->first();
	$repu=replies::all();
	if($question!=null)
	{
	return view('replies',compact('question','replies'));
	}
	else
	{
			return Redirect::to('/forum');
	}

}
catch(ModelNotFoundException $exc)
{
	return Redirect::to('/forum');

}



}




}
?>