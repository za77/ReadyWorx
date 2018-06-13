<?php

namespace App\Http\Controllers;

use App\Products;
use App\category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $res = Products::join("manageCategory","manageCategory.id","=","manageProduct.categoryId")
        ->selectRaw("manageProduct.*,manageCategory.name as categoryName")
        ->paginate(15);
        return view('admin.manageProducts.manageProuducts',["res"=>$res]);
    }

    
    public function create()
    {
        //
        $res = category::where("approved","=",1)->get();
        return view('admin.manageProducts.productsCreate',["res"=>$res]);
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
        $tbl = new Products;
        $tbl->name = $request->name;
        $tbl->categoryId = $request->categoryId;
        $tbl->desc = $request->desc;
        if(isset($request->crop))
        {
            if($request->crop)
            {
                $data =  $request->crop;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $image_name= time().'.png';
                $path = public_path() . "/uploads/products/" . $image_name;
                $pic = "public/uploads/products/" . $image_name;
                file_put_contents($path, $data);
                $tbl->pic = $pic;
            }
        }
        
        $tbl->save();
        return redirect('/admin/products');
    }
    public function show(Products $products)
    {
        //
    }
    public function edit(Products $products)
    {
        //
        $res = Products::get();
        return view('admin.manageProducts.prouductsEdit',["res"=>$res]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
