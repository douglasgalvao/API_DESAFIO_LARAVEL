<?php

use App\Http\Controllers\Cities\CreateCityController;
use App\Http\Controllers\Cities\DeleteCityController;
use App\Http\Controllers\Cities\GetCitiesController;
use App\Http\Controllers\Cities\GetCityController;
use App\Http\Controllers\Cities\UpdateCityController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Neighborhood\CreateNeighborhoodController;
use App\Http\Controllers\Neighborhood\DeleteNeighborhoodController;
use App\Http\Controllers\Neighborhood\GetNeighborhoodController;
use App\Http\Controllers\Neighborhood\GetNeighborhoodsController;
use App\Http\Controllers\Neighborhood\UpdateNeighborhoodsController;
use App\Http\Controllers\Register\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!   // NICE , A READY AUTHENTICATION !!!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', LoginController::class);
Route::post('/register', RegisterController::class);


// Authentication feita pelo própio Laravel
Route::group(['middleware' => ['auth:sanctum']], function () {
Route::get('/cities', GetCitiesController::class);
Route::get('/cities/{id}', GetCityController::class);
Route::post('/cities', CreateCityController::class);
Route::put('/cities/{id}', UpdateCityController::class);
Route::delete('/cities/{id}', DeleteCityController::class);

Route::get('/neighborhood', GetNeighborhoodsController::class);
Route::get('/neighborhood/{id}', GetNeighborhoodController::class);
Route::post('/neighborhood', CreateNeighborhoodController::class);
Route::put('/neighborhood/{id}', UpdateNeighborhoodsController::class);
Route::delete('/neighborhood/{id}', DeleteNeighborhoodController::class);
});

Route::post('/neighborhood', CreateNeighborhoodController::class);
