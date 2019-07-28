<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentMethodResource extends JsonResource
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
            'payment_method_type_id' => $this->payment_method_type_id,
            'user_id' => $this->user_id,
            'nickname' => $this->nickname,
            'account' => $this->account,
            'expires' => $this->expires,
            'secret' => $this->secret,
            'postcode' => $this->postcode,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'payments' => new PaymentCollection($this->whenLoaded('payments')),
            'user' => new UserResource($this->whenLoaded('user'))
        ];
    }
}
