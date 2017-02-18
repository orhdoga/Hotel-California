<?php

namespace App\Repositories;

use App\RoomCategory;

class RoomCategories {
    
    public function all()
    {
        return RoomCategory::all();
    }
}