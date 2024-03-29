<?php

namespace Cot\Http\Controllers;

use Cot\ShippingAddress;
use Cot\Http\Resources\ShippingAddressCollection;
use Cot\Http\Resources\ShippingAddressResource;
 
class ShippingAddressAPIController extends Controller
{
    public function index()
    {
        return new ShippingAddressCollection(ShippingAddress::paginate());
    }
 
    public function show(ShippingAddress $shippingAddress)
    {
        return new ShippingAddressResource($shippingAddress->load(['subscriptions', 'user']));
    }

    public function store(Request $request)
    {
        return new ShippingAddressResource(ShippingAddress::create($request->all()));
    }

    public function update(Request $request, ShippingAddress $shippingAddress)
    {
        $shippingAddress->update($request->all());

        return new ShippingAddressResource($shippingAddress);
    }

    public function destroy(Request $request, ShippingAddress $shippingAddress)
    {
        $shippingAddress->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
