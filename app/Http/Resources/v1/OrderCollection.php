<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\ResourceCollection;

class OrderCollection extends ResourceCollection
{
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function ($item) {
                return [
                    'id' => $item->id,
                    'user_id' => $item->user_id,
                    'shipping' => $item->shipping,
                    'apartment' => $item->apartment,
                    'city' => $item->city,
                    'country' => $item->country,
                    'province' => $item->province,
                    'postalcode' => $item->postalcode,
                    'phone' => $item->phone,
                    'cardnumber' => $item->cardnumber,
                    'namecard' => $item->namecard,
                    'expiredate' => $item->expiredate,
                    'cvc' => $item->cvc
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
