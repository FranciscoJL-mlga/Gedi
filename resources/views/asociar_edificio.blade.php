@extends('plantilla')

@section('contenido')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md mt-10">
    <h1 class="text-2xl font-bold mb-4 text-gray-800">Asociar Edificio a un Departamento</h1>

    <form action="{{ route('departamentos.asociar-edificio',$departamentos, ) }}" method="POST" class="space-y-4">
        @csrf

        <!-- Select de Departamentos -->
        <div>
            <label for="idDep" class="block text-sm font-medium text-gray-700">Selecciona un Departamento</label>
            <select name="idDep" id="idDep" class="w-full mt-1 p-2 border rounded-lg">
                <option value="">-- Selecciona un departamento --</option>
                @foreach($departamentos as $departamento)
                    <option value="{{ $departamento->idDep }}">{{ $departamento->nombre }}</option>
                @endforeach
            </select>
            @error('idDep')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Select de Edificios -->
        <div>
            <label for="idEdi" class="block text-sm font-medium text-gray-700">Selecciona un Edificio</label>
            <select name="idEdi" id="idEdi" class="w-full mt-1 p-2 border rounded-lg">
                <option value="">-- Selecciona un edificio --</option>
                @foreach($edificios as $edificio)
                    <option value="{{ $edificio->idEdi }}">
                        {{ $edificio->nombre }}
                    </option>
                @endforeach
            </select>
            @error('idEdi')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Número de Despachos -->
        <div>
            <label for="numero_despachos" class="block text-sm font-medium text-gray-700">Número de Despachos</label>
            <input type="number" name="numero_despachos" id="numero_despachos" value="1" min="1" max="5" class="w-full mt-1 p-2 border rounded-lg">
            @error('numero_despachos')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Botones -->
        <div class="flex justify-between items-center mt-4">
            <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-gray-900 text-sm">← Volver</a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">Guardar</button>
        </div>
    </form>
</div>
@endsection
