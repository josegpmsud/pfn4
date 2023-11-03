<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $persona = new Persona();
        return $persona->all();
    }

    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->primer_nombre = $request->primer_nombre;
        $persona->segundo_nombre = $request->segundo_nombre;
        $persona->primer_apellido = $request->primer_apellido;
        $persona->segundo_apellido = $request->segundo_apellido;
        $persona->usuario_creacion = $request->usuario_creacion;
        $persona->usuario_modificacion = $request->usuario_modificacion;
        $persona->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Persona::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $persona = Persona::find($id);
        $persona->primer_nombre = $request->primer_nombre;
        $persona->segundo_nombre = $request->segundo_nombre;
        $persona->primer_apellido = $request->primer_apellido;
        $persona->segundo_apellido = $request->segundo_apellido;
        $persona->usuario_creacion = $request->usuario_creacion;
        $persona->usuario_modificacion = $request->usuario_modificacion;
        $persona->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $persona = Persona::find($id);
        $persona->delete();
        return "Eliminado correctamente";
    }
}
