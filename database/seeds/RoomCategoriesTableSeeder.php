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
        $single->description = "A beautiful single room it is..";
        $single->amount_of_persons = 3;
        $single->price = 40;
        $single->cover_image = "single-room.jpg";
        $single->save();   
        
        $double = new RoomCategory;
        $double->name = "Double room";
        $double->description = "A beautiful double room it is..";
        $double->amount_of_persons = 5;
        $double->price = 80;
        $double->cover_image = "double-room.jpg";        
        $double->save();
        
        $family = new RoomCategory;
        $family->name = "Family room";
        $family->description = "A beautiful family room it is..";
        $family->amount_of_persons = 7;
        $family->price = 120;
        $family->cover_image = "family-room.jpg";        
        $family->save();
    }
}
