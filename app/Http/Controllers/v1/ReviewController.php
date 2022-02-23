<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\ReviewCollection;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $product = Review::all();
        return new ReviewCollection($product);
    }
}
