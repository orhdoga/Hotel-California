@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        
        <div class="col-md-6">
            
            @if(isset($room_categorie))
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
                        <input type="file" name="cover_image">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">{{ isset($room_category) ? 'Update' : 'Submit' }}</button>
                    
                </div>    
                    
            </form>
            
        </div>
    
</div>        

@endsection