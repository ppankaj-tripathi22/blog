<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //insert
	function add(Request $req)
   {
     $device=new Device;
     $device->name=$req->name;
     $device->member_id=$req->member_id;
     $result=$device->save();
     if($result)
     {
        return["Result"=>"Data has been saved"];
     }
     else
     {
        return["Result"=>"Operation Failed"];
     }

   }
   function update(Request $req)
   {
     $device=Device::find($req->id);
     $device->name=$req->name;
     $device->member_id=$req->member_id;
     $result=$device->save();
     if($result)
     {
        return["Result"=>"Data has been updated"];
     }
     else
     {
        return["Result"=>"Operation Failed"];
     }
      
   }
   function delete(Request $req)
   {
     $device=Device::find($req->id);
     $result=$device->delete();
     if($result)
     {
        return["Result"=>"Data has been Deleted"];
     }
     else
     {
        return["Result"=>"Operation Failed"];
     }
   }
   function list()
   {
     return Device::all();
   }
   function search($name)
   {
     return Device::where("name","like","%".$name."%")->get();
   }	
}
?>