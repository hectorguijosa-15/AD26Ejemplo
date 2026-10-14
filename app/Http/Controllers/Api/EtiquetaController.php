<?php

namespace App\Http\Controllers\Api;

use App\Models\Etiqueta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EtiquetaController extends Controller
{
    public function index()
    {
        return Etiqueta::all();
    }

    public function show(Etiqueta $etiqueta)
    {
        return $etiqueta;
    }
}
