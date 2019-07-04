<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Http\Resources\InvoiceCollection;
use App\Http\Resources\InvoiceResource;
 
class InvoiceAPIController extends Controller
{
    public function index()
    {
        return new InvoiceCollection(Invoice::paginate());
    }
 
    public function show(Invoice $invoice)
    {
        return new InvoiceResource($invoice->load(['orders', 'user', 'subscription', 'products', 'payments']));
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
