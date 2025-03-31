<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear lector</title>
</head>
<body>
    <a href="{{route('indexLector')}}">Volver</a>

    <form method="POST" action="{{route('storeLector')}}">
        @csrf
        @method('POST')
        <label for="">Nombre</Label>
        <input type="text" name="nombre">

        <label for="">Apellido</label>
        <input type="text" name="apellido">

        <label for="">Teléfono</label>
        <input type="number" name="telefono">

        <label for="">Libro</label>
        @foreach($libros as $libro)
            <input type="checkbox" name="libros[]" value="{{$libro->id}}"> {{$libro->name}}         
        @endforeach

        <input type="submit" value="Añadir">

    </form>
</body>
</html>