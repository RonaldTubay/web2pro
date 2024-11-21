<?php

// routes/web.php

use App\Http\Controllers\VehiculoController;

Route::get('/vehiculos', [VehiculoController::class, 'indexHtml'])->name('vehiculos.indexHtml');
Route::get('/vehiculos/create', [VehiculoController::class, 'createHtml'])->name('vehiculos.createHtml');
Route::post('/vehiculos', [VehiculoController::class, 'storeHtml'])->name('vehiculos.storeHtml');
Route::get('/vehiculos/{id}/edit', [VehiculoController::class, 'editHtml'])->name('vehiculos.editHtml');
Route::put('/vehiculos/{id}', [VehiculoController::class, 'updateHtml'])->name('vehiculos.updateHtml');
Route::delete('/vehiculos/{id}', [VehiculoController::class, 'destroyHtml'])->name('vehiculos.destroyHtml');
