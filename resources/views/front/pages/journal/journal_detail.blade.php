@extends('front.layout.main')
<link href="{{url('assets/front/dist/css/datatable.min.css')}}" rel="stylesheet">
<link href="{{url('assets/front/dist/css/cdn.css')}}" rel="stylesheet">
@section('content')
@include('front.inc.journal_hero')
<div class="container mb-3 mt-3">
    <div class="row">
        <div class="col-lg-8 mt-2">
        <h3>Volume List</h3>
        </div>
        <div class="col-lg-4 mt-2 text-start text-decoration-none py-2" style="text-decoration:none;">
            <h3>Journal Information</h3>
         
            <span>{!!$journal->information!!}</span><br>
            <span><b>Category:</b>&nbsp;&nbsp;{{$journal->category->category_name}}</span><br>
            <span><b>ISSN:</b>&nbsp;&nbsp;{{$journal->issn}}</span><br>
            <span><b>More Information About Journal:</b>&nbsp;&nbsp;<a href="{{url('storage/'.$journal->more_info)}}" target="__blank" class="btn btn-success btn-sm">Read >></a></span><br>
            <span><b>Author Guideline:</b>&nbsp;&nbsp;<a href="{{url('storage/'.$journal->author_guideline)}}" class="btn btn-success btn-sm" target="__blank">Read >></a></span><br>
            <span >
                <a href="#" class="text-decoration-none">Current Issue</a> | <a href="#" class="text-decoration-none">Available Issues</a>
            </span><br><br>
            <a href="{{route('front.chiefeditor.login',$journal->id)}}" class="btn btn-success btn-sm text-decoration-none">Submit New Manuscript</a>
         
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
