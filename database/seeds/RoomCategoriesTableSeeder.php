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
        $example->save();
    }
}
