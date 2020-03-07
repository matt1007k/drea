<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Jenssegers\Date\Date;

class Album extends Model
{
    protected $guarded = [];
    protected $table = 'albumes';

    protected $dates = ['fecha'];
    protected $appends = ['fecha_format'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getFechaAttribute($date)
    {
        return new Date($date);
    }

    public function getFechaFormatAttribute()
    {
        return $this->fecha->format('d F, Y');
    }

    public function getImagenUpdated()
    {
        if (request()->file('imagen')) {
            $this->deleteStorageImage();
            return request()->file('imagen')->store('albumes', 'public');
        } else {
            return $this->imagen;
        }
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
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

    public function pathPage()
    {
        return url('/albumes/' . $this->slug);
    }

    public function pathAdmin()
    {
        return route('admin.albums.show', $this->slug);
    }

    public function deleteStorageImage()
    {
        if (Storage::disk('public')->exists($this->imagen)) {
            Storage::disk('public')->delete($this->imagen);
        }
    }

    public function deleteAlbum()
    {
        $this->delete();
        $this->deleteStorageImage();
    }
}
