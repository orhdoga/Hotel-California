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
        $example = new Roomcategory;
        $example->name = "Example";
        $example->description = "Working at Burger King";
        $example->cover_image = "Draven.jpg";
        $example->price = 0;
        $example->save();
        
        $example = new Roomcategory;
        $example->name = "Example1";
        $example->description = "Working at Burger King";
        $example->cover_image = "Draven.jpg"; 
        $example->price = 0;
        $example->save();
        
        $example = new Roomcategory;
        $example->name = "Example2";
        $example->description = "Working at Burger King";
        $example->cover_image = "Draven.jpg"; 
        $example->price = 0;
        $example->save();
    }
}
