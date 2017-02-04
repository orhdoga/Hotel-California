@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-md-6">
            
            <form method="POST" action="/administration/{{ $roomCategory->id }}">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                <div class="form-group well">
                    <label for="roomCategory">Update room category</label>
                    <input id="roomCategory" type="text" name="name" class="form-control" value="{{ $roomCategory->name }}">
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                
            </form>
            
        </div>
        
    </div>
    
</div>    

@endsection