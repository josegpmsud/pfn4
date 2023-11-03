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
        $bitacora->bitacora = $request->bitacora;
        $bitacora->id_usuario = $request->id_usuario;
        $bitacora->fecha = $request->fecha;
        $bitacora->hora = $request->hora;
        $bitacora->ip = $request->ip;
        $bitacora->so = $request->so;
        $bitacora->navegador = $request->navegador;
        $bitacora->usuario = $request->usuario;
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
        $bitacora->bitacora = $request->bitacora;
        $bitacora->id_usuario = $request->id_usuario;
        $bitacora->fecha = $request->fecha;
        $bitacora->hora = $request->hora;
        $bitacora->ip = $request->ip;
        $bitacora->so = $request->so;
        $bitacora->navegador = $request->navegador;
        $bitacora->usuario = $request->usuario;
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
