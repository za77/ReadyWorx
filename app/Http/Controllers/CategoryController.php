<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use Session;
use App;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected $manageCategory;


    public function __construct()
    {
        //$pro = config('global.model');
        $lng = Session::get('lang');
        App::setLocale($lng);

        $manageCategory = new category;
      
        
        
        $this->manageCategory = $manageCategory;
        
    }

    public function index(Request $request)
    {
        //
        $role = $request->session()->get('role');
        $id = $request->session()->get('authId');
        if($role == 1)
        {
            $res = $this->manageCategory->paginate(15);
        }
        else
        {
            $res = $this->manageCategory->lists($id);
        }
        return view('admin.manageCategory.manageCategory',["res"=>$res]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.manageCategory.categoryCreate');
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
        $this->manageCategory->add($request);
        return redirect("admin/category");
    }

   
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }
}
