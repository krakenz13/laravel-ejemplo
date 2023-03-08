<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

use App\Models\Persona;

class PersonaController extends Controller
{

    /**
     * Obteniendo listado de personas
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(){
       return Persona::all(); 
    }

    /**
     * Store a newly created resource in storage
     * 
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $datos = $request->all();

        $persona = new Persona();

        $persona->tipo_documento = $datos['tipo_documento'];
        $persona->numero_documento = $datos['numero_documento'];
        $persona->nombre = $datos['nombre'];
        $persona->edad = $datos['edad'];

        $persona->save();
    }
    
}
