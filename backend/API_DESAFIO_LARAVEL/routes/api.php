<?php

use App\Http\Controllers\Cities\CreateCityController;
use App\Http\Controllers\Cities\DeleteCityController;
use App\Http\Controllers\Cities\GetCitiesController;
use App\Http\Controllers\Cities\GetCityController;
use App\Http\Controllers\Cities\UpdateCityController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Neighborhood\CreateNeighborhoodController;
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

Route::group(['middleware' => ['auth:sanctum']], function () {
Route::get('/cities', GetCitiesController::class);
Route::get('/cities/{id}', GetCityController::class);
Route::post('/cities', CreateCityController::class);
Route::put('/cities/{id}', UpdateCityController::class);
Route::delete('/cities/{id}', DeleteCityController::class);
});

Route::post('/neighborhood', CreateNeighborhoodController::class);
