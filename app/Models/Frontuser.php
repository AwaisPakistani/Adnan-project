<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;



class Frontuser extends Authenticatable

{
    use HasFactory, Notifiable, HasRoles;
    protected $guard='frontuser';
}
