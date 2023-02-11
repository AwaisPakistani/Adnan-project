
@extends('front.layout.main')
@section('content')
@include('front.inc.carousell')
<div class="container text-center mb-5">
    <div class="row">
        @foreach($categories as $category)
        <div class="col-lg-4 my-4 mainhome">
            <a href="{{route('front.view_category_detail',$category->id)}}" style="text-decoration:none;">
                <img src="{{url('storage/'.$category->category_image->url)}}" alt="Category-image" >
    
                <h5 class="my-3">{{$category->category_name}}</h5>
            </a>  
        </div>
        @endforeach
        <!-- /.col-lg-4 -->
     
    </div>
</div>
@endsection