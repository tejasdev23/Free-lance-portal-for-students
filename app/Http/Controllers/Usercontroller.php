<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Mail;
use Storage;

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
   		  $name=Auth::user()->name;
        $email=Auth::user()->email;
            
              
                if($request->hasFile('file'))
   		  {
			$file=$request->file('file');
			
			$filename=$file->getClientOriginalName();   	
			echo $filename;
		//	$destinationPath='public/'.$filename;
			
			$extension=$file->getClientOriginalExtension();
			echo $extension;
			echo "hello     ";
			$destinationPath=$filename;

			echo $destinationPath;
		//	echo $destinationPath;
		$uploaded=Storage::put($destinationPath,file_get_contents($file->getRealPath()));
			 
			
		if($uploaded)
			{
					
				  Mail::send('emails.upload', ['name' => $name,'email'=>$email,'filename'=>$filename], function ($message) use ($destinationPath,$filename) 
        {
        	
        
            $message->from('tejasnareshpatel23@gmail.com', 'Tejas Patel');

            $message->to('tejasnareshpatel23@gmail.com');
           // $path = realpath($destinationPath);
             $message->attach(storage_path('app/'.$filename));
    		
			}); 	
   		 }
   		   
               
    

      
        
          $msg="We will get back to you soon";
          Session::flash('success', $msg);
          
          return Redirect::to('/mysubmissions');
	
   }
   else
   {
   	echo "hello";
   }
}

   




}


?>