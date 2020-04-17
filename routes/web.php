<?php

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

//home page route
Route::get('/',['uses'=>'HomeController@load_home_page','as'=>'home']);

Route::get('properties',function (){
    return view('properties');
})->name('properties');
Route::get('/blog',['as'=>'blog','uses'=>'HomeController@blog']);

Route::get('contact',function () {
    return view('contact');
})->name('contact');

Route::get('/property/{id}',['as'=>'property','uses'=>'HomeController@property']);
