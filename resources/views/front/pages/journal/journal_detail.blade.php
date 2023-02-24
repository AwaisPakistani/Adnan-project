@php 
use App\Models\JournalVolume;
@endphp
@extends('front.layout.main')
<link href="{{url('assets/front/dist/css/datatable.min.css')}}" rel="stylesheet">
<link href="{{url('assets/front/dist/css/cdn.css')}}" rel="stylesheet">
@section('content')
@include('front.inc.journal_hero')
<div class="container mb-3 mt-3">
    <div class="row">
        <div class="col-lg-8 mt-2">
        <h3>Volume List</h3>
        <ul>
            @foreach($journal->Journal_volumes as $vol)
            <li>{{$vol->journal_volume_name}}
                <ul>
                    @php
                    $issues=JournalVolume::with('journal_volume_issues')->where('id',$vol->id)->first();
                    @endphp
                    @foreach($issues->journal_volume_issues as $issue)
                   <li>{{$issue->journal_issue_name}}</li>
                   @endforeach
                   
                </ul>
            </li>
            @endforeach
        </ul>
        </div>
        <div class="col-lg-4 mt-2 text-start text-decoration-none py-2" style="text-decoration:none;">
            <h4 style="background-color:green; padding:15px; color:white;">Journal Information</h4>
         
            <span>{!!$journal->information!!}</span>
            <a href="{{route('front.chiefeditor.login',$journal->id)}}" class="text-decoration-none">Submit New Manuscript</a><br>
            <span><b>Category:</b>&nbsp;&nbsp;
            {{$journal->category->category_name}}</span><br>
            <span><b>ISSN:</b>&nbsp;&nbsp;{{$journal->issn}}</span><br>
            <span><b>More Information About Journal:</b>&nbsp;&nbsp;<a href="{{url('storage/'.$journal->more_info)}}" target="__blank" class="text-decoration-none">Click here</a></span><br>
            <span><b>Author Guideline:</b>&nbsp;&nbsp;<a href="{{url('storage/'.$journal->author_guideline)}}" class="text-decoration-none" target="__blank">Click here</a></span><br>
            <span >
                <a href="#" class="text-decoration-none">Current Issue</a> | <a href="#" class="text-decoration-none">Available Issues</a>
            </span><br><br>
            
         
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
