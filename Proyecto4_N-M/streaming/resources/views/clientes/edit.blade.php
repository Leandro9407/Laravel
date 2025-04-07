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
    <section class="container mx-w-lg mx-auto text-center">

    
      <div class="flex justify-center pt-8">
        <div class="grid gap-6 mb-6 md:grid-cols-1 w-full max-w-lg">
      
          <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
            @csrf
            @method('put')

            <div>
              <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark text-left">Nombre</label>
              <input type="text" name="nombre" value="{{ $cliente->nombre }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4" required />
            </div>

            <div>
              <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark text-left">Apellido</label>
              <input type="text" name="apellido" value="{{ $cliente->apellido }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4" required />
            </div>

            <div>
              <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark text-left">Teléfono</label>
              <input type="text" name="telefono" value="{{ $cliente->telefono }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4" required />
            </div>

            <div>  
              <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-dark text-left">Correo</label>
              <input type="text" name="correo" value="{{ $cliente->correo }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-4" required />
            </div>

            <div>
              <h3 class="mb-2 font-semibold text-gray-900 dark:text-dark text-left">Servicios</h3>
              <ul class="w-48 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                   
                  @foreach ( $servicios as $servicio )
                    <li class="w-full border-b border-gray-200 rounded-t-lg dark:border-gray-600 flex items-center ps-3 py-2">
                      <!-- <input type="checkbox" name="servicios[]" value="{{ $servicio->id }}">{{ $servicio->nombre }}<br> -->
                      <input id="servicio-{{ $servicio->id }}" type="checkbox" name="servicios[]" value="{{ $servicio->id }}" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                      {{ in_array($servicio->id, $cliente->servicios->pluck('id')->toArray()) ? 'checked' : '' }} 
                    >  
                      <label for="servicio-{{ $servicio->id }}" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{ $servicio->nombre }}</label>
                    </li>  
                  @endforeach
                
                </ul>
            </div>

              <div>
                <button type="submit" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 mt-4">Guardar</button>  
              </div> 

          </form> 
        </div>  
      </div>
        
             
    </section>
</body>
</html>