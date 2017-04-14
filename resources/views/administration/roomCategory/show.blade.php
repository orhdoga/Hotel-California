@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-md-6">
            <h1>Room category {{ $roomCategory->name }}</h1>
            <hr>
        </div>
        
    </div>
    
    <div class="row">
        
        <div class="col-md-6">
            
            <div class="well">
            
                <table class="table table-striped">
                    
                    <tr>
                        <td><b>Id</b></td>
                        <td>{{ $roomCategory->id }}</td>
                    </tr>
                    
                    <tr>
                        <td><b>Room category</b></td>
                        <td>{{ $roomCategory->name }}</td>
                    </tr>
                    
                    <tr>
                        <td><b>Description</b></td>
                        <td>{{ $roomCategory->description }}</td>
                    </tr>
                
                    <tr>
                        <td><b>Cover image</b></td>
                        <td><img src="{{ '/images/' . $roomCategory->cover_image }}" style="height: 120px; width: 120px;"></td>
                    </tr>
                    
                    <tr>
                        <td><b>Persons</b></td>
                        <td>{{ $roomCategory->amount_of_persons }}</td>
                    </tr>
                    
                    <tr>
                        <td><b>Price</b></td>
                        <td>
                            @if($roomCategory->price($date))
                                ${{ $roomCategory->price($date)->price }}
                            @else
                                ${{ $roomCategory->price }}
                            @endif
                        </td>
                    </tr>
                
                </table>
                
            </div>    
            
        </div>
            
    </div>    
    
</div>

@endsection

