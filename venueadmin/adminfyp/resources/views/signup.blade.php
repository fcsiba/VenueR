@extends('brackets/admin-ui::admin.layout.master')

@section('title', 'Sign Up')

@section('content')
	<div class="container" id="app">
	    <div class="row align-items-center justify-content-center auth">
	        <div class="col-md-6 col-lg-5">
				<div class="card">
					<div class="card-block">
						@if(!empty($errorMsg))
                            <div class="alert alert-danger"> {{ $errorMsg }}</div>
                        @endif
							<form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/signupprc') }}" novalidate>
								{{ csrf_field() }}
								<div class="auth-header">
									<div class="d-flex flex-column justify-content-start align-items-center">
										<a href="http://callingdesk.com.pk/fyp/"><img src="{{asset('images/venue.png')}}" style="height: 100px;"></a>
										<h1 class="auth-title">Sign Up</h1>
									<p class="auth-subtitle">SIGN UP FOR YOUR ACCOUNT</p>
									</div>
								</div>
								<div class="auth-body">
									
									<div class="form-group" >
										<label for="email">YOUR E-MAIL</label>
										<div class="input-group input-group--custom">
											<div class="input-group-addon"><i class="input-icon input-icon--mail"></i></div>
											<input type="email" name="email" placeholder="Email"  class="form-control" required >
										</div>
										
                                    </div>
                                    <div class="form-group" >
										<label for="email">FIRST NAME</label>
										<div class="input-group input-group--custom">
											<div class="input-group-addon"><i class="input-icon input-icon--mail"></i></div>
											<input type="text" name="fname" placeholder="First Name"  class="form-control" >
										</div>
										
                                    </div>
                                    <div class="form-group" >
										<label for="email">LAST NAME</label>
										<div class="input-group input-group--custom">
											<div class="input-group-addon"><i class="input-icon input-icon--mail"></i></div>
											<input type="text" name="lname" placeholder="Last Name"  class="form-control" >
										</div>
										
									</div>

									 <div class="form-group" >
										<label for="password">PASSWORD</label>
										<div class="input-group input-group--custom">
											<div class="input-group-addon"><i class="input-icon input-icon--lock"></i></div>
											<input type="password" name="pass" placeholder="Password" class="form-control" required >
										</div>
										
                                    </div> 
                                    <div class="form-group" >
										<label for="password">CNIC</label>
										<div class="input-group input-group--custom">
											<div class="input-group-addon"><i class="input-icon input-icon--mail"></i></div>
											<input type="number" placeholder="CNIC" name="cnic"  class="form-control" >
										</div>
										
									</div>
									<div class="form-group text-center">
										<a href="{{ url('/admin/login') }}" class="auth-ghost-link">Already have account? Login</a>
									</div>
									<div class="form-group">
										<input type="hidden" name="remember" value="1">
										<button type="submit" class="btn btn-primary btn-block btn-spinner"><i class="fa"></i> Sign Up</button>
									</div>

								</div>
							</form>
					
					</div>
				</div>
	        </div>
	    </div>
	</div>
   
@endsection


@section('bottom-scripts')
<script type="text/javascript">
	$(document).ready(function(){
		
	});
    
</script>
@endsection