<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarea;

class TareaSeeder extends Seeder
{
    public function run(): void
    {
        // PHP
        Tarea::create([
            'titulo' => 'Aprender Laravel Routing',
            'autor' => 'Cesar'
        ]);
        Tarea::create([
            'titulo' => 'Practicar Eloquent ORM',
            'autor' => 'Cesar'
        ]);

        // Java
        Tarea::create([
            'titulo' => 'Crear una calculadora en Java',
            'autor' => 'Cesar'
        ]);
        Tarea::create([
            'titulo' => 'Aprender manejo de archivos en Java',
            'autor' => 'Cesar'
        ]);

        // Flutter
        Tarea::create([
            'titulo' => 'Diseñar una app de notas en Flutter',
            'autor' => 'Cesar'
        ]);
        Tarea::create([
            'titulo' => 'Aprender Flutter State Management',
            'autor' => 'Cesar'
        ]);
    }
}
