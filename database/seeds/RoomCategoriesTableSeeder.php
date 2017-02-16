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
        $example = new RoomCategory;
        $example->name = "Example";
        $example->description = "Working at Burger King";
        $example->amount_of_persons = 3;
        $example->price = 10;
        $example->cover_image = "Draven.jpg";        
        $example->save();
        
        $example = new RoomCategory;
        $example->name = "Example1";
        $example->description = "Working at Burger King";
        $example->amount_of_persons = 5;
        $example->price = 30;
        $example->cover_image = "Draven.jpg";
        $example->save();
        
        $example = new RoomCategory;
        $example->name = "Example2";
        $example->description = "Working at Burger King";
        $example->amount_of_persons = 7;
        $example->price = 50;
        $example->cover_image = "Draven.jpg";        
        $example->save();
    }
}
