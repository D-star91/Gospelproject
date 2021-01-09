<?php

use App\Http\Controllers\Biblecontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Prayercontroller;
use App\Http\Controllers\Studycontroller;
use Illuminate\Support\Facades\Route;

Route::get("/",[Homecontroller::class,('index')])->name('index');

// Subscribe
Route::post("/",[Homecontroller::class,('Subscribe')])->name('subscribe');
Route::get('/received',[Homecontroller::class,('Received')])->name('received');

Route::get("/contact",[Homecontroller::class,('Contact')])->name('contact');
Route::get("/about",[Homecontroller::class,('About')])->name('about');



// Loguout
Route::get("/logout",[Homecontroller::class,('Logout')])->name('logout');
// User acc

// Bible
Route::get("/bible",[Biblecontroller::class,('Bible_Home')])->name('bible_home');
// Old Testamets
// Genesis
Route::get("/bible/old/genesis_1",[Biblecontroller::class,('Genesis_1')])->name('gen_1');
Route::get("/bible/old/genesis_2",[Biblecontroller::class,('Genesis_2')])->name('gen_2');
Route::get("/bible/old/genesis_3",[Biblecontroller::class,('Genesis_3')])->name('gen_3');
Route::get("/bible/old/genesis_4",[Biblecontroller::class,('Genesis_4')])->name('gen_4');
Route::get("/bible/old/genesis_5",[Biblecontroller::class,('Genesis_5')])->name('gen_5');
// Bibl Study
// gust
Route::get("/study_home",[Studycontroller::class,('Study_Home')])->name('study_home');
// user
Route::get("/bible_study",[Studycontroller::class,('Study_user')])->name('study_user');
// Lesson
Route::get('/bible_study/lesson_1',[Studycontroller::class,('BFAM')])->name('bfam');
// Sign up
Route::get("/sign_up",[Homecontroller::class,('Sign_up')])->name('sign_up');
Route::post("/sign_up",[Homecontroller::class,('User_Sign_up')])->name('user_sign_up');
// login
Route::get("/login",[Homecontroller::class,('Login')])->name('login');
Route::post("/login",[Homecontroller::class,('User_Login')])->name('user_login');


// Prayer
Route::get("/prayer",[Prayercontroller::class,('Prayer')])->name('prayer');
// Prayer form
Route::post("/prayer",[Prayercontroller::class,('Prayer_form')])->name('prayer_form');