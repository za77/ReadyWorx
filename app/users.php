<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hash;
use Session;
class users extends Model
{
    protected $table = "manageUser";

    public function firstId($id)
    {
    	$data = $this->where("id","=",$id)->first();
    	return $data;
    }
    public function getId($id)
    {
    	$data = $this->where("id","=",$id)->get();
    	return $data;
    }

    public function register($req)
    {
    	$this->role = $req->role;
    	$this->email = $req->email;
    	$this->password = Hash::make($req->password);
    	$this->tempToken = Hash::make($req->password);
    	$this->authToken = Hash::make($req->password);
    	$this->save();
    }

    public function login($req)
    {
    	$data = $this->where("email","=",$req->email)->first();
        if($data)
        {
    	$res = $this->where("email","=",$req->email)
    	->where("password","=",Hash::check("$req->password",$data->password))->first();
        
        
        }
        else
        {
            $res = 0;
        }
    	
    	return $res;
    }
}
