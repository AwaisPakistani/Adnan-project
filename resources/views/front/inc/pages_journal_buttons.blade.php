             <a href="{{route('front.chiefeditor.dashboard',$journal->id)}}" class="btn btn-success mb-1" style="width:170px;" >Dashboard</a>
            <a href="{{route('front.journal_volume',$journal->id)}}" class="btn btn-success mb-1" style="width:170px;" >Journal Volumes</a>
            <a href="{{route('front.journal_issues',$journal->id)}}" class="btn btn-success mb-1" style="width:170px;"  >Journal Issues</a>
            <a href="{{route('front.current_issues',$journal->id)}}" class="btn btn-success mb-1" style="width:170px;" >Current Issues</a>

            <a href="#" class="btn btn-success mb-1" style="width:170px;">Papers</a>

            <a href="{{route('front.article_types',$journal->id)}}" class="btn btn-success mb-1" style="width:170px;">Article Types</a>
            
            <a href="{{route('front.attachment_item',$journal->id)}}" class="btn btn-success mb-1" style="width:170px;" >Attachment s Item</a> 
       