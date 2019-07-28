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
            'email' => $this->email,
            'email_verified_at' => $this->email_verified_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'vendors' => new VendorCollection($this->whenLoaded('vendors')),
            'subscriptions' => new SubscriptionCollection($this->whenLoaded('subscriptions')),
            'carts' => new CartCollection($this->whenLoaded('carts')),
            'invoices' => new InvoiceCollection($this->whenLoaded('invoices')),
            'shipping_addresses' => new ShippingAddressCollection($this->whenLoaded('shipping_addresses')),
            'orders' => new OrderCollection($this->whenLoaded('orders')),
            'payment_methods' => new PaymentMethodCollection($this->whenLoaded('payment_methods')),
            'roles' => new RoleCollection($this->whenLoaded('roles')),
            'coupons' => new CouponCollection($this->whenLoaded('coupons'))
        ];
    }
}
