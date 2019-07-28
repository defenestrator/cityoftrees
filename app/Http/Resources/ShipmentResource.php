<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShipmentResource extends JsonResource
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
            'shipping_method_id' => $this->shipping_method_id,
            'shipped_on_date' => $this->shipped_on_date,
            'received_on_date' => $this->received_on_date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'orders' => new OrderCollection($this->whenLoaded('orders'))
        ];
    }
}
