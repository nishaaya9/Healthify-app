<!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main</span>
                        </li>
                        <li class="active">
                            <a href="{{route('admin-dashboard')}}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="">
                            <a href="{{route('admin-appointment')}}"><i class="fe fe-layout"></i> <span>Appointments</span></a>
                        </li>
                        <li class="submenu">
							<a href="#"><i class="fe fe-users"></i> <span>Specialities</span><span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{route('add-specialities')}}">Add Specialities </a></li>
									<li><a href="{{route('view-specialities')}}">View Specialities </a></li>
								</ul>
						</li>
                        <li class="submenu">
							<a href="#"><i class="fe fe-user-plus"></i> <span>Doctors</span><span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{route('add-doctor')}}">Add Doctor </a></li>
									<li><a href="{{route('view-doctors')}}">View Doctors </a></li>
								</ul>
						</li>
                        <li class="submenu">
							<a href="#"><i class="fe fe-user"></i> <span>Patients</span><span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="{{route('add-patient')}}">Add Patient </a></li>
									<li><a href="{{route('view-patients')}}">View Patients </a></li>
								</ul>
						</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->
