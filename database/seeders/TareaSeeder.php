<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarea;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tarea::create([
            'titulo'      => 'Comprar víveres',
            'autor'       => 'Juan Pérez',
            'descripcion' => 'Comprar frutas, verduras y pan en el supermercado.',
        ]);
        Tarea::create([
            'titulo'      => 'Lavar el coche',
            'autor'       => 'María López',
            'descripcion' => 'Llevar el coche a la estación de lavado y limpiarlo por dentro.',
        ]);
        Tarea::create([
            'titulo'      => 'Preparar presentación',
            'autor'       => 'Carlos Sánchez',
            'descripcion' => 'Crear diapositivas para la reunión del lunes.',
        ]);

    }
}
