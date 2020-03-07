<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;

class TypeDocument extends Model
{
    protected $table = "tipo_documentos";
    protected $guarded = [];

    public function getCreatedAtAttribute($date)
    {
        return new Date($date);
    }

    public function documentos()
    {
        return $this->hasMany(Document::class, 'tipo_id');
    }

    public function newestDocuments($number)
    {
        return $this->documentos()->latest()->limit($number)->get();
    }
}
