@extends ('cms.cms_master') 
@section('cms_content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Edit site menu</h1>
    <p>  
        <a href="{{ url('cms/menu/create')}}" class="btn btn-primary">+ Add new menu</a>
    </p>
    @if($menu) 
    <br><br>
    <table class="table table-bordered">  
        <thead>
            <tr>  
                <th>Link</th> 
                <th>Operation</th> 
                <th>Updated at</th>
            </tr>
        </thead> 
        @foreach($menu as $item)  
        <tr>
            <td>{{ $item['link']}}</td> 
            <td>  
                <a href="{{ url('cms/menu/'. $item['id']. '/edit') }}"> Edit |  </a> 
                <a href="{{ url('cms/menu/'. $item['id']) }}"> Delete </a>
            </td> 
            <td>{{ $item['updated_at']}}</td>
        </tr>
        @endforeach
    </table>
    @endif
</div> 

@endsection