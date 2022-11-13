<?php

namespace App\Http\Resources\user;

use App\Http\Resources\OrderResource;
use Illuminate\Http\Resources\Json\JsonResource;

class EditProfileResource extends JsonResource
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
            'userInfo' => [
                'user_id' => $this->id,
                'firstName' => $this->first_name,
                'lastName' => $this->last_name,
                'userEmail' => $this->email,
                'city' => $this->city,
                'gender' => $this->gender,
                'phoneNumber' => $this->phone_number,
            ]
        ];
    }
}
