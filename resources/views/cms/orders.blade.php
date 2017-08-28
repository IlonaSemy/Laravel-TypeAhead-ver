@extends ('cms.cms_master') 
@section('cms_content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Site orders</h1>
    @if($orders) 
    <br><br>
    <table class="table table-bordered">  
        <thead>
            <tr>  
                <th>User</th> 
                <th>Order</th> 
                <th>Total</th> 
                <th>Date</th>
            </tr>
        </thead> 
        @foreach($orders as $item)  
        <tr>
            <td>{{ $item->name}}</td> 
            <td>
                <ul>
                    @foreach ( unserialize($item->data) as $row)  
                    <li>{{ $row['name']}}, Price: {{ $row['price']}}$, Quantity: {{$row['quantity'] }}</li>
                    @endforeach
                </ul>
            </td> 
            <td>{{ $item->total }}$</td> 
            <td>{{ $item->created_at}}</td> 
        </tr>
        @endforeach
    </table> 
    @else 
    <p style="font-size: 18px">No orders...</p>
    @endif
</div> 

@endsection