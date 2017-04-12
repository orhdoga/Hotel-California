@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-md-6">
            <h1 style="display: inline-block;">Period</h1>
            <hr>
        </div>
        
        <div class="col-md-6">
            <h1 style="display: inline-block;">Pricing</h1>
            <a href="#" class="printer">
                <i class="fa fa-print fa-2x" onclick="myFunction()" aria-hidden="true" title="Click to print the current page."></i>
            </a>     
            <hr>
        </div>
        
    </div>
    
    <form method="POST" action="{{ url('/pricing') }}">
        {{ method_field('PATCH') }}
    
    <div class="row">
        
        <div class="col-md-6">
            
            <div class="form-group">
                <label for="arrival">From</label>
                <date-picker id="arrival" name="arrival" input-class="form-control" clear-button></date-picker>
            </div>
            
            <div class="form-group">
                <label for="departure">Until</label>
                <date-picker id="departure" name="departure" input-class="form-control" clear-button></date-picker>
            </div>
            
            <div class="form-group">
                <label for="price_id">Price</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="price_id" type="text" class="form-control" name="price_id" style="width: 60px;" value="{{ isset($room_category) ? $room_category->price_id : old('room_category') }}">
                </div>
            </div>  
            
            <div class="form-group">
                <label>Room category</label>
                <select class="form-control">
                    <option style="display: none" value="">Choose a room category</option>
                    @foreach($room_categories as $room_category)
                        <option>{{ $room_category->name }}</option>
                    @endforeach
                </select>
            </div>
                    
            <div class="form-group">
                <button class="btn btn-primary pull-right">Add pricing</button>
            </div>
            
        </div>
        
    </div>
    
    </form>
    
</div>

@endsection