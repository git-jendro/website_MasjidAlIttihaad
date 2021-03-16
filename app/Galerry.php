<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galerry extends Model
{
    protected $fillable = [
        'id', 'path', 'link'
    ];

    public $incrementing = false;
}
