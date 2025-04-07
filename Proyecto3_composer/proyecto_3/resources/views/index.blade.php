<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>

    @if ($message = Session::get('success'))
        <p style="padding: 15px; background-color: green; color: white">
            {{ $message }}
        </p>
    @endif

    @if ($message = Session::get('danger'))
        <p style="padding: 15px; background-color: red; color: white;">
            {{ $message }}
        </p>
    @endif


    <a href="{{ route('create') }}">Añadir nuevo producto</a>

    <table>
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody>
   
   @forelse ($productos as $producto)

        <tr>
            <td>{{ $producto->nombre }}</td>
            <td> {{ $producto->precio }}</td>
            <td><a href="{{ route('show', $producto->id) }}">Mostrar datos</a></td>
            <td><a href="{{ route('edit', $producto->id) }}">Editar</a></td>
            <td><form method="POST" action="{{ route('destroy', $producto->id) }}">
                @csrf
                @method('DELETE')
                <input type="submit" value="Eliminar">
            </form></td>
        </tr>
        
        </tbody>
    </table>    
    @empty
    <h3>Lista vacia</h3>
    @endforelse    
</body>
</html>