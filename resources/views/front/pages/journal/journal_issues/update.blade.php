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
                        <h3>Journal Issues</h3>
                        <div>
                            <form method="post" action="{{url('edit-journal-issue/'.$journal->id.'/'.$issue->id)}}">@csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Issue Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" 
                                name="issue_name" 
                                value="{{$issue->journal_issue_name}}" 
                                Placeholder="Enter Issue"
                                aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Volume</label>
                                <select class="form-select" aria-label=".form-select-lg example" name="issue_volume" required>
                                    <option value="{{$issue->journal_volume->id}}">{{$issue->journal_volume->journal_volume_name}}</option>
                                    @foreach($volumes as $vol)
                                    <option value="{{$vol->id}}">{{$vol->journal_volume_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            

                        </div>
                      </div>
                      <div class="col-lg-6">
                      <a href="{{route('front.journal_issues',$journal->id)}}" class="btn btn-success text-end" >View Journal Issues</a>
                            <div class="mb-3 text-start">
                               <label for="exampleInputEmail1" class="form-label">Issue Status</label>
                                <select class="form-select" aria-label=".form-select-lg example" name="issue_status" required>
                                <option value="pending" 
                                    @if($issue->journal_issue_status=='pending')
                                    selected 
                                    @endif
                                    >Pending</option>
                                    <option 
                                    @if($issue->journal_issue_status=='approved')
                                    selected 
                                    @endif
                                    value="approved">Approved</option>
                                    <option 
                                    @if($issue->journal_issue_status=='banned')
                                    selected 
                                    @endif
                                    value="banned">Banned</option>
                                </select>
                            </div>
                            <div class="mb-3 text-start">
                                <label for="exampleInputEmail1" class="form-label">Date</label>
                                <input type="date" class="form-control" id="exampleInputEmail1" 
                                name="year" 
                                value="{{$issue->year}}"
                                Placeholder="Enter Year"
                                aria-describedby="emailHelp" required>
                            </div>
                      </div>
                  </div>
                  <div class="row">
                     <div class="col-lg-12 text-start">
                            <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                     </form>
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
