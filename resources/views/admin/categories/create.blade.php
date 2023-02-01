@extends('admin.layout.master')
@section('content')
                 
<!--start content-->
<main class="page-content">
        <!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Site Portal</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Categories</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">

						<div class="btn-group">
                            @can('view')
							<a href="{{route('admin.view_categories')}}" type="button" class="btn btn-primary">View Categories</a>
                            @endcan
						</div>
					</div>
				</div>
				<!--end breadcrumb--> 
				
				
				<h6 class="mb-0 text-uppercase">{{$title}}</h6>
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
                  <!--alerts-->


                <div class="col-12 col-xl-8 order-xl-3">
                  <div class="card-body p-4 p-sm-5">
                   
                     <form method="post"
                      action="{{route('admin.add_category')}}"
                      enctype="multipart/form-data"
                      class="form-body">@csrf
                      
                        <div class="row g-3">
                          <div class="col-12 ">
                            <div class="ms-auto position-relative">
                              <div class="input-group mb-3"> <span class="input-group-text" id="inputGroup-sizing-default">Category Name</span>
									<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    name="category_name"
                                    placeholder="Enter Category Name" required>
								</div>
                            </div>
                          </div>
                          <div class="col-12 ">
                          <div class="mb-3" data-select2-id="21">
										<label class="form-label">Category Status</label>
										<select class="single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true" name="category_status">
											<option value="show" data-select2-id="3">Show</option>
											<option value="hide" data-select2-id="31">hide</option>
											
											
										</select>
                                     
									</div>
                          </div>

                          
                        <div class="col-12">
                                <div class="mb-3">
									<label for="formFile" class="form-label"> Image</label>
									<input class="form-control" type="file" id="formFile" name="category_image" required>
								</div>
                        </div>
                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary px-5">{{$title}}</button>
                            </div>
                          </div>
                         
                        
                          
                        </div>
                    </form>
                 </div>
                </div>
</main>
        
       <!--end page main-->
@endsection