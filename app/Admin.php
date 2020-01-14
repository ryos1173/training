<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Notification\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class Admin extends Model
class Admin extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = [
        'name', 'email', 'password',
        ];
        
    protected $hidden = [
        'password', 'remember_token',
    ];
}

