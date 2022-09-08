<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Seeder;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $writer1= Writer::create(['ime_prezime'=>'Lav Tolstoj','zemlja'=>'Rusija']);
        $writer2= Writer::create(['ime_prezime'=>'Borislav Pekic','zemlja'=>'Rusija']);
        $writer3= Writer::create(['ime_prezime'=>'Erih From','zemlja'=>'Nemacka']);
        $writer4= Writer::create(['ime_prezime'=>'Elena Ferante','zemlja'=>'Italija']);
        $writer5= Writer::create(['ime_prezime'=>'Miodrag Majic','zemlja'=>'Srbija']);
        $writer6= Writer::create(['ime_prezime'=>'Mario Vargas Ljosa','zemlja'=>'Peru']);
        $writer7= Writer::create(['ime_prezime'=>'Sali Runi','zemlja'=>'Irska']);
        $writer8= Writer::create(['ime_prezime'=>'Fjodor Dostojevski','zemlja'=>'Rusija']);
        $writer9= Writer::create(['ime_prezime'=>'Anton Pavlovic Cehov','zemlja'=>'Rusija']);
    }
}
