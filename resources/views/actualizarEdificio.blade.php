@extends("plantilla")
@section("contenido")

<div class="max-w-md mx-auto bg-white p-6 rounded-xl shadow-md mt-10">
    <h2 class="text-2xl font-bold mb-6 text-gray-800"> </h2>
    <form action="{{ route('edificios.actualizar', $edificio ) }}" method="POST">
        @csrf
        
  
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 mb-2">Nombre:</label>
            <input type="text" id="nombre" name="nombre" 
                   class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                   value="{{ $edificio->nombre }}">
        </div>
        

        <div class="mb-4">
            <label for="calle" class="block text-gray-700 mb-2">Calle:</label>
            <input type="calle" id="calle" name="calle" 
                   class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"value="{{ $edificio->calle }}">
        </div>
        

        <div class="mb-4">
            <label for="numero" class="block text-gray-700 mb-2">Numero:</label>
            <input type="number" id="numero" name="numero" 
                   class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                value="{{ $edificio->numero }}">
        </div>
        
  
        <div class="mb-6">
            <label for="password_confirmation" class="block text-gray-700 mb-2">CP:</label>
            <input type="text" id="cp" name="cp"
                   class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                  value="{{ $edificio->cp }}" >
        </div>

   
            
     

        <button type="submit" 
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200">
            Crear
        </button>
    </form>
</div>



@endsection