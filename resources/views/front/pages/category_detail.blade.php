
@extends('front.layout.main')
@section('content')
@include('front.inc.category_hero')
<div class="container mb-3 mt-3">
    <div class="row">
        <div class="col-lg-12">
            {{$category->category_name}}
        </div>
    </div>
</div>
@endsection
