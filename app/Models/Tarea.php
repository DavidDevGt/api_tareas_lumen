<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model {
    protected $table = 'tareas';
    protected $fillable = ['nombre', 'descripcion', 'categoria_id', 'usuario_id'];

    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }

    public function usuario() {
        return $this->belongsTo(Usuario::class);
    }
}