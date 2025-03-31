<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <a href="{{route('index')}}">Volver a inicio</a>

    <form method="POST" action="{{route('store')}}">
        @csrf
        <label for="">Nombre:</label>
        <input type="text" name="nombre">
        @error('nombre')
        <p style="color: red">{{$message}}</p>  
        @enderror

        <label for="">Apellido:</label>
        <input type="text" name="apellido">
        @error('nombre')
        <p style="color: red">{{$message}}</p>  
        @enderror

        <label for="">Dirección</label>
        <input type="text" name="direccion">
        @error('nombre')
        <p style="color: red">{{$message}}</p>  
        @enderror

        <label for="">Teléfono</label>
        <input type="text" name="telefono">
        @error('nombre')
        <p style="color: red">{{$message}}</p>  
        @enderror

        <input type="submit" value="Añadir">

    </form>

</body>
</html>