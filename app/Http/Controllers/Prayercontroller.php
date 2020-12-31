<?php

namespace App\Http\Controllers;

use App\Models\Prayer;
use Illuminate\Http\Request;

class Prayercontroller extends Controller
{
    function Prayer(){
        return view('Prayer');
    }
    function Prayer_form(){
        $validation=request()->validate([
            "name"=>"required",
            "choose"=>"required",
            "messages"=>"required",
        ]);
        if($validation){
            $prayer=new Prayer();
            $prayer->name=$validation['name'];
            $prayer->choose=$validation['choose'];
            $prayer->messages=$validation['messages'];
            $prayer->save();
            return back()->with('success','I received a prayer.');
        }else{
            return back()->withErrors($validation);
        }
    }
}
