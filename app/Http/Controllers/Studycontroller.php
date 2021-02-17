<?php

namespace App\Http\Controllers;

use App\Models\Bfamlesson1_1;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Studycontroller extends Controller
{
    function Study_user(){
        return view('Study');
    }
    function Study_Home(){
        return view('Useraccount.Studyuser');
    }
    function Lesson(){
        return view('Study.lesson');
    }
    function Profile(){
        return view('Useraccount.profile');
    }
    function Pro_update(){
        $name=request('name');
        $email=request('email');
        $phone=request('phone');
        $old_password=request('old_passwrod');
        $new_password=request('new_password');

        $id=auth()->user()->id;
        $current_user=User::find($id);
        $current_user->name=$name;
        $current_user->email=$email;
        $current_user->phone=$phone;

        if($old_password && $new_password){
            if(Hash::check($old_password,$current_user->password)){
                $current_user->passwrod=$new_password;
                $current_user->update();
                return back()->with('proupdate','Receipt received');
            }else{
                return back()->with('error','old password is not same');
            }
        }
        $current_user->update();
        return back();
    }
    // BFAM lesson
    function BFAM(){
        return view('Study.BFAM.BFAM');
    }
    // BFAM lesson_1
    function Con_1_1(){
        return view('Study.BFAM.1.con_1');
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
            $ans1=request('answer1');
            $ans2=request('answer2');
            $ans3=request('answer3');
            $ans4=request('answer4');
            $ans5=request('answer5');
            $ans6=request('answer6');
            $ans7=request('answer7');
            $ans8=request('answer8');
            $ans9=request('answer9');
            $ans10=request('answer10');
            $ans11=request('answer11');
            $answer=new Bfamlesson1_1();
            $answer->user_id=auth()->user()->id;
            $answer->answer1=$ans1;
            $answer->answer2=$ans2;
            $answer->answer3=$ans3;
            $answer->answer4=$ans4;
            $answer->answer5=$ans5;
            $answer->answer6=$ans6;
            $answer->answer7=$ans7;
            $answer->answer8=$ans8;
            $answer->answer9=$ans9;
            $answer->answer10=$ans10;
            $answer->answer11=$ans11;
            $answer->save();
            return redirect()->route('con_1-2');
        }else{
            return back()->withErrors($validation);
        }
    }
    function Con_1_2(){
        return view('Study.BFAM.1.con_2');
    }
    function PostCon_1_2(){
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
             $answer->save();
             return redirect()->route('con_1-3');
         }else{
             return back()->withErrors($validation);
         }
     }
     function Con_1_3(){
        return view('Study.BFAM.1.con_3');
    }
    function Con_1_4(){
        return view('Study.BFAM.1.con_4');
    }
    function Con_1_5(){
        return view('Study.BFAM.1.con_5');
    }
    // BFAM lesson_1
    // BFAM lesson
}
