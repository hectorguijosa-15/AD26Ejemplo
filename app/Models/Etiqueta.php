<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etiqueta extends Model
{
    /** @use HasFactory<\Database\Factories\EtiquetaFactory> */
    use HasFactory;

    public function recetas()
    {
        //relacion de muchos a muchos con le modelo receta
        return $this->belongsToMany(Receta::class);
    }
}
