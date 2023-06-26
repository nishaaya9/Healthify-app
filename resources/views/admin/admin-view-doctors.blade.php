@extends('admin.admin-parent')
@section('content') 

<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">List of Doctors</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Doctor</li>
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
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>S.No</th>
													<th>Doctor Name</th>
													<th>Speciality</th>
													<th>Member Since</th>
													<th>Action</th>													
												</tr>
											</thead>
											<tbody>
												@foreach ($doctors as $doctor) 
												<tr>
													<td>{{ $loop->iteration }}</td>
													<td>
														<h2 class="table-avatar">
															<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="admin/assets/img/doctors/doctor-thumb-01.jpg" alt="User Image"></a>
															<a href="profile.html">Dr. {{$doctor->d_name}} {{$doctor->d_lname}}</a>
														</h2>
													</td>
													<td>{{$doctor->specialization}}</td>
													
													<td>14 Jan 2019 <br><small>02.59 AM</small></td>
													
													<td>
														<button type="button" class="btn btn-sm bg-danger-light" data-bs-toggle="modal" data-bs-target="#delete_doctor_modal">
															<i class="fe fe-trash"></i> Delete
														</button>
													</td>
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
			<!-- /Page Wrapper -->

			<!-- Delete Modal -->
			<div class="modal fade" id="delete_doctor_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					Are you sure want to delete?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary">Yes</button>
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
				</div>
				</div>
			</div>
			</div>
			<!-- /Delete Modal -->
		
        </div>
		<!-- /Main Wrapper -->
		
		
@stop