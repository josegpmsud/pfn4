<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index()
    {
        $rol = new Rol();
        return $rol->all();
    }

    public function store(Request $request)
    {
        $rol = new Rol();
        $rol->nombre = $request->nombre;
        $rol->apellido = $request->apellido;
        $rol->correo_electronico = $request->correo_electronico;
        $rol->fecha_nacimiento = $request->fecha_nacimiento;
        $rol->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Rol::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $rol = Rol::find($id);
        $rol->nombre = $request->nombre;
        $rol->apellido = $request->apellido;
        $rol->correo_electronico = $request->correo_electronico;
        $rol->fecha_nacimiento = $request->fecha_nacimiento;
        $rol->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $rol = Rol::find($id);
        $rol->delete();
        return "Eliminado correctamente";
    }
}
