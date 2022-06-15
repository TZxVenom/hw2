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

Route::get('/', function () {
    return view('welcome');
});


Route::get('register', "App\Http\Controllers\RegisterController@index")->name('register');
Route::get('register/username/{username}', 'App\Http\Controllers\RegisterController@checkUsername');
Route::get('register/email/{email}', 'App\Http\Controllers\RegisterController@checkEmail');
Route::post('register', 'App\Http\Controllers\RegisterController@register');


Route::get('login', 'App\Http\Controllers\LoginController@login')->name('login');
Route::post('login', 'App\Http\Controllers\LoginController@checkLogin');
Route::get("logout", "App\Http\Controllers\LoginController@logout")->name("logout");

Route::get('home', 'App\Http\Controllers\HomeController@home')->name('home');
Route::get('home/contents','App\Http\Controllers\HomeController@create');

Route::get('servizi', 'App\Http\Controllers\ServiziController@servizi')->name('servizi');
Route::get('servizi/contents','App\Http\Controllers\ServiziController@create');
Route::get('servizi/search/drink/{drink}','App\Http\Controllers\ServiziController@search_drink');
Route::get('servizi/search/meal/{meal}','App\Http\Controllers\ServiziController@search_meal');
Route::post('servizi/insert','App\Http\Controllers\ServiziController@insert');

Route::get('booking', 'App\Http\Controllers\BookingController@index')->name('booking');
Route::post('booking', 'App\Http\Controllers\BookingController@booking');

Route::get('reservations', 'App\Http\Controllers\ReservationsController@index')->name('reservations');
Route::get('reservations/get', 'App\Http\Controllers\ReservationsController@get_reservations');
Route::get('reservations/like', 'App\Http\Controllers\ReservationsController@get_likes');
Route::get('reservations/delete/like', 'App\Http\Controllers\ReservationsController@delete_likes');
Route::get('reservations/delete/reservations', 'App\Http\Controllers\ReservationsController@delete_reservations');

