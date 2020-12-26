<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bloodtype extends Model
{
    protected $fillable = [
        'date', 'date',
        'content', 'A',
        'content', 'B',
        'content', 'AB',
        'content', 'O'
    ];
}
