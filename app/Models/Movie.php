<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'img_link',
        'genre',
        'release_date',
        'description'
    ];

    protected $dates = ['release_date'];

    protected $casts = [
        'release_date' => 'date:Y-m-d'
    ];
}
