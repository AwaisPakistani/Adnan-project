
       
 
            <button class="btn" style="background-color:{{$advancesetting->button_color}}; color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Dashboard</button>
            <a href="{{route('front.journal_volume',$journal->id)}}" class="btn" style="background-color:{{$advancesetting->button_color}}; color:white;">Journal Volumes</a>
            <a href="{{route('front.journal_issues',$journal->id)}}" class="btn" style="background-color:{{$advancesetting->button_color}}; color:white;" >Journal Issues</a>
            <a href="{{route('front.current_issues',$journal->id)}}" class="btn" style="background-color:{{$advancesetting->button_color}}; color:white;">Current Issues</a>
            <button class="btn" style="background-color:{{$advancesetting->button_color}}; color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Papers</button>
            <button class="btn" style="background-color:{{$advancesetting->button_color}}; color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Article Types</button>
            <button class="btn" style="background-color:{{$advancesetting->button_color}}; color:white;" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Attachment s Item</button> 
       