@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center"><strong>PERGAMINO</strong></h1>
<p class="text-center">No te pierdas de lo último en novedades informativas.</p>
@stop

@section('content')

    <form action="{{ route('etiquetas.update', $tags->id)  }}" method="POST">
        @method('put')
        @csrf
        <div class="container-sm">
            <label for="">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{{ $tags->nombre }}">
            <button type="submit" class="btn btn-primary mt-3">Actualizar</button>
        </div>     
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop