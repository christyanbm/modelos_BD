<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/tareas', [TareaController::class, 'index'])->name('tareas.index');

