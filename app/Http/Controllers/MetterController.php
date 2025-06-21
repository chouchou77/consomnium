<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metter;

class MetterController extends Controller
{
    public function dashboard(){
        $metter = Metter::all();
        return response()->json($metter);
    }
    public function toggle($id){
        $meter = Metter::where("id",$id)->first();
        if ($meter->status === "active") {
            $meter->status = "inactive";
            $meter->save();
        }else {
            $meter["status"] = "active";
            $meter->save();
        }
        return response()->json(["message" => $meter->status]);
    }
}
