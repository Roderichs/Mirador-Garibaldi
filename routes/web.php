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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('information', 'InformationController@information');

Route::get('charter', 'CharterController@charter');

Route::get('saucer', 'SaucerController@saucer');

Route::get('drink', 'DrinkController@drink');


Route::resource('saucersettings', 'SaucersettingsController')->middleware('auth');

Route::resource('drinksettings','DrinksettingsController')->middleware('auth');