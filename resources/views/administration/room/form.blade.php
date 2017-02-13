@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-md-6">
        
            @if(isset($room))
                <form method="POST" action="{{ url('/rooms/' . $room->id) }}">
                {{ method_field('PATCH') }}        
            @else
                <form method="POST" action="{{ url('/rooms') }}">
            @endif    
                
                    {{ csrf_field() }}
                    
                    <div class="well">
                        
                        <div class="form-group">
                            <label for="name">Add room name</label>
                            <input id="name" type="text" name="name" class="form-control" placeholder="Enter a new room name" 
                            value="{{ isset($room) ? $room->name : '' }}">
                        </div>
                      
                        <button type="submit" class="btn btn-primary">{{ isset($room) ? 'Update' : 'Submit' }}</button>
                    
                    </div>    
                
                </form>
                
                </form>
        </div>
        
    </div>
    
</div>

@endsection