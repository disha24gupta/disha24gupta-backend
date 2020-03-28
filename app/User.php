<?php

namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class User extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'user';

        protected $fillable = [
            'name', 'email', 'password', 'user_type'
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }