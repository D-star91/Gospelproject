<?php

namespace App\Http\Controllers;

use App\Models\Bfamlesson1_1;
use Illuminate\Http\Request;

class Studycontroller extends Controller
{
    function Study_user(){
        return view('Study');
    }
    function Study_Home(){
        return view('Useraccount.Studyuser');
    }
    // BFAM lesson
    function BFAM(){
        return view('Study.BFAM.BFAM');
    }
    // BFAM lesson_1
    function Con_1_1(){
        return view('Study.BFAM.1.lesson_1');
    }
    function PostCon_1_1(){
       $validation=request()->validate([
            "answer1"=>"required",
            "answer2"=>"required",
            "answer3"=>"required",
            "answer4"=>"required",
            "answer5"=>"required",
            "answer6"=>"required",
            "answer7"=>"required",
            "answer8"=>"required",
            "answer9"=>"required",
            "answer10"=>"required",
            "answer11"=>"required",
        ]);
        if($validation){
            $answer=new Bfamlesson1_1();
            $answer->answer1=$validation['answer1'];
            $answer->answer2=$validation['answer2'];
            $answer->answer3=$validation['answer3'];
            $answer->answer4=$validation['answer4'];
            $answer->answer5=$validation['answer5'];
            $answer->answer6=$validation['answer6'];
            $answer->answer7=$validation['answer7'];
            $answer->answer8=$validation['answer8'];
            $answer->answer9=$validation['answer9'];
            $answer->answer10=$validation['answer10'];
            $answer->answer11=$validation['answer11'];
            return redirect()->route('con_1-2');
        }else{
            return back()->withErrors($validation);
        }
    }
    function Con_1_2(){
        return view('Study.BFAM.1.lesson_2');
    }
    // BFAM lesson_1
    // BFAM lesson
}
