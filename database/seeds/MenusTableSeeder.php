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
            'titulo' => 'Inicio',
            'ruta' => '/',
            'orden' => '1',
            'publicado' => true
        ]);

        $menu2 = Menu::create([
            'titulo' => 'La institución',
            'ruta' => '/institucion',
            'orden' => '2',
            'publicado' => true
        ]);

        Menu::create([
            'titulo' => 'Unidades',
            'ruta' => '/unidades',
            'orden' => '3',
            'publicado' => true
        ]);

        Menu::create([
            'titulo' => 'Documentos',
            'ruta' => '/documentos',
            'orden' => '4',
            'publicado' => true
        ]);

        Menu::create([
            'titulo' => 'Contrato Docente',
            'ruta' => '/docente_2020',
            'orden' => '5',
            'publicado' => true
        ]);

        Menu::create([
            'titulo' => 'Galería de fotos',
            'ruta' => '/galeria',
            'orden' => '6',
            'publicado' => true
        ]);

        Menu::create([
            'titulo' => 'Videos',
            'ruta' => '/videos',
            'orden' => '7',
            'publicado' => true
        ]);

        Menu::create([
            'titulo' => 'Convocatorias CAS',
            'ruta' => '/convocatorias-cas?a=2020',
            'orden' => '8',
            'publicado' => true
        ]);

        Menu::create([
            'titulo' => 'Monitoreo',
            'ruta' => '/monitoreo',
            'orden' => '9',
            'publicado' => true
        ]);

        // submenus
        $menu2->submenus()->create([
            'titulo' => 'Nosotros',
            'ruta' => '/nosotros',
            'orden' => '1',
            'publicado' => true
        ]);

        $menu2->submenus()->create([
            'titulo' => 'Organigrama',
            'ruta' => '/organigrama',
            'orden' => '2',
            'publicado' => true
        ]);

        $menu2->submenus()->create([
            'titulo' => 'Directorio Institucional',
            'ruta' => '/directorio-2019',
            'orden' => '3',
            'publicado' => true
        ]);

        $menu2->submenus()->create([
            'titulo' => 'Superior',
            'ruta' => '/institutos2',
            'orden' => '4',
            'publicado' => true
        ]);
    }
}
