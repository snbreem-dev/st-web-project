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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',function (){
    return view('frontsite.home');
})->name('frontsite.home');

Route::get('single',function (){
    return view('frontsite.single');
})->name('frontsite.single');

Route::get('blog',function (){
    return view('frontsite.blog');
})->name('frontsite.blog');

Route::get('contact',function (){
    return view('frontsite.contact');
})->name('frontsite.contact');
