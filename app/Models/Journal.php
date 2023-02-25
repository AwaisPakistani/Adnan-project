<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $fillable = [
        'journal_name',
        'journal_slug',
        'issn',
        'scope_and_aim',
        'category_id',
        'assign_chiefeditor',
        'more_info',
        'information',
        'Indexing_or_abstracting',
        'author_guideline',
        'days_review',
        'days_decision',
        'days_submission',
        'days_accept',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'image',
        'user_id',
        'author_id',
        'last_volume',
        'last_issue',
        'notification',
        'status',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function Journal_volumes(){
        return $this->hasMany(JournalVolume::class);  
    }
    public function Journal_issues(){
        return $this->hasMany(JournalIssue::class);  
    }
    public function article_types(){
        return $this->hasMany(ArticleType::class);  
    }
    public function attachment_items(){
        return $this->hasMany(AttachmentItem::class);  
    }
}
