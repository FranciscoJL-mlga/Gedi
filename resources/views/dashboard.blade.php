
@extends("plantilla")
@section("contenido")




<div class="bg-white p-6 rounded-2xl shadow-lg max-w-sm">

        <form action="">
        <label for="departamentos" class="block text-xl font-semibold text-gray-700 mb-2">Elige un departamento:</label>
        <select name="departamentos" id="departamentos" class="w-full p-2 mb-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 transition duration-200">
            <option value="" selected>Otro</option>
            <option value="informatica">Departamento de Informática</option>
            <option value="electronica">Departamento de Electrónica</option>
            <option value="lengua_literatura">Departamento de Lengua y Literatura</option>
            <option value="salud">Departamento de Salud</option>
            <option value="geografia_historia">Departamento de Geografía e Historia</option>
            <option value="educacion_fisica">Departamento de Educación Física</option>
            <option value="publicidad">Departamento de Publicidad</option>
            <option value="calidad">Departamento de Calidad</option>
        </select>
        
        <button class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition duration-200">
            Enviar
        </button>
    </form>
    </div>

@endsection