@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-md-6">
            
            @if(isset($roomCategory))
                <h1>Room category edit</h1>
            @else
                <h1>Room category create</h1>
            @endif
            
            <hr>
            
        </div>
        
    </div>

    <div class="row">
        
        <div class="col-md-6">
            
            @if(isset($roomCategory))
                <form method="POST" action="{{ url('/roomcategories/' . $roomCategory->id) }}" enctype="multipart/form-data">
                    {{ method_field('PATCH') }}
            @else
                <form method="POST" action="{{ url('/roomcategories') }}" enctype="multipart/form-data">
            @endif
                
                {{ csrf_field() }}
                
                <div class="well">
                
                    <div class="form-group">
                        <label for="roomCategory">Room category</label>
                        <input id="roomCategory" type="text" class="form-control" name="name" placeholder="Enter a name"
                        value="{{ isset($roomCategory) ? old('name', $roomCategory->name) : old('name') }}">
                    </div> 
                    
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea id="description" type="text" class="form-control" name="description" rows="2" placeholder="Enter a description">{{ isset($roomCategory) ? old('description', $roomCategory->description) : old('description') }}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="amount_of_persons">Amount of persons</label>
                        <input id="amount_of_persons" type="text" class="form-control" name="amount_of_persons" style="width: 45px;" value="{{ isset($roomCategory) ? old('amount_of_persons', $roomCategory->amount_of_persons) : old('amount_of_persons') }}">
                    </div>
                    
                    <div class="form-group">
                        <label for="price">Price</label>
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input id="price_id" type="text" class="form-control" name="price" style="width: 70px;" value="{{ isset($roomCategory) ? old('price', $roomCategory->price) : old('price') }}">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Add cover image to room category</label>
                        <input type="file" name="cover_image">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">{{ isset($roomCategory) ? 'Update' : 'Submit' }}</button>
                    
                </div>    
                    
            </form>
            
        </div>
    
</div>        

@endsection