@extends('front.layout.main')
<link href="{{url('assets/front/dist/css/datatable.min.css')}}" rel="stylesheet">
<link href="{{url('assets/front/dist/css/cdn.css')}}" rel="stylesheet">
@section('content')
@include('front.inc.journal_content_hero')
<div class="container mb-3 mt-3">
    <div class="row">
       <div class="col-lg-12 text-center">
       
 
            <button class="btn" style="background-color:{{$advancesetting->button_color}}; color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Dashboard</button>
            <a href="{{route('front.add_journal_volume',$journal->id)}}" class="btn" style="background-color:{{$advancesetting->button_color}}; color:white;">Journal Volumes</a>
            <button class="btn" style="background-color:{{$advancesetting->button_color}}; color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#journal_issues" aria-expanded="false" aria-controls="multiCollapseExample2">Journal Issues</button>
            <button class="btn" style="background-color:{{$advancesetting->button_color}}; color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Current Issue</button>
            <button class="btn" style="background-color:{{$advancesetting->button_color}}; color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Papers</button>
            <button class="btn" style="background-color:{{$advancesetting->button_color}}; color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Article Types</button>
            <button class="btn" style="background-color:{{$advancesetting->button_color}}; color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Attachment s Item</button> 
       </div>
      </div>
    <div class="row">
        
        <div class="col-lg-4 mt-2">
            <div class="py-3 text-center" style="background-color:{{$advancesetting->main_color}};color:{{$advancesetting->basic_color}}; border-top-left-radius:25px; border-bottom-right-radius:25px;">
                <img src="{{url('storage/'.$chief->image)}}" alt="Profile" width="150px" heidht="150px" class="img-responsive rounded-circle"><br>
                <br>
                <h3>{{$chief->first_name}} {{$chief->last_name}}</h3><br>
            </div>
        </div>
        <div class="col-lg-8 mt-2 text-end py-2" style="text-decoration:none;">
       

        <div class="content">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body">
              <div class="alerts">
                  @if(Session::has('success_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success_message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
                  @if(Session::has('error_message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{Session::get('error_message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif
               </div>
              </div>
            </div>
            <div>
              <div class="card card-body">
                  <div class="row">
                      <div class="col-lg-12 text-start">
                        <h3>Journal Volume</h3>
                      </div>
                  </div>
              </div>
            </div>

            <div class="collapse multi-collapse" id="journal_issues">
              <div class="card card-body">
                  <div class="row">
                      <div class="col-lg-6 text-start">
                        <h3>Journal Issues</h3>
                      </div>
                      <div class="col-lg-6">
                        <a href="#" class="btn btn-sm" style="background-color:{{$advancesetting->button_color}}; color:white;">Create</a>
                      </div>
                  </div>
              </div>
            </div>
        </div>
        
        
         
        </div>
    </div>
</div>

@endsection
<script src="{{url('assets/front/dist/js/jquery.min.js')}}"></script>
    <script src="{{url('assets/front/dist/js/datatable_net.min.js')}}"></script>
    <script src="{{url('assets/front/dist/js/datatable.min.js')}}"></script>
    <script>
    $(document).ready(function () {
    $('#example').DataTable();
    });
</script>
