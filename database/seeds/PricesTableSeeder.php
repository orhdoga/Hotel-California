<?php

use Illuminate\Database\Seeder;

use App\Price;
use Carbon\Carbon;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $single_room = new Price;
        $single_room->start = Carbon::now();
        $single_room->end = Carbon::now();
        $single_room->price = 40;
        $single_room->room_category_id = 1;
        $single_room->save();
        
        $double_room = new Price;
        $double_room->start = Carbon::now();
        $double_room->end = Carbon::now();
        $double_room->price = 80;
        $double_room->room_category_id = 2;
        $double_room->save();
        
        $family_room = new Price;
        $family_room->start = Carbon::now();
        $family_room->end = Carbon::now();
        $family_room->price = 120;
        $family_room->room_category_id = 3;
        $family_room->save();
    }
}
