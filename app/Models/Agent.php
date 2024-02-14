<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Agent extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'agent_id',
        'role_id',
        'first_name',
        'last_name',
        'email',
        'email_verified_at',
        'address',
        'phone_number',
        'password',
        'gender',
        'date_of_birth',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];



    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_of_birth' => 'date',
    ];

    protected $guard = 'agent';
}
