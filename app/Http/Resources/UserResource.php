<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'screen_name' => $this->screen_name,
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'profiles' => ProfileResource::collection($this->whenLoaded('profiles')),
            'vendors' => VendorResource::collection($this->whenLoaded('vendors')),
            'subscriptions' => SubscriptionResource::collection($this->whenLoaded('subscriptions')),
            'carts' => CartResource::collection($this->whenLoaded('carts')),
            'invoices' => InvoiceResource::collection($this->whenLoaded('invoices')),
            'roles' => RoleResource::collection($this->whenLoaded('roles')),
            'shipping_addresses' => ShippingAddressResource::collection($this->whenLoaded('shipping_addresses')),
            'payment_method_types' => PaymentMethodTypeResource::collection($this->whenLoaded('payment_method_types')),
            'coupons' => CouponResource::collection($this->whenLoaded('coupons'))
        ];
    }
}
