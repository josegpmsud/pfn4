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
        $enlace->nombre = $request->nombre;
        $enlace->apellido = $request->apellido;
        $enlace->correo_electronico = $request->correo_electronico;
        $enlace->fecha_nacimiento = $request->fecha_nacimiento;
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
        $enlace->nombre = $request->nombre;
        $enlace->apellido = $request->apellido;
        $enlace->correo_electronico = $request->correo_electronico;
        $enlace->fecha_nacimiento = $request->fecha_nacimiento;
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
