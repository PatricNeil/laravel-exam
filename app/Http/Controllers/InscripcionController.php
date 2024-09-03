<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Inscripcion;
use App\Models\Curso;

class InscripcionController extends Controller
{
    public function index()
    {
        $inscripciones = Inscripcion::with(['estudiante', 'curso'])->get();
        return view('inscripciones.index', compact('inscripciones'));
    }

    /**
     * Muestra el formulario para crear una nueva inscripción.
     */
    public function create()
    {
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        return view('inscripciones.create', compact('estudiantes', 'cursos'));
    }

    /**
     * Almacena una nueva inscripción en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'curso_id' => 'required|exists:cursos,id',
            'fecha_inscripcion' => 'required|date',
        ]);

        Inscripcion::create($request->all());

        return redirect()->route('inscripciones.index')->with('success', 'Inscripción creada exitosamente.');
    }

    /**
     * Muestra los detalles de una inscripción específica.
     */
    public function show($id)
    {
        $inscripcion = Inscripcion::with(['estudiante', 'curso'])->findOrFail($id);
        return view('inscripciones.show', compact('inscripcion'));
    }

    /**
     * Muestra el formulario para editar una inscripción específica.
     */
    public function edit($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        $estudiantes = Estudiante::all();
        $cursos = Curso::all();
        return view('inscripciones.edit', compact('inscripcion', 'estudiantes', 'cursos'));
    }

    /**
     * Actualiza una inscripción específica en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'estudiante_id' => 'required|exists:estudiantes,id',
            'curso_id' => 'required|exists:cursos,id',
            'fecha_inscripcion' => 'required|date',
        ]);

        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->update($request->all());

        return redirect()->route('inscripciones.index')->with('success', 'Inscripción actualizada exitosamente.');
    }

    /**
     * Elimina una inscripción específica de la base de datos.
     */
    public function destroy($id)
    {
        $inscripcion = Inscripcion::findOrFail($id);
        $inscripcion->delete();

        return redirect()->route('inscripciones.index')->with('success', 'Inscripción eliminada exitosamente.');
    }
}
