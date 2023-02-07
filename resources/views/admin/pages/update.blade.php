<script src="https://cdn.ckeditor.com/4.20.1/full-all/ckeditor.js"></script>
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
        @can('view')
        <div class="btn-group">
            <a href="{{route('admin.view_pages')}}" class="btn btn-primary">View Pages</a>
        </div>
        @endcan
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
        action="{{route('admin.edit_page',$page_edit->id)}}"
        >@csrf
       
       <div class="row gy-3">
            <div class="col-md-12 formgroupemail">
                    <label for="exampleInputEmail1">Page Title</label><br>         
                         <input type="text" class="form-control" name="page_title"
                         @if(!empty($page_edit->page_name))
                         value="{{$page_edit->page_name}}"
                         @endif
                         placeholder="Enter Page Title"><br>
                </div>
        </div>
        <div class="row gy-3">
            <div class="col-md-12">
                    <label for="exampleInputEmail1">Meta Keywords</label><br>  
                         
                         <textarea type="textarea"  name="meta_keywords" class="form-control" 
                         @if(!empty($page_edit->meta_keywords))
                         value="{{$page_edit->meta_keywords}}"
                         @endif
                         placeholder="Enter Meta Keywords" 
                         >@if(!empty($page_edit->meta_keywords)){{$page_edit->meta_keywords}}
                         @endif</textarea>
                </div>
        </div> <br>
        <div class="row gy-3">
            <div class="col-md-12">
                    <label for="exampleInputEmail1">Meta Description</label><br>  
                         
                         <textarea type="textarea"  name="meta_description" class="form-control"
                         @if(!empty($page_edit->meta_description))
                         value="{{$page_edit->meta_description}}"
                         @endif
                         placeholder="Enter Meta Description" 
                         >@if(!empty($page_edit->meta_description)){{$page_edit->meta_description}}
                         @endif</textarea>
                </div>
        </div> <br>
        <div class="row gy-3">
            <div class="col-md-12">
                    <label for="exampleInputEmail1">Page Content</label><br>  
                         
                         <textarea type="textarea"  name="content" class="form-control"
                         @if(!empty($page_edit->content))
                         value="{{$page_edit->content}}"
                         @endif
                         placeholder="Page Content" 
                         >@if(!empty($page_edit->content)){{$page_edit->content}}
                         @endif</textarea>
                         <script>
                                    CKEDITOR.replace( 'content' );
                         </script>
                </div>
        </div> <br>
        
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