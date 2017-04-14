@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-md-6">
            <h1 style="display: inline-block;">Period</h1>
            <hr>
        </div>
        
        <div class="col-md-6">
            <h1 style="display: inline-block;">Pricing</h1>
            <a href="#" class="printer">
                <i class="fa fa-print fa-2x" onclick="myFunction()" aria-hidden="true" title="Click to print the current page."></i>
            </a>     
            <hr>
        </div>
        
    </div>
    
    <form method="POST" action="{{ url('/pricing') }}">
        
    {{ csrf_field() }}    

    <div class="row">
        
        <div class="col-md-6">
            
            <div class="form-group">
                <label for="start">From</label>
                <date-picker format="d-M-yyyy" id="start" name="start" input-class="form-control" clear-button></date-picker>
            </div>
            
            <div class="form-group">
                <label for="end">Until</label>
                <date-picker format="d-M-yyyy" id="end" name="end" input-class="form-control" clear-button></date-picker>
            </div>
            
            <div class="form-group">
                <label>Room category</label>
                <select class="form-control" name="room_category_id">
                    <option style="display: none" value="">Choose a room category</option>
                    @foreach($room_categories as $room_category)
                        <option value="{{ $room_category->id }}">{{ $room_category->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="price">Price</label>
                <div class="input-group">
                    <span class="input-group-addon">$</span>
                    <input id="price" type="text" class="form-control" name="price" style="width: 70px;">
                </div>
            </div>
                    
            <div class="form-group">
                <button class="btn btn-primary pull-right">Add pricing</button>
            </div>
            
        </div>
            
    </form>    
            
        <div class="col-md-6">
            
            <table class="table table-hover">
                
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>RC_id</th>
                        <th>Price</th>
                        <th></th>
                    </th>
                </thead>
                
                <tbody>
                    @foreach($prices as $price)
                        <tr>
                            <td style="padding-top: 15px;">{{ $price->id }}</td>
                            <td style="padding-top: 15px;">{{ $price->start->toFormattedDateString() }}</td>
                            <td style="padding-top: 15px;">{{ $price->end->toFormattedDateString() }}</td>
                            <td style="padding-top: 15px;">{{ $price->room_category_id }}</td>
                            <td style="padding-top: 15px;">${{ $price->price }}</td>
                            <td>
                                <form method="POST" action="/pricing/{{ $price->id }}">
                                    <a href="/pricing/{{ $price->id }}/edit" type="submit" class="btn btn-primary">Edit</a>
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>  
                    @endforeach    
                </tbody>
                
            </table>
            
        </div>
        
    </div>
    
</div>

@endsection