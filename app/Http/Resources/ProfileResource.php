<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
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
            'avatar' => $this->avatar,
            'facebook' => $this->facebook,
            'instagram' => $this->instagram,
            'twitter' => $this->twitter,
            'snapchat' => $this->snapchat,
            'thcfarmer' => $this->thcfarmer,
            'rollitup' => $this->rollitup,
            'four20mag' => $this->four20mag,
            'leafly' => $this->leafly,
            'strainly' => $this->strainly,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user' => new UserResource($this->whenLoaded('user'))
        ];
    }
}
