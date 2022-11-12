<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'product_id' => $this->id,
            'productName' => $this->name,
            'productPrice' => $this->price	,
            'expirationDate' => $this->duo_to,
            'productDescription' => $this->Description,
            'productQuantity' => $this->Quantity,
            'tag' => $this->tag,
            'productPhoto' => $this->product_photo,
        ];
    }
}
