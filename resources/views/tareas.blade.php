@extends('layouts.base')

@section('title', 'Tareas')

@section('content')
<h2 class="fw-bold mb-4 text-center">Lista de Tareas</h2>

@if ($tareas->isEmpty())
    <div class="alert alert-warning text-center">
        No hay tareas registradas.
    </div>
@else
    <div class="d-flex justify-content-center">
        <table class="table table-bordered table-striped" style="width: auto; min-width: 50%;">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tareas as $tarea)
                    <tr>
                        <td>{{ $tarea->id }}</td>
                        <td>{{ $tarea->titulo }}</td>
                        <td>{{ $tarea->autor }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endif
@endsection
