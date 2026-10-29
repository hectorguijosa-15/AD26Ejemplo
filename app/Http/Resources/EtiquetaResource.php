<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EtiquetaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'tipo' => "etiqueta",
            'atributos' => [
                'nombre' => $this->nombre
            ],
            #aqui se hacen las relaciones con las tablas que este relacionada
            'relaciones' => [
                'recetas' => $this->recetas
            ],
        ];
    }
}
