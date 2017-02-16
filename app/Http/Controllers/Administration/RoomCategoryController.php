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
    public function index(RoomCategory $roomCategories)
    {
        $roomCategories = RoomCategory::all(); 
    
        return view('administration.roomCategory.index', [
            'room_categories' => $roomCategories,
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
    public function store(Request $request, RoomCategory $roomCategory)
    {
        $this->validate($request, [
            'name' => 'required|unique:room_categories|max:30',
        ]);
        
        $roomCategory->fill($request->all());
        
        $roomCategory->save();
        
        flash(e('You have successfully created ' . $roomCategory->name), 'success');
        
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
    public function edit(roomCategory $roomCategory)
    {
        return view('administration.roomCategory.form', [
            'roomCategory' => $roomCategory,    
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomCategory $roomCategory)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
        ]);
        
        $roomCategory->update($request->all());
        
        flash(e('You have successfully updated ' . $roomCategory->name), 'info');
        
        return redirect('/roomcategories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RoomCategory $roomCategory)
    {
        $roomCategory->delete();
        
        flash(e('You have successfully deleted ' . $roomCategory->name), 'danger');
        
        return redirect('/roomcategories');
    }
}
