<?php

namespace App\Http\Controllers;

use App\PaymentMethodType;
use App\Http\Resources\PaymentMethodTypeCollection;
use App\Http\Resources\PaymentMethodTypeResource;
 
class PaymentMethodTypeAPIController extends Controller
{
    public function index()
    {
        return new PaymentMethodTypeCollection(PaymentMethodType::paginate());
    }
 
    public function show(PaymentMethodType $paymentMethodType)
    {
        return new PaymentMethodTypeResource($paymentMethodType->load(['users']));
    }

    public function store(Request $request)
    {
        return new PaymentMethodTypeResource(PaymentMethodType::create($request->all()));
    }

    public function update(Request $request, PaymentMethodType $paymentMethodType)
    {
        $paymentMethodType->update($request->all());

        return new PaymentMethodTypeResource($paymentMethodType);
    }

    public function destroy(Request $request, PaymentMethodType $paymentMethodType)
    {
        $paymentMethodType->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
