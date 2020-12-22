<?php

use App\Http\Controllers\Biblecontroller;
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;

Route::get("/",[Homecontroller::class,('index')])->name('index');

// Sign up
Route::get("/sign_up",[Homecontroller::class,('Sign_up')])->name('sign_up');
// login
Route::get("/login",[Homecontroller::class,('Login')])->name('login');
// User acc
Route::get("/home",[Homecontroller::class,('Home')])->name('home');

// Bible
Route::get("/bible",[Biblecontroller::class,('Bible_Home')])->name('bible_home');