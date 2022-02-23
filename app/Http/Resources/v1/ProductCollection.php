<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function ($item) {
                return [
                    'id' => $item->id,
                    'name' => $item->name,
                    'imageSrc' => $item->imageSrc,
                    'catimageSrc' => $item->catimageSrc,
                    'imageAlt' => $item->imageAlt,
                    'describtion' => $item->describtion,
                    'detail' => $item->detail,
                    'title' => $item->title,
                    'price' => $item->price,
                    'inventory' => $item->inventory,
                    'count' => $item->count,
                    'color' => $item->color,
                    'size' => $item->size,
                    'shipping' => $item->shipping
                ];
            })
        ];
    }

    public function with($request)
    {
        return [
            'status' => 'success'
        ];
    }
}
