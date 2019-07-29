<?php

namespace Cot\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubscriptionResource extends JsonResource
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
            'shipping_address_id' => $this->shipping_address_id,
            'frequency' => $this->frequency,
            'active' => $this->active,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'products' => new ProductCollection($this->whenLoaded('products')),
            'invoices' => new InvoiceCollection($this->whenLoaded('invoices')),
            'shipping_address' => new ShippingAddressResource($this->whenLoaded('shipping_address'))
        ];
    }
}
