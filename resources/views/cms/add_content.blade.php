@extends ('cms.cms_master') 
@section('cms_content')
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header">Add new content</h1> 
    <div class="col-md-6"> 
    <form action="{{ url('cms/content')}}" method="post"> 
          {{ csrf_field() }}
      <div class="form-group"> 
          <label for="menu-id">Menu link:</label>
          <select class="form-control" name="menu_id" id="menu-id">  
              <option value="">Choose menu link...</option> 
              @foreach($menu as $item) 
              <option @if( old('menu_id') == $item['id'] )  selected="selected" @endif value="{{ $item['id']}}">{{$item['link']}}</option> 
              @endforeach
          </select>
      </div>  
          <div class="form-group">
          <label for="title">Title:</label>
          <input value="{{ old('title')}}" type="text" name="title" class="form-control text-origin" id="title" placeholder="Title">
      </div>    
      <div class="form-group">
          <label for="article">Article:</label>
          <textarea id="article" name="article" class="form-control">{{ old('article')}}</textarea>
      </div> 
      <input type="submit" name="submit" value="Save content" class="btn btn-primary">   
      <a href="{{ url('cms/content')}}" class="btn btn-default">Cancel</a>
      <a ></a>
      </form>  
        </div>
</div> 

@endsection
