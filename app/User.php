<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table        = 'Users';
    protected $guarded      = ['id'];
    public $incrementing    = false;
    protected $connection = 'mysql';

    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    'password',
    ];
}
