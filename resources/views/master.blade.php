<head>
    <meta charset="UTF-8">
    <title>@if (!empty($title) )
        {{ $title }}  
        @else
        MyHero
        @endif</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">  
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('carousel.css') }}" rel="stylesheet"/>    
    <script>var BASE_URL = "{{ url('')}}/";</script>  
 
 
</head>
 
<header>
    <!-- NAVBAR
================================================== -->
    <body>
        <div class="navbar-wrapper">
            <div class="container-fluid">
 
                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{ url('/')}}">MyHero</a>
 
                        </div>
                        <div id="navbar" class="navbar-collapse collapse" >
                           
                            <ul class="nav navbar-nav">
 
                                @if( !empty($menu))
                                @foreach($menu as $item)
                                <li><a href="{{ url($item['url'])}}">{{ $item['link'] }}</a></li>
                                @endforeach
                                @endif
 
                                <li><a href="{{ url('shop')}}">Shop</a></li>
                                <li>
                                    <a href="{{ url('shop/checkout')}}">
                                        <img width="20" src="{{ asset('images/shopping-cart.png')}}">  
                                        <div id="total-cart">
                                            @if(! Cart::isEmpty())
                                            {{Cart::getTotalQuantity()}}
                                            @endif
                                        </div>
 
                                    </a>
                                </li>
                            </ul>  
 
                            <ul class="nav navbar-nav navbar-right">
                                @if(Session::has('user_id'))
                                <li><a href="{{ url('user/edit')}}">{{ Session::get('user_name') }}</a></li>  
                                @if( Session::has('is_admin'))
                                <li><a href="{{ url('cms/dashboard')}}">CMS DASHBOARD</a></li>  
                                @endif
                                <li><a href="{{ url('user/logout')}}">Logout</a></li>
                                @else
                                <li><a href="{{ url('user/signin')}}">Sign In</a></li>
                                <li><a href="{{ url('user/signup')}}">Sign Up</a></li>  
 
                                @endif
                            </ul>
                            <div class="row">
                            <div class="container">
                                <form method="GET" action="" class="navbar-form navbar-right">
 
                        <div class="input-group">
                            <input type="text" name="find" class="typeahead form-control" aria-label="Search here..." placeholder="Search here..." autocomplete="off" value="">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default" style="height: 34px; width: 40px" ><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
 
                        </div>
                    </div>
                </nav>
 
            </div>
        </div>
 
  @if(!empty($dataJson))
    @foreach(json_decode($dataJson, true) as $value)
       {{ $value['record1']['record 2'] }}   
    @endforeach
@endif
 
 
</header>  <br><br><br><br>
 
 
 
 
<div class="container" >@yield('carousel')</div> <br><br>
 
<main>  
    <div class="container">
 
        @include ('inc.sm')
        @include ('inc.errors')
       
 
        @yield('content')  
 
    </div>
 
</main>  
<br><br><br>
<footer>  
    <div class="container">  
        <hr>
        <div class="row">
            <div class="col-md-12" >
                <p class="text-center" style="font-size: 18px;" >MyHero &copy; {{ date('Y') }} </p>
            </div>
        </div>
    </div>
 
</footer>    
 
 
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>  
<script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>
