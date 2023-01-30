<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siteintro extends Model
{
    use HasFactory;
    public function site_icon(){
        return $this->morphOne(Image::class,'imageable');
    }

    public function logo(){
        return $this->morphOne(Image::class,'imageable');
    }
}
