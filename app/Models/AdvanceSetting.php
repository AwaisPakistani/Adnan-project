<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvanceSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'main_color',
        'basic_color',
        'button_color',
        'footer_copyright',
    ];
}
