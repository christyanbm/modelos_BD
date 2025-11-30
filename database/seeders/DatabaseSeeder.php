<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Tarea;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Tarea::factory()->count(5)->create();
       // $this->call(TareaSeeder::class);
    }
}
