@extends('doctor.doctor-parent')
@section('content') 
<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body pt-0">
									<!-- Tab Menu -->
									<nav class="user-tabs mb-4">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
											<li class="nav-item">
												<a class="nav-link active text-left" href="#pat_appointments" data-toggle="tab"><h3>Profile Settings</h3></a>
											</li>
											
										</ul>
									</nav>
									<!-- /Tab Menu -->
									<!-- Profile Settings Form -->
									<form>
										<div class="row form-row">
											<div class="col-12 col-md-12">
												<div class="form-group">
													<div class="change-avatar">
														<div class="profile-img">
															<img src="assets/img/patients/patient.jpg" alt="User Image">
														</div>
														<div class="upload-img">
															<div class="change-photo-btn">
																<span><i class="fa fa-upload"></i> Upload Photo</span>
																<input type="file" class="upload">
															</div>
															<small class="form-text text-muted">Allowed JPG, GIF or PNG. Max size of 2MB</small>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control" value="{{session('d_name')}}">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" class="form-control" value="{{session('d_lname')}}">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Email ID</label>
													<input type="email" class="form-control" value="{{session('d_email')}}">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Phone Number</label>
													<input type="text" class="form-control" value="{{session('d_mobile_number')}}">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label>Gender</label>
													<select class="form-control select">
														<option>Select</option>
														<option>Male</option>
														<option>Female</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Date of Birth</label>													
													<input type="date" class="form-control" value="{{session('d_dob')}}">													
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Education</label>
													<input type="text" class="form-control" value="{{session('degree')}}">
												</div>
											</div>											
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Specialization</label>
													<input type="text" class="form-control" value="{{session('specialization')}}">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
												<label>Clinic or Hospital Name</label>
													<input type="text" class="form-control" value="{{session('clinic_or_Hospital_name')}}">
												</div>
											</div>											
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Fees</label>
													<input type="text" class="form-control" value="{{session('fees')}}">
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label>Clinic or Hospital Address</label>
													<input type="text" class="form-control" value="{{session('clinic_or_Hospital_address')}}">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>select_day_from</label>
													<input type="text" class="form-control" value="{{session('select_day_from')}}">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>select_day_to</label>
													<input type="text" class="form-control" value="{{session('select_day_to')}}">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>time_from</label>
													<input type="text" class="form-control" value="{{session('time_from')}}">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>time_to</label>
													<input type="text" class="form-control" value="{{session('time_to')}}">
												</div>
											</div>
										</div>
										<div class="submit-section">
											<button type="submit" class="btn btn-primary submit-btn">Update Profile</button>
										</div>
									</form>
									<!-- /Profile Settings Form -->
									
								</div>
							</div>
						</div>

@stop