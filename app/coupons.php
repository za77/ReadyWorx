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
		$this->createdBy =$id; 

	if(isset($request->crop))
        {
            if($request->crop)
            {
                $data =  $request->crop;
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                $data = base64_decode($data);
                $image_name= time().'.png';
                $path = public_path() . "/uploads/coupons/" . $image_name;
                $pic = "public/uploads/coupons/" . $image_name;
                file_put_contents($path, $data);
                $tbl->picture = $pic;
                
            }
        }

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
