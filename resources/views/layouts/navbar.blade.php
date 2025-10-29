@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
<div class="text-center mt-5">
    <h1 class="fw-bold mb-3">Bienvenido a la App de Tareas</h1>
    <p class="lead mb-4">Administra tus tareas fácilmente con Laravel y Bootstrap.</p>
    <a href="{{ route('tareas.index') }}" class="btn btn-primary btn-lg">Ver Tareas</a>
</div>
@endsection
