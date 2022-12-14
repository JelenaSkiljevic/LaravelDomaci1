<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = []; 

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function prizes()
    {
        return $this->hasMany(Prize::class);
    }
}
 