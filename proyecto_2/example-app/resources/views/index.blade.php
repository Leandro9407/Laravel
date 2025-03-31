<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>

    @if ($message = Session('success'))
        <p style="padding: 15px; background-color: green; color: white;">{{$message}}</p>
    @endif

    @if ($message = Session('danger'))
        <p style="padding: 15px; background-color:red; color: white;">{{$message}}</p>
    @endif
    
    
    @forelse ($datos as $dato)
    <ul>
        <li>
            {{$dato->nombre}}
            {{$dato->apellido}}
            {{$dato->direccion}}
            {{$dato->telefono}}
            <a href="{{route('show', $dato->id)}}">Show</a>
            <a href="{{route('edit', $dato->id)}}">Editar</a>
            <form method="POST" action="{{route('destroy', $dato->id)}}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Eliminar">
            </form>
        </li>
    </ul>
    @empty
        <p>Lista vacia</p>  
    @endforelse

    <a href="{{route('create')}}">Agregar nuevos datos</a>
</body>
</html>