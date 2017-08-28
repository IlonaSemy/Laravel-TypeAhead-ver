@extends ('master') 

@section('content')   

       <div class="row"> 
    <div class="col-md-12"> 

        <h1 class="text-center">Myhero Shop</h1> <br><br>
    </div>   

</div>  
<div class="row"> 

    @if ($categories) 
    @foreach($categories as $category) 
    <div class="col-md-6 col-sm-6 text-center"> 
        <h3 >{{ $category['title'] }} </h3>    
        <p><a href="{{ url('shop/'. $category['url']) }}" class="grayscaleimg"><img width="250" src="{{ asset('images/' . $category['image']) }}"></a></p>  
        <p>{!! $category['article']!!}</p>  


    </div> 
    @endforeach 
    @else 
    <div class="col-md-12"> <br><br>
        <p class="text-center" style="font-size: 18px"><b>No categories found...</b></p>
        <div 
            @endif
    </div>
    @endsection
