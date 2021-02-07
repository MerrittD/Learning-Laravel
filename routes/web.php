<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Resume', function(){
   return view('resume');
});

Route::get('/CV', function () {
    return view('cv');
});

Route::get('/Blog', function(){
    return view('blog');
});

Route::get('/Blog/{post}', function($post){
    return view('blog',[
        'post' => $post
    ]);
});

Route::get('/Projects', function () {
    return view('projects');
});

Route::get('/Projects/{project}', function ($project) {
    return view('projects',[
        'project' => $project
    ]);
});

Route::get('/About', function(){
    return view('about');
});


