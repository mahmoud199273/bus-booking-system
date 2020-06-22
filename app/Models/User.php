<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable 
{
    //

    use Notifiable;

    protected $table = 'users';
    protected $guarded = [];

    protected $hidden = [
        'password', 'remember_token'
    ];
}
