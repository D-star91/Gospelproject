<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Homecontroller extends Controller
{
    // Home
    function index(){
        return view('index');
    }
    function LoyalHome(){
        return view('home');
    }
    // Subscribe
    function Subscribe(){
        $validation=request()->validate([
            "email"=>"required",
        ]);
        if($validation){
            $subscribe=new Subscribe();
            $subscribe->email=$validation['email'];
            $subscribe->save();
            return redirect()->route('received');
        }else{
            return back()->withErrors("$validation");
        }
    }
    
    function Received(){
        return view('Received');
    }
    // Contact
    function Contact(){
        return view('Contact');
    }
    // About
    function About(){
        return view('About');
    }
    function Prayer(){
        return view('Prayer');
    }
    // Book
    function Book(){
        return view('Book');
    }
    // Sign up
    function Sign_up(){
        return view('Useraccount.Usersignup');
    }
    function User_Sign_up(){
        $validation=request()->validate([
            "username"=>"required",
            "useremail"=>"required",
            "userpassword"=>"required||min:8",
        ]);
        if($validation){
            $password=$validation['userpassword'];
            $user=new User();
            $user->name=$validation['username'];
            $user->email=$validation['useremail'];
            $user->password=Hash::make($password);
            $user->save();
            if(Auth::attempt(["email"=>request('useremail'),'password'=>request('userpassword')])){
                return redirect()->route('home');
            }
        }else{
            return back()->withErrors($validation);
        }
    }
    // Login
    function Login(){
        return view('Useraccount.Login');
    }
    function User_login(){
        $validation=request()->validate([
            "email"=>"required",
            "password"=>"required",
        ]);
        if($validation){
            $auth=Auth::attempt(["email"=>request('email'),'password'=>request('password')]);
            if($auth){
                return redirect()->route('home');
            }else{
                return back()->with('error','tray again');
            }
        }else{
            return back()->withErrors($validation);
        }
    }
    // Logout
    function Logout(){
        Auth::logout();
        return redirect()->route('index');
    }

    // User Accout
    function Home(){
        return view('Useraccount.Home');
    }
}
