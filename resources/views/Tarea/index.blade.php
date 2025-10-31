@extends('components.layouts.base')

@section('titulo', 'Tareas')

@section('contenido')
    <h2>Listado de Tareas</h2>
    <h2> <a class="btn btn-primary">Crear Tarea</a></h2>
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark text-center">
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Descripcion</th>
                <th>Creado</th>
                <th>Actualizado</th>
                <th>opciones</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach ($tareas as $tarea)
                <tr>
                    <td>{{ $tarea->id }}</td>
                    <td>{{ $tarea->titulo }}</td>
                    <td>{{ $tarea->autor }}</td>
                    <td>{{ $tarea->descripcion }}</td>
                    <td>{{ $tarea->created_at->format('d/m/Y H:i') }}</td>
                    <td>{{ $tarea->updated_at->format('d/m/Y H:i') }}</td>
                    <td>
                        <a class="btn btn-info btn-sm">Ver</a>
                        <a class="btn btn-warning btn-sm">Editar</a>
                        <a class="btn btn-danger btn-sm">Eliminar</a>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
