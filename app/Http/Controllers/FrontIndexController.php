<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontIndexController extends Controller
{
    //
	public function index()
	{
		return view('front.index');
	}
	public function about()
	{
		return view('front.about');
	}
	public function category()
	{
		return view('front.category');
	}
	public function stores()
	{
		return view('front.stores');
	}
	public function coupons()
	{
		return view('front.coupons');
	}
	public function contact()
	{
		return view('front.contact');
	}

}
