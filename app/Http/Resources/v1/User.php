<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'email' => $this->email,
            'api_token' => $this->api_token
        ];
    }

    public function with($request)
    {
        return [
            'status' => 'success'
        ];
    }
}
