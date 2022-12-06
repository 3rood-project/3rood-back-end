<?php

namespace App\Http\Resources\public;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'shop_id' => $this->id,
            'shopName' => $this->shop_name,
            'category' => $this->category->name,
            'ProfilePhoto' => $this->profile_photo,
        ];
    }
}
