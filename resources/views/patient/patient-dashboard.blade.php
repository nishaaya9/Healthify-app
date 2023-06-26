@extends('patient.patient-parent')
@section('content') 		

<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body pt-0">
								
									<!-- Tab Menu -->
									<nav class="user-tabs mb-4">
										<ul class="nav nav-tabs nav-tabs-bottom nav-justified">
											<li class="nav-item">
												<a class="nav-link active text-left" href="#pat_appointments" data-toggle="tab"><h2>Appointments</h2></a>
											</li>
											
										</ul>
									</nav>
									<!-- /Tab Menu -->
									
									<!-- Tab Content -->
									<div class="tab-content pt-0">
										
										<!-- Appointment Tab -->
										<div id="pat_appointments" class="tab-pane fade show active">
											<div class="card card-table mb-0">
												<div class="card-body">
													<div class="table-responsive">
														<table class="table table-hover table-center mb-0">
															<thead>
																<tr>
																	<th>Doctor</th>
																	<th>Appointment Date</th>
																	<th>Booking Date</th>
																	<th>Fees</th>
																	<th>Status</th>
																</tr>
															</thead>
															<tbody>
																@foreach ($booking as $data )
																@if (session('p_id')==$data->p_id)
																<tr>
																	<td>
																		<h2 class="table-avatar">
																			<a href="doctor-profile.html" class="avatar avatar-sm mr-2">
																				<img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image">
																			</a>
																			<a href="doctor-profile.html">Dr. {{$data->d_name}} {{$data->d_lname}} <span>{{$data->specialization}}</span></a>
																		</h2>
																	</td>
																	<td>{{$data->appointment_date}}<span class="d-block text-info">{{$data->appointment_time}}</span></td>
																	<td>{{$data->created_at}}</td>
																	<td>{{$data->fees}}</td>
																	<td><span class="badge badge-pill bg-success-light">Confirm</span></td>
																</tr>
																@endif
																@endforeach																
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
										<!-- /Appointment Tab -->
										
										
									</div>
									<!-- Tab Content -->
									
								</div>
							</div>
						</div>
									
@stop