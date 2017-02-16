@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        
        <div class="col-md-6">
            
            @if(isset($room_category))
                <form method="POST" action="{{ url('/roomcategories/' . $room_category->id) }}">
                    {{ method_field('PATCH') }}
            @else
                <form method="POST" action="{{ url('/roomcategories') }}">
            @endif    
                
                {{ csrf_field() }}
                
                <div class="well">
                
                    <div class="form-group">
                        <label for="room_category">Add room category</label>
                        <input id="room_category" type="text" class="form-control" name="name" placeholder="Enter a new room category"
                        value="{{ isset($room_category) ? $room_category->name : '' }}">
                    </div> 
                    
                    <div class="form-group">
                        <label for="description">Add description to room category</label>
                        <textarea id="comment" type="text" class="form-control" name="description" rows="2" placeholder="Enter a description">{{ isset($room_category) ? $room_category->description : '' }}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="amount_of_persons">Add amount of persons to room category</label>
                        <input id="amount_of_persons" type="text" class="form-control" name="amount_of_persons" placeholder="E.g. 6" style="width: 65px;" value="{{ isset($room_category) ? $room_category->amount_of_persons : '' }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="price">Add price (per night) to room category</label>
                        <input id="price" type="text" class="form-control" name="price" placeholder="E.g. €50,0" style="width: 95px;" value="{{ isset($room_category) ? $room_category->price : '' }}">
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