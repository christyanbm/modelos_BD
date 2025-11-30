<?php

namespace Database\Factories;

use App\Models\Tarea;
use Illuminate\Database\Eloquent\Factories\Factory;

class TareaFactory extends Factory
{
    protected $model = Tarea::class;

    public function definition()
    {
        return [
            'titulo'       => $this->faker->sentence(3),
            'autor'        => $this->faker->name(),
            'descripcion'  => $this->faker->sentence(10),
            'created_at'   => now(),
            'updated_at'   => now(),
        ];
    }
}
