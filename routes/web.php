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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Routes of Pages
// Route::get('/', 'App\Http\Controllers\PagesController@index')->name('homePage');

//Routes of TodoController
Route::get('/', 'App\Http\Controllers\TodosController@index')->name('homePage');
Route::resource('todo', 'App\Http\Controllers\TodosController');

/*Routes of Auths*/
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
