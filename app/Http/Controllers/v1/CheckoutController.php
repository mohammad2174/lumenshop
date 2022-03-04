<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\Checkout as CheckoutResource;
use App\Http\Resources\v1\CheckoutCollection;
use Illuminate\Http\Request;
use App\Models\Checkout;

class CheckoutController extends Controller
{
    public function index()
    {
        $product = Checkout::all();
        return new CheckoutCollection($product);
    }

    public function checkout(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|exists:products,id',
            'name' => 'required|integer',
            'price' => 'required|integer',
            'quantity' => 'required|string|min:10|max:255',
            'color' => 'required|string|min:10|max:255',
            'size' => 'required|string|min:10|max:255',
            'imageAlt' => 'required|string|min:10|max:255',
            'catimageSrc' => 'required|string|max:10'
        ]);

        $review = Checkout::create([
            'product_id' => $request->input('product_id'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'color' => $request->input('color'),
            'size' => $request->input('size'),
            'imageAlt' => $request->input('imageAlt'),
            'catimageSrc' => $request->input('catimageSrc')
        ]);

        return new CheckoutResource($review);
    }
}
