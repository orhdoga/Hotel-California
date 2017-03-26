<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Image;
use App\Room;
use App\Repositories\Rooms;
use App\RoomCategory;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administration.room.index', [
            'rooms' => Room::with('roomCategory')->paginate(15)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administration.room.form', [
            'room_categories' => RoomCategory::all()  
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Room $room)
    {
        $this->validate($request, [
            'name' => 'required|unique:room_categories|max:30',
            'room_category_id' => 'required'
        ]);
        
        $room = new Room;
        $room->name = $request->name;
        $room->room_category_id = $request->room_category_id;
        
        $room->save();
        
        flash(e('You have successfully created ' . $room->name), 'success');
        
        return redirect('/rooms');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('administration.room.show', [
            'room' => $room
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        return view('administration.room.form', [
            'room' => $room,
            'room_categories' => RoomCategory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $this->validate($request, [
            'name' => 'required|unique:room_categories|max:30',
            'room_category_id' => 'required'
        ]);
        
        $room->update($request->all());
        
        $room->save();
        
        flash(e('You have successfully updated ' . $room->name), 'info');
        
        return redirect('/rooms');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        $room->delete();
        
        flash(e('You have successfully deleted ' . $room->name), 'danger');
        
        return back();
    }
}
