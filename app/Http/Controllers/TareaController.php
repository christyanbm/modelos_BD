<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{
    /**
     * Muestra una lista de todas las tareas.
     */
    public function index()
    {
        $tareas = Tarea::all();
        return view('tareas', compact('tareas'));
    }

    /**
     * Muestra el formulario para crear una nueva tarea.
     */
    public function create()
    {
        return view('tareas.create');
    }

    /**
     * Guarda una nueva tarea en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
        ]);

        Tarea::create($request->all());

        return redirect()->route('tareas.index')->with('success', 'Tarea creada correctamente.');
    }

    /**
     * Muestra una tarea específica.
     */
    public function show($id)
    {
        $tarea = Tarea::findOrFail($id);
        return view('tareas.show', compact('tarea'));
    }

    /**
     * Muestra el formulario para editar una tarea.
     */
    public function edit($id)
    {
        $tarea = Tarea::findOrFail($id);
        return view('tareas.edit', compact('tarea'));
    }

    /**
     * Actualiza una tarea en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
        ]);

        $tarea = Tarea::findOrFail($id);
        $tarea->update($request->all());

        return redirect()->route('tareas.index')->with('success', 'Tarea actualizada correctamente.');
    }

    /**
     * Elimina una tarea de la base de datos.
     */
    public function destroy($id)
    {
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();

        return redirect()->route('tareas.index')->with('success', 'Tarea eliminada correctamente.');
    }
}
