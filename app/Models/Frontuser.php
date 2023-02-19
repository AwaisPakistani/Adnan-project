<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class Frontuser extends Authenticatable

{
    use HasFactory, Notifiable, HasRoles;
    protected $guard='frontuser';
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'image',
        'password',
        'status',
    ];
    public function author(){
        return $this->hasOne(FrontAuthor::class);
    }
    
}
