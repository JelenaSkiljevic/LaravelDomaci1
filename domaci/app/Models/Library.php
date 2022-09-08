<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
