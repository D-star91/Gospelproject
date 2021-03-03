<?php

namespace App\Http\Controllers;

use App\Models\Vpost;
use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    function Adminpage(){
        return view('Admin.admin_page');
    }
    function Vpost(){
        return view('Admin.vepost');
    }
    function Verpost(){
        $validation=request()->validate([
            "verse"=>"required",
            "vpost"=>"required",
        ]);
        if($validation){
            $verse=request('verse');
            $vpost=request('vpost');
            
            $vepost=new Vpost();
            $vepost->verse=$verse;
            $vepost->post=$vpost;
            $vepost->save();
            return redirect()->route("vpost");
        }else{
            return back()->withErrors($validation);
        }
    }
    function Bookpost(){
        return view('Admin.bookpost');
    }
    function sermonpost(){
        return view('Admin.sermon_post');
    }
}
