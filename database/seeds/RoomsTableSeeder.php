<?php

use Illuminate\Database\Seeder;

use App\Room;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $example = new Room;
        $example->name = "Example";
        $example->room_category_id = "1";
        $example->room_plan = "Draven.jpg";
        $example->save();
        
        $example = new Room;
        $example->name = "Example";
        $example->room_category_id = "1";
        $example->room_plan = "Draven.jpg";
        $example->save();
        
        $example = new Room;
        $example->name = "Example";
        $example->room_category_id = "1";
        $example->room_plan = "Draven.jpg";
        $example->save();
    }
}
