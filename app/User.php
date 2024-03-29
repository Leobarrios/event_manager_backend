<?php

namespace App;

use Laravel\Passport\HasApiTokens;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * 
     */
    protected $fillable = [
        'name', 'email', 'password', 'bithdate',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * 
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    
}
