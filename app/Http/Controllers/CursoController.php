<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        Curso::create($request->all());
        return redirect()->route('cursos.index')->with('success', 'Curso creado exitosamente.');
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        $curso->update($request->all());
        return redirect()->route('cursos.index')->with('success', 'Curso actualizado exitosamente.');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index')->with('success', 'Curso eliminado exitosamente.');
    }
}
