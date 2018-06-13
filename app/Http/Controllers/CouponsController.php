<?php

namespace App\Http\Controllers;

use App\coupons;
use App\category;
use Illuminate\Http\Request;

class CouponsController extends Controller
{
    
    public function index()
    {
        //
        return view('admin.manageCoupons.manageCoupons');
    }

    public function create()
    {
        //
        $res = category::where('approved','=',1)->get();
        return view('admin.manageCoupons.couponsCreate',['res'=>$res]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupons = new coupons;
        $coupons->add($request);
        return redirect('adin/coupons')->with('msg',"New Coupon added Sucessfully");

    }

    
    public function show(coupons $coupons)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\coupons  $coupons
     * @return \Illuminate\Http\Response
     */
    public function edit(coupons $coupons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\coupons  $coupons
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coupons $coupons)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\coupons  $coupons
     * @return \Illuminate\Http\Response
     */
    public function destroy(coupons $coupons)
    {
        //
    }
}
