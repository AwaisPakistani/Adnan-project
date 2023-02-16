<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalVolume extends Model
{
    use HasFactory;
    protected $fillable = [
        'journal_volume_name',
        'journal_id ',
        'journal_volume_status',
    ];
    public function journal(){
        return $this->belongsTo(Journal::class);
    }
    public function journal_volume_issues(){
        return $this->hasMany(JournalIssue::class);
    }
    public function current_issue(){
        return $this->hasOne(CurrentIssue::this);
    }
}
