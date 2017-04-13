<?php

use Illuminate\Database\Seeder;

use App\Price;

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
        $single_room->start = '2017-04-10';
        $single_room->end = '2017-08-10';
        $single_room->price = 40;
        $single_room->room_category_id = 1;
        $single_room->save();
        
        $double_room = new Price;
        $double_room->start = '2017-04-10';
        $double_room->end = '2017-08-10';
        $double_room->price = 80;
        $double_room->room_category_id = 2;
        $double_room->save();
        
        $family_room = new Price;
        $family_room->start = '2017-04-10';
        $family_room->end = '2017-08-10';
        $family_room->price = 120;
        $family_room->room_category_id = 3;
        $family_room->save();
    }
}
