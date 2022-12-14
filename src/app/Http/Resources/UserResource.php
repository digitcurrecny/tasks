<?php

namespace Core\Http\Resources;

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


            'name'  => $this->name,
            'email'  => $this->email,
        ];
    }


    public function with($request)
    {
        return [
            'status' => 'OK',
        ];
    }
}
