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


Route::get('/admin','App\Http\Controllers\HomeController@admin')->middleware('user_admin')->name('admin');  
Route::post('/admin/import','App\Http\Controllers\QueryController@importData')->middleware('user_admin')->name('scheduleImport');
Route::post('/admin/{id}','App\Http\Controllers\HomeController@changestatus')->middleware('user_admin')->name('changestatus');

/*Route::get('/worker',function(){
    echo "Rabotnik";
})->middleware('user_status')->name('worker');*/





Route::get('/profiles', 'App\Http\Controllers\ClientController@profiles')->name('profiles')->middleware('user_worker');
//Route::get('/profiles/search', 'App\Http\Controllers\ClientController@search')->name('search')->middleware('user_worker');
//Route::delete('/profiles/{profile}', 'App\Http\Controllers\ClientController@deleteprofile')->name('deleteprofile');
Route::post('/profiles', 'App\Http\Controllers\ClientController@addclientDB')->name('addclientDB')->middleware('user_worker');
Route::get('/profiles/addclient', 'App\Http\Controllers\ClientController@addclient')->name('addclient')->middleware('user_worker');
Route::get('/profiles/{profile}/edit', 'App\Http\Controllers\ClientController@updateprofile')->name('updateprofile')->middleware('user_worker');
Route::post('/profiles/{profile}/edit', 'App\Http\Controllers\ClientController@updateprofilesubmit')->name('updateprofilesubmit')->middleware('user_worker');
Route::get('/profiles/{profile}', 'App\Http\Controllers\ClientController@profile')->name('profile')->middleware('user_worker');
Route::get('/queries', 'App\Http\Controllers\QueryController@queries')->name('queries')->middleware('user_worker');
Route::post('/queries/{id}', 'App\Http\Controllers\QueryController@deletequeries')->name('deletequeries')->middleware('user_worker');


Route::get('/query', 'App\Http\Controllers\QueryController@query')->name('query');
Route::post('/query', 'App\Http\Controllers\QueryController@makequery')->name('makequery');

Route::get('/userprofile', 'App\Http\Controllers\ClientController@userprofile')->name('userprofile');


Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/', 'App\Http\Controllers\MainController@index')->name('index');

Route::get('/categories', 'App\Http\Controllers\MainController@categories')->name('categories');
Route::get('/{category}', 'App\Http\Controllers\MainController@category')->name('category');


//QueryController




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
