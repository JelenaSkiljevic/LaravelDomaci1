<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book1= Book::create(['naziv'=>'Moja genijalna prijateljica','broj_strana'=>300,'godina_izdavanja'=>2019,'writer_id'=>4,'genre_id'=>1,'library_id'=>1]);
        $book2= Book::create(['naziv'=>'Lazni zivot odraslih','broj_strana'=>300,'godina_izdavanja'=>2020,'writer_id'=>4,'genre_id'=>1,'library_id'=>2]);
        $book3= Book::create(['naziv'=>'Normalni ljudi','broj_strana'=>300,'godina_izdavanja'=>2011,'writer_id'=>7,'genre_id'=>1,'library_id'=>3]);
        $book4= Book::create(['naziv'=>'Ana Karenjina','broj_strana'=>300,'godina_izdavanja'=>2011,'writer_id'=>1,'genre_id'=>1,'library_id'=>4]);
        $book5= Book::create(['naziv'=>'Besnilo','broj_strana'=>300,'godina_izdavanja'=>2011,'writer_id'=>2,'genre_id'=>1,'library_id'=>1]);
        $book6= Book::create(['naziv'=>'Ostrvo pelikana','broj_strana'=>300,'godina_izdavanja'=>2011,'writer_id'=>5,'genre_id'=>1,'library_id'=>1]);
        $book7= Book::create(['naziv'=>'Avanture nevaljale devojcice','broj_strana'=>300,'godina_izdavanja'=>2011,'writer_id'=>6,'genre_id'=>1,'library_id'=>2]);
        $book8= Book::create(['naziv'=>'Umece ljubavi','broj_strana'=>300,'godina_izdavanja'=>2011,'writer_id'=>3,'genre_id'=>2,'library_id'=>2]);
        $book9= Book::create(['naziv'=>'Ujka Vanja','broj_strana'=>300,'godina_izdavanja'=>2011,'writer_id'=>9,'genre_id'=>1,'library_id'=>3]);
        $book10= Book::create(['naziv'=>'Kockar','broj_strana'=>300,'godina_izdavanja'=>2011,'writer_id'=>8,'genre_id'=>1,'library_id'=>4]);
    }
}
