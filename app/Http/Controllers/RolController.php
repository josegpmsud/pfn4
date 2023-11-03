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
        $rol->rol = $request->rol;
        $rol->usuario_creacion = $request->usuario_creacion;
        $rol->usuario_modificacion = $request->usuario_modificacion;
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
        $rol->rol = $request->rol;
        $rol->usuario_creacion = $request->usuario_creacion;
        $rol->usuario_modificacion = $request->usuario_modificacion;
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
