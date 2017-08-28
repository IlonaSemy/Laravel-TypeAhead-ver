@extends ('cms.cms_master') 
@section('cms_content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Edit site products</h1>
    <p>  
        <a href="{{ url('cms/products/create')}}" class="btn btn-primary">+ Add new product</a>
    </p>
    @if($products) 
    <br><br>
    <table class="table table-bordered">  
        <thead>
            <tr>  
                <th>Title</th>  
                <th>Product image</th> 
                <th>Operation</th> 
                <th>Updated at</th>
            </tr>
        </thead> 
        @foreach($products as $item)  
        <tr>
            <td>{{ $item['title'] }}</td>  
            <td> 
                <img width="70" src="{{ asset('images/' . $item ['image'])}}">
            </td>
            <td>  
                <a href="{{ url('cms/products/'. $item['id']. '/edit') }}"> Edit |  </a> 
                <a href="{{ url('cms/products/'. $item['id']) }}"> Delete </a>
            </td> 
            <td>{{ $item['updated_at']}}</td>
        </tr>
        @endforeach
    </table>
    @endif
</div> 

@endsection