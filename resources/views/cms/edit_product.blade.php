@extends ('cms.cms_master') 
@section('cms_content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Edit product</h1> 
    <div class="col-md-6"> 
       <form action="{{ url('cms/products/' . $product['id']) }}" method="post" enctype="multipart/form-data"> 
            {{ csrf_field() }} 
             {{ method_field('PUT') }}  
             <input type="hidden" name="product_id" value="{{ $product['id']}}"> 
            <div class="form-group">
                <label for="categorie-id">Category:</label>
                <select class="form-control" name="categorie_id" id="categorie-id">  
                    @foreach($categories as $category) 
                    <option @if( $product['categorie_id'] == $category['id'] )  selected="selected" @endif value="{{ $category['id']}}">{{ $category['title']}}</option> 
                    @endforeach
                </select>
            </div> 
            <div class="form-group">
                <label for="title">Title:</label>
                <input value="{{$product['title']}}" type="text" name="title" class="form-control text-origin" id="title" placeholder="Title">
            </div>     
            <div class="form-group">
                <label for="url">Url:</label>
                <input value="{{$product['url']}}" type="text" name="url" class="form-control text-target" id="url" placeholder="Url"> 
            </div>  
            <div class="form-group">
                <label for="price">Price:</label>
                <input value="{{ $product['price']}}" type="text" name="price" class="form-control" id="price" placeholder="Price"> 
            </div> 
            <div class="form-group">
                <label for="article">Article:</label>
                <textarea id="article" name="article" class="form-control">{{ $product['article']}}</textarea>
            </div>   
             <div class="form-group"> 
                  <img width="90" src="{{ asset('images/' . $product['image'])}}" > 
                  <br><br>
                <label for="image">Change product image:</label>
                <input type="file" name="image" id="image">
            </div> 
            <input type="submit" name="submit" value="Update product" class="btn btn-primary">   
            <a href="{{ url('cms/products')}}" class="btn btn-default">Cancel</a>
            <a ></a>
        </form>  
    </div>
</div> 

@endsection
