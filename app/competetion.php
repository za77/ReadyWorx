<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class competetion extends Model
{
    //
	protected $table = "manageCategory";

	public function add($req)
	{
		$this->name=$req->name;
		$this->desc=$req->desc;
		$this->save();
		return "ok";

	}
	public function edit($id)
	{
		$res = $this->where("id","=",$id)->first();
		return $res;

	}
	public function list($request)
	{
		$id = $request->session()->get('userId');
		$res = $this->where("createdBy","=",$id)->get();
		return $res;

	}

	public function remove($request)
	{
		$res = $this->where("id","=",$id)->delete();
		return "ok";
	}
}
