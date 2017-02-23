<?php

use Illuminate\Database\Seeder;

use App\RoomCategory;

class RoomCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $family = new RoomCategory;
        $family->name = "Family room";
        $family->description = "Working at Burger King";
        $family->amount_of_persons = 3;
        $family->price = 10;
        $family->cover_image = "Draven.jpg";        
        $family->save();
        
        $single = new RoomCategory;
        $single->name = "Single room";
        $single->description = "Working at Burger King";
        $single->amount_of_persons = 5;
        $single->price = 30;
        $single->cover_image = "Draven.jpg";
        $single->save();
        
        $double = new RoomCategory;
        $double->name = "Double room";
        $double->description = "Working at Burger King";
        $double->amount_of_persons = 7;
        $double->price = 50;
        $double->cover_image = "Draven.jpg";        
        $double->save();
    }
}
