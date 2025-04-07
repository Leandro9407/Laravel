<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
<a href="{{ route('index') }}">Volver al inicio</a>
    <h2>Datos del producto</h2>
    <p>Nombre: {{ $producto->nombre }}</p>
    <p>Precio: {{ $producto->precio }}</p>
</body>
</html>