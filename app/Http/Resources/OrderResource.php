<?php

namespace Cot\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'uuid' => $this->uuid,
            'invoice_id' => $this->invoice_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'shipments' => new ShipmentCollection($this->whenLoaded('shipments')),
            'invoice' => new InvoiceResource($this->whenLoaded('invoice'))
        ];
    }
}
