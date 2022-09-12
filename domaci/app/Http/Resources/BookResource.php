<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'book';
    public function toArray($request)
    {   
        return[
        'id'=>$this->resource->id,
        'naziv'=>$this->resource->naziv,
        'broj_strana'=>$this->resource->broj_strana,
        'godina_izdavanja'=>$this->resource->godina_izdavanja,
        'writer'=> new WriterResource($this->resource->writer),
        'genre'=> new GenreResource($this->resource->genre),
        'library'=> new LibraryResource($this->resource->library),
    ];
        
    }
}
