<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuario = new Usuario();
        return $usuario->all();
    }

    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->id_persona = $request->id_persona;
        $usuario->usuario = $request->usuario;
        $usuario->clave = $request->clave;
        $usuario->habilitado = $request->habilitado;
        $usuario->fecha = $request->fecha;
        $usuario->id_rol = $request->id_rol;
        $usuario->usuario_creacion = $request->usuario_creacion;
        $usuario->usuario_modificacion = $request->usuario_modificacion;
        $usuario->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Usuario::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->id_persona = $request->id_persona;
        $usuario->usuario = $request->usuario;
        $usuario->clave = $request->clave;
        $usuario->habilitado = $request->habilitado;
        $usuario->fecha = $request->fecha;
        $usuario->id_rol = $request->id_rol;
        $usuario->usuario_creacion = $request->usuario_creacion;
        $usuario->usuario_creacion = $request->usuario_creacion;
        $usuario->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return "Eliminado correctamente";
    }
}
