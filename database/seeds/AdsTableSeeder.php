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
            'imagen' => '/ads/content_logo_ef.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(25),
        ]);
        Ad::create([
            'titulo' => 'PELA Ayacucho',
            'url' => '#',
            'imagen' => '/ads/content_pela.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(24),
        ]);
        Ad::create([
            'titulo' => 'PREVAED Escuela Segura',
            'url' => '#',
            'imagen' => '/ads/content_prevaed.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(23),
        ]);
        Ad::create([
            'titulo' => 'Ayacucho Escucha',
            'url' => '#',
            'imagen' => '/ads/content_crt.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(22),
        ]);
        Ad::create([
            'titulo' => 'Buzón de Sugerencias',
            'url' => '#',
            'imagen' => '/ads/content_buzon_sugerencia.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(21),
        ]);
        Ad::create([
            'titulo' => 'Programa QaliWarma',
            'url' => 'http://www.utayacucho.com/informatica.php',
            'imagen' => '/ads/content_qaliwarma.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(20),
        ]);
        Ad::create([
            'titulo' => 'Prevención y Consumo de Drogas',
            'url' => 'http://www.dreayacucho.gob.pe/programa-0051',
            'imagen' => '/ads/content_drogas.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(19),
        ]);
        Ad::create([
            'titulo' => 'Cultura Mejoramiento de Servicio de Promoción y Difusión',
            'url' => '#',
            'imagen' => '/ads/content_banner_cultura.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(18),
        ]);
        Ad::create([
            'titulo' => 'VII Concurso Nacional de Buenas Prácticas Docentes',
            'url' => 'http://www.minedu.gob.pe/buenaspracticasdocentes/',
            'imagen' => '/ads/content_buenas_practicas.png',
            'publicado' => true,
            'created_at' => now()->subDays(17),
        ]);
        Ad::create([
            'titulo' => 'Programa Presupuestal 0091',
            'url' => '#',
            'imagen' => '/ads/content_pp0091.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(16),
        ]);
        Ad::create([
            'titulo' => 'Plan de Impacto Rápido',
            'url' => 'http://www.pirdaisayacucho.gob.pe/',
            'imagen' => '/ads/content_pirdais.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(15),
        ]);
        Ad::create([
            'titulo' => 'Directorio',
            'url' => '#',
            'imagen' => '/ads/content_directorio.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(14),
        ]);
        Ad::create([
            'titulo' => 'Formulario Único de Tramites (FUT)',
            'url' => 'http://www.dreayacucho.gob.pe/documentos/2017/OTROS/fut.pdf',
            'imagen' => '/ads/content_fut.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(13),
        ]);
        Ad::create([
            'titulo' => 'Documentos Anteriores',
            'url' => '/documentos',
            'imagen' => '/ads/content_documentos-anteriores.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(12),
        ]);
        Ad::create([
            'titulo' => 'RNSDD Transparencia',
            'url' => 'http://www.sanciones.gob.pe:8081/transparencia/',
            'imagen' => '/ads/content_logo_de_consulta_ciudadana_-_rnsdd_-_horizontal.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(11),
        ]);
        Ad::create([
            'titulo' => 'Centro de Operaciones de Emergencia - COE',
            'url' => 'http://www.minedu.gob.pe/campanias/coe.php',
            'imagen' => '/ads/content_coe.png',
            'publicado' => true,
            'created_at' => now()->subDays(10),
        ]);
        Ad::create([
            'titulo' => 'Convocatoria CAS',
            'url' => '/convocatorias-cas?a=2020',
            'imagen' => '/ads/content_captura.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(9),
        ]);
        Ad::create([
            'titulo' => 'Educación Superior Pedagógica',
            'url' => 'http://dreayacucho.gob.pe/pedagogica_2020',
            'imagen' => '/ads/content_pedag.png',
            'publicado' => true,
            'created_at' => now()->subDays(8),
        ]);
        Ad::create([
            'titulo' => 'Educación Superior Tecnológica',
            'url' => 'http://dreayacucho.gob.pe/Tecnologica_2018',
            'imagen' => '/ads/content_inst.png',
            'publicado' => true,
            'created_at' => now()->subDays(7),
        ]);
        Ad::create([
            'titulo' => 'Contratación de Docentes',
            'url' => 'http://www.dreayacucho.gob.pe/docente_2020',
            'imagen' => '/ads/content_content_docente_2020.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(6),
        ]);
        Ad::create([
            'titulo' => 'Consulta de Títulos de Instituciones Tecnológicos y Pedagógicos',
            'url' => 'http://www.titulosinstitutos.pe/',
            'imagen' => '/ads/content_consulta2.png',
            'publicado' => true,
            'created_at' => now()->subDays(5),
        ]);
        Ad::create([
            'titulo' => 'Por una escuela acogedora, libre de violencia',
            'url' => '#',
            'imagen' => '/ads/content_content_escuela_acogedora.jpeg',
            'publicado' => true,
            'created_at' => now()->subDays(4),
        ]);
        Ad::create([
            'titulo' => 'Evalución de logros de aprendizaje',
            'url' => '#',
            'imagen' => '/ads/content_logros_2019.png',
            'publicado' => true,
            'created_at' => now()->subDays(3),
        ]);
        Ad::create([
            'titulo' => 'Equipo de Escalafón',
            'url' => 'http://www.dreayacucho.gob.pe/escalafon',
            'imagen' => '/ads/content_esc2019.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(2),
        ]);
        Ad::create([
            'titulo' => 'Código de Comportamiento Ético',
            'url' => '#',
            'imagen' => '/ads/content_etico.jpg',
            'publicado' => true,
            'created_at' => now()->subDays(1),
        ]);
    }
}
