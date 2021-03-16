<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideShow extends Model
{
    protected $fillable = [
        'id', 'path'
    ];

    public $incrementing = false;
}
