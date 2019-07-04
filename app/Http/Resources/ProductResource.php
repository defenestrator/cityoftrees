<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'manufacturer_id' => $this->manufacturer_id,
            'vendor_id' => $this->vendor_id,
            'name' => $this->name,
            'description' => $this->description,
            'height' => $this->height,
            'width' => $this->width,
            'depth' => $this->depth,
            'price' => $this->price,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'cart_products' => CartProductResource::collection($this->whenLoaded('cart_products')),
            'subscriptions' => SubscriptionResource::collection($this->whenLoaded('subscriptions')),
            'carts' => CartResource::collection($this->whenLoaded('carts')),
            'invoices' => InvoiceResource::collection($this->whenLoaded('invoices')),
            'manufacturer' => new ManufacturerResource($this->whenLoaded('manufacturer')),
            'vendor' => new VendorResource($this->whenLoaded('vendor'))
        ];
    }
}
