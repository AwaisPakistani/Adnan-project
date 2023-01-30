@extends('admin.layout.master')
@section('content')
                 
<!--start content-->
<main class="page-content">

<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Applications</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
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
<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
									<form class="row g-3" method="post" 
                  @if(!empty($select_social))
                  action="{{route('social_advertisement',$select_social)}}"
                  @else
                  action="{{route('social_advertisement')}}"
                  @endif
                  >@csrf
										
										<div class="col-md-6">
											<label for="validationServer03" class="form-label">Socail Class</label>
											<input type="text" class="form-control" 
                                            name="social_class"
                                            id="validationServer03" aria-describedby="validationServer03Feedback"
                                            @if(!empty($select_social))
                                            value="{{$select_social->social_class}}"
                                            @else
                                            
                                            @endif
                                            placeholder="Enter Social Class" required>
											
										</div>
                                        <div class="col-md-6">
											<label for="validationServer03" class="form-label">URL</label>
											<input type="url" class="form-control" 
                                            name="social_url"
                                            id="validationServer03" aria-describedby="validationServer03Feedback"
                                            @if(!empty($select_social))
                                            value="{{$select_social->social_url}}"
                                            @else
                                            
                                            @endif
                                            placeholder="Enter Social Class" required>
											
										</div>
										
										<div class="col-12">
											<button class="btn btn-primary" type="submit">Submit form</button>
										</div>
									</form>
								</div>
							</div>
						</div>
</main>
        
       <!--end page main-->
@endsection