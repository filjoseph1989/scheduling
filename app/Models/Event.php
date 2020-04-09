<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'date_begin',
        'date_end',
        'days',
        'title',
        'user_id',
    ];
}
