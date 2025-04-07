<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>create cliente</title>
</head>
<body>
    @include('layout.navbar')

    <div class="flex justify-center items-center min-h-screen mt-8">
        <ul class="w-60 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600 text-lg text-center"><strong>DATOS PERSONALES</strong></li>
            <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600 text">{{ $cliente->nombre }}</li>
            <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600 text">{{ $cliente->apellido }}</li>
            <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600 text">{{ $cliente->telefono }}</li>
            <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600 text">{{ $cliente->correo }}</li>
        </ul>    
    </div>

    <div class="flex justify-center items-center min-h-screen mt-8">
        <ul class="w-40 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <li class="w-full px-4 py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600 text-lg text-center"><strong>SERVICIOS</strong></li>
            @forelse ( $cliente->servicios as $servicio )
                <li class="w-full px-4 py-2 border-b border-gray-200 dark:border-gray-600" value="servicios[]" >{{ $servicio->nombre }}</li>
            @empty
                <h3>Sin clientes</h3>    
            @endforelse  
        </ul>
    </div>

</body>
</html>