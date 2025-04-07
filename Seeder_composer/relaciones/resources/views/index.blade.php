<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Lista de Profesores a Estudiantes</h1>

    @forelse ($profesores as $profesor)
        <h2>{{ $profesor->nombre }} (ID: {{ $profesor->id }})</h2>
        <h3>Estudiante</h3>
        <ul>
            @forelse ($profesor->estudiantes as $estudiante)
                <li>{{ $estudiante->nombre }} (ID: {{ $estudiante->id }})</li>
                <br>
            @empty
                <li>No tiene estudiantes registrados</li>
            @endforelse
        </ul>
    @empty
    <p>No hay profesores registrados.</p>
    @endforelse
    
    <br>
    <h1>Estudiantes a profesores</h1>
    @forelse ($estudiantes as $estudiante)
        <li>{{ $estudiante->nombre }} - {{ $estudiante->grado }} (Profesor: {{ $estudiante->profesor->nombre }} ID: {{ $estudiante->profesor->id }})</li>
    @empty
        <p>No existen datos</p>    
    @endforelse    
    
</body>
</html>