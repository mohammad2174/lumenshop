<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\Review as ReviewResource;
use App\Http\Resources\v1\ReviewCollection;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $product = Review::all();
        return new ReviewCollection($product);
    }

    public function review(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|integer',
            'reviewCount' => 'required|integer',
            'message' => 'required|string|min:10|max:255',
            'subject' => 'required|string|max:10'
        ]);

        $review = Review::create([
            'product_id' => $request->input('product_id'),
            'rating' => $request->input('rating'),
            'reviewCount' => $request->input('reviewCount'),
            'message' => $request->input('message'),
            'subject' => $request->input('subject')
        ]);

        return new ReviewResource($review);
    }
}
