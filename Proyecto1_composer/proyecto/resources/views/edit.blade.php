<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar - formulario</title>
</head>
<body>
    <a href="{{route('index')}}">Volver</a>
    <form method="POST" action="{{route('update', $personal->id)}}">
        @csrf
        @method('PUT')
        
        <label for="">Nombre</label>
        <input type="text" name='nombre' value="{{$personal->nombre}}">

        <label for="">Apellido</label>
        <input type="text" name='apellido' value="{{$personal->apellido}}">

        <label for="">Teléfono</label>
        <input type="text" name='telefono' value="{{$personal->telefono}}">

        <label for="">Dirección</label>
        <input type="text" name='direccion' value="{{$personal->direccion}}">

        <label for="">Correo</label>
        <input type="text" name='correo' value="{{$personal->correo}}">

        <input type="submit" value="Actualizar">
    </form>
</body>
</html>