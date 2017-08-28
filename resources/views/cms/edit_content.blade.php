@extends ('cms.cms_master') 
@section('cms_content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Edit content</h1> 
    <div class="col-md-6"> 
     <form action="{{ url('cms/content/' . $content['id']) }}" method="post"> 
            {{ csrf_field() }} 
             {{ method_field('PUT') }} 
      <div class="form-group"> 
          <label for="menu-id">Menu link:</label>
          <select class="form-control" name="menu_id" id="menu-id">  
              @foreach($menu as $item) 
              <option @if( $content['menu_id'] == $item['id'] )  selected="selected" @endif value="{{ $item['id']}}">{{$item['link']}}</option> 
              @endforeach
          </select>
      </div>  
          <div class="form-group">
          <label for="title">Title:</label>
          <input value="{{ $content['title']}}" type="text" name="title" class="form-control text-origin" id="title" placeholder="Title">
      </div>    
      <div class="form-group">
          <label for="article">Article:</label>
          <textarea id="article" name="article" class="form-control">{{ $content['article']}}</textarea>
      </div> 
      <input type="submit" name="submit" value="Update content" class="btn btn-primary">   
      <a href="{{ url('cms/content')}}" class="btn btn-default">Cancel</a>
      <a ></a>
      </form>  
        </div>
</div> 

@endsection
