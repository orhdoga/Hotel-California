@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
            
        <div class="col-md-6">    
            <h1>Room categories overview</h1>
        </div>
        
        <div class="pull-right">
            <a href="/roomcategories/create">
                <h1>Create</h1>
            </a>
        </div>
    
    </div>
    
</div>

<br>

<div class="container">
            
    <table class="table table-hover">
        
        <thead>
            <tr>
                <th>Id</th>
                <th>Room category</th>
                <th>Description</th>
                <th>Persons</th>  
                <th>Cover image</th>                
                <th>Price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($room_categories as $room_category)
                <tr>
                    <td style="padding-top: 15px;">{{ $room_category->id }}</td>
                    <td style="padding-top: 15px;">
                        <a href="{{ url('/roomcategories/' . $room_category->id) }}">{{ $room_category->name }}</a>
                    </td>
                    <td style="padding-top: 15px; word-wrap: break-word; width: 250px;">{{ $room_category->description }}</td>
                    <td style="padding-top: 15px;">{{ $room_category->amount_of_persons }}</td>                    
                    <td><img class="img-fluid" src="{{ '/images/' . $room_category->cover_image }}" style="height: 120px; width: 120px;"></td>
                    <td style="padding-top: 15px;">${{ $room_category->price }}</td>
                    <td>
                        <div class="pull-right">
                            <form method="POST" action="{{ url('/roomcategories/' . $room_category->id) }}">
                                <a href="{{ url('/roomcategories/' . $room_category->id . '/edit') }}"><span class="btn btn-primary">Edit</span></a>
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
    
</div>

@endsection
