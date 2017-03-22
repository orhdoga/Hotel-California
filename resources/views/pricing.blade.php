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
        
        <div class="col-md-12">
            
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
                                    <input type="text" class="form-control" value="{{ $price->single_room }}">
                                </div>    
                            </td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" value="{{ $price->single_room }}">
                                </div> 
                            </td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" value="{{ $price->single_room }}">
                                </div> 
                            </td>
                        </tr>
                    @endforeach    
                </tbody>
            </table>
            
        </div>
        
    </div>
    
    <div class="form-group">
        <button class="btn btn-primary pull-right">Update</button>
    </div>
    
    </form>
    
</div>

@endsection