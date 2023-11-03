<?php

namespace App\Http\Controllers;

use App\Models\Enlace;
use Illuminate\Http\Request;

class EnlaceController extends Controller
{
    public function index()
    {
        $enlace = new Enlace();
        return $enlace->all();
    }

    public function store(Request $request)
    {
        $enlace = new Enlace();
        $enlace->id_pagina = $request->id_pagina;
        $enlace->id_rol = $request->id_rol;
        $enlace->descripcion = $request->descripcion;
        $enlace->usuario_creacion = $request->usuario_creacion;
        $enlace->usuario_modificacion = $request->usuario_modificacion;
        $enlace->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Enlace::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $enlace = Enlace::find($id);
        $enlace->id_pagina = $request->id_pagina;
        $enlace->id_rol = $request->id_rol;
        $enlace->descripcion = $request->descripcion;
        $enlace->usuario_creacion = $request->usuario_creacion;
        $enlace->usuario_modificacion = $request->usuario_modificacion;
        $enlace->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $enlace = Enlace::find($id);
        $enlace->delete();
        return "Eliminado correctamente";
    }
}
