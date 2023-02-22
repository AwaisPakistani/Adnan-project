@extends('front.layout.main')
<link href="{{url('assets/front/dist/css/datatable.min.css')}}" rel="stylesheet">
<link href="{{url('assets/front/dist/css/cdn.css')}}" rel="stylesheet">
@section('content')
@include('front.inc.journal_content_hero')
<div class="container mb-3 mt-3">
    <div class="row">
    <div class="col-lg-12 text-center">
    @include('front.inc.pages_journal_buttons')
    </div>
    </div>
    <div class="row">
    @include('front.inc.alerts')
        <!-- <div class="col-lg-4 mt-2">
            <div class="py-3 text-center" style="background-color:{{$advancesetting->main_color}};color:{{$advancesetting->basic_color}}; border-top-left-radius:25px; border-bottom-right-radius:25px;">
                <img src="{{url('storage/'.$chief->image)}}" alt="Profile" width="150px" heidht="150px" class="img-responsive rounded-circle"><br>
                <br>
                <h3>{{$chief->first_name}} {{$chief->last_name}}</h3><br>
            </div>
        </div> -->
        <div class="col-lg-12 mt-2 text-end py-2" style="text-decoration:none;">
       

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
                      <div class="col-lg-12">
                        <span>
                          <h3 class="text-start">Journal Volume</h3>
                          <a href="{{route('front.add_journal_volume',$journal->id)}}" class="btn btn-success text-end" >Create</a>
                        </span>
                        <table @if($journal_volumes->count() > 10) id="example" @endif class="table table-striped" style="width:100%">
                <thead>
                   
                    <tr>
                        <th>S.No</th>
                        <th>Volume Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    
                </thead>
                <tbody>
                @php
                $sr=1;
                @endphp
                @foreach($journal_volumes as $volume)
                    <tr>
                        <td>{{$sr}}</td>
                        
                        <td>
                       
                            {{$volume->journal_volume_name}}
                        
                        </td>
                        <td>
                        <div class="badge rounded-pill 
                        @if($volume->journal_volume_status=='pending')
                        bg-warning
                        @elseif($volume->journal_volume_status=='approved')
                        bg-success
                        @else
                        btn-danger
                        @endif
                        ">
                          {{$volume->journal_volume_status}}
                        </div>  
                        </td>
                        <td>
                        <div class="btn-group me-2" role="group" aria-label="Second group">
                        <a href="{{url('edit-journal-volume/'.$journal->id.'/'.$volume->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('front.journal_volume_delete',$volume->id)}}" class="btn btn-danger">Delete</a>
                      </div>
                        </td>
                    </tr>
                    @php
                    $sr++;
                    @endphp
                @endforeach
                </tbody>
                <tfoot>
                
                    <tr>
                        <th>S.No</th>
                        <th>Volume Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                
                </tfoot>
            </table>
                      
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
