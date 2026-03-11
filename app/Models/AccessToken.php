<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessToken extends Model
{
    protected $table = 'access_token';
    protected $fillable = ['name', 'token', 'level', 'expires_at'];
}
