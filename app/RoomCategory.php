<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    protected $guarded = [];
    
    public function rooms() 
    {
        return $this->hasMany(Room::class);
    }
    
    public function price()
    {
        return $this->hasOne(Price::class);
    }
}
