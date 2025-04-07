<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

    @if ($message = Session::get('success'))
    <div style="padding:15px; background-color: green; color:white">
        <p>{{ $message }}</p>
    </div>
    @endif

    @if ($message = Session::get('danger'))
    <div style="padding: 15px; background-color: red; color: white">
        <p>{{ $message }}</p>
    </div>
    @endif


    <a href="{{route('create')}}">Agregar nuevos datos</a>
    <h1>Datos</h1>
    
        @forelse($personales as $personal)

        <li>
            {{$personal->nombre}}
            {{$personal->apellido}}
            {{$personal->telefono}}
            {{$personal->direccion}}
            {{$personal->correo}}
            <a href="{{ route('show', $personal->id) }}">Datos</a>
            <a href="{{route('edit', $personal->id)}}">Editar</a>
            <form method="POST" action="{{route('destroy', $personal->id)}}">
                @csrf
                @method ('DELETE')
                <input type="submit" value="Eliminar">
            </form>
        </li>

        @empty
        <li>Lista vacia</li>
        @endforelse
</body>
</html>