             <a href="{{route('front.chiefeditor.dashboard',$journal->id)}}" class="btn btn-success mb-1" >Dashboard</a>
            <a href="{{route('front.journal_volume',$journal->id)}}" class="btn btn-success mb-1" >Journal Volumes</a>
            <a href="{{route('front.journal_issues',$journal->id)}}" class="btn btn-success mb-1"  >Journal Issues</a>
            <a href="{{route('front.current_issues',$journal->id)}}" class="btn btn-success mb-1" >Current Issues</a>

            <a href="#" class="btn btn-success mb-1">Papers</a>

            <a href="{{route('front.article_types',$journal->id)}}" class="btn btn-success mb-1">Article Types</a>
            
            <a href="{{route('front.attachment_item',$journal->id)}}" class="btn btn-success mb-1" >Attachment s Item</a> 
       