@extends('parent')
@section('content')		
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div>
						
						<div style="margin-right: 6%;margin-left: 6%">

							<!-- Doctor Widget -->
							@foreach ($doctors as $doctor) 
							<div class="card">
								<div class="card-body">
									<div class="doctor-widget">
										<div class="doc-info-left">
											<div class="doctor-img">
												<a href="doctor-profile.html">
													<img src="assets/img/doctors/doctor-thumb-01.jpg" class="img-fluid" alt="User Image">
												</a>
											</div>
											<div class="doc-info-cont">
												<h4 class="doc-name"><a href="doctor-profile.html">Dr. {{$doctor->d_name}} {{$doctor->d_lname}}</a></h4>
												<p class="doc-speciality">{{$doctor->degree}} - {{$doctor->specialization}}</p>
												<div class="rating">
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star filled"></i>
													<i class="fas fa-star"></i>
													<span class="d-inline-block average-rating">(17)</span>
												</div>
												<div class="clinic-details">
													<p class="doc-location"><i class="fas fa-map-marker-alt"></i></p>
													<ul class="clinic-gallery">
														<li>
															<a href="assets/img/features/feature-01.jpg" data-fancybox="gallery">
																<img src="assets/img/features/feature-01.jpg" alt="Feature">
															</a>
														</li>
														<li>
															<a href="assets/img/features/feature-02.jpg" data-fancybox="gallery">
																<img  src="assets/img/features/feature-02.jpg" alt="Feature">
															</a>
														</li>
														<li>
															<a href="assets/img/features/feature-03.jpg" data-fancybox="gallery">
																<img src="assets/img/features/feature-03.jpg" alt="Feature">
															</a>
														</li>
														<li>
															<a href="assets/img/features/feature-04.jpg" data-fancybox="gallery">
																<img src="assets/img/features/feature-04.jpg" alt="Feature">
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<div class="doc-info-right">
											<div class="clini-infos">
												<ul>
													<li><i class="far fa-thumbs-up"></i> 98%</li>
													<li><i class="far fa-comment"></i> 17 Feedback</li>
													</ul>
											</div>
											<div class="clinic-booking">
												<a class="view-pro-btn" href="{{route('doctor-profile')}}">View Profile</a>
												<a class="apt-btn" href="{{route('booking',$doctor->d_id)}}">Book Appointment</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							@endforeach
							<!-- /Doctor Widget -->
							
							
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->

@stop
   
			