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

// Route::get('/', function () {
//     return view('welcome');
// });

// Dashboard
Route::get('/', 'ViewsController@dashboard')->name('dashboard');

// tourism
Route::get('/tourism', 'ViewsController@tourism')->name('tourism');
Route::get('/tourism/{index}', 'ViewsController@tourismDetail');

// culinary
Route::get('/culinary/', 'ViewsController@culinary')->name('culinary');
Route::get('/culinary/{index}', 'ViewsController@culinaryDetail');

// souvenir
Route::get('/souvenir/', 'ViewsController@souvenir')->name('souvenir');
Route::get('/souvenir/{index}', 'ViewsController@souvenirDetail');

// lodging
Route::get('/lodging/', 'ViewsController@lodging')->name('lodging');
Route::get('/lodging/{index}', 'ViewsController@lodgingDetail');

