<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;
class category extends Model
{
    //
	protected $table = "manageCategory";

	public function add($req)
	{
		$id = $req->session()->get('authId');
		$this->name=$req->name;
		$this->desc=$req->desc;
		$this->createdBy =$id;
		$this->save();
		return "ok";

	}
	public function edit($id)
	{
		$res = $this->where("id","=",$id)->first();
		return $res;

	}
	public function lists($id)
	{
		
		$res = $this->where("createdBy","=",$id)->get();
		return $res;

	}

	public function remove($request)
	{
		$res = $this->where("id","=",$id)->delete();
		return "ok";
	}
}
