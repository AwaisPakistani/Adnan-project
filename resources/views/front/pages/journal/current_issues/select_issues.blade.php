<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Issue</label>
        <select class="form-select" aria-label=".form-select-lg example" name="issue" required>
            @foreach($issues->journal_volume_issues as $issue)                            
            <option value="{{$issue->id}}">{{$issue->journal_issue_name}}</option>
            @endforeach
        </select>
</div>
                            