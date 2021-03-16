<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'id', 'name', 'publisher', 'stock', 'desc'
    ];

    public $incrementing = false;

    public function image()
    {
        return $this->hasMany(BookImage::class);
    }
}
