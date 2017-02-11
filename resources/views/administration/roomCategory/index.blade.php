@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-md-6">
            
            <form method="POST" action="/administration">
                {{ csrf_field() }}
                <div class="form-group well">
                    <label for="roomCategory">Add room category</label>
                    <input id="roomCategory" type="text" name="name" class="form-control" placeholder="Enter a new room category">
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            
        </div>
        
        <div class="col-md-6">
            
            <table class="table table-hover">
                
                <thead>
                    <tr>
                        <th>Room category</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roomCategories as $roomCategory)
                        <tr>
                            <td style="padding-top: 15px;">
                                <a href="{{ url('/administration/' . $roomCategory->id) }}">{{ $roomCategory->name }}</a>
                            </td>
                            <td>
                                <div class="pull-right">
                                    <form method="POST" action="{{ url('/administration/' . $roomCategory->id) }}">
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
        
    </div>
    
</div>

@endsection
