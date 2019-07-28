<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CouponResource extends JsonResource
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
            'percentage' => $this->percentage,
            'value' => $this->value,
            'code' => $this->code,
            'expires' => $this->expires,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'users' => new UserCollection($this->whenLoaded('users'))
        ];
    }
}
