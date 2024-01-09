<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model {
    protected $table = 'usuarios';
    protected $fillable = ['nombre', 'email', 'password'];

    public function tareas() {
        return $this->hasMany(Tarea::class);
    }
}