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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','LandingPageController');

/*------------------Custom auth------------------------*/
Route::get('/login','CustomAuth\LoginController@login')->name('login');
Route::post('/login','CustomAuth\LoginController@authenticate')->name('login.authenticate');
/*------------------End Of Custom auth------------------------*/

Route::group(['middleware' => ['auth']], function (){
    Route::get('/dashboard','DashboardController@dashboard')->name('dashboard');
//    Route::post('/logout','CustomAuth\LoginController@logout')->name('logout');
});