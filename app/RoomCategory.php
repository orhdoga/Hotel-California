<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class RoomCategory extends Model
{
    protected $guarded = [];
    
    public function rooms() 
    {
        return $this->hasMany(Room::class);
    }
    
    public function prices()
    {
        return $this->hasMany(Price::class);
    }
    
    public function price($date)
    {
        return $this->prices()
            ->where('start', '<', $date)
            ->where('end', '>', $date)
            ->orderBy('id', 'DESC')
            ->first();
    }
}