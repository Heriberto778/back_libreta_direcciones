<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactos;
use App\Models\Telefonos;
use App\Models\Emails;
use App\Models\Direcciones;
use Illuminate\Support\Facades\DB;




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
            DB::beginTransaction();
            $request->validate([
                'nombre' => 'required',
                'apellido_paterno' => 'required',
                'apellido_materno' => 'required',
                'telefonos' => 'array',
                'telefonos.*' => 'required|numeric',
                'emails' => 'array',
                'emails.*' => 'required|email',
                'direcciones' => 'array',
                'direcciones.*' => 'required'
            ],[
                'nombre.required' => 'El campo nombre es requerido',
                'apellido_paterno.required' => 'El campo apellido paterno es requerido',
                'apellido_materno.required' => 'El campo apellido materno es requerido',
                'telefonos.array' => 'El campo telefonos debe ser un arreglo',
                'telefonos.*.required' => 'El campo telefonos debe ser requerido',
                'telefonos.*.numeric' => 'El campo telefonos debe ser numérico',
                'emails.array' => 'El campo emails debe ser un arreglo',
                'emails.*.required' => 'El campo emails debe ser requerido',
                'emails.*.email' => 'El campo emails debe ser un correo electrónico',
                'direcciones.array' => 'El campo direcciones debe ser un arreglo',
                'direcciones.*.required' => 'El campo direcciones debe ser requerido'

            ]);
            $contacto = new Contactos();
            $contacto->nombre = $request->nombre;
            $contacto->apellido_paterno = $request->apellido_paterno;
            $contacto->apellido_materno = $request->apellido_materno;
            $contacto->save();

            foreach($request->telefonos as $telefono){
                $contacto->telefonos()->create([
                    'telefono' => $telefono
                ]);
            }

            foreach($request->emails as $email){
                $contacto->emails()->create([
                    'email' => $email
                ]);
            }

            foreach($request->direcciones as $direccion){
                $contacto->direcciones()->create([
                    'direccion' => $direccion
                ]);
            }

            DB::commit();
            return response()->json(['message' => 'Contacto creado correctamente'], 200);
        }catch(\Exception $e){
            DB::rollBack();
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id){
        try{
            $contacto = Contactos::find($id);
            if($contacto){
                $contacto->update($request->all());
                return response()->json(['message' => 'Contacto actualizado correctamente'], 200);
            }else{
                return response()->json(['error' => 'Contacto no encontrado'], 404);
            }
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function delete($id){
        try{
            $contacto = Contactos::find($id);
            if($contacto){
                $contacto->delete();
                return response()->json(['message' => 'Contacto eliminado correctamente'], 200);
            }else{
                return response()->json(['error' => 'Contacto no encontrado'], 404);
            }
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

}
