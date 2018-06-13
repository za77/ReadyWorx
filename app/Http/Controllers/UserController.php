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
    protected $manageUser;


    public function __construct()
    {
        //$pro = config('global.model');

        //$this->middleware("checkType");
        $manageProfile = new users;
        $this->manageProfile = $manageProfile;
        $this->manageUser = $manageProfile;
        
    }

    public function index()
    {
        $lng = Session::get('lang');
        App::setLocale($lng);
        
        $role = DB::table("role")->where('id','!=',1)->get();
        
        $where = array();
        
        if(isset($request->firstName))
            $where[] = "manageProfile.firstName = $request->firstName";
        if(isset($request->lastName))
            $where[] = "manageProfile.lastName = $request->lastName";
        if(isset($request->email))
            $where[] = "manageProfile.email = $request->email";
        if(isset($request->companyName))
            $where[] = "manageProfile.companyName = $request->companyName";
        if(isset($request->status))
            $where[] = "manageProfile.status = $request->status";

        if(count($where))
        {
            $condition = implode("AND ",$where);
        }
        else
        {
            $condition = 1;
        }



        $res = $res = $this->manageProfile
        ->join("manageProfile","manageProfile.userId","=","manageUser.id")
        ->whereRaw($condition)
        ->selectRaw("manageUser.email,manageUser.status,manageUser.role,manageProfile.*")
        ->paginate(15);

        return view('admin.manageUser.manageUser',["res"=>$res,"role"=>$role,"where"=>$condition]);
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
        if($request->userId)
        {
            $user = users::find($request->userId);

            $user->email = $request->email;
            $user->role = $request->radio;  
            $user->status = 1;
            $user->save();
            $id = $user->id;
            
            DB::table("manageProfile")
            ->where("userId","=",$id)
            ->update(["firstName"=>$request->firstName,
                     "lastName"=>$request->lastName,"companyName"=>$request->companyName]);

        }
        else
        {
            $this->manageProfile->email = $request->email;
            $this->manageProfile->role = $request->radio;  
            $this->manageProfile->status = 0;
            $this->manageProfile->save();
            $id = $this->manageProfile->id;
            
            DB::table("manageProfile")
            ->insert(["userId"=>$id,"firstName"=>$request->firstName,
                     "lastName"=>$request->lastName,"companyName"=>$request->companyName]);
        }
        return redirect('/admin/user');
        
    }

    
    public function show(users $users)
    {
        
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
        if(isset($request->only))
        {
            if($request->only)
            {

            }
            else
            {
               $this->manageProfile->where("id","=",$request->id)->update(["status"=>$request->status]); 
               return "success";
            }
        }
        else
        {
            return "no";
        }
        
    }
    public function destroy(users $users,$id)
    {
        #delete
        $this->manageProfile->where("id","=",$id)->delete();
        return "success";
        
    }
}
