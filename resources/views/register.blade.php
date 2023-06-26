@extends('parent')
@section('content')

<body class="account-page">
<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
								
							<!-- Register Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header text-center">
											<h2>Sign Up</h2>
										</div>
										
										<!-- Register Form -->
										<form action="{{route('create')}}" method="POST">
                                            @csrf													
											<div class="form-group">
												<select class="form-control select" name="role_id">
													<option selected disabled>Select Role</option>
													<option value="1">Doctor</option>
													<option value="2">Patient</option>
												</select>
											</div>											
											<div class="form-group form-focus">
												<input type="text" class="form-control floating" name="name">
												<label class="focus-label">Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="email" class="form-control floating" name="email">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="password">
												<label class="focus-label">Password</label>
											</div>
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="cpassword">
												<label class="focus-label">Confirm Password</label>
											</div>
											<div class="form-group form-focus">
												<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Sign up</button>											
											</div>
											<div class="text-center">
												<a class="forgot-link" href="{{route('login')}}">Already have an account?</a>
											</div>
										</form>
										<!-- /Register Form -->
										
									</div>
								</div>
							</div>
							<!-- /Register Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
@stop