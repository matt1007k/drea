<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Jenssegers\Date\Date;

class Ad extends Model
{
    protected $guarded = [];

    public function getCreatedAtAttribute($date)
    {
        return new Date($date);
    }

    public function scopePublished($query)
    {
        return $query->where('publicado', true);
    }

    public function pathImage()
    {
        return Storage::disk('public')->exists($this->imagen)
        ? Storage::url($this->imagen)
        : "";
    }

    public function getImagenUpdated()
    {
        if (request()->file('imagen')) {
            $this->deleteStorageImage();
            return request()->file('imagen')->store('ads', 'public');
        } else {
            return $this->imagen;
        }
    }

    public function deleteStorageImage()
    {
        if (Storage::disk('public')->exists($this->imagen)) {
            Storage::disk('public')->delete($this->imagen);
        }
    }

    public function deleteAd()
    {
        $this->delete();
        $this->deleteStorageImage();
    }
}
