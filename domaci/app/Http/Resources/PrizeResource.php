<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PrizeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'prize';
    public function toArray($request)
    {   return[
        'id'=>$this->resource->id,
        'naziv'=>$this->resource->naziv,
        // 'book'=>new BookResource($this->resource->book),
        'book'=>$this->resource->book_id,
        
        
    ];
        
    }
}
