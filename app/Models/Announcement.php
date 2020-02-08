<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $guarded = [];
    protected $dates = ['fecha'];

    public function getFechaFormatAttribute()
    {
        return $this->fecha->format('d M yy');
    }

    public function grupo()
    {
        return $this->belongsTo(AnnouncementGroup::class);
    }

    public function scopeByGroup($query, $group)
    {
        return $query->whereHas('grupo', function ($q) use ($group) {
            $q->where('nombre', 'LIKE', "%$group%");
        });
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('titulo', 'LIKE', "%$search%")
            ->orWhere('numero', 'LIKE', "%$search%");
    }
}
