<?php

namespace Cot\Http\Controllers;

use Cot\Product;
use Cot\Http\Resources\ProductCollection;
use Cot\Http\Resources\ProductResource;

class ProductAPIController extends Controller
{
    public function index()
    {
        return new ProductCollection(Product::with('images')->paginate());
    }

    public function show(Product $product)
    {
        return new ProductResource($product->load(['image','manufacturer', 'vendor', 'subscriptions', 'carts', 'invoices']));
    }

    public function store(Request $request)
    {
        return new ProductResource(Product::create($request->all()));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return new ProductResource($product);
    }

    public function destroy(Request $request, Product $product)
    {
        $product->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
