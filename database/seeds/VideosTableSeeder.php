<?php

use App\Models\Video;
use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::truncate();

        Video::create([
            'video' => 'hw136xNCu0k',
            'titulo' => 'Buen Inicio del año escolar 2020',
            'fecha' => '2019-12-26 18:20:00',
            'publicado' => true
        ]);

        Video::create([
            'video' => 'RJkGA6oFnYA',
            'titulo' => 'CAMPAÑA TRATA DE PERSONAS',
            'fecha' => '2017-08-18 09:47:00',
            'publicado' => true
        ]);

        Video::create([
            'video' => 'Cqz76mOXDZA',
            'titulo' => 'LA HORA DEL CODIGO',
            'fecha' => '2017-06-14 12:41:00',
            'publicado' => true
        ]);

        Video::create([
            'video' => 'dwzrPwf35c8',
            'titulo' => 'Maestros',
            'fecha' => '2019-07-03 17:38:00',
            'publicado' => true
        ]);

        Video::create([
            'video' => 'FphHAVhpv5g',
            'titulo' => 'SEMINARIO NACIONAL MEJORES PERSONAS, MEJORES CIUDADANAS Y CIUDADANOS',
            'fecha' => '2017-05-31 13:14:00',
            'publicado' => true
        ]);

        Video::create([
            'video' => 'ysy2W8jaVCQ',
            'titulo' => 'SIMULACRO DE SISMOS Y LLUVIAS',
            'fecha' => '2017-05-31 13:12:00',
            'publicado' => true
        ]);

        Video::create([
            'video' => 'YVZ8GIM2FG0',
            'titulo' => 'YO SE CUIDAR MI CUERPO.',
            'fecha' => '2017-05-31 13:13:00',
            'publicado' => true
        ]);
    }
}
