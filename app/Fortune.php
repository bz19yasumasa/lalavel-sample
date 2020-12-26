<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fortune extends Model
{
    protected $fillable = [
        'date', 'date',
        'content', 'my_sign',
        'content', 'my_bloodtype',
    ];
}