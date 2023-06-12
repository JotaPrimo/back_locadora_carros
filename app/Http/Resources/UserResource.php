<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' => $this->id, 
            'name' => $this->name, 
            'email' => $this->email, 
            'section' => $this->section->nome, 
            'classe' => $this->classe->nome, 
            'phone_number' => $this->phone_number,  
            'address'  => $this->address, 
            'created_at' => $this->created_at
        ];
    }
}