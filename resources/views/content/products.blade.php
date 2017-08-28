@extends ('master') 


@section('content')   

<div class="row"> 
    <div class="col-md-12">
        <h1 class="text-center">  
            @if(!empty($page_title)) 
            {{ $page_title }} 
            @else 
            <p class="text-center" style="font-size: 18px">No products for this category...</p>
            @endif
        </h1> 
    </div> 
</div> 
<div class="row"> 
    @if($products)   

    <br><br>  

    <p class="text-center"><a href="  {{ url('shop/'.$category['url'].'/?sort=pricehigh')}}" style="color:black"> High to low</a> |
        <a href="  {{ url('shop/'.$category['url'].'/?sort=pricelow')}}" style="color:black">Low to high</a>| 
        <a href="  {{ url('shop/'.$category['url'].'/?sort=newitems')}}" style="color:black">New items</a></p>

    <br> 
    
    @foreach($products as $product) 
    <div class="col-md-6 col-sm-6 text-center"> 
        <h3>{{ $product['title']}}</h3> 
        <p><a href="{{ url('shop/' . $category['url'] . '/' . $product['url'])}}" class="grayscaleimg"><img width="200" src ="{{ asset('images/'. $product['image'])}}" ></a></p> 
        <p>{!! $product['article'] !!}</p>
        <p><b>Price on our site:</b>{{ $product['price']}}$</p> 
        <p>  
            @if(Cart::get($product['id'])) 
            <input disabled="disabled" type="button" value="In Cart!" class="btn btn-success ">  
            @else  
            <input data-id="{{ $product['id']}}" type="button" value="+ Add to cart" class="btn btn-success add-to-cart">  
            @endif    
        </p> 
    </div> 
    @endforeach
    @elseif(!empty($page_title)) 
    <div class="col-md-12"> 
        <p class="text-center" style="font-size: 18px">No products for this category...</p> 
    </div> 
    @endif 
</div> 

@endsection


