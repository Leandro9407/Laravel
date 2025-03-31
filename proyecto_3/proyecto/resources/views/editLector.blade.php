<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit lector</title>
</head>
<body>
    <a href="{{route('indexLector')}}">Volver</a>

    <form action="{{route('updateLector', $lector->id)}}" method="POST">
        @csrf
        @method('put')

        <label for="">Nombre</label>
        <input type="text" name="nombre" value="{{$lector->nombre}}">

        <label for="">Apellido</label>
        <input type="text" name="apellido" value="{{$lector->apellido}}">

        <label for="">Teléfono</label>
        <input type="number" name="telefono" value="{{$lector->telefono}}">

        {{-- <label for="">Libro</label>
        @foreach($libros as $libro)
            <input type="checkbox" name="libro[]" value="{{$libro->id}}"> {{$libro->name}}
        @endforeach --}}

        <input type="submit" value="Guardar">

    </form>
</body>
</html>