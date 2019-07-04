<?php

namespace App\Http\Controllers;

use App\Shipment;
use App\Http\Resources\ShipmentCollection;
use App\Http\Resources\ShipmentResource;
 
class ShipmentAPIController extends Controller
{
    public function index()
    {
        return new ShipmentCollection(Shipment::paginate());
    }
 
    public function show(Shipment $shipment)
    {
        return new ShipmentResource($shipment->load(['orders']));
    }

    public function store(Request $request)
    {
        return new ShipmentResource(Shipment::create($request->all()));
    }

    public function update(Request $request, Shipment $shipment)
    {
        $shipment->update($request->all());

        return new ShipmentResource($shipment);
    }

    public function destroy(Request $request, Shipment $shipment)
    {
        $shipment->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}
