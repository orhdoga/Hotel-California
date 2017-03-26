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
        $example->room_category_id = 1;
        $example->save();
        
        $example1 = new Room;
        $example1->name = "Example1";
        $example1->room_category_id = 2;
        $example1->save();
        
        $example2 = new Room;
        $example2->name = "Example2";
        $example2->room_category_id = 3;
        $example2->save();
    }
}
