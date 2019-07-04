<?php

namespace App\Http\Resources;

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
            'user_id' => $this->user_id,
            'shipping_address_id' => $this->shipping_address_id,
            'frequency' => $this->frequency,
            'active' => $this->active,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'invoices' => InvoiceResource::collection($this->whenLoaded('invoices')),
            'products' => ProductResource::collection($this->whenLoaded('products')),
            'user' => new UserResource($this->whenLoaded('user')),
            'shipping_address' => new ShippingAddressResource($this->whenLoaded('shipping_address'))
        ];
    }
}
