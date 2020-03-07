<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class AnnouncementGroup extends Model
{
    protected $guarded = [];

    public function getCreatedAtAttribute($date)
    {
        return new Date($date);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('nombre', 'LIKE', "%$search%")
            ->orWhere('anio', 'LIKE', "%$search%");
    }

    public function scopeYear($query, $year)
    {
        return $query->where('anio', $year);
    }

    public function convocatorias()
    {
        return $this->hasMany(Announcement::class, 'grupo_id');
    }
}
