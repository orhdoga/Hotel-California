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
        $single = new RoomCategory;
        $single->name = "Single room";
        $single->description = "Working at Burger King";
        $single->amount_of_persons = 3;
        $single->price = 40;
        $single->cover_image = "Draven.jpg";
        $single->save();   
        
        $double = new RoomCategory;
        $double->name = "Double room";
        $double->description = "Working at Burger King";
        $double->amount_of_persons = 5;
        $double->price = 80;
        $double->cover_image = "Draven.jpg";        
        $double->save();
        
        $family = new RoomCategory;
        $family->name = "Family room";
        $family->description = "Working at Burger King";
        $family->amount_of_persons = 7;
        $family->price = 120;
        $family->cover_image = "Draven.jpg";        
        $family->save();
    }
}
