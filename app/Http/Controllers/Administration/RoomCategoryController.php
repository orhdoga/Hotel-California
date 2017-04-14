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
            'roomCategories' => RoomCategory::paginate(15),
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
    public function store(Request $request, RoomCategoryStoreRequest $store, RoomCategory $roomCategory)
    {
        $roomCategory->fill($request->all());
        
        if($request->hasFile('cover_image')) {
            $cover_image = $request->file('cover_image');
            $filename = time() . '.' . $cover_image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($cover_image)->resize(120, 120)->save($location);
            $roomCategory->cover_image = $filename;
        }
        
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
     
    public function show(RoomCategory $roomCategory)
    {
        return view('administration.roomCategory.show', [
            'roomCategory' => $roomCategory,
            'date' => Carbon::now()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RoomCategory $roomCategory)
    {
        return view('administration.roomCategory.form', [
            'roomCategory' => $roomCategory   
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RoomCategoryUpdateRequest $update, RoomCategory $roomCategory)
    {
        $roomCategory->update($request->all());
        
        if($request->hasFile('cover_image')) {
            $cover_image = $request->file('cover_image');
            $filename = time() . '.' . $cover_image->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            Image::make($cover_image)->resize(120, 120)->save($location);
            $roomCategory->cover_image = $filename;
        }
        
        $roomCategory->save();
        
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