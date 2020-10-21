<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
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
            'title'=> $this->title,
            'price'=> $this->price,
            'discount'=> $this->discount,
            // 'feature_image'=>env('APP_URL').'/images/product/'.$this->feature_image
        ];

    }
}
