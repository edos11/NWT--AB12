<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('user','UserController');
Route::resource('news','NewsController');
Route::resource('destination','DestinationController');
Route::resource('service','ServiceController');



/*
Route::get('/', function () {
    echo 'dobro dosli na moj sajt';
});
Route::get('hello',function(){
    	echo 'znaci radi';
});

Route::get('news',function(){
  $news = App\news::find(1);
  echo 'ovo je novost ' . $news->title;
});*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
