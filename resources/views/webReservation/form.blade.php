@extends('layouts.app')

@section('content')

<div class="container" id="app">
    
    <div class="row">
        
        <div class="col-md-6">

            <h1>Web reservation search</h1>
            
            <hr>
            
        </div>
        
    </div>

    <div class="row">
        
        <div class="col-md-6">
            
            <div class="well">
                
                <div class="form-group">
                    <label for="arrival">Arrival</label>
                    <date-picker id="arrival" name="arrival" input-class="form-control" clear-button></date-picker>
                </div>
                
                <div class="form-group">
                    <label for="departure">Departure</label>
                    <date-picker id="departure" name="departure" input-class="form-control" clear-button></date-picker>
                </div>
                
                <div class="form-group">
                    <label>Room category</label>
                    <select class="form-control">
                        <option style="display: none" value="">Choose a room category</option>
                        <option v-for="room_category in room_categories" value="@{{ room_category.id }}">@{{ room_category.name }}</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
                
            </div>  
            
        </div>    
        
    </div>    
    
</div>

@endsection