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

		 
	        $file = $req->file('pic');
	        $extension = $req->file('pic')->getClientOriginalExtension();
	        $filename = date('Ymd_His_').rand(111,999).'.'.$extension; // renaming image
	        $path = public_path('uploads/category/');
	        $fpath = '/uploads/category/'.$filename;
	        $file->move($path,$filename);

                $id = $req->session()->get('authId');
                $status = $id==1?1:0;

		$this->name=$req->name;
		$this->desc=$req->desc;
		$this->pic= $fpath;
		$this->createdBy =$id;
		$this->approved =$status;
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
		
		$res = $this->where("createdBy","=",$id)->paginate(15);
		return $res;

	}

	public function remove($request)
	{
		$res = $this->where("id","=",$id)->delete();
		return "ok";
	}
}
