<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get("/news/{index}", "DashboardController@getNewsPage");
Route::get("/event/{index}", "DashboardController@getEventPage");
Route::get("/tourism", "DashboardController@getTourism");
Route::get("/culinary", "DashboardController@getCulinary");
Route::get("/souvenir", "DashboardController@getSouvenir");
Route::get("/lodging", "DashboardController@getLodging");