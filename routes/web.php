<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Auth::routes();





Route::group(['middleware' => ['auth']],function(){
    Route::resource('articles','ArticlesController');
    Route::get('/home', 'HomeController@index');
    Route::get('/','ArticlesController@index');
    Route::get('/profile/{name}','ProfileController@profile');
    Route::group(['middleware' => ['','']],function(){

    });
});
