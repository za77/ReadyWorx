<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Lang;
class LanguageController extends Controller
{
    //
	public function change($req)
	{
		$request->session()->put('lang',$request->lang);
		//return Redirect::back()->with('message','Operation Successful !');
		return back();
	}
}
