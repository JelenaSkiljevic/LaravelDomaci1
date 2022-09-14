<?php

namespace Database\Seeders;

use App\Models\Prize;
use Illuminate\Database\Seeder;

class PrizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prize1= Prize::create(['naziv'=>'NIN-ova nagrada','book_id'=>rand(1,8)]);
        $prize2= Prize::create(['naziv'=>'Andriceva nagrada','book_id'=>rand(1,8)]);
        $prize3= Prize::create(['naziv'=>'Disova nagrada','book_id'=>rand(1,8)]);
        $prize4= Prize::create(['naziv'=>'Zmajeva nagrada','book_id'=>rand(1,8)]);
        $prize5= Prize::create(['naziv'=>'Brankova nagrada','book_id'=>rand(1,8)]);
    }
}
