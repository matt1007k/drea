<?php

use App\Models\Ad;
use Illuminate\Database\Seeder;

class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ad::truncate();

        Ad::create([
            'titulo' => 'ARGA Educación Fisica 2019',
            'url' => 'http://educfisicaayacucho.ml/',
            'imagen' => 'ads/content_logo_ef.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'PELA Ayacucho',
            'url' => '#',
            'imagen' => 'ads/content_pela.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'PREVAED Escuela Segura',
            'url' => '#',
            'imagen' => 'ads/content_prevaed.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Ayacucho Escucha',
            'url' => '#',
            'imagen' => 'ads/content_crt.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Buzón de Sugerencias',
            'url' => '#',
            'imagen' => 'ads/content_buzon_sugerencia.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Programa QaliWarma',
            'url' => 'http://www.utayacucho.com/informatica.php',
            'imagen' => 'ads/content_qaliwarma.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Prevención y Consumo de Drogas',
            'url' => 'http://www.dreayacucho.gob.pe/programa-0051',
            'imagen' => 'ads/content_drogas.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Cultura Mejoramiento de Servicio de Promoción y Difusión',
            'url' => '#',
            'imagen' => 'ads/content_banner_cultura.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'VII Concurso Nacional de Buenas Prácticas Docentes',
            'url' => 'http://www.minedu.gob.pe/buenaspracticasdocentes/',
            'imagen' => 'ads/content_buenas_practicas.png',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Programa Presupuestal 0091',
            'url' => '#',
            'imagen' => 'ads/content_pp0091.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Plan de Impacto Rápido',
            'url' => 'http://www.pirdaisayacucho.gob.pe/',
            'imagen' => 'ads/content_pirdais.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Directorio',
            'url' => '#',
            'imagen' => 'ads/content_directorio.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Formulario Único de Tramites (FUT)',
            'url' => 'http://www.dreayacucho.gob.pe/documentos/2017/OTROS/fut.pdf',
            'imagen' => 'ads/content_fut.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Documentos Anteriores',
            'url' => '/documentos',
            'imagen' => 'ads/content_documentos-anteriores.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'RNSDD Transparencia',
            'url' => 'http://www.sanciones.gob.pe:8081/transparencia/',
            'imagen' => 'ads/content_logo_de_consulta_ciudadana_-_rnsdd_-_horizontal.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Centro de Operaciones de Emergencia - COE',
            'url' => 'http://www.minedu.gob.pe/campanias/coe.php',
            'imagen' => 'ads/content_coe.png',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Convocatoria CAS',
            'url' => '/convocatorias-cas?a=2020',
            'imagen' => 'ads/content_captura.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Educación Superior Pedagógica',
            'url' => 'http://dreayacucho.gob.pe/pedagogica_2020',
            'imagen' => 'ads/content_pedag.png',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Educación Superior Tecnológica',
            'url' => 'http://dreayacucho.gob.pe/Tecnologica_2018',
            'imagen' => 'ads/content_inst.png',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Contratación de Docentes',
            'url' => 'http://www.dreayacucho.gob.pe/docente_2020',
            'imagen' => 'ads/content_content_docente_2020.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Consulta de Títulos de Instituciones Tecnológicos y Pedagógicos',
            'url' => 'http://www.titulosinstitutos.pe/',
            'imagen' => 'ads/content_consulta2.png',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Por una escuela acogedora, libre de violencia',
            'url' => '#',
            'imagen' => 'ads/content_content_escuela_acogedora.jpeg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Evalución de logros de aprendizaje',
            'url' => '#',
            'imagen' => 'ads/content_logros_2019.png',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Equipo de Escalafón',
            'url' => 'http://www.dreayacucho.gob.pe/escalafon',
            'imagen' => 'ads/content_esc2019.jpg',
            'publicado' => true,
        ]);
        Ad::create([
            'titulo' => 'Código de Comportamiento Ético',
            'url' => '#',
            'imagen' => 'ads/content_etico.jpg',
            'publicado' => true,
        ]);
    }
}
