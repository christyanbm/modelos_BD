<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TareaRequest;
use App\Models\Tarea;

class TareaController extends Controller
{

    public function index()
    {
        $tareas = Tarea::all();
        return view('tarea.index', ['tareas' => $tareas]);
    }


    public function create()
    {

        // $tarea = new Tarea;
        // $tarea->titulo = 'Investigacion';
        // $tarea->autor = 'christian blas';
        // $tarea->descripcion = 'Crear una investigacion sobre laravel';
        // $tarea->save();


        // Tarea::create([
        //     'titulo' => 'Estudio',
        //     'autor' => 'roberto gonzales',
        //     'descripcion' => 'Estudiar el framework laravel',
        // ]);


        // return redirect()->route('tarea.index');

        return view('tarea.create');
    }

    public function store(TareaRequest $request)
    {
        // $tarea ::create($request->all());

        //  $tarea = new Tarea;
        //  $tarea->titulo = $request->input('titulo');
        //  $tarea->autor = $request->input('autor');
        //  $tarea->descripcion = $request->input('descripcion');
        //  $tarea->save();

        // return redirect()->route('tarea.index');

        // $request->validate([
        //   'titulo' => 'required|max:100|min:6',
        //   'autor' => 'required|max:100|min:6',
        //   'descripcion' => 'required|max:100|min:10',
        // ]);

        Tarea::create($request->all());
        return redirect()->route('tarea.index')->with('success', 'Tarea creada exitosamente');
    }


    public function show(string $id)
    {
        $tarea = Tarea::findOrFail($id);
        return view('tarea.show', compact('tarea'));
    }


    public function edit(string $id)
    {
        $tarea = Tarea::findOrFail($id);
        return view('tarea.edit', compact('tarea'));
    }


    public function update(TareaRequest $request, string $id)
    {
        $tarea = Tarea::findOrFail($id);
        $tarea->update($request->validated());
        return redirect()->route('tarea.index')->with('success', 'Tarea actualizada exitosamente');
    }


    public function destroy(string $id)
    {
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();
        return redirect()->route('tarea.index')->with('success', 'Tarea eliminada exitosamente');
    }
}
