@extends ('cms.cms_master') 
@section('cms_content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Edit category</h1> 
    <div class="col-md-6"> 
        <form action="{{ url('cms/categories/' . $category['id']) }}" method="post" enctype="multipart/form-data"> 
            {{ csrf_field() }} 
             {{ method_field('PUT') }}  
             <input type="hidden" name="category_id" value="{{ $category['id']}}"> 
             <div class="form-group">
                <label for="title">Title:</label>
                <input value="{{ $category['title']}}" type="text" name="title" class="form-control text-origin" id="title" placeholder="Title">
            </div>     
            <div class="form-group">
                <label for="url">Url:</label>
                <input value="{{ $category['url']}}" type="text" name="url" class="form-control text-target" id="url" placeholder="Url"> 
            </div> 
            <div class="form-group">
                <label for="article">Article:</label>
                <textarea id="article" name="article" class="form-control">{{$category['article']}}</textarea>
            </div>   
              <div class="form-group"> 
                  <img width="90" src="{{ asset('images/' . $category['image'])}}" > 
                  <br><br>
                <label for="image">Change category image:</label>
                <input type="file" name="image" id="image">
            </div> 
            <input type="submit" name="submit" value="Update category" class="btn btn-primary">   
            <a href="{{ url('cms/categories')}}" class="btn btn-default">Cancel</a>
            <a ></a>
        </form>  
    </div>
</div> 

@endsection
