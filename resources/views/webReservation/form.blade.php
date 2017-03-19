@extends('layouts.app')

@section('content')

<div class="container" id="app">
    
    <div class="row">
        
        <div class="col-md-6">

            <h1>Web reservation search</h1>
            
            <hr>
            
        </div>
        
    </div>

    <div class="row">
        
        <div class="col-md-6">
            
            <div class="well">
                
                <div class="form-group">
                    <label for="arrival">Arrival</label>
                    <date-picker id="arrival" name="arrival" input-class="form-control" clear-button></date-picker>
                </div>
                
                <div class="form-group">
                    <label for="departure">Departure</label>
                    <date-picker id="departure" name="departure" input-class="form-control" clear-button></date-picker>
                </div>
                
                <div class="form-group">
                    <label>Room category</label>
                    <select class="form-control">
                        <option style="display: none" value="">Choose a room category</option>
                        <option v-for="room_category in room_categories" value="@{{ room_category.id }}">@{{ room_category.name }}</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
                
            </div>  
            
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