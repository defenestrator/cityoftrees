<?php

namespace Cot\Http\Controllers;

use Cot\Cart;
use Cot\Http\Resources\CartCollection;
use Cot\Http\Resources\CartResource;
 
class CartAPIController extends Controller
{
    public function index()
    {
        return new CartCollection(Cart::paginate());
    }
 
    public function show(Cart $cart)
    {
        return new CartResource($cart->load(['user', 'products']));
    }

    public function store(Request $request)
    {
        return new CartResource(Cart::create($request->all()));
    }

    public function update(Request $request, Cart $cart)
    {
        $cart->update($request->all());

        return new CartResource($cart);
    }

    public function destroy(Request $request, Cart $cart)
    {
        $cart->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
