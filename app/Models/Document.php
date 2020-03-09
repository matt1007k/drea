<?php

namespace App\Models;

use App\Services\UploadsService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Jenssegers\Date\Date;

class Document extends Model
{
    protected $table = 'documentos';
    protected $guarded = [];
    protected $dates = ['fecha'];

    public function getFechaAttribute($date)
    {
        return new Date($date);
    }

    public function getArchivoUpdated()
    {
        if (request()->file('archivo')) {
            $this->deleteStorageFile();
            return (new UploadsService('archivo', request('anio'), 'documentos'))->getFileCreated();
        } else {
            return $this->archivo;
        }
    }

    public function pathFile()
    {
        return Storage::disk('public')->exists($this->archivo)
        ? Storage::url($this->archivo)
        : "";
    }

    public function tipo()
    {
        return $this->belongsTo(TypeDocument::class);
    }

    public function scopeByTipo($query, $tipo)
    {
        return $query->whereHas('tipo', function ($q) use ($tipo) {
            $q->where('nombre', 'LIKE', "%$tipo%");
        });
    }

    public function scopeByDate($query, $date)
    {
        return $query->where('created_at', 'LIKE', "%$date%");
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('titulo', 'LIKE', "%$search%")
            ->orWhere('descripcion', 'LIKE', "%$search%");
    }

    public function deleteStorageFile()
    {
        if (Storage::disk('public')->exists($this->archivo)) {
            Storage::disk('public')->delete($this->archivo);
        }
    }

    public function deleteDocument()
    {
        $this->delete();
        $this->deleteStorageFile();
    }
}
