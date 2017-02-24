@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-md-6">
            <h1>Room {{ $room->id }}</h1>
            <hr>
        </div>
        
    </div>
    
</div>

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
                        <td>{{ isset($room->room_category) ? $room->room_category->name : '' }}</td>
                    </tr>
                
                </table>
                
            </div>    
            
        </div>
            
    </div>    
    
</div>

@endsection

