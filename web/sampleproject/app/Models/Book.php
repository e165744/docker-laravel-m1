<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';

    protected $guarded = array('id');

    public $timestamps = true;

    protected $fillable = [
        'title',
    ];
}
