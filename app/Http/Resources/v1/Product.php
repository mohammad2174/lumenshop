<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'brand' => $this->brand,
            'imageSrc' => $this->imageSrc,
            'catimageSrc' => $this->catimageSrc,
            'imageAlt' => $this->imageAlt,
            'describtion' => $this->describtion,
            'detail' => $this->detail,
            'title' => $this->title,
            'price' => $this->price,
            'inventory' => $this->inventory,
            'count' => $this->count,
            'color' => $this->color,
            'size' => $this->size,
            'shipping' => $this->shipping
        ];
    }
}
