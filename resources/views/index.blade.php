@extends('layouts.base')

@section('title', 'Inicio')

@section('content')
<div class="container mt-5">
    <h1 class="text-center fw-bold mb-4">Tareas en Laravel</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(isset($tareas) && $tareas->count())
        <!-- Nuevo formato: tarjetas en grid responsivo -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            @foreach($tareas as $tarea)
                <div class="col">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-2">{{ $tarea->titulo }}</h5>
                            <p class="card-text mb-1"><strong>Autor:</strong> {{ $tarea->autor }}</p>
                            <p class="card-text text-muted mb-3"><small>ID: {{ $tarea->id }}</small></p>

                            <div class="mt-auto">
                                <p class="card-text"><small class="text-muted">Creado: {{ $tarea->created_at ? $tarea->created_at->format('Y-m-d H:i') : '' }}</small></p>
                                <!-- Acciones (opcional) -->
                                <div class="d-flex gap-2">
                                    <a href="{{ route('tareas.show', $tarea->id) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                    <a href="{{ route('tareas.edit', $tarea->id) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info">No hay tareas disponibles.</div>
    @endif
</div>
@endsection

