<?php

namespace App\Repositories;

use App\Room;

class Rooms {
    
    public function all()
    {
        return Room::paginate(15);
    }
}
