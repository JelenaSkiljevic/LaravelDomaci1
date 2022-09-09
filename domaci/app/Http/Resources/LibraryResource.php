<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LibraryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'library';
    public function toArray($request)
    {   return[
        'id'=>$this->resource->id,
        'naziv'=>$this->resource->naziv,
        'adresa'=>$this->resource->adresa,
        'grad'=>$this->resource->grad,
        'izgradnja_godina'=>$this->resource->izgradnja_godina,
        
    ];
        
    }
}
