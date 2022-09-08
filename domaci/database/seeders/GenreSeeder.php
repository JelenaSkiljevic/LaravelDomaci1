<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre1= Genre::create(['naziv'=>'Roman']);
        $genre2= Genre::create(['naziv'=>'Psihologija']);
        $genre3= Genre::create(['naziv'=>'Slikarstvo']);
        $genre4= Genre::create(['naziv'=>'Arhitektura']);
        $genre5= Genre::create(['naziv'=>'Sci-fi']);
        $genre6= Genre::create(['naziv'=>'Kuvar']);
    }
}
