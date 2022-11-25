<?php

namespace App\Http\Resources\Shop;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopOrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'order_id' => $this->id,
            'total' => $this->price,
            'orderStatus' => $this->status,
            'orderStage' => $this->stage,
            'created_at' => $this->created_at,
        ];
    }
}
