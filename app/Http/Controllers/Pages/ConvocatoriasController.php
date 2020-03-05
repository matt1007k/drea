<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\AnnouncementGroup;
use App\Services\YearsService;

class ConvocatoriasController extends Controller
{
    public function index(YearsService $yearsService)
    {
        $anio = request('a') ? request('a') : (String) date('Y');
        $announcement_group = AnnouncementGroup::year($anio)->first();
        $announcements = $announcement_group->convocatorias()->newest()->get();
        $anios = $yearsService->getYearsLatest();

        return view('pages.convocatorias.index', compact(
            'anio',
            'anios',
            'announcement_group',
            'announcements'
        ));
    }
}
