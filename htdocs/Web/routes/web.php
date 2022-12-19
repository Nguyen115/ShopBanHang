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
//Frontend
Route::get('/', 'App\Http\Controllers\FrontendController@homepage');
Route::get('/homepage','App\Http\Controllers\FrontendController@homepage');
Route::get('/aboutus','App\Http\Controllers\FrontendController@aboutus');
Route::get('/shop','App\Http\Controllers\FrontendController@shop');
Route::get('/service','App\Http\Controllers\FrontendController@service');
Route::get('/contact','App\Http\Controllers\FrontendController@contact');
//Admin
Route::get('/adminstator','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin_dashboard','App\Http\Controllers\AdminController@dashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');
//Auth
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
