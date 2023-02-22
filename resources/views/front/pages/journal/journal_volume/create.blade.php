@extends('front.layout.main')
<link href="{{url('assets/front/dist/css/datatable.min.css')}}" rel="stylesheet">
<link href="{{url('assets/front/dist/css/cdn.css')}}" rel="stylesheet">
@section('content')
@include('front.inc.journal_content_hero')
<div class="container mb-3 mt-3">
    <div class="row">
      @include('front.inc.alerts')
       <div class="col-lg-12 text-center">
       @include('front.inc.pages_journal_buttons')
       </div>
      </div>
    <div class="row">
        
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
              
              </div>
            </div>
            <div>
              <div class="card card-body">
                  <div class="row">
                      <div class="col-lg-6 text-start">
                        <h3>Journal Volume</h3>
                        <div>
                            <form method="post" action="{{route('front.add_journal_volume',$journal->id)}}">@csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Volume Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" 
                                name="volume_name" 
                                Placeholder="Enter Volume Name"
                                aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Volume Status</label>
                                <select class="form-select" aria-label=".form-select-lg example" name="volume_status" required>
                                    <option value="pending">Pending</option>
                                    <option value="approved">Approved</option>
                                    <option value="banned">Banned</option>
                                </select>
                            </div>
                            <div class="mb-3">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>

                        </div>
                      </div>
                      <div class="col-lg-6 text-end">
                      <a href="{{route('front.journal_volume',$journal->id)}}" class="btn btn-success">View Volumes</a>
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
