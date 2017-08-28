@extends ('master') 

@section('content') 
<div class="row"> 
    <div class="col-md-12 text-center"> 
    @if('item') 
    <h1>{{ $item['title']}}</h1>   
    <p><img width="500" src="{{ asset ('images/' . $item['image'])}}" </p>  
    <p>{!! $item['article'] !!}</p>
    <p><b>Price on site:</b>{{ $item['price']}}$</p> 
    <p>  
        @if(Cart::get($item['id']))  
        <input disabled="disabled" type="button" value="In Cart!" class="btn btn-success">
        @else 
        <input data-id="{{ $item['id']}}" type="button" value="+ Add to cart" class="btn btn-success add-to-cart"> 
        @endif
        
        <a href="{{ url('shop/checkout') }}" class="btn btn-primary">Checkout</a> 
    </p>
        @else 
        <p class="text-center" style="font-size: 18px">No product details ...</p>  
    @endif 
    </p>
@endsection
