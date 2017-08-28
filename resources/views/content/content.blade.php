@extends ('master') 

@section('content') 
<div class="row">  
    
    @if ($contents) 
    
    @foreach($contents as $content)
    <div class="col-md-12">
        <h2>{{ $content['title']}}</h2> 
        <p>{!! $content['article']!!}</p> 
    </div>
    @endforeach
    
    @else 
    
    <div class="col-md-12"> 
        <p style="font-size: 18px;">No content for this menu</p></div>
    
    @endif 
    
</div> 
@endsection 