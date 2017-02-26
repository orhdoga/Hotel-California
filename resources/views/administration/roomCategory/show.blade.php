@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-md-6">
            <h1>Room category {{ $room_category->name }}</h1>
            <hr>
        </div>
        
    </div>
    
    <div class="row">
        
        <div class="col-md-6">
            
            <div class="well">
            
                <table class="table table-striped">
                    
                    <tr>
                        <td><b>Id</b></td>
                        <td>{{ $room_category->id }}</td>
                    </tr>
                    
                    <tr>
                        <td><b>Room category</b></td>
                        <td>{{ $room_category->name }}</td>
                    </tr>
                    
                    <tr>
                        <td><b>Description</b></td>
                        <td>{{ $room_category->description }}</td>
                    </tr>
                
                    <tr>
                        <td><b>Cover image</b></td>
                        <td><img src="{{ '/images/' . $room_category->cover_image }}" style="height: 120px; width: 120px;"></td>
                    </tr>
                    
                    <tr>
                        <td><b>Persons</b></td>
                        <td>{{ $room_category->amount_of_persons }}</td>
                    </tr>
                    
                    <tr>
                        <td><b>Price</b></td>
                        <td>{{ $room_category->price }}</td>
                    </tr>
                
                </table>
                
            </div>    
            
        </div>
            
    </div>    
    
</div>

@endsection

