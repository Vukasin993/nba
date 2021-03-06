<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/teams', 'TeamController@index')->name('all')->middleware('auth');;

Route::get('/teams/teams/{id}', 'TeamController@show')->name('singleTeam')->middleware('auth');;

ROute::get('/teams/players/{id}', 'PlayerController@show')->name('singlePlayer')->middleware('auth');;

Route::post('/teams/teams/{id}/comments', 'CommentsController@store');

Route::get('/logout', 'AuthController@logout')->middleware('auth');
Route::post('/logout', 'AuthController@logout')->name('logout');

Route::get('/news', 'NewsController@index');
ROute::get('/news/{id}', 'NewsController@show')->name('singleNews');



Route::group(['middleware'=>['guest']], function() {
    Route::get('/register', 'AuthController@getRegisterForm')->name('register');;
    Route::post('/register', 'AuthController@register');
    Route::get('/login', 'AuthController@getLoginForm')->name('login');
    Route::post('/login', 'AuthController@login');
});

Route::get('/account-verification/{id}', 'AuthController@verifyUser');


