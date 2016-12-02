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
Route::get('/login','AuthController@login');
Route::post('/login','AuthController@postlogin');

Route::group(array('prefix' => '/signup'), function(){
  Route::get('/','AuthController@signup');
  Route::get('/email','AuthController@email');
  Route::post('/email','AuthController@postsignup');

});


/*user routes*/
Route::group(array('prefix' => '/user'), function(){
  Route::get('/','ProfileController@user');
  Route::get('/profile','ProfileController@profile');
  Route::get('/overview','ProfileController@overview');
  Route::get('/posts','ProfileController@posts');
  Route::get('/upvotes','ProfileController@upvotes');
  Route::get('/comments','ProfileController@comments');
  Route::get('/notifications','ProfileController@notifications');

});
/*---*/


Route::group(array('prefix' => '/'), function(){
  Route::get('/','PageController@index');
  Route::get('/hot','PageController@index');
  Route::get('/trending','PageController@trending');
  Route::get('/fresh','PageController@fresh');
  Route::get('/tv','PageController@tv');
  Route::get('/timely','PageController@timely');
  Route::get('/girl','PageController@girl');
  Route::get('/nsfw','PageController@nsfw');
  Route::get('/gif','PageController@gif');
  Route::get('/wtf','PageController@wtf');
  Route::get('/gaming','PageController@gaming');
  Route::get('/apps','PageController@apps');
  Route::get('/school','PageController@school');
  Route::get('/funny','PageController@funny');
  Route::get('/upload','PageController@upload');
  Route::post('/upload','PageController@postupload');

});

Route::group(array('prefix' => '/tv/channel'), function(){
  Route::get('/nsfw','TvController@nsfw');
  Route::get('/comedy','TvController@lol');
  Route::get('/wtf','TvController@wtf');
  Route::get('/ad','TvController@ad');
  Route::get('/wow','TvController@wow');
  Route::get('/movie-and-tv','TvController@movie');
  Route::get('/game','TvController@gaming');
  Route::get('/prank','TvController@fail');
  Route::get('/cute','TvController@aww');

});
