<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ShippingAddressResource extends JsonResource
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
            'name' => $this->name,
            'country' => $this->country,
            'street_address' => $this->street_address,
            'unit_number' => $this->unit_number,
            'city' => $this->city,
            'state' => $this->state,
            'postal_code' => $this->postal_code,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'subscriptions' => SubscriptionResource::collection($this->whenLoaded('subscriptions')),
            'users' => UserResource::collection($this->whenLoaded('users'))
        ];
    }
}
