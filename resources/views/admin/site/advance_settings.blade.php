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
								<li class="breadcrumb-item active" aria-current="page">Advance Settings</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary disable">Add New</button>
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
                     @if(!empty($advance_setting))
                     action="{{route('admin.add_edit_advanceSettings',$advance_setting->id)}}"
                     @else
                      action="{{route('admin.add_edit_advanceSettings')}}"
                     @endif
                    class="form-body">@csrf
                      
                        <div class="row g-3">
                          <div class="col-12 ">
                            <div class="ms-auto position-relative">
                              <div class="input-group mb-3"> <span class="input-group-text" id="inputGroup-sizing-default">Main Color</span>
									<input type="color" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    name="main_color" 
                                    @if(!empty($advance_setting->main_color))
                                    value="{{$advance_setting->main_color}}"
                                    @endif required>
								</div>
                            </div>
                          </div>
                          <div class="col-12 ">
                            <div class="ms-auto position-relative">
                              <div class="input-group mb-3"> <span class="input-group-text" id="inputGroup-sizing-default">Basic Color</span>
									<input type="color" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    name="basic_color" 
                                    @if(!empty($advance_setting->basic_color))
                                    value="{{$advance_setting->basic_color}}"
                                    @endif required>
								</div>
                            </div>
                          </div>
                          <div class="col-12 ">
                            <div class="ms-auto position-relative">
                              <div class="input-group mb-3"> <span class="input-group-text" id="inputGroup-sizing-default">Buttons Color</span>
									<input type="color" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    name="button_color" 
                                    @if(!empty($advance_setting->button_color))
                                    value="{{$advance_setting->button_color}}"
                                    @endif required>
								</div>
                            </div>
                          </div>
                          <div class="col-12 ">
                            <div class="ms-auto position-relative">
                              <div class="input-group mb-3"> <span class="input-group-text" id="inputGroup-sizing-default">Copyright Footer</span>
									<input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                    name="footer_copyright" 
                                    @if(!empty($advance_setting->footer_copyright))
                                    value="{{$advance_setting->footer_copyright}}"
                                    @endif 
                                    required>
								</div>
                            </div>
                          </div>
                         

                          
                        
                          <div class="col-12">
                            <div class="d-grid">
                              <button type="submit" class="btn btn-primary radius-30">{{$title}}</button>
                            </div>
                          </div>
                         
                        
                          
                        </div>
                    </form>
                 </div>
                </div>
</main>
        
       <!--end page main-->
@endsection