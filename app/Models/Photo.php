<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    protected $guarded = [];
    protected $table = 'fotos';

    protected $dates = ['fecha'];
    protected $appends = ['fecha_format'];

    public function getFechaFormatAttribute()
    {
        return $this->fecha->format('d M yy');
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
            return request()->file('imagen')->store('photos', 'public');
        } else {
            return $this->imagen;
        }
    }

    public function album()
    {
        return $this->belongsTo(Album::class);
    }

    public function scopeByAlbum($query, $album)
    {
        return $query->whereHas('album', function ($q) use ($album) {
            $q->where('titulo', 'LIKE', "%$album%");
        });
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('titulo', 'LIKE', "%$search%")
            ->orWhere('fecha', 'LIKE', "%$search%");
    }

    public function deleteStorageImage()
    {
        if (Storage::disk('public')->exists($this->imagen)) {
            Storage::disk('public')->delete($this->imagen);
        }
    }

    public function deletePhoto()
    {
        $this->delete();
        $this->deleteStorageImage();
    }
}
