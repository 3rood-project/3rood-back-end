<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\DB;
use App\Http\Resources\deliveryInfoResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\user\OrderProductResource;

class OrderResource extends JsonResource
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
            'shopName' => $this->shop->shop_name,
            'total' => $this->price,
            'orderStatus' => $this->status,
            'created_at' => $this->created_at,
            'deliveryInfo' => new deliveryInfoResource($this->deliveryInfo) ,
            'orderProducts' => OrderProductResource::collection(DB::table('orders_product')->where('order_id', $this->id)->get()) ,
        ];
    }
}
