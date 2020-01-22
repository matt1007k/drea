<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'avisos';
    protected $guarded = [];
    protected $dates = [
        'fecha'
    ];
}
