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
        $pagina->nombre = $request->nombre;
        $pagina->apellido = $request->apellido;
        $pagina->correo_electronico = $request->correo_electronico;
        $pagina->fecha_nacimiento = $request->fecha_nacimiento;
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
        $pagina->nombre = $request->nombre;
        $pagina->apellido = $request->apellido;
        $pagina->correo_electronico = $request->correo_electronico;
        $pagina->fecha_nacimiento = $request->fecha_nacimiento;
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
