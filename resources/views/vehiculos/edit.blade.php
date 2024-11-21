<!-- resources/views/vehiculos/edit.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Vehículo</title>
</head>
<body>
    <h1>Editar Vehículo</h1>
    <form action="{{ route('vehiculos.updateHtml', $vehiculo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $vehiculo->nombre }}" required><br><br>

        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" name="categoria" value="{{ $vehiculo->categoria }}" required><br><br>

        <button type="submit">Actualizar</button>
    </form>

    <br><br>
    <a href="{{ route('vehiculos.indexHtml') }}">Volver a la lista</a>
</body>
</html>
