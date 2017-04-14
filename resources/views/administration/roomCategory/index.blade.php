@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
            
        <div class="col-md-6">    
            <h1 style="display: inline-block;">Room categories overview</h1>
            <a href="#" class="printer">
                <i class="fa fa-print fa-2x" aria-hidden="true" onclick="myFunction()" title="Click to print the current page."></i>
            </a>
        </div>
        
        <div class="col-md-6">
            <div class="pull-right">
                <a href="/roomcategories/create">
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
                <th>Room category</th>
                <th>Description</th>
                <th>Persons</th>  
                <th>Cover image</th>                
                <th>Price</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($roomCategories as $roomCategory)
                <tr>
                    <td style="padding-top: 15px;">{{ $roomCategory->id }}</td>
                    <td style="padding-top: 15px;">
                        <a href="{{ url('/roomcategories/' . $roomCategory->id) }}">{{ $roomCategory->name }}</a>
                    </td>
                    <td style="padding-top: 15px; width: 200px; word-wrap: break-word;">{{ $roomCategory->description }}</td>
                    <td style="padding-top: 15px;">{{ $roomCategory->amount_of_persons }}</td>                    
                    <td><img class="img-fluid" src="{{ '/images/' . $roomCategory->cover_image }}" style="height: 120px; width: 120px;"></td>
                    <td style="padding-top: 15px;">
                        @if($roomCategory->price($date))
                            ${{ $roomCategory->price($date)->price }}
                        @else
                            ${{ $roomCategory->price }}
                        @endif
                    </td>
                    <td>
                        <div class="pull-right">
                            <form method="POST" action="{{ url('/roomcategories/' . $roomCategory->id) }}">
                                <a href="{{ url('/roomcategories/' . $roomCategory->id . '/edit') }}"><span class="btn btn-primary">Edit</span></a>
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
    {{ $roomCategories->links() }}
</div>    
    
</div>

@endsection
