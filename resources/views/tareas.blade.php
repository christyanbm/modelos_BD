@extends('layouts.base')

@section('title', 'Tareas')

@section('content')
<h2 class="fw-bold mb-4 text-center">Lista de Tareas</h2>

@if ($tareas->isEmpty())
    <div class="alert alert-warning text-center">
        No hay tareas registradas.
    </div>
@else
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($tareas as $tarea)
            <div class="col">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $tarea->titulo }}</h5>
                        <p class="card-text"><strong>Autor:</strong> {{ $tarea->autor }}</p>
                        @php
                            $badgeClass = match($tarea->titulo) {
                                str_contains($tarea->titulo, 'Laravel'), str_contains($tarea->titulo, 'PHP') => 'bg-primary',
                                str_contains($tarea->titulo, 'Java') => 'bg-success',
                                str_contains($tarea->titulo, 'Flutter') => 'bg-info text-dark',
                                default => 'bg-secondary'
                            };
                        @endphp
                        <span class="badge {{ $badgeClass }}">
                            @if(str_contains($tarea->titulo, 'Laravel') || str_contains($tarea->titulo, 'PHP')) PHP
                            @elseif(str_contains($tarea->titulo, 'Java')) Java
                            @elseif(str_contains($tarea->titulo, 'Flutter')) Flutter
                            @else Otro
                            @endif
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif
@endsection
