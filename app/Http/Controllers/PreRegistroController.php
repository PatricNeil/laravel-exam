<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PreRegistro;

class PreRegistroController extends Controller
{
    public function index(){
        $preregistros = PreRegistro::all();
        return view('preregistros.index', compact('preregistros'));
    }
    public function create(){
        return view('preregistros.create');
    }
    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'fecha_registro' => 'required|date',
            'unidad_educativa' => 'required|string|max:75',
            'carrera_interes' => 'required|string|max:50',
            'correo_electronico' => 'required|string',
            'celular' => 'required|string|max:20',
            'direccion' => 'required|string',
            'solicitudes_becas_estado' => 'required|boolean'
        ]);
        PreRegistro::create($request->all());
        return redirect()->route('preregistros.index')->with('success', 'El pre registro fue creado correctamente');
    }

    public function edit(PreRegistro $preregistro){
        return view('preregistros.edit', compact('preregistro'));
    }
    public function update(Request $request, PreRegistro $preregistro){
        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'fecha_registro' => 'required|date',
            'unidad_educativa' => 'required|string|max:75',
            'carrera_interes' => 'required|string|max:50',
            'correo_electronico' => 'required|string',
            'celular' => 'required|string|max:20',
            'direccion' => 'required|string',
            'solicitudes_becas_estado' => 'required|boolean'
        ]);
        $preregistro->update($request->all());
        return redirect()->route('preregistros.index')->with('success', 'El producto se modificado correctamente');
    }

    public function destroy(PreRegistro $preregistro){
        $preregistro->delete();
        return redirect()->route('preregistros.index')->with('success', 'El producto fue eliminado correctamente');
    }

    public function show(PreRegistro $preregistro){
        return view('preregistros.show', compact('preregistro'));
    }
}
