<?php

use Illuminate\Support\Facades\Route;  // Asegúrate de incluir esta línea

use App\Http\Controllers\VehiculoController;

Route::apiResource('vehiculos', VehiculoController::class);

Route::get('vehiculos', [VehiculoController::class, 'index']);
Route::get('vehiculos/{id}', [VehiculoController::class, 'show']);
Route::post('vehiculos', [VehiculoController::class, 'store']);
Route::put('vehiculos/{id}', [VehiculoController::class, 'update']);
Route::delete('vehiculos/{id}', [VehiculoController::class, 'destroy']);
    