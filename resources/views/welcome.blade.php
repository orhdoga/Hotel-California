@extends('layouts.welcome')

@section('content')

<div class="container-fluid">
        
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
            <img src="/images/Carousel-1.jpg" height="345" width="460">
        </div>

        <div class="item">
            <img src="/images/Carousel-2.jpg" height="345" width="460">
        </div>
    
        <div class="item">
            <img src="/images/Carousel-3.jpg" height="345" width="460">
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

<br>

<div class="container">
    
    <div class="row">
        
        <div class="col-md-12 col-md-offset-4">
            <h1>Hotel of your dreams...</h1>
        </div>
    
    </div>

    <br>
    
    <div class="row">
        
        <div class="col-md-4">
            <h3>Experience</h3>
            <p>Lorem Ipsumdolor sit amet, consectetur adipiscing elit. Ut augue dui, tincidunt fermentum porta nec, tristique non dolor. Morbi non ipsum id eros condimentum lacinia. Aliquam euismod lacus vitae accumsan pretium. Nunc sed lorem consectetur, commodo mi sit amet, faucibus tellus. Curabitur volutpat in erat non faucibus. Curabitur ac orci quam. Phasellus lacinia mi et finibus tincidunt. Morbi pharetra sem quis velit facilisis tincidunt ut non nulla. Proin a justo molestie, dignissim est auctor, dignissim risus. Etiam a sollicitudin mauris.</p>
        </div>
        
        <div class="col-md-4">
            <h3>The</h3>
            <p>Proin nec justo fermentum, viverra dolor vel, molestie dolor. Mauris vitae mauris eu odio tristique volutpat ac sit amet ex. Maecenas ac augue ut massa feugiat dignissim. Mauris vel elit quam. Cras ultrices tempor sollicitudin. Curabitur eu velit neque. Cras porta sit amet nisi id volutpat. Phasellus interdum arcu vitae scelerisque eleifend. Pellentesque cursus odio quis erat volutpat pulvinar. Phasellus consectetur dolor mi, in efficitur sem auctor volutpat.</p>
        </div>
        
        <div class="col-md-4">
            <h3>Californication</h3>
            <p>Sed lacinia non nulla vitae porta. Mauris vel ante quis arcu venenatis tempor. Morbi quis cursus sem, id posuere enim.Lorem Ipsumdolor sit amet, consectetur adipiscing elit. Quisque tortor mauris, feugiat sit amet suscipit ut, porta quis leo. Cras volutpat arcu vitae turpis imperdiet pharetra. Morbi posuere sagittis tempor. Quisque malesuada suscipit odio et elementum. Integer et volutpat est, id efficitur sapien.</p>
        </div>
        
    </div> 
    
</div>

<br>

<div class="container-fluid">

    <footer>
            
        <div class="footer" id="footer">
            
            <div class="container">
                
                <div class="row">
                    
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <h3>Lorem Ipsum</h3>
                        <ul>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <h3>Lorem Ipsum</h3>
                        <ul>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <h3>Lorem Ipsum</h3>
                        <ul>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                        <h3>Lorem Ipsum</h3>
                        <ul>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                            <li> <a href="#">Lorem Ipsum</a> </li>
                        </ul>
                    </div>
                    
                    <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12">
                        <h3>Social media</h3>
                        <ul class="social">
                            <li title="Facebook"> <a href="#"> <i class="fa fa-facebook">   </i> </a> </li>
                            <li title="Twitter"> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                            <li title="Google+"> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                            <li title="Pinterest"> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                            <li title="YouTube"> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                        </ul>
                    </div>
                    
                </div>
                <!--/.row--> 
            </div>
            <!--/.container--> 
        </div>
        <!--/.footer-->
        
        <div class="footer-bottom">
            <div class="container">
                <p class="pull-left" style="color: white;">Copyright © <span style="color: #fed136;">Hotel California 2017.</span> All right reserved.</p>
                <div class="pull-right">
                    <ul class="nav nav-pills payments" style="color: white;">
                        <li><i class="fa fa-cc-visa" title="Visa"></i></li>
                        <li><i class="fa fa-cc-mastercard" title="MasterCard"></i></li>
                        <li><i class="fa fa-cc-amex" title="Amex"></i></li>
                        <li><i class="fa fa-cc-paypal" title="PayPal"></i></li>
                    </ul> 
                </div>
            </div>
        </div>
        <!--/.footer-bottom--> 
        
    </footer>

</div>

@endsection
