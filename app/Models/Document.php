<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class Document extends Model
{
    protected $table = 'documentos';
    protected $guarded = [];

    public function getCreatedAtAttribute($date)
    {
        return new Date($date);
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
}
