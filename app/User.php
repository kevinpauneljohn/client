<?php

namespace App;

use App\Traits\Uuid;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes, HasRoles, LogsActivity, Uuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'username',
        'email',
        'password',
        'mobileNo',
        'landline',
        'birthday',
        'address',
        'refregion',
        'refprovince',
        'refcitymun',
        'postalcode',
        'category',
    ];

    protected static $logAttributes = [
        'firstname',
        'middlename',
        'lastname',
        'username',
        'email',
        'password',
        'mobileNo',
        'landline',
        'birthday',
        'address',
        'refregion',
        'refprovince',
        'refcitymun',
        'postalcode',
        'category',
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
}
