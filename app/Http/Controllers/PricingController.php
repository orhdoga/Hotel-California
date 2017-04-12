<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;
use App\RoomCategory;
use Carbon\Carbon;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pricing', [
            'prices' => Price::all(),
            'room_categories' => RoomCategory::all()
        ]);
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
    public function store(Request $request)
    {
        $room_category_id = $request->get('room_category_id');
        
        $start = Carbon::createFromFormat(
                'd-m-Y',
                $request->get('start')
            )
            ->startOfDay();
            
        $end = Carbon::createFromFormat(
                'd-m-Y',
                $request->get('end')
            )
            ->endOfDay();
            
        $data = $request->all();
        
        $data['start'] = $start;
        $data['end']   = $end;
        
        $room_category = RoomCategory::find($room_category_id);
        $room_category->prices()->create($data);
        
        return back();
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price)
    {
        $price->update($request->all());
        $price->save();
        
        flash('Tits');
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
