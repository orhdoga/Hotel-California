@extends('layouts.welcome')

@section('content')

<div class="container-fluid">
    
    <div class="row">
        
        <div class="col-md-12">
        
            @include('partials.welcome.carousel')
            
        </div>   
    
    </div>    
    
</div>    

<br>

<div class="container">
    
    <div class="row">
        
        <div class="col-md-4">
            <h2>Experience</h2>
            <p>Lorem Ipsumdolor sit amet, consectetur adipiscing elit. Ut augue dui, tincidunt fermentum porta nec, tristique non dolor. Morbi non ipsum id eros condimentum lacinia. Aliquam euismod lacus vitae accumsan pretium. Nunc sed lorem consectetur, commodo mi sit amet, faucibus tellus. Curabitur volutpat in erat non faucibus. Curabitur ac orci quam. Phasellus lacinia mi et finibus tincidunt. Morbi pharetra sem quis velit facilisis tincidunt ut non nulla. Proin a justo molestie, dignissim est auctor, dignissim risus. Etiam a sollicitudin mauris.</p>
        </div>
        
        <div class="col-md-4">
            <h2>The</h2>
            <p>Proin nec justo fermentum, viverra dolor vel, molestie dolor. Mauris vitae mauris eu odio tristique volutpat ac sit amet ex. Maecenas ac augue ut massa feugiat dignissim. Mauris vel elit quam. Cras ultrices tempor sollicitudin. Curabitur eu velit neque. Cras porta sit amet nisi id volutpat. Phasellus interdum arcu vitae scelerisque eleifend. Pellentesque cursus odio quis erat volutpat pulvinar. Phasellus consectetur dolor mi, in efficitur sem auctor volutpat.</p>
        </div>
        
        <div class="col-md-4">
            <h2>Californication</h2>
            <p>Sed lacinia non nulla vitae porta. Mauris vel ante quis arcu venenatis tempor. Morbi quis cursus sem, id posuere enim.Lorem Ipsumdolor sit amet, consectetur adipiscing elit. Quisque tortor mauris, feugiat sit amet suscipit ut, porta quis leo. Cras volutpat arcu vitae turpis imperdiet pharetra. Morbi posuere sagittis tempor. Quisque malesuada suscipit odio et elementum. Integer et volutpat est, id efficitur sapien.</p>
        </div>
        
    </div> 
    
    <div class="row">
        
        <div class="col-md-12 text-center page-header" style="margin-top: 0px;">
            <h2>DIFFERENT CATEGORIES..</h2>
        </div>  
        
    </div>

    <div class="row">
        
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/images/single-room.jpg" class="img-responsive">
                <div class="caption">
                    <h3>Single room</h3>
                    <p>Lorem Ipsumdolor sit amet, consectetur adipiscing elit. Ut augue dui, tincidunt fermentum porta nec, tristique non dolor.</p>
                    <p>
                        <a href="/roomcategories/1" class="btn btn-primary" role="button">Details</a>
                    </p>
                </div>
            </div>    
        </div>
        
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/images/double-room.jpg" class="img-responsive">
                <div class="caption">
                    <h3>Double room</h3>
                    <p>Lorem Ipsumdolor sit amet, consectetur adipiscing elit. Ut augue dui, tincidunt fermentum porta nec, tristique non dolor.</p>
                    <p>
                        <a href="/roomcategories/2" class="btn btn-primary" role="button">Details</a>
                    </p>
                </div>
            </div>    
        </div>
        
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/images/family-room.jpg" class="img-responsive">
                <div class="caption">
                    <h3>Family room</h3>
                    <p>Lorem Ipsumdolor sit amet, consectetur adipiscing elit. Ut augue dui, tincidunt fermentum porta nec, tristique non dolor.</p>
                    <p>
                        <a href="/roomcategories/3" class="btn btn-primary" role="button">Details</a>
                    </p>
                </div>
            </div>    
        </div>
        
    </div> 
    
    <div class="row">
        
        <div class="col-md-12 text-center page-header" style="margin-top: 0px;">
            <h2>MULTIPLE ACTIVITIES..</h2>
        </div> 
        
    </div>
    
    <div class="row">
        
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/images/activity-1.jpg" class="img-responsive">
                <div class="caption">
                    <p>Lorem Ipsumdolor sit amet, consectetur adipiscing elit. Ut augue dui, tincidunt fermentum porta nec, tristique non dolor.</p>
                </div>
            </div>    
        </div>
        
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/images/activity-2.jpg" class="img-responsive">
                <div class="caption">
                    <p>Lorem Ipsumdolor sit amet, consectetur adipiscing elit. Ut augue dui, tincidunt fermentum porta nec, tristique non dolor.</p>
                </div>
            </div>    
        </div>
        
        <div class="col-md-4">
            <div class="thumbnail">
                <img src="/images/activity-3.jpg" class="img-responsive">
                <div class="caption">
                    <p>Lorem Ipsumdolor sit amet, consectetur adipiscing elit. Ut augue dui, tincidunt fermentum porta nec, tristique non dolor.</p>
                </div>
            </div>    
        </div>
        
    </div>
    
</div>

@include('partials.welcome.footer')

@endsection