@extends("plantilla")
@section("contenido")




<div class="bg-white p-6 rounded-2xl shadow-lg max-w-sm">

        <form action="{{ route('departamentos.listaEdificios') }}"method="get">
        @csrf
        <label for="departamentos" class="block text-xl font-semibold text-gray-700 mb-2">Elige un departamento:</label>
        <select name="departamentos" id="departamentos" class="w-full p-2 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200">
            <option value="0" selected>Otro</option>
            @foreach ($departamentos as $item )

                <option value="{{ $item->idDep }}">{{$item->nombre}}</option>
                
            @endforeach
            
        </select>
        
        <button class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200">
            Enviar
        </button>
    </form>
    </div>

@endsection