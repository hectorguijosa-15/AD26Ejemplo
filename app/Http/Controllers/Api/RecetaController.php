<?php

namespace App\Http\Controllers\Api;

use App\Models\Receta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function index()
    {
        return Receta::with('categoria','etiquetas','user')->get();
    }

    public function show(Receta $receta)
    {
        return $receta->load('categoria','etiquetas','user');
    }
}
