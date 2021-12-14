<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Auth;


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
Auth::routes([
    'reset' =>false,
    'confirm' =>false,
    'verify' =>false,
]);

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('get-logout');


Route::get('/admin','App\Http\Controllers\HomeController@admin')->middleware('user_status')->name('admin'); 


/*Route::get('/worker',function(){
    echo "Rabotnik";
})->middleware('user_status')->name('worker');*/



Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');

Route::get('/profiles', 'App\Http\Controllers\ClientController@profiles')->name('profiles');
//Route::delete('/profiles/{profile}', 'App\Http\Controllers\ClientController@deleteprofile')->name('deleteprofile');
Route::post('/profiles', 'App\Http\Controllers\ClientController@addclientDB')->name('addclientDB');
Route::get('/profiles/addclient', 'App\Http\Controllers\ClientController@addclient')->name('addclient');
Route::get('/profiles/{profile}/edit', 'App\Http\Controllers\ClientController@updateprofile')->name('updateprofile');
Route::post('/profiles/{profile}/edit', 'App\Http\Controllers\ClientController@updateprofilesubmit')->name('updateprofilesubmit');
Route::get('/profiles/{profile}', 'App\Http\Controllers\ClientController@profile')->name('profile');



Route::get('/query', 'App\Http\Controllers\QueryController@query')->name('query');

Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/{category}', 'App\Http\Controllers\MainController@category')->name('category');


//QueryController




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
