@extends('layouts.welcome')

@section('content')

<div class="container-fluid">
    
    <div class="row">
        
        <div class="col-md-12">
        
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
        
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    
                    <div class="item active">
                        <img src="/images/carousel-1.jpg" height="345" width="460">
                    </div>
            
                    <div class="item">
                        <img src="/images/carousel-2.jpg" height="345" width="460">
                    </div>
                
                    <div class="item">
                        <img src="/images/carousel-3.jpg" height="345" width="460">
                    </div>
                    
                    <div class="main-text hidden-xs">
                        <div class="text-center" style="font-family: Roboto;">
                            <span style="color: #fed136;font-size: 48px; font-family: Roboto;"><b>HOTEL CALIFORNIA.</b></span>
                            <h1>Hotel of your dreams.</h1>
                            <br>
                            <a href="/webreservations/create" class="btn btn-primary btn-lg" 
                            style="margin-top: 45px;" data-toggle="tooltip" 
                            title="Book that dream, right now!"><b>Book now!</b></a>
                        </div>    
                    </div>
                
                </div>
        
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        
            </div>
            
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
    
    <hr>
    
    <div class="row">
        
        <div class="col-md-12 text-center">
            <h2>DIFFERENT CATEGORIES..</h2>
        </div>  
        
    </div>
    
    <br>

    <div class="row" id="#roomCategories">
        
        <div class="col-md-4">
            <a href="/roomcategories/1">
                <img src="/images/single-room.jpg" class="img-thumbnail img-responsive" data-toggle="tooltip" data-placement="bottom" title="Single room">
            </a>
        </div>
        
        <div class="col-md-4">
            <a href="/roomcategories/2">
                <img src="/images/double-room.jpg" class="img-thumbnail img-responsive" data-toggle="tooltip" data-placement="bottom" title="Double room">
            </a>
        </div>
        
        <div class="col-md-4">
            <a href="/roomcategories/3">
                <img src="/images/family-room.jpg" class="img-thumbnail img-responsive" data-toggle="tooltip" data-placement="bottom" title="Family room">
            </a>
        </div>
        
    </div> 
    
    <hr>
    
    <div class="row">
        
        <div class="col-md-12 text-center">
            <h2>MULTIPLE ACTIVITIES..</h2>
        </div> 
        
    </div>
    
    <br>
    
    <div class="row">
        
        <div class="col-md-4">
            <img src="/images/activity-1.jpg" class="img-thumbnail img-responsive" data-toggle="tooltip" title="Taking a sit at the pool..">
        </div>
        
        <div class="col-md-4">
            <img src="/images/activity-2.jpg" class="img-thumbnail img-responsive" data-toggle="tooltip" title="What about some canoeing?">
        </div>
        
        <div class="col-md-4">
            <img src="/images/activity-3.jpg" class="img-thumbnail img-responsive" data-toggle="tooltip" title="..Or play some tennis!">
        </div>
        
    </div>
    
</div>

@include('partials.footer')

@endsection