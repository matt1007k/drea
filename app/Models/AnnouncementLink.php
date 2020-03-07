<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class AnnouncementLink extends Model
{
    protected $guarded = [];
    protected $dates = ['fecha'];

    public function getFechaAttribute($date)
    {
        return new Date($date);
    }

    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }
}
