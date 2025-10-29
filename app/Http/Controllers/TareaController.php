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

    }

    /**
     * Guarda una nueva tarea en la base de datos.
     */
    public function store(Request $request)
    {

    }

    /**
     * Muestra una tarea específica.
     */
    public function show($id)
    {

    }

    /**
     * Muestra el formulario para editar una tarea.
     */
    public function edit($id)
    {

    }

    /**
     * Actualiza una tarea en la base de datos.
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Elimina una tarea de la base de datos.
     */
    public function destroy($id)
    {

    }
}
