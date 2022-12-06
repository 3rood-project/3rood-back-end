<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResources extends JsonResource
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
            'user_id' => $this->id,
            'firstName' => $this->first_name,
            'lastName' => $this->last_name,
            'userEmail' => $this->email,
            'useProfile' => $this->profile_photo,
            'city' => $this->city,
            'gender' => $this->gender,
            'phoneNumber' => $this->phone_number,
            'birthday' => $this->birthday,
        ];
    }
}
