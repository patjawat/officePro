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


//Route for normal user
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/home/me', 'HomeController@me');
});
//Route for admin
Route::group(['prefix' => 'admin'], function(){
    Route::group(['middleware' => ['admin']], function(){
        Route::get('/dashboard', 'admin\AdminController@index');
    });
});


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('check-connect',function(){
    if(DB::connection()->getDatabaseName())
    {
    return "Yes! successfully connected to the DB: " . DB::connection()->getDatabaseName();
    }else{
    return 'Connection False !!';
    }
    
   });
// Route::get('/','SiteController@index');
Route::get('/about','SiteController@about');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/room','CategoryController@room');
Route::resource('category','CategoryController');
// Route::resource('products','ProductsController');


// Route::get('/home', 'HomeController@index')->name('home');


