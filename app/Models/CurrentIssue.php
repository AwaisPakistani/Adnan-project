<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentIssue extends Model
{
    use HasFactory;
    protected $fillable = [
        'frontuser_id',
        'journal_id',
        'journal_volume_id',
        'issue_id',
        'deleted_at',
    ];
    public function journal_volume(){
        return $this->belongsTo(JournalVolume::class);
    }
    public function journal_issue(){
        return $this->belongsTo(JournalIssue::class);
    }
}
