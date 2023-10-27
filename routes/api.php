<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\CategoriaController;
use App\Http\Controllers\API\CajaTextoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('v1/categorias')->group(function () {
    Route::get('/',[ CategoriaController::class, 'get']);
    Route::post('/',[ CategoriaController::class, 'create']);
    Route::get('/{id}',[ CategoriaController::class, 'getById']);
    Route::put('/{id}',[ CategoriaController::class, 'update']);
    Route::delete('/{id}',[ CategoriaController::class, 'delete']);
});

Route::prefix('v1/cajas-texto')->group(function () {
    Route::get('/',[ CajaTextoController::class, 'get']);
    Route::post('/',[ CajaTextoController::class, 'create']); 
    Route::get('/{id}',[ CajaTextoController::class, 'getById']);
    Route::put('/{id}',[ CajaTextoController::class, 'update']);
    Route::delete('/{id}',[ CajaTextoController::class, 'delete']);
});