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
                <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
            </ol>
        </nav>
    </div>
    <div class="ms-auto">
        <div class="btn-group">
            @can('view')
            <a href="{{route('admin.view_sliders')}}" class="btn btn-primary">View Slides</a>
            @endcan
        </div>
    </div>
</div>
<!--end breadcrumb-->
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
        <h4 class="mb-0">{{$title}}</h4>
        <hr/>
        <form method="post"
        action="{{route('admin.add_slider')}}" enctype="multipart/form-data"
        >@csrf
       <!-- Map src -->
        <div class="row gy-3">
            <div class="col-md-12">
                    <label for="exampleInputEmail1">Title</label><br>  
                         
                         <input type="text" class="form-control" name="title" placeholder="Enter Slider Title" 
                         >
                </div>
        </div><br>
        <div class="row gy-3">
            <div class="col-md-12">
                    <label for="exampleInputEmail1">Description</label><br>  
                         
                         <textarea type="textarea" class="form-control" name="description" placeholder="Enter Slider Description" 
                         ></textarea>
                </div>
        </div><br>
        <div class="row gy-3">
            <div class="col-md-12">
                    <label for="exampleInputEmail1">Slider Button*</label><br>  
                         
                         <input type="text" class="form-control" name="slider_button" placeholder="Enter Slider Button" 
                         >
                </div>
        </div><br>
        <div class="row gy-3">
            <div class="col-md-12">
                    <label for="exampleInputEmail1">Slider Slug*</label><br>  
                         
                         <input type="text" class="form-control" name="slider_url" placeholder="Enter Slider Slug" 
                         >
                </div>
        </div><br>
        <div class="row gy-3">
            <div class="col-md-12">
                    <label for="exampleInputEmail1">Slider Image*</label><br>  
                         
                         <input type="file" class="form-control" name="image" 
                         >
                </div>
        </div>
        
       
        <br>
        <div class="row gy-3">
           <div class="col-md-10">
             <input type="submit" class="btn btn-primary" value="Submit"> 
           </div>
        </div>
      </form>
    </div>
</div>
</main>
        
       <!--end page main-->
@endsection