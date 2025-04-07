<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
</head>
<body>
    <a href="{{ route('index') }}">Volver al inicio</a>

    <form method="POST" action="{{ route('store') }}">
        @csrf
        @method('post')
        
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        @error('nombre')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <label for="">Precio</label>
        <input type="number" name="precio">
        @error('precio')
            <p style="color: red;">{{ $message }}</p>
        @enderror

        <input type="submit" value="Agregar">
    </form>
</body>
</html>