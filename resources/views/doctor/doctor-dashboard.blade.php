@extends('doctor.doctor-parent')
@section('content') 			
									
<div class="col-md-7 col-lg-8 col-xl-9">
							
									<!-- Tab Menu -->
									<nav class="user-tabs mb-4">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
											<li class="nav-item">
												<a class="nav-link active text-left" href="#pat_appointments" data-toggle="tab"><h3>Patient Appoinments</h3></a>
											</li>
										</ul>
									</nav>
									<!-- /Tab Menu -->
								
									
									<!-- Tab Content -->
									<div class="tab-content pt-0">
										<div class="col-md-13 col-lg-13 col-xl-13">
											<div class="appointments">
												@foreach ($booking as $data )
												@if (session('d_id')==$data->d_id)
											
												<!-- Appointment List -->
												<div class="appointment-list">
													<div class="profile-info-widget">
														<a href="patient-profile.html" class="booking-doc-img">
															<img src="assets/img/patients/patient.jpg" alt="User Image">
														</a>
														<div class="profile-det-info">
															<h3><a href="patient-profile.html">{{$data->p_name}}</a></h3>
															<div class="patient-details">
																<h5><i class="far fa-clock"></i> {{$data->appointment_date}}, {{$data->appointment_time}}</h5>
																<h5><i class="fas fa-map-marker-alt"></i> {{$data->p_address}}</h5>
																<h5><i class="fas fa-envelope"></i> {{$data->p_email}}</h5>
																<h5 class="mb-0"><i class="fas fa-phone"></i>{{$data->p_mobile_number}}</h5>
															</div>
														</div>
													</div>
													<div class="appointment-action">
														<a href="javascript:void(0);" class="btn btn-sm bg-success-light">
															<i class="fas fa-check"></i> Accept
														</a>
														<a href="javascript:void(0);" class="btn btn-sm bg-danger-light">
															<i class="fas fa-times"></i> Cancel
														</a>
													</div>
												</div>
												<!-- /Appointment List -->
												@endif
												@endforeach		
											</div>
										</div>
									</div>
									<!-- /Tab Content -->
									
						</div>
	
					
@stop 