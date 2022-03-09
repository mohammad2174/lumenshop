<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class Order extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'shipping' => $this->shipping,
            'apartment' => $this->apartment,
            'city' => $this->city,
            'country' => $this->country,
            'province' => $this->province,
            'postalcode' => $this->postalcode,
            'phone' => $this->phone,
            'cardnumber' => $this->cardnumber,
            'namecard' => $this->namecard,
            'expiredate' => $this->expiredate,
            'cvc' => $this->cvc,
            'subtotal' => $this->subtotal,
            'taxes' => $this->taxes,
            'totalamount' => $this->totalamount,
            'api_token' => $this->api_token
        ];
    }
}
