<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sign extends Model
{
    protected $fillable = [
        'date', 'Aries', 'Taurus', 'Gemini', 'Cancer', 'Leo',
        'Virgo', 'Libra', 'Scopio', 'Sagittarious', 'Capricorn',
        'Aquarius', 'Pisces',
    ];
}
