<?php

namespace App\Http\Controllers;

use App\Models\Edificio;
use Illuminate\Http\Request;

class EdificioController extends Controller
{
    public function gestion(Request $request)
    {
        // Obtener el departamento basado en el nombre ingresado
        $Edificio=Edificio::all();
     


        // Enviar los datos a la vista 'departamentos.gestion'
        return view('gestionEdificios',[ "edificios" => $Edificio]);
    }

    public function crear(Request $request){

        if ($request->isMethod("get")) {
            return view("crearEdificio") ;
        }
        $request->validate([
            'nombre' =>'required|string',
            'calle'=> 'required|string',
            'numero'=> 'required|integer',
            
            'cp'=> 'required|starts_with:29,18,14|digits:5'

        ]);

        Edificio::create([
            'nombre' => $request->input('nombre'),
            'calle'=> $request->input('calle'),
            'numero'=> $request->input('numero'),
            'cp'=> $request->input('cp'),
        ]);
        
        return to_route('edificios.gestionEdificios');

    }
    public function borrar(Request $request,Edificio $edificio)
    {
        $edificio->delete();

      
        return to_route('edificios.gestionEdificios');
    }
    public function actualizar(Request $request, Edificio $edificio)
    {
        if ($request->isMethod("get")) {
            return view("actualizarEdificio",["edificio"=>$edificio]) ;
        }
        $request->validate([
            'nombre' =>'required|string',
            'calle'=> 'required|string',
            'numero'=> 'required|integer',
            'cp'=> 'required|starts_with:29,18,14|digits:5'

        ]);
            $edificio->update([
                'nombre' => $request->input('nombre'),
                'calle'=> $request->input('calle'),
                'numero'=> $request->input('numero'),
                'cp'=> $request->input('cp'),
        ]);
        
        return to_route('edificios.gestionEdificios');
    }



}
