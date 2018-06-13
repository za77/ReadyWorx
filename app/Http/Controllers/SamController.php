<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;

class SamController extends Controller
{
    //
    public function __construct()
    {
        
        $users = new users;
        
        $this->users = $users;
        //$this->notifications = ${$pro . '_notifications'};
    }
    public function save(Request $request)

    {    
        echo $request->tbl;exit;
        $user = new users;
        $input = $request->all();
        $car = users::create($input);
        return $car;
    }
    public function list(Request $request)
    {

       $tbl = $request->tbl;
       return response()->json($this->{$tbl}->all());
       
       
    }
    public function listById(Request $request)
    {
        
       $tbl = $request->tbl;
       return response()->json($this->{$tbl}->find($request->id));
       
       
    }
}
