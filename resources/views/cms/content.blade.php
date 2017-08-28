@extends ('cms.cms_master') 
@section('cms_content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Edit site content</h1>
    <p>  
        <a href="{{ url('cms/content/create')}}" class="btn btn-primary">+ Add new content</a>
    </p>
    @if($content) 
    <br><br>
    <table class="table table-bordered">  
        <thead>
            <tr>  
                <th>Title</th> 
                <th>Operation</th> 
                <th>Updated at</th>
            </tr>
        </thead> 
        @foreach($content as $item)  
        <tr>
            <td>{{ $item['title'] }}</td> 
            <td>  
                <a href="{{ url('cms/content/'. $item['id']. '/edit') }}"> Edit |  </a> 
                <a href="{{ url('cms/content/'. $item['id']) }}"> Delete </a>
            </td> 
            <td>{{ $item['updated_at']}}</td>
        </tr>
        @endforeach
    </table>
    @endif
</div> 

@endsection