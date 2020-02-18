<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $guarded = [];

    public function scopeSearch($query, $search)
    {
        return $query->where('titulo', 'LIKE', "%$search%");
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
