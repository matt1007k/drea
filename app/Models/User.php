<?php

namespace App\Models;

use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Jenssegers\Date\Date;

class User extends Authenticatable
{
    use Notifiable, HasRolesAndPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getCreatedAtAttribute($date)
    {
        return new Date($date);
    }

    public function setPasswordAttribute($password)
    {
        // if (request()->has('password')) {
        $this->attributes['password'] = Hash::make($password);
        // }
    }

    public function deleteRoles()
    {
        $this->removeRoles($this->roles->pluck('slug'));
    }
}
