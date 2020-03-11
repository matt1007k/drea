<?php

use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::truncate();
        Submenu::truncate();

        Menu::create([
            'titulo' => 'INICIO',
            'ruta' => '/',
            'orden' => '1',
            'publicado' => true,
        ]);

        $menu2 = Menu::create([
            'titulo' => 'LA INSTITUCIÓN',
            'ruta' => '/institucion',
            'orden' => '2',
            'publicado' => true,
        ]);

        Menu::create([
            'titulo' => 'UNIDADES',
            'ruta' => '/unidades',
            'orden' => '3',
            'publicado' => true,
        ]);

        Menu::create([
            'titulo' => 'DOCUMENTOS',
            'ruta' => '/documentos',
            'orden' => '4',
            'publicado' => true,
        ]);

        Menu::create([
            'titulo' => 'CONTRATO DOCENTE',
            'ruta' => '/docente_2020',
            'orden' => '5',
            'publicado' => true,
        ]);

        Menu::create([
            'titulo' => 'GALERÍA',
            'ruta' => '/galeria',
            'orden' => '6',
            'publicado' => true,
        ]);

        Menu::create([
            'titulo' => 'VIDEOS',
            'ruta' => '/videos',
            'orden' => '7',
            'publicado' => true,
        ]);

        Menu::create([
            'titulo' => 'CONVOCATORIAS',
            'ruta' => '/convocatorias-cas?a=2020',
            'orden' => '8',
            'publicado' => true,
        ]);

        Menu::create([
            'titulo' => 'MONITOREO',
            'ruta' => '/monitoreo',
            'orden' => '9',
            'publicado' => true,
        ]);

        Menu::create([
            'titulo' => 'EDU. SUP. TECNOLÓGICA 2018',
            'ruta' => '/tecnologica_2018',
            'orden' => '10',
            'publicado' => false,
        ]);

        Menu::create([
            'titulo' => 'EDU. SUP. PEDAGÓGICA 2020',
            'ruta' => '/pedagogica_2020',
            'orden' => '11',
            'publicado' => false,
        ]);

        Menu::create([
            'titulo' => 'EDU. SUP. PEDAGÓGICA 2020',
            'ruta' => '/programa-0051',
            'orden' => '12',
            'publicado' => false,
        ]);

        Menu::create([
            'titulo' => 'SUPERATEC3',
            'ruta' => '/superatec3',
            'orden' => '13',
            'publicado' => false,
        ]);

        Menu::create([
            'titulo' => 'MINEDU CONTRA LA CORRUPCIÓN',
            'ruta' => '/minedu-contra-la-corrupcion',
            'orden' => '14',
            'publicado' => false,
        ]);

        Menu::create([
            'titulo' => 'LEY DE LA REFORMA MAGISTERIAL',
            'ruta' => '/ley-de-la-reforma-magisterial',
            'orden' => '15',
            'publicado' => false,
        ]);

        Menu::create([
            'titulo' => 'GRACIAS MAESTRO AYACUCHANO',
            'ruta' => '/gracias-maestro-ayacuchano',
            'orden' => '16',
            'publicado' => false,
        ]);

        Menu::create([
            'titulo' => 'ESFA3',
            'ruta' => '/esfa3',
            'orden' => '17',
            'publicado' => false,
        ]);

        Menu::create([
            'titulo' => 'DIRECTOR REGIONAL DE EDUCACIÓN 2019',
            'ruta' => '/director-regional-de-educacion-2019',
            'orden' => '18',
            'publicado' => false,
        ]);

        Menu::create([
            'titulo' => 'CALIFICACIÓN CON LETRAS',
            'ruta' => '/calificacion-con-letras',
            'orden' => '19',
            'publicado' => false,
        ]);

        // submenus
        $menu2->submenus()->create([
            'titulo' => 'NOSOTROS',
            'ruta' => '/nosotros',
            'orden' => '1',
            'publicado' => true,
        ]);

        $menu2->submenus()->create([
            'titulo' => 'ORGANIGRAMA',
            'ruta' => '/organigrama',
            'orden' => '2',
            'publicado' => true,
        ]);

        $menu2->submenus()->create([
            'titulo' => 'DIRECTORIO INSTITUCIONAL',
            'ruta' => '/directorio-2019',
            'orden' => '3',
            'publicado' => true,
        ]);

        $menu2->submenus()->create([
            'titulo' => 'SUPERIOR',
            'ruta' => '/institutos2',
            'orden' => '4',
            'publicado' => true,
        ]);
    }
}
