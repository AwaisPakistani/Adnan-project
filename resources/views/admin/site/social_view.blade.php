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
								<li class="breadcrumb-item active" aria-current="page">Settings</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							@can('add')
                            <a href="{{route('social_advertisement')}}" class="btn btn-primary">
                                Add New
                            </a>
							@endcan
							
							
						</div>
					</div>
				</div>
				<!--end breadcrumb--> 
				
				
				<h6 class="mb-0 text-uppercase">Admin Users</h6>
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
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>ID</th>
										<th>Social Class</th>
										<th>Social URL</th>
										<th>Created At</th>
										<th>Updated At</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($social as $social_VIEW)
									<tr>
										<td>{{$social_VIEW->id}}</td>
										<td>{{$social_VIEW->social_class}}</td>
<td>{{$social_VIEW->social_url}}</td>                                  

<td>{{$social_VIEW->created_at}}</td>
<td>{{$social_VIEW->updated_at}}</td>
										<td>
                             <div class="table-actions d-flex align-items-center gap-3 fs-6">
                               <!-- <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Views"><i class="bi bi-eye-fill"></i></a> -->
							   @can('edit')
                               <a href="{{route('social_advertisement',$social_VIEW->id)}}" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" ><i class="bi bi-pencil-fill"></i></a>
							   @endcan
							   @can('delete')
                               <a href="{{route('delete_social',$social_VIEW->id)}}" class="text-danger" data-bs-toggle="tooltip" data-bs-plaement="bottom" title="Delete" onClick="return confirm('Are you sure? YOu want to delete this social platform?')"><i class="bi bi-trash-fill"></i></a>
							   @endcan

							   
							   
                             </div>
                           </td>


										
									</tr>
                                    @endforeach
									
									
									
								</tbody>
								<tfoot>
									<tr>
                                        <th>ID</th>
										<th>Social Class</th>
										<th>Social URL</th>
										<th>Created At</th>
										<th>Updated At</th>
										<th>Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</main>
       <!--end page main-->
@endsection