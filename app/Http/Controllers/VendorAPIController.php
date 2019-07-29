<?php

namespace Cot\Http\Controllers;

use Cot\Vendor;
use Cot\Http\Resources\VendorCollection;
use Cot\Http\Resources\VendorResource;
 
class VendorAPIController extends Controller
{
    public function index()
    {
        return new VendorCollection(Vendor::paginate());
    }
 
    public function show(Vendor $vendor)
    {
        return new VendorResource($vendor->load(['products', 'user']));
    }

    public function store(Request $request)
    {
        return new VendorResource(Vendor::create($request->all()));
    }

    public function update(Request $request, Vendor $vendor)
    {
        $vendor->update($request->all());

        return new VendorResource($vendor);
    }

    public function destroy(Request $request, Vendor $vendor)
    {
        $vendor->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
