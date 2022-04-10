<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{

    use HasApiTokens,HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'phone_number',
        'gender',
        'date_birth',
        'nid_passport',
        'bmdc',
        'title',
        'image',
        'doctor_approved_status',
        'patient_status',
        'user_status',
        'status',
        'user_type',
        'password',
        'verify_code',
        'verify_expires_at',
        'lang',
        'lang_status',
        'last_login',
        'login_ip',
        'userlog_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function resetTwoFactorCode()
    {

        $this->verify_code = "null";
        $this->verify_expires_at = "null";
        $this->save();
    }




}
