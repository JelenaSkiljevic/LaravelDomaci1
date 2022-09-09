<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WriterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    public static $wrap = 'writer';
    public function toArray($request)
    {
        return [
            'id' =>$this->resource->id,
            'ime_prezime'=>$this->resource->ime_prezime,
            'zemlja' =>$this->resource->zemlja,
        ];
    }
}
