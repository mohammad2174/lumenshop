<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\Order as OrderResource;
use App\Http\Resources\v1\OrderCollection;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $product = Order::all();
        return new OrderCollection($product);
    }

    public function order(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|exists:users,id',
            'shipping' => 'required|integer',
            'apartment' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'province' => 'required|string',
            'postalcode' => 'required|string|min:7',
            'cardnumber' => 'required|integer|min:16',
            'phone' => 'required|integer|min:10',
            'namecard' => 'required|string',
            'expiredate' => 'required|integer',
            'cvc' => 'required|integer|min:4'
        ]);

        $checkout = Order::create([
            'user_id' => $request->input('user_id'),
            'shipping' => $request->input('shipping'),
            'apartment' => $request->input('apartment'),
            'city' => $request->input('city'),
            'country' => $request->input('country'),
            'province' => $request->input('province'),
            'cardnumber' => $request->input('cardnumber'),
            'postalcode' => $request->input('postalcode'),
            'phone' => $request->input('phone'),
            'namecard' => $request->input('namecard'),
            'expiredate' => $request->input('expiredate'),
            'cvc' => $request->input('cvc')
        ]);

        return new OrderResource($checkout);
    }
}
