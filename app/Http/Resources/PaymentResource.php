<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
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
            'payment_method_type_user_id' => $this->payment_method_type_user_id,
            'amount' => $this->amount,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'invoices' => InvoiceResource::collection($this->whenLoaded('invoices')),
            'payment_method_type_user' => new PaymentMethodTypeUserResource($this->whenLoaded('payment_method_type_user'))
        ];
    }
}
