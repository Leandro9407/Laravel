<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>
<body>
    <section class="container-md">

        @if($message = Session::get('success'))
        <div style="padding:15px; background-color: green; color: white">
            <p>{{$message}}</p>
        </div>
        @endif

        @if($message = Session::get('danger'))
            <div style="padding: 15px; background-color: red; color: white">
                <p>{{$message}}</p>
            </div>    
        @endif



        <h1 class="titulo text-center mt-5 mb-3">Listado</h1>
        <a class="btn btn-primary" href="{{route('create')}}">Agregar nuevos datos</a>

        <table class="table mt-3 shadow text-center table-primary border-2">
                <thead>
                    <tr class="fs-4">
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Show</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody class="table-group-divider">

            @forelse($notes as $note)
                  
                    <tr>
                        <td>{{$note->title}}</td>
                        <td>{{$note->description}}</td>
                        <td><a class="btn btn-success" href="{{route('show', $note->id)}}">{{$note->title}}</a></td>
                        <td><a class="btn btn-primary" href="{{route('edit',$note->id)}}">Editar</a></td>
                        <td><form method="POST" action="{{route('destroy', $note->id)}}">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger" type="submit" value="Eliminar">
                        </form>
                        
                        </td>
                    </tr>

            @empty
                <li>lista vacia</li>
            @endforelse
                    
                </tbody>
        </table>

       
    </section>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
