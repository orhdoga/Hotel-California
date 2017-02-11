@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
            
        <div class="col-md-6">    
            <h1>Rooms overview</h1>
        </div>
        
        <div class="pull-right">
            <h1><a href="#">Create</a></h1>
        </div>
    
    </div>
    
</div>

<div class="container">
    
    <table class="table table-hover">
                
        <thead>
            <tr>
                <th>Id</th>
                <th>Room</th>
                <th>Room category</th>
                <th>Room plan</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($rooms as $room)
                <tr>
                    <td>{{ $room->id }}</td>
                    <td>{{ $room->name }}</td>
                </tr>
            @endforeach
        </tbody>
                
    </table>
    
</div>

@endsection