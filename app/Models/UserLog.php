<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'saleman_id',
        'user_id',
        'log_in',
        'log_out',
        'login_ip',
        'shop_id',
    ];

}
