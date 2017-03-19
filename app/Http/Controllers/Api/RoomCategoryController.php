<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\RoomCategory;

class RoomCategoryController extends Controller
{
    public function get() {
        return RoomCategory::all();
    }
}
