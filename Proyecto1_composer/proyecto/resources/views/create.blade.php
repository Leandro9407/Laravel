<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create - formulario</title>
</head>
<body>
    <a href="{{ route('index') }}">Volver</a>
    <form method="POST" action="{{route('store')}}">
        @csrf
        <label for="">Nombre:</label>
        <input type="text" name="nombre">
        @error('nombre')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <label for="">Apellido:</label>
        <input type="text" name="apellido">
        @error('apellido')
            <p style="color:red">{{ $message  }}</p>
        @enderror

        <label for="">Teléfono:</label>
        <input type="text" name="telefono">
        @error('telefono')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <label for="">Dirección:</label>
        <input type="text" name="direccion">
        @error('direccion')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <label for="">Correo:</label>
        <input type="text" name="correo">
        @error('correo')
            <p style="color:red">{{ $message }}</p>
        @enderror

        <input type="submit" value="Crear">
    </form>
</body>
</html>