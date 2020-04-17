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

Route::get('/blog',['as'=>'blog','uses'=>'HomeController@blog']);

Route::get('contact',function () {
    return view('contact');
})->name('contact');

Route::get('/property/{id}',['as'=>'property','uses'=>'HomeController@property']);
Route::get('/order/{id}',['as'=>'order','uses'=>'HomeController@order']);
Route::post('/complete',['as'=>'order.complete','uses'=>'HomeController@orderComplete']);
Route::post('contact-create',['as'=>'contact.create','uses'=>'HomeController@contactCreate']);
Route::get('properties',['as'=>'properties','uses'=>'HomeController@propertiesSearch']);
