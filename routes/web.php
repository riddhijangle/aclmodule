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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware'=>['web']],function(){

});

Route::group(['middleware'=>'web'],function(){
	Route::auth();
   

Route::group(['middleware' => ['web','authenticate_user']], function () {
    Route::auth();
    Route::get('/', function () { 
      if (Auth::check())
      {
          return Illuminate\Support\Facades\Redirect::route('home');
      }
      else
      {
          return redirect("/login");
      }

    });

     Route::get('/home', 'HomeController@index');

});



