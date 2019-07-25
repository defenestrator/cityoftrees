<?php

namespace App\Http\Controllers;

use App\Subscription;
use App\Http\Resources\SubscriptionCollection;
use App\Http\Resources\SubscriptionResource;
 
class SubscriptionAPIController extends Controller
{
    public function index()
    {
        return new SubscriptionCollection(Subscription::paginate());
    }
 
    public function show(Subscription $subscription)
    {
        return new SubscriptionResource($subscription->load(['shippingAddress', 'products', 'invoices']));
    }

    public function store(Request $request)
    {
        return new SubscriptionResource(Subscription::create($request->all()));
    }

    public function update(Request $request, Subscription $subscription)
    {
        $subscription->update($request->all());

        return new SubscriptionResource($subscription);
    }

    public function destroy(Request $request, Subscription $subscription)
    {
        $subscription->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
