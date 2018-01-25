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

Route::get('/test', function () {
    return view('layouts.panel');
});

Route::get('/login',['as' => 'login' , "uses" => "Auth\AuthController@loginView"]);
Route::post('/login','Auth\AuthController@login');
Route::get('/register','Auth\AuthController@registerView');
Route::post('/register','Auth\AuthController@register');
Route::post('/logout','Auth\AuthController@logout');

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'],function (){
    Route::get('/','HomeController@dateView');
    Route::get('/daily','HomeController@dailyView');
    Route::get('/calender','HomeController@calander');

    Route::post('/set/daily','UserController@setDailySchedule');
    Route::post('/set/date','UserController@setDateSchedule');
    Route::get('/delete/{id}','UserController@deleteSchedule');

});
