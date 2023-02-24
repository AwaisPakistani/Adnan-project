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
       
        <div class="col-lg-12 mt-2 text-end py-2" style="text-decoration:none;">
       

        <div class="content">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body">
              
              </div>
            </div>
        <div>
              <div class="card card-body">
                  <div class="row">
                      <div class="col-lg-12">
                        <span>
                          <h3 class="text-start">Article Types</h3>
                          <a href="{{route('front.add_article_type',$journal->id)}}" class="btn btn-success text-end" >Create</a>
                        </span>
                        <table @if($article_types->count() > 10) id="example" @endif class="table table-striped" style="width:100%">
                <thead>
                   
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    
                </thead>
                <tbody>
                @if(!empty($article_types))
                @php
                $sr=1;
                @endphp
                @foreach($article_types as $at)
                    <tr>
                        <td>{{$sr}}</td>
                        <td>{{$at->name}}</td>
                        <td>
                        <div class="btn-group me-2" role="group" aria-label="Second group">
                        <a href="{{url('edit-article-type/'.$journal->id.'/'.$at->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('front.article_type_delete',$at->id)}}" class="btn btn-danger">Delete</a>
                      </div>
                        </td>
                        <td></td>
                    </tr>
                    @php
                    $sr++;
                    @endphp
                @endforeach
                @else
                Data not available
                @endif
                </tbody>
                <tfoot>
                
                    <tr>
                        <th>S.No</th>
                        <th>Name</th>
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
