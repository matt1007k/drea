<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Announcement extends Model
{
    protected $guarded = [];
    protected $dates = ['fecha'];

    public function getFechaAttribute($date)
    {
        return new Date($date);
    }

    public function getFechaFormatAttribute()
    {
        return $this->fecha->format('d F, Y');
    }

    public function grupo()
    {
        return $this->belongsTo(AnnouncementGroup::class);
    }

    public function links()
    {
        return $this->hasMany(AnnouncementLink::class);
    }

    public function scopeByGroup($query, $group)
    {
        return $query->whereHas('grupo', function ($q) use ($group) {
            $q->where('nombre', 'LIKE', "%$group%")
                ->orWhere('anio', 'LIKE', "%$group%");
        });
    }

    public function scopeNewest($query)
    {
        return $query->orderBy('fecha', 'DESC');
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('titulo', 'LIKE', "%$search%")
            ->orWhere('numero', 'LIKE', "%$search%")
            ->orWhere('estado', 'LIKE', "%$search%");
    }
}
