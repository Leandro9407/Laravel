@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center"><strong>PERGAMINO</strong></h1>
    <p class="text-center">No te pierdas de lo último en novedades informativas.</p>
@stop

@section('content')
    <div class="container-sm p-5 rounded rounded-3 shadow-lg">
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="" class="form-label ">Nombre completo</label>
                <input type="text" class="form-control" placeholder="Digite su nombre" aria-label="First name" name="nombre" value="{{ $post->nombre }}">
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Descripción</label>
                <textarea class="form-control" rows="3" placeholder="Descripción de la lectura que se busca" name="descripcion">{{ $post->descripcion }}</textarea>
            </div>

            <div>
                <label for="category_id" class="form-label">Categoría</label>
                <select name="category_id" class="form-select p-1 border border-primary mb-3" aria-label="Default select example">
                    <option selected disabled>Seleccione una categoría</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}"
                            {{ $categoria->id == $post->category_id ? 'selected' : '' }}>
                            {{ $categoria->nombre }}
                        </option>
                    @endforeach            
                </select>
            </div>

            <label for="">Etiquetas</label>
            @foreach($tags as $tag)
            <div class="form-check form-check-inline">
                    <input 
                        class="form-check-input" 
                        type="checkbox" 
                        name="tags[]" 
                        value="{{ $tag->id }}" 
                        id="tag{{ $tag->id }}"
                        {{ $post->tags->contains($tag->id) ? 'checked' : '' }}>
                    <label class="form-check-label" for="tag{{ $tag->id }}">{{ $tag->nombre }}</label>
                </div>
            @endforeach
            <div>
                <button type="submit" class="btn btn-primary mt-3 px-3">Guardar</button>
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