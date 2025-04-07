<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
</head>
<body>
    <a href="{{ route('index') }}">Volver al inicio</a>
    <h1>Datos</h1>
    <ul>
       <li> {{ $personal->nombre }}</li>
       <li>{{ $personal->apellido }}</li>
       <li>{{ $personal->telefono }}</li>
       <li>{{ $personal->direccion }}</li>
       <li>{{ $personal->correo }}</li>
    </ul>    
</body>
</html>