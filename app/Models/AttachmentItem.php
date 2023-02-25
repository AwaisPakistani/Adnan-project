<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttachmentItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'frontuser_id',
        'journal_id',
        'status',
    ];
    public function journal(){
        return $this->belongsTo(Journal::class);
    }
}
