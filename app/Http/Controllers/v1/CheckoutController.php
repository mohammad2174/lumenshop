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
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'color' => 'required|string',
            'size' => 'required|string',
            'imageAlt' => 'required|string',
            'catimageSrc' => 'required|string'
        ]);

        $checkout = Checkout::create([
            'user_id' => $request->input('user_id'),
            'name' => $request->input('name'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'color' => $request->input('color'),
            'size' => $request->input('size'),
            'imageAlt' => $request->input('imageAlt'),
            'catimageSrc' => $request->input('catimageSrc')
        ]);

        return new CheckoutResource($checkout);
    }
}
