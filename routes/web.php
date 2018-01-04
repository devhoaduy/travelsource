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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('get-api',['as'=>'getApi','uses'=>'PageController@getApi']);
Route::post('result-api',['as'=>'resultApi','uses'=>'PageController@postApi']);
Route::get('/',['as'=>'Home','uses'=>'PageController@getIndex']);
Route::get('contact-us',['as'=>'contactus','uses'=>'PageController@getContactus']);
Route::get('about',['as'=>'about','uses'=>'PageController@getabout']);
Route::get('404',['as'=>'404','uses'=>'PageController@getPage404']);