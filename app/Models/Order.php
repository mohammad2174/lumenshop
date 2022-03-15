<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use  HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id', 'shipping', 'apartment', 'city', 'country', 'province', 'postalcode', 'phone', 'namecard', 'cardnumber', 'expiredate', 'cvc', 'subtotal', 'taxes', 'totalamount', 'api_token', 'date'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var string[]
     */
    protected $hidden = [
        'password',
    ];
}
