
@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-md-6">
            
            @if(isset($room))
                <h1>Room edit</h1>
            @else
                <h1>Room create</h1>
            @endif    
            
            <hr>
            
        </div>
        
    </div>

    <div class="row">
        
        <div class="col-md-6">
        
            @if(isset($room))
                <form method="POST" action="{{ url('/rooms/' . $room->id) }}" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}        
            @else
                <form method="POST" action="{{ url('/rooms') }}" enctype="multipart/form-data">
            @endif    
                
                    {{ csrf_field() }}
            
                    <div class="well">
                        
                        <div class="form-group">
                            <label for="name">Room</label>
                            <input id="name" type="text" name="name" class="form-control" placeholder="Enter a name" 
                            value="{{ isset($room) ? old('name', $room->name) : old('name') }}">
                        </div>
                      
                        <div class="form-group">
                            <label>Room category</label>                            
                            <select class="form-control" name="room_category_id" value="{{ isset($room) ? old('room_category_id', $room->room_category->id) : old('room_category_id') }}">
                                <option style="display: none" value="0">Attach a room category to a room</option>
                                @foreach($room_categories as $room_category)
                                    <option value="{{ $room_category->id }}" {{ isset($room) && old('room_category_id', $room->room_category->id) == $room_category->id ? 'selected' : '' }}>
                                        {{ $room_category->name }}
                                    </option>
                                @endforeach 
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">{{ isset($room) ? 'Update' : 'Submit' }}</button>
                        </div>
                        
                    </div>    
                
                </form>
        </div>
        
    </div>
    
</div>

@endsection