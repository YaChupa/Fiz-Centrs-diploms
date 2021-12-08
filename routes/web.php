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

Route::get('/profiles', 'App\Http\Controllers\MainController@profiles')->name('profiles');
Route::get('/profiles/addclient', 'App\Http\Controllers\MainController@addclient')->name('addclient');
Route::get('/profiles/{profile?}', 'App\Http\Controllers\MainController@profile')->name('profile');
Route::post('/profiles/addclient', 'App\Http\Controllers\MainController@addclientDB')->name('addclientDB');

Route::get('/query', 'App\Http\Controllers\QueryController@query')->name('query');

Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/{category}', 'App\Http\Controllers\MainController@category')->name('category');


//QueryController




