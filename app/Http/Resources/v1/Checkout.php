<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class Checkout extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'name' => $this->name,
            'price' => $this->price,
            'quantity' => $this->quantity,
            'color' => $this->color,
            'size' => $this->size,
            'imageAlt' => $this->imageAlt,
            'catimageSrc' => $this->catimageSrc
        ];
    }
}
