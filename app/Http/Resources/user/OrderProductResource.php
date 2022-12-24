<?php

namespace App\Http\Resources\user;

use App\Models\Product;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $product = Product::find($this->product_id);
        return [
            'productName'   =>  $product->name ,
            'productPrice'  =>  $product->price ,
            'Quantity'      => $this->Quantity	,
            'productPhoto'  => $product->product_photo	,
        ];
    }
}
