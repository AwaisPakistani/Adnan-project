<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'category_status',
    ];
    public function category_image(){
        return $this->morphOne(Image::class,'imageable');
    }
    public function journals(){
        return $this->hasMany(Journal::class);
    }
}
