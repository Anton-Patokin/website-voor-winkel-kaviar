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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();


Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    Route::get('test',function(){
        return trans('home.test');
    });
    Route::get('/', 'HomeController@index');

    Route::get('/home', 'HomeController@index');
    Route::get('/video/{id}', 'HomeController@video');

});

Route::post('/send_mail','HomeController@sendMail');