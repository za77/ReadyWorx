<?php

namespace App\Http\Controllers;

use App\Stores;
use Illuminate\Http\Request;

class StoresController extends Controller
{
    
    public function index()
    {
        $res = Stores::get();
        return view('admin.manageStores.manageStores',["res"=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.manageStores.storesCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

  
    public function show(Stores $stores)
    {
        //
    }

    public function edit(Stores $stores)
    {
        //
    }

    public function update(Request $request, Stores $stores)
    {
        //
    }

    public function destroy(Stores $stores)
    {
        //
    }
}
