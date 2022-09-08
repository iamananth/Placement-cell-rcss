<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Middleware\PreventBackHistory;
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


Route::group(['middleware' => 'revalidate'],function(){

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('utype');
Route::resource("/student", StudentController::class);

Route::get('/create', 'App\Http\Controllers\StudentController@create')->name('create');
Route::get('/index', 'App\Http\Controllers\StudentController@index')->name('index');
Route::get('/edit', 'App\Http\Controllers\StudentController@edit')->name('edit');
Route::get('/show', 'App\Http\Controllers\StudentController@show')->name('show');


});