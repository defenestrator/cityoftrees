<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Http\Resources\PaymentCollection;
use App\Http\Resources\PaymentResource;
 
class PaymentAPIController extends Controller
{
    public function index()
    {
        return new PaymentCollection(Payment::paginate());
    }
 
    public function show(Payment $payment)
    {
        return new PaymentResource($payment->load(['paymentMethodTypeUser', 'invoices']));
    }

    public function store(Request $request)
    {
        return new PaymentResource(Payment::create($request->all()));
    }

    public function update(Request $request, Payment $payment)
    {
        $payment->update($request->all());

        return new PaymentResource($payment);
    }

    public function destroy(Request $request, Payment $payment)
    {
        $payment->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
