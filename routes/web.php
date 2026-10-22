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




Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function()
    {
        return view('master');
    });
    Route::get('registration', function(){
       return view('registration');
    });
    Route::get('about-us', function(){
        return view('aboutUs');
    });
    Route::get('service', function(){
        return view('service');
    });
    Route::get('informations', function(){
        return view('informations');
    });
    Route::get('universities', function(){
        return view('universities');
    });
    Route::get('fee', function(){
        return view('fee');
    });
    Route::get('photos', function(){
        return view('photos');
    });
    Route::get('contact-us', function(){
        return view('contactUs');
    });
    Route::post('contact-us', 'ApplyController@send_form');
    Route::post('/', 'MailController@send_form');
});




