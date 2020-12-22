<?php

use App\Http\Controllers\Biblecontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Studycontroller;
use Illuminate\Support\Facades\Route;

Route::get("/",[Homecontroller::class,('index')])->name('index');

Route::get("/contact",[Homecontroller::class,('Contact')])->name('contact');
Route::get("/about",[Homecontroller::class,('About')])->name('about');

// Sign up
Route::get("/sign_up",[Homecontroller::class,('Sign_up')])->name('sign_up');
// login
Route::get("/login",[Homecontroller::class,('Login')])->name('login');
// User acc
Route::get("/home",[Homecontroller::class,('Home')])->name('home');

// Bible
Route::get("/bible",[Biblecontroller::class,('Bible_Home')])->name('bible_home');

// Bibl Study
Route::get("/bible_study",[Studycontroller::class,('Study_Home')])->name('study_home');

// Prayer
Route::get("/prayer",[Homecontroller::class,('Prayer')])->name('prayer');