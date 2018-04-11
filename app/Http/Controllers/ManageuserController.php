<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;

class ManageuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        #allowing
        return "hia";
    }

    public function create()
    {
        //
        echo "1";
    }

    public function store(Request $request)
    {
        #insert
        echo "1";
    }

    
    public function show(users $users)
    {
        #view
        
    }

    public function edit(users $users)
    {
        #edit
        
    }

    public function update(Request $request, users $users)
    {
        #update
        
    }
    public function destroy(users $users)
    {
        #delete
        
    }
}
