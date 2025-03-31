<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index libro</title>
</head>
<body>
    <a href="{{route('indexLector')}}">Volver</a>
    <br>
    <a href="{{route('createLibro')}}">Añadir</a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Autor</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>

    @forelse($libros as $libro)

        </tbody>
            <tr>
                <td>{{$libro->nombre}}</td>
                <td>{{$libro->autor}}</td>
                <td><a href="{{route('editLibro', $libro->id)}}">Editar</a></td>
                <td><form action="{{route('destroyLibro', $libro->id)}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                    </form></td>
            </tr>
        </tbody>    
    </table>
        
    @empty
        <h2>Lista vacia</h2>     
    @endforelse
</body>
</html>