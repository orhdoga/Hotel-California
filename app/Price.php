<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function room_category()
    {
        return $this->belongsTo(RoomCategory::class);
    }
}
