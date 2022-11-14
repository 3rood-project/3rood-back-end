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
        $project = Product::find($this->product_id);
        return [
            'productName'   =>  $project->name ,
            'productPrice'  =>  $project->price ,
            'Quantity'      => $this->Quantity	,
        ];    
    }
}
