<?php
// app/Http/Controllers/VehiculoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    // Métodos para la API (sin cambios)
    public function index()
    {
        return response()->json(Vehiculo::all());
    }

    public function show($id)
    {
        $vehiculo = Vehiculo::find($id);
        if ($vehiculo) {
            return response()->json($vehiculo);
        }
        return response()->json(['message' => 'Vehículo no encontrado'], 404);
    }

    public function store(Request $request)
    {
        $vehiculo = Vehiculo::create($request->all());
        return response()->json($vehiculo, 201);
    }

    public function update(Request $request, $id)
    {
        $vehiculo = Vehiculo::find($id);
        if ($vehiculo) {
            $vehiculo->update($request->all());
            return response()->json($vehiculo);
        }
        return response()->json(['message' => 'Vehículo no encontrado'], 404);
    }

    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id);
        if ($vehiculo) {
            $vehiculo->delete();
            return response()->json(null, 204);
        }
        return response()->json(['message' => 'Vehículo no encontrado'], 404);
    }

    // Métodos para la vista (CRUD en HTML)
    public function indexHtml()
    {
        // Obtener todos los vehículos
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', compact('vehiculos'));
    }

    public function createHtml()
    {
        // Mostrar formulario de creación
        return view('vehiculos.create');
    }

    public function storeHtml(Request $request)
    {
        // Validar y crear un nuevo vehículo
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
        ]);

        Vehiculo::create($request->all());
        return redirect()->route('vehiculos.indexHtml');
    }

    public function editHtml($id)
    {
        // Mostrar formulario para editar un vehículo
        $vehiculo = Vehiculo::findOrFail($id);
        return view('vehiculos.edit', compact('vehiculo'));
    }

    public function updateHtml(Request $request, $id)
    {
        // Validar y actualizar un vehículo
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
        ]);

        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->update($request->all());
        return redirect()->route('vehiculos.indexHtml');
    }

    public function destroyHtml($id)
    {
        // Eliminar un vehículo
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->delete();
        return redirect()->route('vehiculos.indexHtml');
    }
}
