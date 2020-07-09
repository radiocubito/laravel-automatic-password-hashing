<?php

namespace Radiocubito\AutomaticPasswordHashing\Tests\Fixtures;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Radiocubito\AutomaticPasswordHashing\HashPassword;

class User extends Authenticatable
{
    use Notifiable, HashPassword;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
