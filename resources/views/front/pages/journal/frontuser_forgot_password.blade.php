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
    @include('front.inc.alerts')
    <div class="row">
        <div class="col-lg-12 mt-2">
      
             <div class="form-signin">
                
                 <form methed="post" action="{{route('user.frontuser_forgot_pwd',$journal->id)}}">@csrf
                     
                     <h1 class="h3 mb-3 fw-normal">Please Enter your Email</h1>
                     <div class="form-floating">
                     <input type="email" class="form-control" id="floatingInput" 
                     name="email"
                     placeholder="name@example.com" required>
                     <label for="floatingInput">Email address</label>
                     </div>
                   
     
                    
                     <button type="submit" class="w-100 btn btn-lg btn-primary" >Submit</button>
                 </form>
             </div>
        
        </div>
       
    </div>
</div>

@endsection
<script src="{{url('assets/front/dist/js/jquery.min.js')}}"></script>
 
   
