<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'start', 'end', 'price'
    ];
    
    protected $dates = [
        'start', 'end'
    ];
    
    public function room_category()
    {
        return $this->belongsTo(RoomCategory::class);
    }
}