<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exp extends Model
{
    protected $table = 'experiences';
    protected $fillable = [
        'date',
        'title',
        'description',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
