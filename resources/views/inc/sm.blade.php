
                @if( Session::has('sm'))  
                <div class="row" id="sm-box">  
                    <div class="col-md-12">  
                        <div class="alert alert-success"> 
                            {{ Session::get('sm')}}
                        </div>
                    </div>
                </div> 
                @endif 
                
       