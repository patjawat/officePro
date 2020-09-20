<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
       // return parent::toArray($request);
       return [
           'name' => $this->first_name.' '.$this->last_name,
           'gender' => $this->when($this->gender == 'M','ชาย'),
       ];
    }

    public function with($request){
        return [
            'version' => '1.0'
        ];
    }
}
