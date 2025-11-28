@extends('components.layouts.base')

@section('titulo', 'Tarea')

@section('contenido')
    <h2>Detalles de la tarea</h2>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $tarea->titulo }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Autor: {{ $tarea->autor }}</h6>
            <p class="card-text">{{ $tarea->descripcion }}</p>
            <p class="small text-muted">Creado: {{ $tarea->created_at->format('d/m/Y H:i') }}</p>
            <p class="small text-muted">Actualizado: {{ $tarea->updated_at->format('d/m/Y H:i') }}</p>

            <a href="{{ route('tarea.edit', $tarea->id) }}" class="btn btn-warning btn-sm">Editar</a>
            <a href="{{ route('tarea.index') }}" class="btn btn-secondary btn-sm">Volver</a>

            <form action="{{ route('tarea.destroy', $tarea->id) }}" method="POST" class="d-inline" onsubmit="return confirm('¿Eliminar esta tarea?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
            </form>
        </div>
    </div>
@endsection
