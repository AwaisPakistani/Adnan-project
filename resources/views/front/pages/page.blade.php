
@extends('front.layout.main')
@section('content')
@include('front.inc.page_hero')
<div class="container mb-3 mt-3">
    <div class="row">
        <div class="col-lg-12">
            {!!$page->content!!}
        </div>
    </div>
</div>
@endsection
