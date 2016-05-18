<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
View::addExtension('html', 'php');
Route::get('/', function () {
    return view('welcome');
});
Route::get('register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'RegistrationController@confirm'
]);
Route::auth();
Route::get('/newss', function () {
  return File::get(public_path() . '/news.blade.html');
  //  return View::make('news');
    //return view('news.blade.html');
});
Route::get('/home', function () {
    return view('home');
});

//Route::resource('news','NewsController'); // rute za novosti
Route::resource('news','NewsController');
Route::get('news/{news}', 'NewsController@show');
Route::get('svenovosti', 'NewsController@index');
Route::delete('news/{news}', 'NewsController@destroy');
Route::post('news', 'NewsController@store');
Route::post('news/{news}', 'NewsController@update');
/*
Route::resource('service','ServiceController');// rute za usluge
Route::get('service/{service}', 'ServiceController@show');
Route::delete('service/{service}', 'ServiceController@destroy');
Route::post('service/{service}', 'ServiceController@store');
Route::put('service/{service}', 'ServiceController@update');

Route::resource('reservation','ReservationController');// rute za rezervacije
Route::get('reservation/{reservation}', 'ReservationController@show');
Route::delete('reservation/{reservation}', 'ReservationController@destroy');
Route::post('reservation/{reservation}', 'ReservationController@store');
Route::put('reservation/{reservation}', 'ReservationController@update');*/

Route::resource('destination','DestinationController');// rute za destiancije
Route::get('destination/{destination}', 'DestinationController@show');
Route::delete('destination/{destination}', 'DestinationController@destroy');
Route::post('destination/{destination}', 'DestinationController@store');
Route::put('destination/{destination}', 'DestinationController@update');
/*
Route::resource('comments','CommentsController');// rute za komentare
Route::get('comments/{comments}', 'CommentsController@show');
Route::delete('comments/{comments}', 'CommentsController@destroy');
Route::post('comments/{comments}', 'CommentsController@store');
Route::put('comments/{comments}', 'CommentsController@update');*/
/*
Route::get('/', function () {
    echo 'dobro dosli na moj sajt';
});
Route::get('hello',function(){
    	echo 'znaci radi';
});

Route::get('news',function(){
  $news = App\user::find(1);
  echo 'ovo je novost ' . $news->username;
});*/
