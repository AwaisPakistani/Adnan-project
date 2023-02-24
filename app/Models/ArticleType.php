<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'frontuser_id',
        'journal_id',
        'status',
    ];
    public function journal(){
        return $this->belongsTo(Journal::class);
    }
}
