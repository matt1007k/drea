<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'documentos';
    protected $guarded = [];

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

    public function scopeSearch($query, $search)
    {
        return $query->where('titulo', 'LIKE', "%$search%")
            ->orWhere('descripcion', 'LIKE', "%$search%");
    }
}
