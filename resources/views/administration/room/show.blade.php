@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-md-12">

            <h1>Room {{ $room->id }}</h1>
        
        </div>
        
    </div>
    
</div>

<br>

<div class="container">
    
    <div class="row">
        
        <div class="col-md-6">
            
            <div class="well">
            
                <table class="table table-striped">
                    
                    <tr>
                        <td><b>Id</b></td>
                        <td>{{ $room->id }}</td>
                    </tr>
                    
                    <tr>
                        <td><b>Room</b></td>
                        <td>{{ $room->name }}</td>
                    </tr>
                    
                    <tr>
                        <td><b>Room category</b></td>
                        <td>{{ $room->room_category->name }}</td>
                    </tr>
                    
                    <tr>
                        <td><b>Room plan</b></td>
                        <td><img src="{{ '/images/' . $room->room_plan }}" style="height: 120px; width: 120px;"></td>
                    </tr>
                
                </table>
                
            </div>    
            
        </div>
            
    </div>    
    
</div>

@endsection

