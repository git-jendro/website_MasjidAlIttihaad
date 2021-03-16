<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookImage extends Model
{
    protected $fillable = [
        'id', 'path'
    ];

    public $incrementing = false;

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
