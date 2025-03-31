<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index de Lector</title>
</head>
<body>
    <a href="{{route('createLector')}}">Añadir lector</a>
    <br>
    <a href="{{route('indexLibro')}}">Añadir libro</a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Libro</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>

    @forelse($lectores as $lector)

        </tbody>
            <tr>
                <td>{{$lector->nombre}}</td>
                <td>{{$lector->apellido}}</td>
                <td>{{$lector->telefono}}</td>
                <td></td>
                <td><a href="{{route('editLector', $lector->id)}}">Editar</a></td>
                <td><form action="{{route('destroyLector', $lector->id)}}">
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