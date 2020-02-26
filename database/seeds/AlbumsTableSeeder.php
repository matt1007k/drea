<?php

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Database\Seeder;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Album::truncate();
        Photo::truncate();
        $album = Album::create([
            'titulo' => 'INFRAESTRUCTURA DE LA I.E EDUCATIVA NUESTRA SEÑORA DE LAS MERCEDES',
            'descripcion' => 'MODERNA INFRAESTRUCTURA DE LA I.E EDUCATIVA NUESTRA SEÑORA DE LAS MERCEDES EN SU RECTA FINAL AUTORIDADES EDUCATIVAS COMPROBARON EL GRAN AVANCE Y CALIDAD DE LA OBRA',
            'imagen' => 'albumes/infra_mercedes.jpg',
            'fecha' => '2019-02-22 09:44:52',
            'publicado' => true
        ]);

        // photos
        $album->photos()->create([
            'titulo' => 'CAMPO MERCEDES',
            'imagen' => 'photos/mercedes3.jpg',
            'fecha' => '2019-02-14 09:55:52',
            'publicado' => true
        ]);

        $album->photos()->create([
            'titulo' => 'INFRAESTRUCTURA MERCEDES',
            'imagen' => 'photos/mercedes1.jpg',
            'fecha' => '2019-02-14 09:48:52',
            'publicado' => true
        ]);

        $album->photos()->create([
            'titulo' => 'MINISTRO COAR',
            'imagen' => 'photos/ministro_coar.jpg',
            'fecha' => '2019-02-22 09:49:52',
            'publicado' => true
        ]);

        $album->photos()->create([
            'titulo' => 'PATIO MERCEDES',
            'imagen' => 'photos/ministro_coar.jpg',
            'fecha' => '2019-02-14 09:53:52',
            'publicado' => true
        ]);

        $album->photos()->create([
            'titulo' => 'PISCINA MERCEDES',
            'imagen' => 'photos/52111522_1078952455562136_5664431435239391232_o.jpg',
            'fecha' => '2019-02-14 09:50:52',
            'publicado' => true
        ]);
    }
}
