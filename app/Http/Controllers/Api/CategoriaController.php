<?php

namespace App\Http\Controllers\Api;

use App\Models\Categoria;
use App\Http\Resources\CategoriaResource;
use App\Http\Resources\CategoriaCollection;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        return new CategoriaCollection(Categoria::all());
    }

    public function show(Categoria $categoria)
    {
        $categoria = $categoria->load('recetas');
        return new CategoriaResource($categoria);
    }
}
