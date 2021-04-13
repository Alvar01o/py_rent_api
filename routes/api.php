<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RealStateController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\HouseInformation;
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



Route::middleware('auth:sanctum')->group( function () {

    /**House Information Routes */
        // agregar rutas para house information aqui
  Route::post('/house' , [HouseController::class, 'store']);
    Route::delete('/house/{id}' , [HouseController::class, 'destroy']);
    Route::get('/house/{id}' , [HouseController::class, 'show']);
    Route::get('/house' , [HouseController::class, 'index']);
    Route::put('/house/{id}' , [HouseController::class, 'update']);

/**Real State Routes */
    Route::post('/real_states' , [RealStateController::class, 'store']);
    Route::put('/real_states/{id}' , [RealStateController::class, 'update']);
    Route::delete('/real_states/{id}' , [RealStateController::class, 'destroy']);
    Route::get('/real_states/{id}' , [RealStateController::class, 'show']);
    Route::get('/real_states' , [RealStateController::class, 'index']);
    Route::get('/logout' , [AuthController::class, 'logout']);
    /**House Details Routes */
        // agregar rutas para house details aqui
});
