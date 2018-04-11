<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coupons extends Model
{
    //
	protected $table = "manageCoupon";

	public function add($req)
	{
		$id = $request->session()->get('userId');
		$this->name=$req->name;
		$this->code=$req->code;
		$this->category=$req->category;
		$this->startDate=$req->startDate;
		$this->endDate=$req->endDate;
		$this->rules=$req->rules;
		$this->picture=$req->picture;
		$this->createdBy =$id; 
		$this->save();
		return "ok";

	}
	public function edit($id)
	{
		$id = $request->session()->get('userId');
		$res = $this->where("id","=",$id)->where("createdBy","=",$id)->first();
		return $res;

	}
	public upgrade($id)
	{
		$id = $request->session()->get('userId');
		$data = $this::find($id);
		$data->name=$req->name;
		$data->code=$req->code;
		$data->category=$req->category;
		$data->startDate=$req->startDate;
		$data->endDate=$req->endDate;
		$data->rules=$req->rules;
		$data->picture=$req->picture;
		$data->createdBy =$id; 
		$data->save();


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
