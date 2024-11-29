<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

// Rutas para el CRUD de Vehiculos
Route::get('/vehiculos', [Controller::class, 'index']); // Obtener todos los vehículos
Route::post('/vehiculos', [Controller::class, 'store']); // Crear un nuevo vehículo
Route::get('/vehiculos/{id}', [Controller::class, 'show']); // Obtener un vehículo por ID
Route::put('/vehiculos/{id}', [Controller::class, 'update']); // Actualizar un vehículo
Route::delete('/vehiculos/{id}', [Controller::class, 'destroy']); // Eliminar un vehículo

// Ruta adicional (por ejemplo, para obtener al usuario autenticado)
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
    