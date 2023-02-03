
@extends('front.layout.main')
@section('content')
@include('front.inc.carousell')
<div class="container text-center mb-5">
    <div class="row">
        @foreach($categories as $category)
        <div class="col-lg-4 my-4">
            <!-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x class="my-3"140</text></svg> -->
            
            <img src="{{url('storage/'.$category->category_image->url)}}" alt="Category-image" >

            <h5 class="my-3">{{$category->category_name}}</h5>
        </div>
        @endforeach
        <!-- /.col-lg-4 -->
     
    </div>
</div>
@endsection