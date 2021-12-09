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

Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');

Route::get('/profiles', 'App\Http\Controllers\ClientController@profiles')->name('profiles');
Route::delete('/profiles/{profile}', 'App\Http\Controllers\ClientController@deleteprofile')->name('deleteprofile');
Route::post('/profiles', 'App\Http\Controllers\ClientController@addclientDB')->name('addclientDB');
Route::get('/profiles/addclient', 'App\Http\Controllers\ClientController@addclient')->name('addclient');
Route::get('/profiles/{profile}/edit', 'App\Http\Controllers\ClientController@updateprofile')->name('updateprofile');
Route::post('/profiles/{profile}/edit', 'App\Http\Controllers\ClientController@updateprofilesubmit')->name('updateprofilesubmit');
Route::get('/profiles/{profile}', 'App\Http\Controllers\ClientController@profile')->name('profile');


//Route::delete('/profiles/{profile}', 'App\Http\Controllers\ClientController@deleteprofile')->name('deleteprofile');

Route::get('/query', 'App\Http\Controllers\QueryController@query')->name('query');

Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/{category}', 'App\Http\Controllers\MainController@category')->name('category');


//QueryController

 


