@extends('front.layout.main')
<link href="{{url('assets/front/dist/css/datatable.min.css')}}" rel="stylesheet">
<link href="{{url('assets/front/dist/css/cdn.css')}}" rel="stylesheet">
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
</style>
@section('content')
@include('front.inc.journal_hero')
<div class="container mb-3 mt-3">
    <div class="row">
        <div class="col-lg-12 mt-2">
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
             <div class="form-signin">
                
                 <form methed="post" action="{{route('front.chiefeditor_login',$journal->id)}}">@csrf
                     <!-- <img class="mb-4" src="{{url('storage/'.$logo->logo->url)}}" width="100%" width="72" height="57"> -->
                     
                     <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
     
                     <div class="form-floating">
                     <input type="email" class="form-control" id="floatingInput" 
                     name="email"
                     placeholder="name@example.com">
                     <label for="floatingInput">Email address</label>
                     </div>
                     <div class="form-floating">
                     <input type="password" class="form-control" id="floatingPassword" 
                     name="password"
                     placeholder="Password">
                     <label for="floatingPassword">Password</label>
                     </div>
     
                     <div class="checkbox mb-3">
                     <label>
                         <input type="checkbox" value="remember-me"> Remember me
                     </label>
                     </div>
                     <button type="submit" class="w-100 btn btn-lg btn-primary" >Sign in</button>
                     <p class="mt-2 mb-3 text-muted">Don't have an account? <a href="#">Register</a></p>
                 </form>
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
