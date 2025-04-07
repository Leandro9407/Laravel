<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <a href="{{ route('index') }}">Volver al inicio</a>
    <form method="POST" action="{{ route('update', $producto->id) }}">
        @csrf
        @method('put')

        <label for="">Nombre</label>
        <input type="text" name="nombre" value="{{ $producto->nombre }}">

        <label for="">Precio</label>
        <input type="number" name="precio" value="{{ $producto->precio }}">

        <input type="submit" value="Guardar">
    </form>
</body>
</html>