<?php

namespace Cot\Http\Controllers;

use Cot\Order;
use Cot\Http\Resources\OrderCollection;
use Cot\Http\Resources\OrderResource;
 
class OrderAPIController extends Controller
{
    public function index()
    {
        return new OrderCollection(Order::paginate());
    }
 
    public function show(Order $order)
    {
        return new OrderResource($order->load(['invoice', 'shipments']));
    }

    public function store(Request $request)
    {
        return new OrderResource(Order::create($request->all()));
    }

    public function update(Request $request, Order $order)
    {
        $order->update($request->all());

        return new OrderResource($order);
    }

    public function destroy(Request $request, Order $order)
    {
        $order->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
