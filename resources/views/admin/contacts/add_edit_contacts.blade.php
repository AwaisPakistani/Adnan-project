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
            <button type="button" class="btn btn-primary">Settings</button>
            
          
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
        @if(!empty($findcontacts))
        action="{{route('admin.add_edit_contacts',1)}}"
        @else
        action="{{route('admin.add_edit_contacts')}}"
        @endif
        >@csrf
       <!-- Map src -->
        <div class="row gy-3">
            <div class="col-md-12">
                    <label for="exampleInputEmail1">Map Source</label><br>  
                         
                         <textarea type="textarea" class="form-control" name="map" placeholder="Enter Map src" 
                         @if(!empty($map))
                         value="{{$map}}"
                         @endif
                         >@if(!empty($map)){{$map}}@endif</textarea>
                </div>
        </div>
        
        <!-- Address -->
        <div class="row gy-3">
            <div class="col-md-12 formgroup">
                    <label for="exampleInputEmail1">Addresses</label><br>
                      <div id="addressFieldGroup">
                        @if(!empty($addresses))
                        @php
                        $n=1;
                        @endphp
                         @foreach($addresses as $n=>$address)
                        
                         <input type="text" class="form-control addressCount" name="address[]" id="address" placeholder="Enter address Link"
                         value="{{$address}}"><br>
                         @endforeach
                        @endif
                        <input type="text" class="form-control addressCount" name="address[]" id="address" placeholder="Enter address Link"><br>
                       
                      </div><br>
                    <span style="float: right;" id="addaddress"><button type="button" class="btn btn-primary">+</button></span>
                  
                </div>
        </div>
        <div class="row gy-3">
                  <div class="alert alert-danger alert-dismissible noshow" style="display:none;" id="addressalert">
                    <a href="#" class="close" data-dismiss='alert'>&times;</a>
                    <strong>Sorry ! </strong> You've reached the address fields limit
                  </div>
        </div>
        <!-- Email -->
        <div class="row gy-3">
            <div class="col-md-12 formgroupemail">
                    <label for="exampleInputEmail1">Email Addresses</label><br>
                  
                      <div id="emailFieldGroup">
                      @if(!empty($emails))
                        @php
                        $ne=1;
                        @endphp
                         @foreach($emails as $ne=>$email)
                         <input type="email" class="form-control emailCount" name="email[]" id="email"
                         value="{{$email}}" placeholder="Enter email Link"><br>
                         @endforeach
                        @endif
                        <input type="email" class="form-control emailCount" name="email[]" id="email" placeholder="Enter email Link"><br>
                      </div><br>
                    <span style="float: right;" id="add-email"><button type="button" class="btn btn-primary">+</button></span>
                  
                </div>
        </div>
        <div class="row gy-3">
                  <div class="alert alert-danger alert-dismissible noshowemail" style="display:none;" id="emailalert">
                    <a href="#" class="close" data-dismiss='alert'>&times;</a>
                    <strong>Sorry ! </strong> You've reached the email fields limit
                  </div>
        </div>
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3321.1356592924167!2d73.09691491440357!3d33.6536466460786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfebcf73fff37d%3A0xa9924240526b768d!2sInsari%20Home!5e0!3m2!1sen!2s!4v1675568364129!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
        <!-- Phone -->
        <div class="row gy-3">
            <div class="col-md-12 formgroupphone">
                    <label for="exampleInputPhone">Phone Numbers</label><br>
            p   
                      <div id="phoneFieldGroup">
                      @if(!empty($phones))
                        @php
                        $np=1;
                        @endphp
                         @foreach($phones as $np=>$phone)
                         <input type="number" class="form-control phoneCount" name="phone[]" id="phone"
                         value="{{$phone}}"
                         placeholder="Enter phone Link"><br>
                         @endforeach
                        @endif
                        <input type="number" class="form-control phoneCount" name="phone[]" id="phone"
                         placeholder="Enter phone Link"><br>
                      </div><br>
                    <span style="float: right;" id="addphone"><button type="button" class="btn btn-primary">+</button></span>
                  
                </div>
        </div>
        <div class="row gy-3">
                  <div class="alert alert-danger alert-dismissible noshowphone" style="display:none;" id="phonealert">
                    <a href="#" class="close" data-dismiss='alert'>&times;</a>
                    <strong>Sorry ! </strong> You've reached the phone fields limit
                  </div>
        </div>
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