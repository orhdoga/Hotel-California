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
        $monday = new Price;
        $monday->days_of_week = 'Monday';
        $monday->single_room = 40;
        $monday->double_room = 80;
        $monday->family_room = 120;
        $monday->save();
        
        $tuesday = new Price;
        $tuesday->days_of_week = 'Tuesday';
        $tuesday->single_room = 40;
        $tuesday->double_room = 80;
        $tuesday->family_room = 120;        
        $tuesday->save();
        
        $wednesday = new Price;
        $wednesday->days_of_week = 'Wednesday';
        $wednesday->single_room = 40;
        $wednesday->double_room = 80;
        $wednesday->family_room = 120;        
        $wednesday->save();
        
        $thursday = new Price;
        $thursday->days_of_week = 'Thursday';
        $thursday->single_room = 40;
        $thursday->double_room = 80;
        $thursday->family_room = 120;        
        $thursday->save();
        
        $friday = new Price;
        $friday->days_of_week = 'Friday';
        $friday->single_room = 32;
        $friday->double_room = 64;
        $friday->family_room = 96;        
        $friday->save();
        
        $saturday = new Price;
        $saturday->days_of_week = 'Saturday';
        $saturday->single_room = 32;
        $saturday->double_room = 64;
        $saturday->family_room = 96;        
        $saturday->save();
        
        $sunday = new Price;
        $sunday->days_of_week = 'Sunday';
        $sunday->single_room = 32;
        $sunday->double_room = 64;
        $sunday->family_room = 96;        
        $sunday->save();
    }
}
