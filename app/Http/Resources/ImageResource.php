<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
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
            'imageable_id' => $this->imageable_id,
            'imageable_type' => $this->imageable_type,
            'large' => $this->large,
            'medium' => $this->medium,
            'small' => $this->small,
            'square' => $this->square,
            'original' => $this->original,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
