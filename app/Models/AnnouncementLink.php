<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnouncementLink extends Model
{
    protected $guarded = [];
    protected $dates = ['fecha'];

    public function announcement()
    {
        return $this->belongsTo(Announcement::class);
    }
}
