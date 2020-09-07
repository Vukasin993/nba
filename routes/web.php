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

Route::get('/teams', 'TeamController@index');

Route::get('/teams/teams/{id}', 'TeamController@show')->name('singleTeam');

ROute::get('/teams/players/{id}', 'PlayerController@show')->name('singlePlayer');

Route::get('/register', 'AuthController@getRegisterForm');
Route::post('/register', 'AuthController@register');
Route::get('/login', 'AuthController@getLoginForm')->name('login');
Route::post('/login', 'AuthController@login');
