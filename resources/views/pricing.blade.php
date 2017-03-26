@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-md-6">
            <h1 style="display: inline-block;">Pricing</h1>
            <a href="#" class="printer">
                <i class="fa fa-print fa-2x" onclick="myFunction()" aria-hidden="true" title="Click to print the current page."></i>
            </a>        
        </div>
        
    </div>
    
    <br>
    
    <form method="POST" action="{{ url('/pricing') }}">
        {{ method_field('PATCH') }}
    
    <div class="row">
        
        <div class="col-md-6">
            
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Day of the week</th>
                        <th>Single room</th>
                        <th>Double room</th>
                        <th>Family room</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prices as $price)
                        <tr>
                            <td style="padding-top: 15px;">{{ $price->days_of_week }}</td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" name="single_room[{{$price->id}}]" style="width: 60px;" value="{{ old('single_room[' . $price->id . ']', $price->single_room) }}">
                                </div>    
                            </td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" name="double_room[{{$price->id}}]" style="width: 60px;" value="{{ old('double_room[' . $price->id . ']', $price->double_room) }}">
                                </div> 
                            </td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" name="family_room[{{$price->id}}]" style="width: 60px;" value="{{ old('family_room[' . $price->id . ']', $price->family_room) }}">
                                </div> 
                            </td>
                        </tr>
                    @endforeach    
                </tbody>
            </table>
                    
        <div class="form-group">
            <button class="btn btn-primary pull-right">Update</button>
        </div>
            
        </div>
        
    </div>
    
    </form>
    
</div>

@endsection