@extends('admin.admin-parent')
@section('content')
<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">List of Patient</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Patient</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>S.No</th>
													<th>Patient Name</th>
													<th>Address</th>
													<th>Phone</th>
													<th>Last Visit</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($patients as $patient)
												<tr>
													<td>{{$loop->iteration}}</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="admin/assets/img/patients/patient1.jpg" alt="User Image"></a>
															<a href="profile.html">{{$patient->p_name}} {{$patient->p_lname}}</a>
														</h2>
													</td>
													<td>{{$patient->p_address}}</td>
													<td>{{$patient->p_mobile_number}}</td>
													<td>20 Oct 2019</td>
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
									</div>
								</div>
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
@stop