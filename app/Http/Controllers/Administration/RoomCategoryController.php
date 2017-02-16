<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\RoomCategory;

class RoomCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RoomCategory $room_category)
    {
        $room_category = RoomCategory::all(); 
    
        return view('administration.roomCategory.index', [
            'room_categories' => $room_category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administration.roomCategory.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RoomCategory $room_category)
    {
        $this->validate($request, [
            'name' => 'required|unique:room_categories|max:30',
            'description' => 'required',
            'cover_image' => 'required',
        ]);
        
        $room_category->fill($request->all());
        
        if($request->hasFile('cover_image')) {
            $cover_image = $request->file('cover_image');
            $filename = time() . '.' . $cover_image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($cover_image)->resize(120, 120)->save($location);
            $room_category->cover_image = $filename;
        }
        
        $room_category->save();
        
        flash(e('You have successfully created ' . $room_category->name), 'success');
        
        return redirect('/roomcategories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomCategory $room_category)
    {
        return view('administration.roomCategory.form', [
            'room_category' => $room_category,    
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomCategory $room_category)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'description' => 'required',
            'cover_image' => 'required',
        ]);
        
        $room_category->update($request->all());
        
        if($request->hasFile('cover_image')) {
            $cover_image = $request->file('cover_image');
            $filename = time() . '.' . $cover_image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($cover_image)->resize(120, 120)->save($location);
            $room_category->cover_image = $filename;
        }
        
        $room_category->save();
        
        flash(e('You have successfully updated ' . $room_category->name), 'info');
        
        return redirect('/roomcategories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomCategory $room_category)
    {
        $room_category->delete();
        
        flash(e('You have successfully deleted ' . $room_category->name), 'danger');
        
        return redirect('/roomcategories');
    }
}
