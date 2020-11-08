<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class Customer extends Authenticable
{
    protected $fillable = [
        'username',
        'email',
        'password'
    ];
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function setPasswordAttribute($val)
    {
        return $this->attributes['password'] = bcrypt($val);
    }
}
