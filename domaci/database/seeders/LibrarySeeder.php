<?php

namespace Database\Seeders;

use App\Models\Library;
use Illuminate\Database\Seeder;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $library1= Library::create(['naziv'=>'Narodna biblioteka Srbije','adresa'=>'Skerliceva 1','grad'=>'Beograd']);
        $library2= Library::create(['naziv'=>'Vuk Karadzic','adresa'=>'Cirila i Metodija 2a','grad'=>'Beograd']);
        $library3= Library::create(['naziv'=>'Univerzitetska biblioteka Svetozar Markovic','adresa'=>'Bulevar kralja Aleksandra 71','grad'=>'Beograd']);
        $library4= Library::create(['naziv'=>'Vladislav Petkovic Dis','adresa'=>'Goce Delceva 12','grad'=>'Cacak']);
        $library5= Library::create(['naziv'=>'Biblioteka Astronomske opservatorije','adresa'=>'Volgina 7','grad'=>'Beograd']);
        $library6= Library::create(['naziv'=>'Biblioteka u Arheološkom parku Viminacijum','adresa'=>'Viminacijumska 10','grad'=>'Kostolac']);

    }
}
