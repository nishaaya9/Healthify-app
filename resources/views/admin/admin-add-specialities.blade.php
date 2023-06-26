@extends('admin.admin-parent')
@section('content') 
<!-- Page Wrapper -->
        <div class="page-wrapper">

            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Welcome Admin!</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

<div class="card">
								
								<div class="card-body">
									<div class="row">
										<div class="col-sm">
											<form class="needs-validation" novalidate>
												<div class="form-row">
													<div class="col-md-12 mb-3">
														<label for="validationCustom01">Specialist</label>
														<input type="text" class="form-control" id="validationCustom01" placeholder="Ex: Neurology" value="" required>
														<div class="valid-feedback">
															Looks good!
														</div>
													</div>
                                                    <div class="col-md-12 mb-3">
														<label for="validationCustom01">Image</label>
														<input type="file" class="form-control" id="validationCustom01" value="Mark" required>
													</div>
													<div class="col-md-4 mb-3">
												<button class="btn btn-primary" type="submit">Submit</button>
                                                    </div>
                                            </form>
										</div>
									</div>
								</div>
							</div>
							
@stop