@extends("plantilla")
@section("contenido")



<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4 text-center">Tabla Básica</h2>

    <a href="{{ route('edificios.crear') }}" class="bg-blue-500 text-white py-1 px-4 rounded-lg hover:bg-blue-600 transition duration-200">Crear</a>
    
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-sm">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Nombre</th>
                    <th class="py-3 px-6 text-left">Calle</th>
                    <th class="py-3 px-6 text-left">Numero</th>
                    <th class="py-3 px-6 text-left">CP</th>
                    <th class="py-3 px-6 text-left">Actualizar</th>
                    <th class="py-3 px-6 text-left">Borrar</th>
                </tr>
            </thead>
            
            <tbody class="text-gray-700 text-sm">
                @foreach ($edificios as $item )
                    
  
                <tr class="border-b border-gray-200 hover:bg-gray-100">
               
                    <td class="py-3 px-6">{{$item->nombre}}</td>
                    <td class="py-3 px-6">{{$item->calle}}</td>
                  

                        <td class="py-3 px-6">{{$item->numero}}</td>
                        <td class="py-3 px-6">{{$item->cp}}</td>
                        <td class="py-3 px-6">  
                            <form action="{{ route('edificios.actualizar',$item) }}" method="get">
                                @csrf
    
                            <button class="bg-blue-500 text-white py-1 px-4 rounded-lg hover:bg-blue-600 transition duration-200">
                                Actualizar
                            </button>
                        </form>
                         
                        </td>
                    <td class="py-3 px-6">  
                        <form action="{{ route('edificios.borrar',$item) }}" method="post">
                            @csrf

                        <button class="bg-red-500 text-white py-1 px-4 rounded-lg hover:bg-red-600 transition duration-200">
                            Borrar
                        </button>
                    </form>
                     
                    </td>
                </tr>
                
                @endforeach
            </tbody>
        </table>
    </div>
</div>





@endsection