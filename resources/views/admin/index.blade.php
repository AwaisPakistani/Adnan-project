@php 
use App\Models\User;
$admin=User::with('roles')->where('id',Auth::user()->id)->first();
//dd($admin->roles[0]->name);
@endphp
@extends('admin.layout.master')
@section('content')
<main class="page-content">
<div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4">
              <div class="col">
<div class="card radius-10 bg-tiffany">
                  <div class="card-body text-center">
                    <div class="widget-icon mx-auto mb-3 bg-white-1 text-white">
                      <i class="lni lni-user"></i>
                    </div>
                     <h3 class="text-white" style="text-transform: capitalize;">{{Auth::user()->name}}</h3>
                     <p class="mb-0 text-white">({{$admin->roles[0]->name}})</p>
                  </div>
                </div>
                
</div>
</div>
</main>
@endsection