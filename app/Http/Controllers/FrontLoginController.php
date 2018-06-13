<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Hash;
use Session;
use DB;

class FrontLoginController extends Controller
{
    //
	public function index()
	{
		return view('front.login');
	}
	public function home()
	{
		return view('front.home1');
	}
	public function register()
	{
		return view('front.register');
	}
	public function doRegister(Request $request)
	{
	
            $user = new users;
            $user->email = $request->email;
            $user->role = $request->role; 
            $status = $request->role == 4 ? 1 :0 ;
            $user->loginType = 1;
            $user->status=$status;
            
	   $user->tempToken = rand(11111,1111111111);
	   $user->authToken = Hash::make($request->email);	


            if($request->pwd == $request->pwd1)
            {
            	$user->password = Hash::make($request->pwd);
            	$user->save();
            	$id = $user->id;
	            
	            DB::table("manageProfile")
	            ->insert(["userId"=>$id,"firstName"=>$request->firstName,
	                     "lastName"=>$request->lastName,"mobile"=>$request->mobile]);
	    
	    	$msg = $status?"Registered Successfully":"Account Has been Registered Waiting For ADMIN approval ";

	    }
	    else
	    {
	    	$msg = "Password Mismatch";
	    }
	    if($status)
	    {
	    	return redirect('/')->with('msg'.$msg);
	    }
	    else
	    {
	    	return redirect('/home')->with('msg'.$msg);
	    }


        

	}
	public function deLogin(Request $request)
	{
		$user = new users;
		$res = $users->login($request);
		if($res)
		{
			if($res->role != 4 )
			{
				if($res->status == 1)
				{
					$msg = "Login Success";
					return redirect('/admin/user')->with('msg',$msg);
				}
				elseif($res->status == 0)
				{
					$msg ="Your Account Waiting For Approval";
				}
				else
				{
					$msg ="Your Account has been blocked by admin";
				}
				return redirect('/admin/login')->with('msg',$msg);
			}
			else
			{
				redirect('/')->with('msg',"User name Or password incorrect");
			}

		}
		else
		{
			redirect('/login')->with('msg',"User name Or password incorrect");
		}

	}
}
