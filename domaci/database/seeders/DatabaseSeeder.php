<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Genre;
use App\Models\Library;
use App\Models\Prize;
use App\Models\Writer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        Book::truncate();
        Writer::truncate();
        Prize::truncate();
        Genre::truncate();
        Library::truncate();

        \App\Models\User::factory(10)->create();
        $this->call([
            GenreSeeder::class,
            LibrarySeeder::class,
            WriterSeeder::class,
            BookSeeder::class,
            PrizeSeeder::class,
            //UserSeeder::class
        ]);
    }
}
