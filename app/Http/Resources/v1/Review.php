<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class Review extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'name' => $this->name,
            'rating' => $this->rating,
            'reviewCount' => $this->reviewCount,
            'message' => $this->message,
            'subject' => $this->subject
        ];
    }
}
