@extends ('master') 

@section('content') 
<div class="row"> 
    <div class="col-md-12">
        <h1>MyHero Action Figures</h1> 
        <p class="homeintro">MyHero action figures includes large variety of your favorite super heroes.Our online store consists of action figures,Funko Pop!, Lego , comics,costumes  and more. </p> 
    </div> 


    @endsection 


    @section ('carousel')
    <!-- Carousel
                    ================================================== --> 
   
    
    <div id="myCarousel" class="carousel slide " data-ride="carousel" style="background-color: transparent; width: 600px; height: 450px; margin: auto;">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="{{ asset('images/johnbox.jpg')}}" alt="" style="width: 600px ; height: 450px; margin: auto ;"/>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>New Game of Thrones Funko Pop figures</h1>
                        <p>Already in our store</p>
                        <p><a class="btn btn-lg btn-primary" href="{{  url('shop')}}" role="button">Click here to visit our shop</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="{{ asset('images/daynerisbox.jpg')}}"  alt="" style="width: 600px ; height: 450px; margin: auto; "/>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>New Game of Thrones Funko Pop figures</h1>
                        <p>Already in our store</p>
                        <p><a class="btn btn-lg btn-primary" href="{{ url('user/signup')}}" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="{{ asset('images/aryabox.jpg')}}"  alt="" style="width: 600px ; height: 450px; margin: auto; "/>
                <div class="container">
                    <div class="carousel-caption">
                        <h1>New Game of Thrones Funko Pop figures</h1>
                        <p>Already in our store</p>
                        <p><a class="btn btn-lg btn-primary" href="{{  url('shop')}}" role="button">Click here to visit our shop</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div> <!-- /.carousel -->


    @endsection