<?php

namespace App\Http\Controllers;

use App\PaymentMethod;
use App\Http\Resources\PaymentMethodCollection;
use App\Http\Resources\PaymentMethodResource;
 
class PaymentMethodAPIController extends Controller
{
    public function index()
    {
        return new PaymentMethodCollection(PaymentMethod::paginate());
    }
 
    public function show(PaymentMethod $paymentMethod)
    {
        return new PaymentMethodResource($paymentMethod->load(['payments', 'user']));
    }

    public function store(Request $request)
    {
        return new PaymentMethodResource(PaymentMethod::create($request->all()));
    }

    public function update(Request $request, PaymentMethod $paymentMethod)
    {
        $paymentMethod->update($request->all());

        return new PaymentMethodResource($paymentMethod);
    }

    public function destroy(Request $request, PaymentMethod $paymentMethod)
    {
        $paymentMethod->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
