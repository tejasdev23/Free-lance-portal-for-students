<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*Route::get('/',function(){

	//$users=DB::table('myDB.Users')->where('id','=',1)->get();
	$users= DB::select('select * from Users where id=1');
	
	
	return $users;
 	
});
*/

use Illuminate\Http\Request;
Route::post('forum/question/saveReply','forumController@saveReply');
Route::get('/newindex',function()
{
	return view('newindex');
});

Route::get('/postaquestion','postController@page');
Route::get('/forum','forumController@home');
Route::post('/postthat','postController@enterdata');

Route::get('/forum/question/{slug}','forumController@viewPost');
Route::post('/put','Usercontroller@putdata');

Route::get('/logout','Usercontroller@logout');	
Route::get('/',['as' => 'home','uses' => 'Usercontroller@index']);
Route::get('/index','Usercontroller@index');


Route::post('/mailsend','mailController@contactus');

Route::get('/afterlogin','Usercontroller@afterlogin');


Route::get('/mysubmissions','Usercontroller@mysubmissions');


Route::get('/startprojects','Usercontroller@startprojects');


Route::get('/givechallenge','Usercontroller@givechallenge');

Route::post('/pushformdata','Probscontroller@pushformdata');


Route::get('/projectstheme1','Usercontroller@retproj');

Route::get('/project1',function(){

	return view('project1');

});

//Route::get('/giveproblems','Usercontroller@pushformdata');



Auth::routes();

Route::get('/home', 'HomeController@index');
