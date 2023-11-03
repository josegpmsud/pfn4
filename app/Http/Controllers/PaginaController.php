<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index()
    {
        $pagina = new Pagina();
        return $pagina->all();
    }

    public function store(Request $request)
    {
        $pagina = new Pagina();
        $pagina->usuario_creacion = $request->usuario_creacion;
        $pagina->usuario_modificacion = $request->usuario_modificacion;
        $pagina->url = $request->url;
        $pagina->estado = $request->estado;
        $pagina->nombre = $request->nombre;
        $pagina->descripcion = $request->descripcion;
        $pagina->icono = $request->icono;
        $pagina->tipo = $request->tipo;
        $pagina->save();
        return "Registro Guardado Correctamente";
    }

    public function show(string $id)
    {
        return Pagina::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $pagina = Pagina::find($id);
        $pagina->usuario_creacion = $request->usuario_creacion;
        $pagina->usuario_modificacion = $request->usuario_modificacion;
        $pagina->url = $request->url;
        $pagina->estado = $request->estado;
        $pagina->nombre = $request->nombre;
        $pagina->descripcion = $request->descripcion;
        $pagina->icono = $request->icono;
        $pagina->tipo = $request->tipo;
        $pagina->save();
        return "Registro Actualizado Correctamente";
    }

    public function destroy(string $id)
    {
        $pagina = Pagina::find($id);
        $pagina->delete();
        return "Eliminado correctamente";
    }
}
