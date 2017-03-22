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
                            <td>{{ $price->days_of_week }}</td>
                            <td>${{ $price->single_room }}</td>
                            <td>${{ $price->double_room }}</td>
                            <td>${{ $price->family_room }}</td>
                        </tr>
                    @endforeach    
                </tbody>
            </table>
            
        </div>
        
    </div>
    
</div>


@endsection