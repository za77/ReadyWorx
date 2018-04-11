<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;
use DB;
use App;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $manageProfile;


    public function __construct()
    {
        //$pro = config('global.model');
        $manageProfile = new users;
      
        
        
        $this->manageProfile = $manageProfile;
        
    }

    public function index()
    {
        $lng = Session::get('lang');
        App::setLocale($lng);
        
        $role = DB::table("role")->get();
        
        $res = $res = $this->manageProfile
        ->join("manageProfile","manageProfile.userId","=","manageUser.id")
        ->selectRaw("manageUser.email,manageUser.status,manageUser.role,manageProfile.*")
        ->paginate(15);

        return view('admin.manageUser.manageUser',["res"=>$res,"role"=>$role]);
    }

    public function create()
    {
        $lng = Session::get('lang');
        App::setLocale($lng);

        $role = DB::table("role")->get();
        $res = $this->manageProfile->get();
        return view('admin.manageUser.userCreate',["res"=>$res,"role"=>$role]);
        
    }

    public function store(Request $request)
    {
        #insert
        $this->manageProfile->email = $request->email;
        $this->manageProfile->role = $request->radio;  
        $this->manageProfile->status = 0;
        $this->manageProfile->save();
        $id = $this->manageProfile->id;
        
        DB::table("manageProfile")
        ->insert(["userId"=>$id,"firstName"=>$request->firstName,"lastName"=>$request->lastName,"companyName"=>"ok"]);
        return redirect('/admin/user');
    }

    
    public function show(users $users)
    {
        #view
        
    }

    public function edit(users $users,$id)
    {
        #edit
        $role = DB::table("role")->get();
        $res = $this->manageProfile
        ->join("manageProfile","manageProfile.userId","=","manageUser.id")
        ->where("manageUser.id","=",$id)
        ->selectRaw("manageUser.email,manageUser.status,manageUser.role,manageProfile.*")
        ->first();

        return view('admin.manageUser.userEdit',["res"=>$res,"role"=>$role]);
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
