<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'attributes' => [
                'nombre' => $this->nombre,
                'precio' => $this->precio,
                'imagen' => $this->imagen,
                'descripcion' => $this->descripcion,
                'categoria' => $this->category_id
            ]
        ];
    }
}
