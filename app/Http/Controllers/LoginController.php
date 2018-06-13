<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Session;
use Hash;
use App;

class LoginController extends Controller
{
    //(
 protected $manageProfile;


    public function __construct()
    {
        //$pro = config('global.model');
        $manageProfile = new users;
        $this->manageProfile = $manageProfile;
        
    }

    	public function index()
    	{
    		return view('admin.login');
    	}
    	public function dologin(Request $req)
    	{
    		$res = $this->manageProfile->login($req);
    		if($res)
    		{
                if($res->status == 1)
                {
        			$req->session()->put('authId', $res->id);
        			$req->session()->put('role', $res->role);
        			$req->session()->put('lang', $res->lang);
        			$req->session()->put('authMail', $res->email);
        			App::setLocale("ar");
                    $msg = "Login Success";
                }
                else
                {
                $msg = $res->status?"your Account has been blocked by admin":"your record Waiting For admin approval";
                  return redirect()->route('login')->with('msg', $msg); 
                }
			//return App::getLocale();
    			return redirect('admin/user')->with('msg', $msg);
    		}
    		else
    		{
                $msg = "Incorrect login in";
    			return redirect()->route('login')->with('msg', $msg);
    		}
    		
    	}
    	public function password($lan)

    	{
    		App::setLocale($lan);
    		echo trans('message.welcome');
    		echo Hash::make("password");
    	}
}
