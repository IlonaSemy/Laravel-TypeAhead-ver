@extends ('cms.cms_master') 
@section('cms_content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Are you sure you want to delete</h1> 
    <div class="col-md-6"> 
        <form action="{{ url('cms/menu/'. $menu_id)}}" method="post"> 
            {{ csrf_field() }} 
            {{ method_field('DELETE') }}
            <input type="submit" name="submit" value="Delete menu" class="btn btn-danger">   
            <a href="{{ url('cms/menu')}}" class="btn btn-default">Cancel</a>
            <a ></a>
        </form>  
    </div>
</div> 
@endsection
