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
Route::get('/',function(){

	//$users=DB::table('myDB.Users')->where('id','=',1)->get();
	$users= DB::select('select * from Users where id=1');
	
	
	return $users;
 	
});


Route::get('/te','Usercontroller@index');

Route::get('/afterlogin','Usercontroller@afterlogin');


Route::get('/mysubmissions','Usercontroller@mysubmissions');


Route::get('/startprojects','Usercontroller@startprojects');


Route::get('/givechallenge','Usercontroller@givechallenge');


