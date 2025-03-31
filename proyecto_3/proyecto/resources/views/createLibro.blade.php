<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('indexLibro')}}">Volver</a>

    <form method="POST" action="{{route('storeLibro')}}">
        @csrf
        @method('POST')
        <label for="">Nombre</Label>
        <input type="text" name="nombre">

        <label for="">Autor</label>
        <input type="text" name="autor">

        <label for="">Libro</label>
        @foreach($lectores as $lector)
            <input type="checkbox" name="lector[]" value="{{$lector->id}}"> {{$lector->name}}         
        @endforeach

        <input type="submit" value="Añadir">

    </form>
</body>
</html>