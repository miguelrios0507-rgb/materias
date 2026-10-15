<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        $materias = Materia::all();
        return view('lista', compact('materias'));
    }

    public function create()
    {
        return view('formulario');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre'   => 'required|string|max:255',
            'creditos' => 'required|integer|min:1',
            'profesor' => 'required|string|max:255',
        ]);

        Materia::create($datos);

        return redirect()->route('materia.index')
            ->with('success', 'Materia creada correctamente.');
    }

    public function show(Materia $materia)
    {
        return view('detalle', compact('materia'));
    }

    public function edit(Materia $materia)
    {
        return view('editar', compact('materia'));
    }

    public function update(Request $request, Materia $materia)
    {
        $datos = $request->validate([
            'nombre'   => 'required|string|max:255',
            'creditos' => 'required|integer|min:1',
            'profesor' => 'required|string|max:255',
        ]);

        $materia->update($datos);

        return redirect()->route('materia.show', $materia)
            ->with('success', 'Materia actualizada correctamente.');
    }

    public function destroy(Materia $materia)
    {
        $materia->delete();

        return redirect()->route('materia.index')
            ->with('success', 'Materia eliminada correctamente.');
    }
}
