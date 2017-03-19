@extends('layouts.app')

@section('content')

<div class="container">
    
    <div class="row">
        
        <div class="col-md-6">
            <h1 style="display: inline-block;">Web reservations overview</h1>
            <a href="#" class="printer">
                <i class="fa fa-print fa-2x" onclick="myFunction()" aria-hidden="true" title="Click the icon to print the current page."></i>
            </a> 
        </div>
        
        <div class="col-md-6">
            <div class="pull-right">
                <a href="/webreservations/search">
                    <h1>Search</h1>
                </a>
            </div>
        </div>
        
    </div>

    <div class="row">
        
        
        
    </div>    
    
</div>

@endsection