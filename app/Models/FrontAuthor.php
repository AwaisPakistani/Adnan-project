<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontAuthor extends Model
{
    use HasFactory;
    protected $fillable = [
        'frontuser_id',
        'highest_qualification',
        'phone',
        'prefered_name',
        'position',
        'institution',
        'department',
        'address',
        'country',
        'state_province',
        'zip',
        'reviewer',
        'status',
    ];
    public function front_user_main(){
        return $this->belongsTo(Frontuser::class);
    }
}
