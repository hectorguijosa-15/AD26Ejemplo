<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    /** @use HasFactory<\Database\Factories\RecetaFactory> */
    use HasFactory;


    public function categoria()
    {
        //relcion de uno a muchos con el modelo de categoria
        return $this->belongsTo(Categoria::class);
    }

    public function user()
    {
        //relacion de uno a muchos con el modelo de usuario
        return $this->belongsTo(User::class);
    }


    public function etiquetas()
    {
        //relacion de muchos a muchos con el modelo de etiqueta
        return $this->belongsToMany(Etiqueta::class);
    }
}
