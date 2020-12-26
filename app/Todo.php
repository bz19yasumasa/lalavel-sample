<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'task','priority','deadline','status','user_id','name'
    ];
}
