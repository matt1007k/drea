<?php

namespace App\Traits;

use App\Models\Page;

trait hasPage
{
    public function page()
    {
        return $this->morphOne(Page::class, 'pageable');
    }

    public function createPage()
    {
        $this->page()->firstOrCreate([
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion'),
            'contenido' => request('contenido'),
        ]);
    }

    public function updatePage()
    {
        $this->page()->update([
            'titulo' => request('titulo'),
            'descripcion' => request('descripcion'),
            'contenido' => request('contenido'),
        ]);
    }

    public function deletePage()
    {
        $this->page()->delete();
    }
}
