<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class ExternalLink extends Model
{
    protected $guarded = [];

    public function scopeSearch($query, $search)
    {
        return $query->where('url', 'LIKE', "%$search%");
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
            return request()->file('imagen')->store('external_links', 'public');
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

    public function deleteExternalLink()
    {
        $this->delete();
        $this->deleteStorageImage();
    }
}
