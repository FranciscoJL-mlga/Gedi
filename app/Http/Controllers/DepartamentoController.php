<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use App\Models\Edificio;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;
use Symfony\Component\Console\Input\Input;

class DepartamentoController extends Controller
{
    public function gestion(Request $request)
    {
        // Obtener el departamento basado en el nombre ingresado
        $departamento = Departamento::all();
     


        // Enviar los datos a la vista 'departamentos.gestion'
        return view('main',[ "departamentos" => $departamento]);
    }

    public function listaEdificios(Request $request)
    {   
        $id=$request->input("departamentos");
        // Obtener el departamento basado en el nombre ingresado
        $departamento = Departamento::find($id);
        $departamento= $departamento->despachos()->withPivot("despachos")->get();


        // Enviar los datos a la vista 'departamentos.gestion'
        return view('listaEdificios',[ "departamentos" => $departamento]);
    }
    public function actualizar(Request $request, Departamento $departamento ,Edificio $edificio)
    {
        if($request->input('despachos')==0){
            $departamento->despachos()->detach($edificio->idEdi);
        }else{

            $departamento->despachos()->updateExistingPivot($edificio->idEdi, [
                'despachos' => $request->input('despachos')
            ]);
        }
       


     
    
        return redirect()->back();
    }
    public function borrar(Request $request, Departamento $departamento ,Edificio $edificio)
    {
       
       
        $departamento->despachos()->detach($edificio->idEdi);
     
    
        return redirect()->back();
    }
}
