<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Edificio;
use Illuminate\Http\Request;

class Departamento_EdificioController extends Controller
{
    
    public function listar()
    {
        $departamentos = Departamento::all(); // Obtiene todos los departamentos
        $edificios = Edificio::whereRaw('(5 - (SELECT COUNT(*) FROM departamento_edificio WHERE edificio.idEdi = departamento_edificio.idEdi)) > 0')
            ->get();
    
        return view('asociar_edificio', compact('departamentos', 'edificios'));
    }
    
    

    public function asociar(Request $request)
    {
        $request->validate([
            'idDep' => 'required|exists:departamento,idDep',
            'idEdi' => 'required|exists:edificio,idEdi',
            'numero_despachos' => 'required|integer|min:1|max:5',
        ]);
    
        $departamento = Departamento::find($request->idDep);
    
        $departamento->despachos()->attach($request->idEdi, [
            'numero_despachos' => $request->numero_despachos,
        ]);
    
        return redirect();
    }
    

}











