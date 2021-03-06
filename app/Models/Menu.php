<?php

namespace App\Models;

use App\Traits\hasPage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;
use Jenssegers\Date\Date;

class Menu extends Model
{
    use hasPage;

    protected $guarded = [];

    public function getCreatedAtAttribute($date)
    {
        return new Date($date);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('titulo', 'LIKE', "%$search%");
    }

    public function scopePublished($query)
    {
        return $query->where('publicado', true);
    }

    public function scopeOrder($query, $order)
    {
        return $query->orderBy('orden', "$order");
    }

    public function submenus()
    {
        return $this->hasMany(Submenu::class);
    }

    public function urlExisted()
    {
        $routes = Route::getRoutes()->getRoutes();
        $routes_uri = collect($routes)->pluck('uri')->toArray();
        $uri = $this->ruta != "/" ? explode('/', $this->ruta)[1] : "/";
        if (in_array($uri, $routes_uri)) {
            return true;
        }

        return false;
    }
}
