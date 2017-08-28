@extends ('cms.cms_master') 
@section('cms_content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Add new product</h1> 
    <div class="col-md-6"> 
        <form action="{{ url('cms/products')}}" method="post" enctype="multipart/form-data"> 
            {{ csrf_field() }}  
            <div class="form-group">
                <label for="categorie-id">Category:</label>
                <select class="form-control" name="categorie_id" id="categorie-id">  
                    <option value="">Choose category</option> 
                    @foreach($categories as $category) 
                    <option @if( old('categorie_id') == $category['id'] )  selected="selected" @endif value="{{ $category['id']}}">{{ $category['title']}}</option> 
                    @endforeach
                </select>
            </div> 
            <div class="form-group">
                <label for="title">Title:</label>
                <input value="{{ old('title')}}" type="text" name="title" class="form-control text-origin" id="title" placeholder="Title">
            </div>     
            <div class="form-group">
                <label for="url">Url:</label>
                <input value="{{ old('url')}}" type="text" name="url" class="form-control text-target" id="url" placeholder="Url"> 
            </div>  
            <div class="form-group">
                <label for="price">Price:</label>
                <input value="{{ old('price')}}" type="text" name="price" class="form-control" id="price" placeholder="Price"> 
            </div> 
            <div class="form-group">
                <label for="article">Article:</label>
                <textarea id="article" name="article" class="form-control">{{ old('article')}}</textarea>
            </div>  
               <div class="form-group">
                <label for="image">Product image:</label>
                <input type="file" name="image" id="image">
            </div> 
            <input type="submit" name="submit" value="Save product" class="btn btn-primary">   
            <a href="{{ url('cms/categories')}}" class="btn btn-default">Cancel</a>
            <a ></a>
        </form>  
    </div>
</div> 

@endsection
