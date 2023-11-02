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
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->correo_electronico = $request->correo_electronico;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
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
        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->correo_electronico = $request->correo_electronico;
        $persona->fecha_nacimiento = $request->fecha_nacimiento;
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
