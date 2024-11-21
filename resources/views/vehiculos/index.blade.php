<!-- resources/views/vehiculos/index.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vehículos</title>
</head>
<body>
    <h1>Lista de Vehículos</h1>
    <a href="{{ route('vehiculos.createHtml') }}">Crear Vehículo</a>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehiculo)
                <tr>
                    <td>{{ $vehiculo->nombre }}</td>
                    <td>{{ $vehiculo->categoria }}</td>
                    <td>
                        <a href="{{ route('vehiculos.editHtml', $vehiculo->id) }}">Editar</a>
                        <form action="{{ route('vehiculos.destroyHtml', $vehiculo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
