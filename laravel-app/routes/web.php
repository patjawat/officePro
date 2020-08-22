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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/room','CategoryController@room');
Route::resource('category','CategoryController');
Route::resource('products','ProductsController');


Route::get('/home', 'HomeController@index')->name('home');
