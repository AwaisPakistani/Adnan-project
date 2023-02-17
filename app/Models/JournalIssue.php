<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalIssue extends Model
{
    use HasFactory;
    protected $fillable = [
        'journal_issue_name',
        'journal_volume_id ',
        'journal_id ',
        'journal_issue_status',
        'year',
    ];
    public function journal(){
        return $this->belongsTo(Journal::class);
    }
    public function journal_volume(){
        return $this->belongsTo(JournalVolume::class);
    }
    public function current_issue(){
        return $this->hasOne(CurrentIssue::class);
    }
}
