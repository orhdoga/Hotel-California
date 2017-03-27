@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-md-6">
            
            @if(isset($room_category))
                <h1>Room category edit</h1>
            @else
                <h1>Room category create</h1>
            @endif
            
            <hr>
            
        </div>
        
    </div>

    <div class="row">
        
        <div class="col-md-6">
            
            @if(isset($room_category))
                <form method="POST" action="{{ url('/roomcategories/' . $room_category->id) }}" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
            @else
                <form method="POST" action="{{ url('/roomcategories') }}" enctype="multipart/form-data">
            @endif
                
                {{ csrf_field() }}
                
                <div class="well">
                
                    <div class="form-group">
                        <label for="room_category">Room category</label>
                        <input id="room_category" type="text" class="form-control" name="name" placeholder="Enter a name"
                        value="{{ isset($room_category) ? $room_category->name : old('room_category') }}">
                    </div> 
                    
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" type="text" class="form-control" name="description" rows="2" placeholder="Enter a description">{{ isset($room_category) ? $room_category->description : old('room_category') }}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="amount_of_persons">Amount of persons</label>
                        <input id="amount_of_persons" type="text" class="form-control" name="amount_of_persons" style="width: 45px;" value="{{ isset($room_category) ? $room_category->amount_of_persons : old('room_category') }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="price">Price</label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input id="price" type="text" class="form-control" name="price" style="width: 60px;" value="{{ isset($room_category) ? $room_category->price : old('room_category') }}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Add cover image to room category</label>
                        <input type="file" name="cover_image">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">{{ isset($room_category) ? 'Update' : 'Submit' }}</button>
                    
                </div>    
                    
            </form>
            
        </div>
    
</div>        

@endsection