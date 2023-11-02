<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    public function index()
    {
        $bitacora = new Bitacora();
        return $bitacora->all();
    }

    public function store(Request $request)
    {
        $bitacora = new Bitacora();
        $bitacora->nombre = $request->nombre;
        $bitacora->apellido = $request->apellido;
        $bitacora->correo_electronico = $request->correo_electronico;
        $bitacora->fecha_nacimiento = $request->fecha_nacimiento;
        $bitacora->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Bitacora::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $bitacora = Bitacora::find($id);
        $bitacora->nombre = $request->nombre;
        $bitacora->apellido = $request->apellido;
        $bitacora->correo_electronico = $request->correo_electronico;
        $bitacora->fecha_nacimiento = $request->fecha_nacimiento;
        $bitacora->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $bitacora = Bitacora::find($id);
        $bitacora->delete();
        return "Eliminado correctamente";
    }
}
