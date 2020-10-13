<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'title'=> $this->title,
            'slug'=> $this->slug,
            'intro'=> $this->intro_desc,
            'price'=> $this->price,
            'discount'=> $this->discount,
            'feature_image'=>env('APP_URL').'/images/product/'.$this->feature_image
        ];

    }
}
