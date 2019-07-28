<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
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
            'subtotal' => $this->subtotal,
            'tax' => $this->tax,
            'shipping' => $this->shipping,
            'discount' => $this->discount,
            'total' => $this->total,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'products' => new ProductCollection($this->whenLoaded('products')),
            'payments' => new PaymentCollection($this->whenLoaded('payments')),
            'subscriptions' => new SubscriptionCollection($this->whenLoaded('subscriptions')),
            'user' => new UserResource($this->whenLoaded('user'))
        ];
    }
}
