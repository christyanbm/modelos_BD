<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $table = 'tareas'; // nombre de la tabla
    protected $fillable = ['titulo', 'autor', 'descripcion'];
}
