<html>
    <head>
        <meta charset="UTF-8">
        <title>MyHero |Admin panel</title> 
        <meta charset="UTF-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> 
        <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet" type="text/css"/>  
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css"/> 
        <link href="{{ asset('carousel.css') }}" rel="stylesheet"/> 
        <script>var BASE_URL="{{ url('')}}/";</script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header"> 
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> 
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar" ></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span> 
          </button> 

          <a class="navbar-brand" href="{{ url('cms/dashboard')}}">Myhero admin panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse"> 
         <ul class="nav navbar-nav navbar-right sidebarHead" >
            <li><a href="{{ url('cms/dashboard')}}">Dashboard</a></li>
            <li><a href="{{ url('cms/menu')}}">Menu</a></li>
            <li><a href="{{ url('cms/content')}}">Content</a></li>
            <li><a href="{{ url('cms/categories')}}">Categories</a></li> 
            <li><a href="{{ url('cms/products')}}">Products</a></li> 
            <li><a href="{{ url('cms/orders')}}">Orders</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a target="blank" href="{{ url('')}}">Back to site</a></li>
              <li><a href="{{ url('user/logout')}}">Logout</a></li> 
          </ul> 

        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-2 col-sm-3 col-md-2 sidebar ">
          <ul class="nav nav-sidebar">
            <li><a href="{{ url('cms/dashboard')}}">Dashboard</a></li>
            <li><a href="{{ url('cms/menu')}}">Menu</a></li>
            <li><a href="{{ url('cms/content')}}">Content</a></li>
            <li><a href="{{ url('cms/categories')}}">Categories</a></li> 
            <li><a href="{{ url('cms/products')}}">Products</a></li> 
            <li><a href="{{ url('cms/orders')}}">Orders</a></li>
          </ul>
        </div>  
          <div class="row"> 
              <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          @include ('inc.sm')
          @include ('inc.errors') 
          </div> 
      </div>
        @yield('cms_content')
      </div>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>  
        <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script>
        <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>  
        <script>
    $(document).ready(function() {
        $('#article').summernote({ 
            height:300,
        });
    });
  </script>
    </body>
</html>
