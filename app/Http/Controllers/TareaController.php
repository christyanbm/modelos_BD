<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    $tarea = new Tarea;
    $tarea->titulo = 'Investigacion';
    $tarea->autor = 'christian blas';
    $tarea->descripcion = 'Crear una investigacion sobre laravel';
    $tarea->save();


    Tarea::create([
        'titulo' => 'Estudio',
        'autor' => 'roberto gonzales',
        'descripcion' => 'Estudiar el framework laravel',
    ]);


    return redirect()->route('tarea.index');
}




    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {

    }


    public function update(Request $request, string $id)
    {

    }


    public function destroy(string $id)
    {

    }
}
