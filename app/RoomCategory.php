<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'amount_of_persons',
        'cover_image',        
    ];
}
