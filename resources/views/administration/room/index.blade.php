@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
            
        <div class="col-md-6">    
            <h1 style="display: inline-block;">Rooms overview</h1>
            <a href="#" class="printer">
                <i class="fa fa-print fa-2x" onclick="myFunction()" aria-hidden="true" title="Click to print the current page."></i>
            </a>        
        </div>
        
        <div class="col-md-6">
            <div class="pull-right">
                <a href="/rooms/create">
                    <h1>Create</h1>
                </a>
            </div>
        </div>    
    
    </div>

    <br>
    
    <table class="table table-hover">
                
        <thead>
            <tr>
                <th>Id</th>
                <th>Room</th>
                <th>Room category</th>
                <th></th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($rooms as $room)
                <tr>
                    <td style="padding-top: 15px;">{{ $room->id }}</td>
                    <td style="padding-top: 15px;"><a href="{{ url('/rooms/' . $room->id) }}">{{ $room->name }}</a></td>
                    <td style="padding-top: 15px;"><a href="{{ isset($room->roomCategory) ? url('/roomcategories/' . $room->roomCategory->id  . '/edit') : '' }}">
                        {{ isset($room->roomCategory) ? $room->roomCategory->name : ''  }}</a></td>
                    <td>
                        <div class="pull-right">
                            <form method="POST" action="{{ url('/rooms/' . $room->id) }}">
                                <a href="{{ url('/rooms/' . $room->id . '/edit') }}"><span class="btn btn-primary">Edit</span></a>
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>  
                        </div>    
                    </td>
                </tr>
            @endforeach
        </tbody>
                
    </table>
    
<div class="pull-right">
    {{ $rooms->links() }}
</div>
    
</div>

@endsection