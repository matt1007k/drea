<?php

use App\Models\Slideshow;
use Illuminate\Database\Seeder;

class SlideshowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Slideshow::truncate();

        Slideshow::create([
            'titulo' => 'SUPERATEC3',
            'imagen' => 'slideshows/presentacion_-_AYACUCHO-01.png',
            'fecha' => formatDatetimeToDB('07/08/2019 06:39 PM'),
            'publicado' => true,
        ]);
        Slideshow::create([
            'titulo' => 'MINEDU APRUEBA DIRECTIVA PARA DENUNCIAS DE CASOS DE CORRUPCIÓN',
            'imagen' => 'slideshows/content_mineduapruebadirectivas.jpg',
            'fecha' => formatDatetimeToDB('14/08/2018 05:37 PM'),
            'publicado' => true,
        ]);
        Slideshow::create([
            'titulo' => 'LEY DE LA REFORMA MAGISTERIAL',
            'imagen' => 'slideshows/ley_reformam.png',
            'fecha' => formatDatetimeToDB('16/08/2018 10:06 AM'),
            'publicado' => true,
        ]);
        Slideshow::create([
            'titulo' => 'Gracias Maestro Ayacuchano',
            'imagen' => 'slideshows/dia-maestro.jpg',
            'fecha' => formatDatetimeToDB('04/07/2019 05:38 PM'),
            'publicado' => false,
        ]);
        Slideshow::create([
            'titulo' => 'ESFA3',
            'imagen' => 'slideshows/dia-maestro.jpg',
            'fecha' => formatDatetimeToDB('23/01/2020 06:16 PM'),
            'publicado' => false,
        ]);
        Slideshow::create([
            'titulo' => 'DIRECTOR REGIONAL DE EDUCACIÓN 2019',
            'imagen' => 'slideshows/director_2019.png',
            'fecha' => formatDatetimeToDB('09/01/2019 10:26 AM'),
            'publicado' => true,
        ]);
        Slideshow::create([
            'titulo' => 'CALIFICACIÓN CON LETRAS',
            'imagen' => 'slideshows/calificacion_letras.png',
            'fecha' => formatDatetimeToDB('04/02/2019 09:26 AM'),
            'publicado' => true,
        ]);
    }
}
