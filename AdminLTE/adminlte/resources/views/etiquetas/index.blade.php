@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center"><strong>PERGAMINO</strong></h1>
    <p class="text-center">No te pierdas de lo último en novedades informativas.</p>
@stop

@section('content')
    <div class="container-sm p-5 rounded rounded-3 shadow-lg">
        <form action="{{ route('etiquetas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label ">Etiquetas</label>
                <input type="text" class="form-control" placeholder="Digite etiquetas" aria-label="First name" name="nombre">
                <button type="submit" class="btn btn-primary mt-3 px-3">Crear</button>
            </div>
       
        </form>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>

            @foreach ($tags as $tag)

            <tbody>
                <tr>
                    <td>{{ $tag->nombre }}</td>
                    <td><a class="btn btn-primary" role="button" href="{{ route('etiquetas.edit', $tag->id) }}">Editar</a></td>
                    <td><form action="{{ route('etiquetas.destroy', $tag->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>

           
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop