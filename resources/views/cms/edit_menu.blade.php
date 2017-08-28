@extends ('cms.cms_master') 
@section('cms_content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Edit menu</h1> 
    <div class="col-md-6"> 
        <form action="{{ url('cms/menu/' . $item['id']) }}" method="post"> 
            {{ csrf_field() }} 
             {{ method_field('PUT') }} 
             <input type="hidden" name="menu_id" value="{{ $item['id']}}">
            <div class="form-group">
                <label for="link">Link:</label>
                <input value="{{ $item['link']}}" type="text" name="link" class="form-control text-origin" id="link" placeholder="Link">
            </div> 
            <div class="form-group">
                <label for="title">Title:</label>
                <input value="{{ $item['title']}}" type="text" name="title" class="form-control" id="title" placeholder="Title"> 
            </div>  
            <div class="form-group">
                <label for="url">Url:</label>
                <input value="{{ $item['url']}}" name="url" class="form-control text-target" id="url" placeholder="Url"> 
            </div> 
            <input type="submit" name="submit" value="Update menu" class="btn btn-primary">   
            <a href="{{ url('cms/menu')}}" class="btn btn-default">Cancel</a>
            <a ></a>
        </form>  
    </div>
</div> 

@endsection
