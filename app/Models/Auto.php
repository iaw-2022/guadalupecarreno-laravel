<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    public function tareas(){

        return $this->belongsToMany(Tarea::class, 'to_do_lists', 'id_auto', 'id_tarea');
    }
}
