<?php

namespace Cot\Http\Controllers;

use Cot\Manufacturer;
use Cot\Http\Resources\ManufacturerCollection;
use Cot\Http\Resources\ManufacturerResource;
 
class ManufacturerAPIController extends Controller
{
    public function index()
    {
        return new ManufacturerCollection(Manufacturer::paginate());
    }
 
    public function show(Manufacturer $manufacturer)
    {
        return new ManufacturerResource($manufacturer->load(['products']));
    }

    public function store(Request $request)
    {
        return new ManufacturerResource(Manufacturer::create($request->all()));
    }

    public function update(Request $request, Manufacturer $manufacturer)
    {
        $manufacturer->update($request->all());

        return new ManufacturerResource($manufacturer);
    }

    public function destroy(Request $request, Manufacturer $manufacturer)
    {
        $manufacturer->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
