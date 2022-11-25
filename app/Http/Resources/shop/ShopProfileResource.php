<?php

namespace App\Http\Resources\Shop;

use App\Http\Resources\public\ProductResource;
use App\Http\Resources\Shop\ShopOrderResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ShopProfileResource extends JsonResource
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
            'city' => $this->city,
            'category' => $this->category->name,
            'openTime' => $this->open_time,
            'closeTime' => $this->close_time,
            'ProfilePhoto' => $this->profile_photo,
            'shop_products' => ProductResource::collection($this->products),
            'shop_orders' => ShopOrderResource::collection($this->orders)
        ];
    }
}
