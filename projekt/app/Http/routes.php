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
Route::get('prikaziformu', 'UserController@prikaziformu');

 Route::get('docs', function(){
               return View::make('docs.aaa.index');
           });

Route::resource('user','UserController');// rute za Korisnika
Route::get('user/{user}', 'UserController@show');
Route::delete('user/{user}', 'UserController@destroy');
Route::post('user/{user}', 'UserController@store');
Route::put('user/{user}', 'UserController@update');

Route::resource('news','NewsController'); // rute za novosti
Route::get('news/{news}', 'NewsController@show');
Route::delete('news/{news}', 'NewsController@destroy');
Route::post('news/{news}', 'NewsController@store');
Route::put('news/{news}', 'NewsController@update');

Route::resource('service','ServiceController');// rute za usluge
Route::get('service/{service}', 'ServiceController@show');
Route::delete('service/{service}', 'ServiceController@destroy');
Route::post('service/{service}', 'ServiceController@store');
Route::put('service/{service}', 'ServiceController@update');

Route::resource('reservation','ReservationController');// rute za rezervacije
Route::get('reservation/{reservation}', 'ReservationController@show');
Route::delete('reservation/{reservation}', 'ReservationController@destroy');
Route::post('reservation/{reservation}', 'ReservationController@store');
Route::put('reservation/{reservation}', 'ReservationController@update');

Route::resource('destination','DestinationController');// rute za destiancije
Route::get('destination/{destination}', 'DestinationController@show');
Route::delete('destination/{destination}', 'DestinationController@destroy');
Route::post('destination/{destination}', 'DestinationController@store');
Route::put('destination/{destination}', 'DestinationController@update');

Route::resource('comments','CommentsController');// rute za komentare
Route::get('comments/{comments}', 'CommentsController@show');
Route::delete('comments/{comments}', 'CommentsController@destroy');
Route::post('comments/{comments}', 'CommentsController@store');
Route::put('comments/{comments}', 'CommentsController@update');

Route::get('/', function () {
    echo 'dobro dosli na moj sajt';
});
Route::get('hello',function(){
    	echo 'znaci radi';
});

Route::get('news',function(){
  $news = App\user::find(1);
  echo 'ovo je novost ' . $news->username;
});

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
