<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    protected $fillable = [
        'name',
        'time_in',
        'break_time',
        'time_out',
    ];
}
