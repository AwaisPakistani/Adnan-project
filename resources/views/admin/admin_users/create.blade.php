@extends('admin.layout.master')
@section('content')
                 
<!--start content-->
<main class="page-content">
        <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Admin</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Register</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb--> 
				
				
				<h6 class="mb-0 text-uppercase">Registeration</h6>
				<hr/>

                <!--alerts-->
                @if(Session::has('success_message'))
                <div class="alert border-0 bg-light-success alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                      <div class="fs-3 text-success"><i class="bi bi-check-circle-fill"></i>
                      </div>
                      <div class="ms-3">
                        <div class="text-success">{{Session::get('success_message')}}</div>
                      </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  @if(Session::has('error_message'))
                  <div class="alert border-0 bg-light-danger alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                      <div class="fs-3 text-danger"><i class="bi bi-x-circle-fill"></i>
                      </div>
                      <div class="ms-3">
                        <div class="text-danger">{{Session::get('error_message')}}</div>
                      </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  @if(Session::has('warning_message'))
                  <div class="alert border-0 bg-light-warning alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                      <div class="fs-3 text-warning"><i class="bi bi-x-circle-fill"></i>
                      </div>
                      <div class="ms-3">
                        <div class="text-warning">{{Session::get('warning_message')}}</div>
                      </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                  <!--alerts-->


                <div class="col-12 col-xl-8 order-xl-3">
                  <div class="card-body p-4 p-sm-5">
                   
                     <form method="post" action="{{route('add-admin')}}" enctype="multipart/form-data" class="form-body">@csrf
                      
                        <div class="row g-3">
                        <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Profile Picture</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-user-fill"></i></div>
                              <input type="file" class="form-control" aria-label="file example"
                              name="admin_profile" 
                              required>
                            </div>
                          </div>
                          <div class="col-12 ">
                            <label for="inputName" class="form- 
                            label">Name</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                              <input type="text" class="form-control radius-30 ps-5" id="inputName" name="name" placeholder="Enter Name" required>
                            </div>
                          </div>
                        
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              <input type="email" class="form-control radius-30 ps-5" id="inputEmailAddress" name="email" placeholder="Email" required>
                            </div>
                          </div>
                          <div class="col-12 ">
                            <label for="inputName" class="form- 
                            label">Role</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-person-circle"></i></div>
                              <select class="single-select" name="role" >
									<option value="notselected">Select Role</option>
                                    @foreach($roles as $role)
									<option value="{{$role->name}}"> 
                                          {{$role->name}}
                                    </option>
								    @endforeach			
							  </select>
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" class="form-control radius-30 ps-5" id="inputChoosePassword" name="password" placeholder="Password" required>
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Confirm Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" class="form-control radius-30 ps-5" id="inputChoosePassword" name="confirmpassword" placeholder="Confirm Password" required>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                              <label class="form-check-label" for="flexSwitchCheckChecked">I Agree to the Trems & Conditions</label>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary radius-30">Sign Up</button>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="login-separater text-center"> <span>OR SIGN UP WITH EMAIL</span>
                              <hr>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="d-flex align-items-center gap-3 justify-content-center">
                              <button type="button" class="btn btn-white text-danger"><i class="bi bi-google me-0"></i></button>
                              <button type="button" class="btn btn-white text-primary"><i class="bi bi-linkedin me-0"></i></button>
                              <button type="button" class="btn btn-white text-info"><i class="bi bi-facebook me-0"></i></button>
                            </div>
                          </div>
                          <div class="col-12 text-center">
                            <p class="mb-0">Already have an account? <a href="authentication-signin-with-header-footer.html">Sign in here</a></p>
                          </div>
                        </div>
                    </form>
                 </div>
                </div>
</main>
        
       <!--end page main-->
@endsection