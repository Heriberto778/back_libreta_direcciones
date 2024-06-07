<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactos;




class ContactoController extends Controller
{
    public function getAll(){
        try{
            $contactos = Contactos::with('telefonos', 'emails', 'direcciones')->get();
            return response()->json($contactos, 200);
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function getById($id){
        try{
            $contacto = Contactos::with('telefonos', 'emails', 'direcciones')->find($id);
            if($contacto){
                return response()->json($contacto, 200);
            }else{
                return response()->json(['error' => 'Contacto no encontrado'], 404);
            }
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function create(Request $request){
        try{
            $request->validate([
                'nombre' => 'required',
                'apellido_paterno' => 'required',
                'apellido_materno' => 'required',
            ],[
                'nombre.required' => 'El campo nombre es requerido',
                'apellido_paterno.required' => 'El campo apellido paterno es requerido',
                'apellido_materno.required' => 'El campo apellido materno es requerido'
            ]);
            $contacto = new Contactos();
            $contacto->nombre = $request->nombre;
            $contacto->apellido_paterno = $request->apellido_paterno;
            $contacto->apellido_materno = $request->apellido_materno;
            $contacto->save();
            return response()->json(['message' => 'Contacto creado correctamente'], 200);
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
