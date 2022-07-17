<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    
    public function autos(){

        return $this->belongsToMany(Auto::class, 'to_do_lists', 'id_auto', 'id_tarea');
    }
}
