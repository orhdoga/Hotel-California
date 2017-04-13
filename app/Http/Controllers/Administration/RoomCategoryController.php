<?php

namespace App\Http\Controllers\Administration;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoomCategoryStoreRequest;
use App\Http\Requests\RoomCategoryUpdateRequest;
use Illuminate\Http\Request;

use Image;
use App\Repositories\RoomCategories;
use App\RoomCategory;
use Carbon\Carbon;

class RoomCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administration.roomCategory.index', [
            'room_categories' => RoomCategory::paginate(15),
            'date' => Carbon::now()            
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
    public function store(Request $request, RoomCategoryStoreRequest $store, RoomCategory $room_category)
    {
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
     
    public function show(RoomCategory $room_category)
    {
        return view('administration.roomCategory.show', [
            'room_category' => $room_category,
            'date' => Carbon::now()
        ]);
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
            'room_category' => $room_category   
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomCategoryUpdateRequest $update, RoomCategory $room_category)
    {
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