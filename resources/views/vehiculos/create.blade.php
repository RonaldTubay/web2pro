<!-- resources/views/vehiculos/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Vehículo</title>
</head>
<body>
    <h1>Crear Vehículo</h1>
    <form action="{{ route('vehiculos.storeHtml') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" name="categoria" required><br><br>

        <button type="submit">Guardar</button>
    </form>

    <br><br>
    <a href="{{ route('vehiculos.indexHtml') }}">Volver a la lista</a>
</body>
</html>
