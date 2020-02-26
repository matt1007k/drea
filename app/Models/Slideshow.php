<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slideshow extends Model
{
    protected $guarded = [];

    protected $dates = ['fecha'];
    protected $appends = ['fecha_format'];

    public function getFechaFormatAttribute()
    {
        return $this->fecha->format('d F, Y');
    }

    public function getImagenUpdated()
    {
        if (request()->file('imagen')) {
            $this->deleteStorageImage();
            return request()->file('imagen')->store('slideshows', 'public');
        } else {
            return $this->imagen;
        }
    }

    public function scopePublished($query)
    {
        return $query->where('publicado', true);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('titulo', 'LIKE', "%$search%")
            ->orWhere('descripcion', 'LIKE', "%$search%");
    }

    public function pathImage()
    {
        return Storage::disk('public')->exists($this->imagen)
            ? Storage::url($this->imagen)
            : "";
    }

    public function deleteStorageImage()
    {
        if (Storage::disk('public')->exists($this->imagen)) {
            Storage::disk('public')->delete($this->imagen);
        }
    }

    public function deleteSlideshow()
    {
        $this->delete();
        $this->deleteStorageImage();
    }
}
