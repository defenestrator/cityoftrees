<?php

namespace Cot\Http\Controllers;

use Cot\PaymentMethodType;
use Cot\Http\Resources\PaymentMethodTypeCollection;
use Cot\Http\Resources\PaymentMethodTypeResource;
 
class PaymentMethodTypeAPIController extends Controller
{
    public function index()
    {
        return new PaymentMethodTypeCollection(PaymentMethodType::paginate());
    }
 
    public function show(PaymentMethodType $paymentMethodType)
    {
        return new PaymentMethodTypeResource($paymentMethodType->load([]));
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
