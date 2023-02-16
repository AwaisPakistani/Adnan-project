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
        
        <div class="col-lg-4 mt-2">
            <div class="py-3 text-center" style="background-color:{{$advancesetting->main_color}};color:{{$advancesetting->basic_color}}; border-top-left-radius:25px; border-bottom-right-radius:25px;">
                <img src="{{url('storage/'.$chief->image)}}" alt="Profile" width="150px" heidht="150px" class="img-responsive rounded-circle"><br>
                <br>
                <h3>{{$chief->first_name}} {{$chief->last_name}}</h3><br>
            </div>
        </div>
        <div class="col-lg-8 mt-2 text-end py-2" style="text-decoration:none;">
       

        <div class="content">
           
            <div>
              <div class="card card-body">
                  <div class="row">
                      <div class="col-lg-6 text-start">
                        <h3>Current Issues</h3>
                        <div>
                            <form method="post" action="{{route('front.add_journal_current_issue',$journal->id)}}">@csrf
                           
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Volume</label>
                                <select class="form-select current_issue_volume" 
                                id="current_issue_volume"
                                aria-label=".form-select-lg example" name="volume" required>
                                    @foreach($volumes as $vol)
                                    <option value="{{$vol->id}}">{{$vol->journal_volume_name}}</option>
                                    @endforeach
                                </select>
                                <input type="hidden" id="current_issue_journal" value="{{$journal->id}}" name="journal">
                            </div>
                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Issue</label>
                                <select class="form-select" aria-label=".form-select-lg example" name="issue" required>
                                   <option>Select</option>
                                   <option>Select2</option>
                                </select>
                            </div>
                            
                            

                        </div>
                      </div>
                      <div class="col-lg-6">
                      <a href="{{route('front.current_issues',$journal->id)}}" class="btn text-end" style="background-color:{{$advancesetting->button_color}}; color:white;">View Current Issues</a>
                            
                           
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

<Script>

  
</Script>

