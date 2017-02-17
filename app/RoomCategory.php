<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'cover_image',
        'amount_of_persons',
    ];
}
