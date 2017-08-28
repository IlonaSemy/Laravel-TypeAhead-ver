@extends ('master') 

@section('content') 
<div class="row"> 
    <div class="col-md-12">
      @if($cart)  
      <h1 class="text-center">Shop checkout page</h1> 
      <table class="table table-bordered"> 
          <thead> 
              <tr> 
                  <th>Product</th> 
                  <th>Quantity</th> 
                  <th>Price</th> 
                  <th>Sub Total</th> 
                  <th>Remove from Cart</th>
              </tr> 
          </thead>  
          @foreach($cart as $item)
          <tr> 
              <td>{{ $item['name']}}</td>  
              <td> 
                  <input type="button" value="-" class="update-cart" data-op="minus" data-id="{{$item['id']}}">
                  <input size="1" style="text-align: center" type="text" value="{{ $item['quantity']}}"> 
                  <input type="button" value="+" class="update-cart" data-op="plus" data-id="{{$item['id']}}">
              </td> 
              <td>{{ $item['price']}}</td> 
              <td>{{ $item['quantity'] * $item['price'] }}</td> 
              <td> 
                  <a href="#" data-id="{{ $item['id']}}" class="remove-item"><span style="color: red;" class="glyphicon glyphicon-trash"></span></a>
              </td>
          </tr> 
          @endforeach
          </table> 
      <p>
          <b>Total in cart:</b> {{ Cart::getTotal() }}$ 
          <span class="pull-right">  
              <a href="{{ url('shop/clear-cart')}}" class="btn btn-default">Clear cart</a>
          </span>
      </p> 
      <p><a href="{{ url('shop/order')}}" class="btn btn-primary">Order now!</a></p>
      @else  
      <p class="text-center" style="font-size: 18px">No items in cart...</p>
      @endif
    </div> 
</div>
@endsection


