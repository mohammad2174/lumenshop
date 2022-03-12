<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use  HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'brand', 'imageSrc', 'catimageSrc', 'imageAlt', 'describtion', 'detail', 'title', 'price', 'inventory', 'count', 'color', 'size', 'shipping', 'rating', 'reviewCount', 'message', 'subject'
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
