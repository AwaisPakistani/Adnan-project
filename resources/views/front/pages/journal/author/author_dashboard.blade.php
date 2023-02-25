@extends('front.layout.main')
<link href="{{url('assets/front/dist/css/datatable.min.css')}}" rel="stylesheet">
<link href="{{url('assets/front/dist/css/cdn.css')}}" rel="stylesheet">
<style>
 .author-links a{
    text-decoration:none;
 }
 .author-links a:hover{
    color:#ff8000;
 }
</style>
@section('content')
@include('front.inc.journal_content_hero')
<div class="container mb-3 mt-3">
    <div class="row">
       <div class="col-lg-12 text-center">
       @include('front.inc.author.buttons')
       </div>
      </div>
    <div class="row">
    
        <div class="col-lg-12 mt-2 text-end py-2 text-start" style="text-decoration:none;">
        @include('front.inc.alerts')
        <div class="author-links text-start px-5 py-2">
            <div class="name">
                
                Welcome dear, 
                @php
                echo $author=Auth::guard('frontuser')->user()->first_name;
                echo ' ';
                echo Auth::guard('frontuser')->user()->last_name;
                @endphp
            </div>
            <br>
            <ul>
                <li>
                    <a href="{{route('front.paper_submit_new',$journal->id)}}">
                        Submit a new Manuscript
                    </a>
                </li>
                <li>
                    <a href="#">
                        Incomplete Submissions
                    </a>
                </li>
                <li>
                    <a href="#">
                        Complete Submissions
                    </a>
                </li>
                <li>
                    <a href="#">
                        Notifications
                    </a>
                </li>
                <li>
                    <a href="#">
                        Request a Role
                    </a>
                </li>
                <li>
                    <a href="#">
                        Update Profile
                    </a>
                </li>
            </ul>
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
