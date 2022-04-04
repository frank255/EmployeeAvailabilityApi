<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'id'=>$this->id,
            'name'=>$this->name,
            'title'=>$this->title,
            'gender'=>$this->gender,
            'office'=>$this->office,
            'presence'=>$this->presence,
            'departureTime'=>$this->departureTime,
            'returnTime'=>$this->returnTime,
            'reason'=>$this->reason,
            'phone'=>$this->phone,
        ];
    }
}
