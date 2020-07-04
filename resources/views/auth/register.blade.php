@extends('layouts.client')
@section('content')
<div class="main_bg">
<div class="wrap">
	<div class="main">
		<div class="contact">				
				<div class="contact_left">
					
      			
				</div>				
				<div class="contact_right">
				  <div class="contact-form">
				  	<h3>Create an account</h3>
                      <form method="POST" action="{{ route('auth.register') }}">
                      {{ csrf_field() }}
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>PASSWORD</label></span>
						    	<span><input name="password" type="text" class="textbox"></span>
						    </div>
                            <div>
						     	<span><label>CONFIRM PASSWORD</label></span>
						    	<span><input name="password" type="text" class="textbox"></span>
						    </div>
						    
						   <div>
						   		<span><input type="submit" value="CREATE AN ACCOUNT"></span>
						  </div>
					    </form>
				    </div>
  				</div>		
  				<div class="clear"></div>		
		  </div>
	</div>
</div>
</div>		

@endsection
