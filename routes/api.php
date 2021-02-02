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

// Route API List
Route::get("/news/{index}", "DashboardController@getNewsPage");
Route::get("/event/{index}", "DashboardController@getEventPage");
Route::get("/tourism", "DashboardController@getTourism");
Route::get("/culinary", "DashboardController@getCulinary");
Route::get("/souvenir", "DashboardController@getSouvenir");
Route::get("/lodging", "DashboardController@getLodging");

// Route API Detail
Route::get("/news/{page}/{index}", "DetailController@getNews");
Route::get("/event/{page}/{index}", "DetailController@getEvent");
Route::get("/tourism/{index}", "DetailController@getTourism");
Route::get("/culinary/{index}", "DetailController@getCulinary");
Route::get("/souvenir/{index}", "DetailController@getSouvenir");
Route::get("/lodging/{index}", "DetailController@getLodging");