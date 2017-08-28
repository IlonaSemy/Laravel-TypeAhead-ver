@extends ('master') 

@section('content') 
<div class="row"> 
    <div class="col-md-6">
        <h2>Sign up page</h2> 
      <form action="" method="post"> 
          {{ csrf_field() }} 
            <div class="form-group">
          <label for="name">Name:</label>
          <input value="{{ old('name')}}" type="text" name="name" class="form-control" id="name" placeholder="Name">
      </div> 
      <div class="form-group">
          <label for="email">Email:</label>
          <input value="{{ old('email')}}" type="text" name="email" class="form-control" id="email" placeholder="Email">
      </div> 
      <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Password"> 
      </div>  
           <div class="form-group">
          <label for="confirm-password">Confirm Password:</label>
          <input type="password" name="password_confirmation" class="form-control" id="confirm-password" placeholder="Confirm Password"> 
      </div> 
      <input type="submit" name="submit" value="Sign up" class="btn btn-primary"> 
      </form> 
    </div> 
</div>
@endsection
