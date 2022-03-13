<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ReviewCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function ($item) {
                return [
                    'id' => $item->id,
                    'product_id' => $item->product_id,
                    'name' => $item->name,
                    'rating' => $item->rating,
                    'reviewCount' => $item->reviewCount,
                    'message' => $item->message,
                    'subject' => $item->subject
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
