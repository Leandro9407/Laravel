<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('indexLector')}}">Volver</a>

    <form action="{{route('updateLibro', $libro->id)}}" method="POST">
        @csrf
        @method('put')

        <label for="">Nombre</label>
        <input type="text" name="nombre" value="{{$libro->nombre}}">

        <label for="">Apellido</label>
        <input type="text" name="autor" value="{{$libro->autor}}">

        <input type="submit" value="Guardar">

    </form>
</body>
</html>