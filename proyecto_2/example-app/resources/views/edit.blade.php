<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar</title>
</head>
<body>
    <form method="POST" action="{{route('update', $dato->id)}}">
        @csrf
        @method('put')

        <label for="">Nombre:</label>
        <input type="text" name="nombre" value="{{$dato->nombre}}">
       
        
        <label for="">Apellido</label>
        <input type="text" name="apellido" value="{{$dato->apellido}}">
       

        <label for="">Dirección</label>
        <input type="text" name="direccion" value="{{$dato->direccion}}">
       
        
        <label for="">Teléfono</label>
        <input type="text" name="telefono" value="{{$dato->telefono}}">
       

        <input type="submit" value="Actualizar">
        
    </form>
</body>
</html>