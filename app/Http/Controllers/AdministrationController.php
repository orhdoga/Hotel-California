<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\RoomCategory;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RoomCategory $roomCategories)
    {
        $roomCategories = RoomCategory::all(); 
        
        return view('administration.index', [
            'roomCategories' => $roomCategories,
        ]);
        
        // return view('administration.index', compact('roomCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, RoomCategory $roomCategories)
    {
        $this->validate($request, [
            'name' => 'required|unique:room_categories|max:30',
        ]);
        
        $roomCategories->fill($request->all());
        
        $roomCategories->save();
        
        flash(e('You have successfully created ' . $roomCategories->name), 'success');
        
        return redirect('/administration');
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
        return view('administration.edit', [
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
            'name' => 'required|unique:room_categories|max:30',
        ]);
        
        $roomCategory->update($request->all());
        
        flash(e('You have successfully updated ' . $roomCategory->name), 'info');
        
        return redirect('/administration');
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
        
        return redirect('/administration');
    }
}
