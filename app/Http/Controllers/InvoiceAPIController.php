<?php

namespace Cot\Http\Controllers;

use Cot\Invoice;
use Cot\Http\Resources\InvoiceCollection;
use Cot\Http\Resources\InvoiceResource;
 
class InvoiceAPIController extends Controller
{
    public function index()
    {
        return new InvoiceCollection(Invoice::paginate());
    }
 
    public function show(Invoice $invoice)
    {
        return new InvoiceResource($invoice->load(['user', 'products', 'payments', 'subscriptions']));
    }

    public function store(Request $request)
    {
        return new InvoiceResource(Invoice::create($request->all()));
    }

    public function update(Request $request, Invoice $invoice)
    {
        $invoice->update($request->all());

        return new InvoiceResource($invoice);
    }

    public function destroy(Request $request, Invoice $invoice)
    {
        $invoice->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
