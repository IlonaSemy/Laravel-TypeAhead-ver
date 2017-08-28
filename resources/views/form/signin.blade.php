@extends ('master') 

@section('content') 
<div class="row"> 
    <div class="col-md-6">
        <h2>Sign in page</h2> 
      <form action="" method="post"> 
          {{ csrf_field() }}
      <div class="form-group">
          <label for="email">Email:</label>
          <input value="{{ old('email')}}" type="text" name="email" class="form-control" id="email" placeholder="Email">
      </div> 
      <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Password"> 
      </div> 
      <input type="submit" name="submit" value="Sign in" class="btn btn-primary"> 
      </form> 
    </div> 
</div>
@endsection
