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
        $monday->single_room = 100;
        $monday->double_room = 100;
        $monday->family_room = 100;
        $monday->save();
        
        $tuesday = new Price;
        $tuesday->days_of_week = 'Tuesday';
        $tuesday->single_room = 100;
        $tuesday->double_room = 100;
        $tuesday->family_room = 100;        
        $tuesday->save();
        
        $wednesday = new Price;
        $wednesday->days_of_week = 'Wednesday';
        $wednesday->single_room = 100;
        $wednesday->double_room = 100;
        $wednesday->family_room = 100;        
        $wednesday->save();
        
        $thursday = new Price;
        $thursday->days_of_week = 'Thursday';
        $thursday->single_room = 100;
        $thursday->double_room = 100;
        $thursday->family_room = 100;        
        $thursday->save();
        
        $friday = new Price;
        $friday->days_of_week = 'Friday';
        $friday->single_room = 100;
        $friday->double_room = 100;
        $friday->family_room = 100;        
        $friday->save();
        
        $saturday = new Price;
        $saturday->days_of_week = 'Saturday';
        $saturday->single_room = 100;
        $saturday->double_room = 100;
        $saturday->family_room = 100;        
        $saturday->save();
        
        $sunday = new Price;
        $sunday->days_of_week = 'Sunday';
        $sunday->single_room = 100;
        $sunday->double_room = 100;
        $sunday->family_room = 100;        
        $sunday->save();
    }
}
