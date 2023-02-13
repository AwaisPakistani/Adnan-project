@extends('front.layout.main')
<link href="{{url('assets/front/dist/css/datatable.min.css')}}" rel="stylesheet">
<link href="{{url('assets/front/dist/css/cdn.css')}}" rel="stylesheet">
@section('content')
@include('front.inc.category_hero')
<div class="container mb-3 mt-3">
    <div class="row">
        <div class="col-lg-9 mt-2">
            <h3>Journals related {{$category->category_name}}</h3>
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                   
                    <tr>
                        <th>S.No</th>
                        <th>Journal Name</th>
                        <th>ISSN/ISBN</th>
                        <th>Content</th>
                    </tr>
                    
                </thead>
                <tbody>
                @php
                $sr=1;
                @endphp
                @foreach($category->journals as $journal)
                    <tr>
                        <td>{{$sr}}</td>
                        
                        <td>
                        <a href="{{route('front.journal_detail',$journal->id)}}" style="text-decoration:none; color:;#ff8000">
                            {{$journal->journal_name}}
                        </a>
                        </td>
                       

                        <td>{{$journal->issn}}</td>
                        <td>{!!$journal->information!!}</td>
                    </tr>
                    @php
                    $sr++;
                    @endphp
                @endforeach
                </tbody>
                <tfoot>
                
                    <tr>
                        <th>S.No</th>
                        <th>Journal Name</th>
                        <th>ISSN/ISBN</th>
                        <th>Content</th>
                    </tr>
                
                </tfoot>
            </table>
        </div>
        <div class="col-lg-3 mt-2 text-end py-2" style="text-decoration:none;">
            <h3>OTHER CATEGORIES</h3>
         
            @foreach($categories_all as $cats)
            <a href="{{route('front.view_category_detail',$cats->id)}}" style="text-decoration:none;">
                <span>{{$cats->category_name}}</span>
            </a><br>
            @endforeach
         
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
