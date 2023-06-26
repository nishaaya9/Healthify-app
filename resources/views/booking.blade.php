@extends('parent')
@section('content')

<!-- Page Content -->
			<div class="content">
				<div class="container">
				
					<div class="row">
						<div class="col-12">
							<form action="{{route('book')}}" method="POST">
								@csrf
							<div class="card">
								<div class="card-body">
									
										<div class="booking-doc-info">
										<a href="doctor-profile.html" class="booking-doc-img">
											<img src="{{asset('assets/img/doctors/doctor-thumb-02.jpg')}}" alt="User Image">
										</a>
										<div class="booking-info">
											<h4><a href="doctor-profile.html">Dr. {{$doctor->d_name}} {{$doctor->d_lname}}</a></h4>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star"></i>
												<span class="d-inline-block average-rating">35</span>
											</div>
											<p class="text-muted mb-0"><i class="fas fa-map-marker-alt"></i> Newyork, USA</p>
										</div>
									</div>
								</div>
							</div>
							
							<!-- Schedule Widget -->
							<div class="card booking-schedule schedule-widget">
								
								<!-- Schedule Content -->
								<div class="schedule-cont">
									<div class="row">
										<div class="col-md-12">
											<input type="hidden" name="d_id" value="{{$doctor->d_id}}">
											<input type="hidden" name="p_id" value="{{session('p_id')}}">
											<div class="row form-row">
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label>Select date</label>													
														<input type="date" class="form-control" name="appointment_date" required>													
													</div>
												</div>
												<div class="col-12 col-md-6">
													<div class="form-group">
														<label>Select Time</label>													
														<input type="time" class="form-control" name="appointment_time" required>													
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /Schedule Content -->
								
							</div>
							<!-- /Schedule Widget -->
							
							<!-- Submit Section -->
							
							<div class="submit-section proceed-btn text-center">
								<button type="submit" class="btn btn-primary submit-btn">Book</button>
							</div>
							<!-- /Submit Section -->
							</form>
						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->

@stop