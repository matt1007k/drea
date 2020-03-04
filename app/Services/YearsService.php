<?php
namespace App\Services;

use App\Models\AnnouncementGroup;

class YearsService
{
    protected $anios;

    public function getYearsLatest()
    {
        $this->anios = AnnouncementGroup::orderBy('anio', 'DESC')->pluck('anio');
        return $this->anios;
    }

}
