<?php

use App\Models\AnnouncementLink;
use Illuminate\Database\Seeder;

class AnnouncementLinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Announcement 1
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES 4TA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS01/CAS001_4TA_CONVOCATORIA.pdf',
            'fecha' => '2017-05-22 11:43:00',
            'announcement_id' => 1,
        ]);

        AnnouncementLink::create([
            'titulo' => 'RESULTADOS DE HOJA DE VIDA 2DA',
            'url' => '/documentos/2017/CAS/CAS01/CAS001_2DA_RESULT_HV.pdf',
            'fecha' => '2017-03-23 11:41:00',
            'announcement_id' => 1,
        ]);

        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS01/CAS01_SEGUNDA_CONV.pdf',
            'fecha' => '2017-03-03 11:38:00',
            'announcement_id' => 1,
        ]);

        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2017/CAS/CAS01/resultados_finales_ganadores.pdf',
            'fecha' => '2017-02-07 11:21:00',
            'announcement_id' => 1,
        ]);

        AnnouncementLink::create([
            'titulo' => 'APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2017/CAS/CAS01/resultados_finales.pdf',
            'fecha' => '2017-02-06 11:15:00',
            'announcement_id' => 1,
        ]);

        AnnouncementLink::create([
            'titulo' => 'RESULTADO DE HOJA DE VIDA 1RA',
            'url' => '/documentos/2017/CAS/CAS01/CAS001_2DA_RESULT_HV.pdf',
            'fecha' => '2017-01-29 10:48:00',
            'announcement_id' => 1,
        ]);

        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2017/CAS/CAS01/PROCESO_SELECCION.pdf',
            'fecha' => '2017-01-25 10:47:00',
            'announcement_id' => 1,
        ]);

        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS01/1RA_CONVOCATORIA.pdf',
            'fecha' => '2017-01-23 16:30:00',
            'announcement_id' => 1,
        ]);

        // Announcement 13
        AnnouncementLink::create([
            'titulo' => 'Resultados Finales',
            'url' => '/documentos/2017/CAS/CAS012/CAS012_RESULTADOS_FINALES.pdf',
            'fecha' => '2017-03-09 11:16:00',
            'announcement_id' => 13,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida',
            'url' => '/documentos/2017/CAS/CAS012/CAS012_RESULTADOS_HV.pdf',
            'fecha' => '2017-03-04 11:12:00',
            'announcement_id' => 13,
        ]);

        AnnouncementLink::create([
            'titulo' => 'FE DE ERRATAS',
            'url' => '/documentos/2017/CAS/CAS012/CAS_012_2017_APER_FE_DE_ERRATAS.pdf',
            'fecha' => '2017-02-23 11:09:00',
            'announcement_id' => 13,
        ]);

        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS012/CAS012_1RACONVO.pdf',
            'fecha' => '2017-02-18 11:05:00',
            'announcement_id' => 13,
        ]);

        // Announcement 14
        AnnouncementLink::create([
            'titulo' => 'Resultados Finales HOJA DE VIDA(2da)',
            'url' => '/documentos/2017/CAS/CAS013/CAS013_RESULTADOS_FINALES_2DA.pdf',
            'fecha' => '2017-04-07 11:48:00',
            'announcement_id' => 14,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultados Finales (2da)',
            'url' => '/documentos/2017/CAS/CAS013/CAS013_RESULTADO_FINAL2.pdf',
            'fecha' => '2017-04-07 11:47:00',
            'announcement_id' => 14,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida (2da)',
            'url' => '/documentos/2017/CAS/CAS013/CAS013_RESULTADO_HV2.pdf',
            'fecha' => '2017-04-05 11:45:00',
            'announcement_id' => 14,
        ]);

        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS013/CAS013_2DA_CONV.pdf',
            'fecha' => '2017-04-27 11:42:00',
            'announcement_id' => 14,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultados Finales',
            'url' => '/documentos/2017/CAS/CAS013/CAS013_RESULTADOS_FINALES.pdf',
            'fecha' => '2017-03-09 11:40:00',
            'announcement_id' => 14,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida',
            'url' => '/documentos/2017/CAS/CAS013/CAS013_RESULTADOS_HV.pdf',
            'fecha' => '2017-02-04 11:36:00',
            'announcement_id' => 14,
        ]);

        AnnouncementLink::create([
            'titulo' => 'FE DE ERRATAS',
            'url' => '/documentos/2017/CAS/CAS_013_2017_APER_FE_DE_ERRATAS.pdf',
            'fecha' => '2017-02-23 11:33:00',
            'announcement_id' => 14,
        ]);

        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS013/CAS013_1RACONVO.pdf',
            'fecha' => '2017-02-18 11:32:00',
            'announcement_id' => 14,
        ]);

        // Announcement 15
        AnnouncementLink::create([
            'titulo' => 'Resultados Finales (2da)',
            'url' => '/documentos/2017/CAS/CAS014/CAS014_RESULTADO_FINAL2.pdf',
            'fecha' => '2017-04-07 09:42:00',
            'announcement_id' => 15,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida (2da)',
            'url' => '/documentos/2017/CAS/CAS014/CAS014_RESULTADO_HV2.pdf',
            'fecha' => '2017-04-05 09:39:00',
            'announcement_id' => 15,
        ]);

        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS014/CAS014_2DA_CONV.pdf',
            'fecha' => '2017-03-27 09:36:00',
            'announcement_id' => 15,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultados Finales',
            'url' => '/documentos/2017/CAS/CAS014/CAS014_RESULTADOS_FINALES.pdf',
            'fecha' => '2017-03-09 09:34:00',
            'announcement_id' => 15,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida',
            'url' => '/documentos/2017/CAS/CAS014/CAS014_RESULTADOS_HV.pdf',
            'fecha' => '2017-04-03 09:31:00',
            'announcement_id' => 15,
        ]);

        AnnouncementLink::create([
            'titulo' => 'FE DE ERRATAS',
            'url' => '/documentos/2017/CAS/CAS014/CAS_014_2017_APER_FE_DE_ERRATAS.pdf',
            'fecha' => '2017-02-23 09:29:00',
            'announcement_id' => 15,
        ]);

        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS014/CAS014_1RACONVO.pdf',
            'fecha' => '2017-02-18 12:00:00',
            'announcement_id' => 15,
        ]);

        // Announcement 16
        AnnouncementLink::create([
            'titulo' => 'Resultados Finales (2da)',
            'url' => '/documentos/2017/CAS/CAS015/CAS015_RESULTADO_FINAL2.pdf',
            'fecha' => '2017-04-07 10:09:00',
            'announcement_id' => 16,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida (2da)',
            'url' => '/documentos/2017/CAS/CAS015/CAS015_RESULTADO_HV2.pdf',
            'fecha' => '2017-04-05 10:08:00',
            'announcement_id' => 16,
        ]);

        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS015/CAS015_2DA_CONV.pdf',
            'fecha' => '2017-03-05 09:55:00',
            'announcement_id' => 16,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultados Finales',
            'url' => '/documentos/2017/CAS/CAS015/CAS015_RESULTADOS_FINALES.pdf',
            'fecha' => '2017-03-09 09:52:00',
            'announcement_id' => 16,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida',
            'url' => '/documentos/2017/CAS/CAS015/CAS015_RESULTADOS_HV.pdf',
            'fecha' => '2017-03-04 09:51:00',
            'announcement_id' => 16,
        ]);

        AnnouncementLink::create([
            'titulo' => 'FE DE ERRATAS',
            'url' => '/documentos/2017/CAS/CAS015/CAS_015_2017_APER_FE_DE_ERRATAS.pdf',
            'fecha' => '2017-02-23 09:49:00',
            'announcement_id' => 16,
        ]);

        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS015/CAS015_1RACONVO.pdf',
            'fecha' => '2017-02-18 09:47:00',
            'announcement_id' => 16,
        ]);

        // Announcement 17
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES 2DA',
            'url' => '/documentos/2017/CAS/CAS016/CAS016_RESULTADOS_FINALES2.pdf',
            'fecha' => '2017-05-03 10:33:00',
            'announcement_id' => 17,
        ]);

        AnnouncementLink::create([
            'titulo' => 'RESULTADOS DE RECLAMOS 2DA',
            'url' => '/documentos/2017/CAS/CAS016/CAS016_RESULTADOS_FINALES2DA.pdf',
            'fecha' => '2017-05-02 10:31:00',
            'announcement_id' => 17,
        ]);

        AnnouncementLink::create([
            'titulo' => 'MODIFICA CRONOGRAMA 2DA',
            'url' => '/documentos/2017/CAS/CAS016/CAS016_MODIFICA_CRONOGRAMA2.pdf',
            'fecha' => '2017-04-28 10:28:00',
            'announcement_id' => 17,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida (2da)',
            'url' => '/documentos/2017/CAS/CAS016/CAS016_RESULTADOS_HV2.pdf',
            'fecha' => '2017-04-28 10:23:00',
            'announcement_id' => 17,
        ]);

        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS016/CAS016_2DA_CONVOCATORIA.pdf',
            'fecha' => '2017-04-17 10:21:00',
            'announcement_id' => 17,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultados Finales',
            'url' => '/documentos/2017/CAS/CAS016/CAS016_RESULTADOS_FINALES.pdf',
            'fecha' => '2017-03-24 10:18:00',
            'announcement_id' => 17,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Apto Para Evaluación de Capacidades',
            'url' => '/documentos/2017/CAS/CAS016/CAS016_APTO_EVA_CAPAC.pdf',
            'fecha' => '2017-03-23 10:16:00',
            'announcement_id' => 17,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida',
            'url' => '/documentos/2017/CAS/CAS016/cas016_RESULTADOS_HV.pdf',
            'fecha' => '2017-03-22 10:14:00',
            'announcement_id' => 17,
        ]);

        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS016/CAS016_1RACONVO.pdf',
            'fecha' => '2017-03-13 10:11:00',
            'announcement_id' => 17,
        ]);

        // Announcement 18
        AnnouncementLink::create([
            'titulo' => 'Resultados Finales',
            'url' => '/documentos/2017/CAS/CAS017/CAS017_RESULTADOS_FINALES.pdf',
            'fecha' => '2017-03-24 10:41:00',
            'announcement_id' => 18,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Apto Para Evaluación de Capacidades',
            'url' => '/documentos/2017/CAS/CAS017/CAS017_APTO_EVA_CAPAC.pdf',
            'fecha' => '2017-03-23 10:39:00',
            'announcement_id' => 18,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida',
            'url' => '/documentos/2017/CAS/CAS017/cas017_RESULTADOS_HV.pdf',
            'fecha' => '2017-03-22 10:38:00',
            'announcement_id' => 18,
        ]);

        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS017/CAS017_1RACONVO.pdf',
            'fecha' => '2017-03-13 10:35:00',
            'announcement_id' => 18,
        ]);

        // Announcement 19
        AnnouncementLink::create([
            'titulo' => 'Resultados Finales',
            'url' => '/documentos/2017/CAS/CAS018/CAS018_RESULTADOS_FINALES.pdf',
            'fecha' => '2017-03-24 10:47:00',
            'announcement_id' => 19,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Apto Para Evaluación de Capacidades',
            'url' => '/documentos/2017/CAS/CAS018/CAS018_APTO_EVA_CAPAC.pdf',
            'fecha' => '2017-03-23 10:46:00',
            'announcement_id' => 19,
        ]);

        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida',
            'url' => '/documentos/2017/CAS/CAS018/cas018_RESULTADOS_HV.pdf',
            'fecha' => '2017-03-22 10:43:00',
            'announcement_id' => 19,
        ]);

        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS018/CAS018_1RACONVO.pdf',
            'fecha' => '2017-03-13 10:42:00',
            'announcement_id' => 19,
        ]);

        // Announcement 20
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS019/CAS019_PRIMERA_CONVOCATORIA.pdf',
            'fecha' => '2017-04-27 10:49:00',
            'announcement_id' => 20,
        ]);

        // Announcement 21
        AnnouncementLink::create([
            'titulo' => 'ACTA DE EVALUACIÓN DE EXPEDIENTES DE RECLAMO CAS N° 007 - 2019',
            'url' => '/documentos/2018/CAS/CAS07/CAS_07_A_E.pdf',
            'fecha' => '2018-03-01 15:11:00',
            'announcement_id' => 21,
        ]);

        AnnouncementLink::create([
            'titulo' => 'RESULTADOS -APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS07/CAS007R.pdf',
            'fecha' => '2018-02-28 12:52:00',
            'announcement_id' => 21,
        ]);

        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/CAS05/cas_05-10_comunicado.pdf',
            'fecha' => '2018-02-20 16:14:00',
            'announcement_id' => 21,
        ]);

        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS07/cas07.pdf',
            'fecha' => '2018-02-05 02:58:00',
            'announcement_id' => 21,
        ]);

        // Announcement 22
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES(3RA CONVOCATORIA)',
            'url' => '/documentos/2018/CAS/CAS08/cas08_rf.pdf',
            'fecha' => '2018-06-15 15:38:00',
            'announcement_id' => 22,
        ]);

        AnnouncementLink::create([
            'titulo' => 'RESULTADOS-APTOS PARA LA EVALUACIÓN DE CAPACIDADES(3RA CONV.)',
            'url' => '/documentos/2018/CAS/CAS08/cas08_rf_aptos.pdf',
            'fecha' => '2018-06-12 09:22:00',
            'announcement_id' => 22,
        ]);

        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS08/cas008_conv3.pdf',
            'fecha' => '2018-05-25 10:22:00',
            'announcement_id' => 22,
        ]);

        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/COMUNICADOS/comunicado_abril_3.pdf',
            'fecha' => '2018-04-13 10:17:00',
            'announcement_id' => 22,
        ]);

        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS08/cas08_SC.pdf',
            'fecha' => '2018-03-27 10:55:00',
            'announcement_id' => 22,
        ]);

        AnnouncementLink::create([
            'titulo' => 'ACTA DE DECLARACIÓN DE DESIERTO',
            'url' => '/documentos/2018/CAS/CAS08/CAS08_RD.pdf',
            'fecha' => '2018-02-21 17:11:00',
            'announcement_id' => 22,
        ]);

        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/CAS05/cas_05-10_comunicado.pdf',
            'fecha' => '2018-02-20 16:15:00',
            'announcement_id' => 22,
        ]);

        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS08/cas08_rf.pdf',
            'fecha' => '2018-06-15 15:38:00',
            'announcement_id' => 22,
        ]);

        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES(3RA CONVOCATORIA)',
            'url' => '/documentos/2018/CAS/CAS08/CAS08.pdf',
            'fecha' => '2018-02-05 15:17:00',
            'announcement_id' => 22,
        ]);

        // Announcement 23
        AnnouncementLink::create([
            'titulo' => 'RESULTADO FINAL',
            'url' => '/documentos/2018/CAS/CAS09/CAS09RF.pdf',
            'fecha' => '2018-03-02 08:44:00',
            'announcement_id' => 23,
        ]);
        AnnouncementLink::create([
            'titulo' => 'ACTA DE EVALUACIÓN DE EXPEDIENTES DE RECLAMO',
            'url' => '/documentos/2018/CAS/CAS09/cas_09_reclamo.pdf',
            'fecha' => '2018-03-01 11:51:00',
            'announcement_id' => 23,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS - APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS09/CAS009R.pdf',
            'fecha' => '2018-02-28 12:47:00',
            'announcement_id' => 23,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/CAS05/cas_05-10_comunicado.pdf',
            'fecha' => '2018-02-20 16:15:00',
            'announcement_id' => 23,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS09/cas09.pdf',
            'fecha' => '2018-02-05 03:08:00',
            'announcement_id' => 23,
        ]);

        // Announcement 24
        AnnouncementLink::create([
            'titulo' => 'RESULTADO FINAL',
            'url' => '/documentos/2018/CAS/CAS10/CAS10RF.pdf',
            'fecha' => '2018-03-02 08:48:00',
            'announcement_id' => 24,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS - APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS10/CAS10R.pdf',
            'fecha' => '2018-03-28 15:27:00',
            'announcement_id' => 24,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/CAS05/cas_05-10_comunicado.pdf',
            'fecha' => '2018-02-20 16:16:00',
            'announcement_id' => 24,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS10/cas10.pdf',
            'fecha' => '2018-02-05 15:27:00',
            'announcement_id' => 24,
        ]);

        // Announcement 25
        AnnouncementLink::create([
            'titulo' => 'CANCELACIÓN CAS',
            'url' => '/documentos/2018/CAS/CAS11/cas011_cancelacion.pdf',
            'fecha' => '2018-08-28 05:15:00',
            'announcement_id' => 25,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/ESCANEAD3.PDF',
            'fecha' => '2018-07-11 12:29:00',
            'announcement_id' => 25,
        ]);
        AnnouncementLink::create([
            'titulo' => 'ACTA DE CANCELACIÓN DE CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS11/CAS11_C.pdf',
            'fecha' => '2018-03-06 15:45:00',
            'announcement_id' => 25,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/PRIMERA CONVOCATORIA',
            'fecha' => '2018-02-12 10:01:00',
            'announcement_id' => 25,
        ]);

        // Announcement 26
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/ESCANEADO2.PDF',
            'fecha' => '2018-07-11 12:33:00',
            'announcement_id' => 26,
        ]);
        AnnouncementLink::create([
            'titulo' => 'ACTA DE CANCELACIÓN DE CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS12/CAS12_C.pdf',
            'fecha' => '2018-03-06 15:51:00',
            'announcement_id' => 26,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS12/cas12.pdf',
            'fecha' => '2018-02-12 10:11:00',
            'announcement_id' => 26,
        ]);

        // Announcement 27
        AnnouncementLink::create([
            'titulo' => 'ACTA DE CANCELACIÓN DE CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS13/CAS13_C.pdf',
            'fecha' => '2018-03-06 04:11:00',
            'announcement_id' => 27,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS13/cas13.pdf',
            'fecha' => '2018-02-12 10:21:00',
            'announcement_id' => 27,
        ]);

        // Announcement 28
        AnnouncementLink::create([
            'titulo' => 'ACTA DE CANCELACIÓN DE CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS14/CAS14_C.pdf',
            'fecha' => '2018-03-06 04:14:00',
            'announcement_id' => 28,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS14/CAS_No14.pdf',
            'fecha' => '2018-02-12 10:52:00',
            'announcement_id' => 28,
        ]);

        // Announcement 29
        AnnouncementLink::create([
            'titulo' => 'CANCELACIÓN CAS',
            'url' => '/documentos/2018/CAS/CAS15/cas015_cancelacion.pdf',
            'fecha' => '2018-08-28 05:17:00',
            'announcement_id' => 29,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/ESCANEAD.PDF',
            'fecha' => '2018-07-11 12:35:00',
            'announcement_id' => 29,
        ]);
        AnnouncementLink::create([
            'titulo' => 'ACTA DE CANCELACIÓN DE CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS15/CAS15_C.pdf',
            'fecha' => '2018-03-06 16:16:00',
            'announcement_id' => 29,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS15/CAS_No15.pdf',
            'fecha' => '2018-02-12 11:31:00',
            'announcement_id' => 29,
        ]);

        // Announcement 30
        AnnouncementLink::create([
            'titulo' => 'RESULTADO FINAL',
            'url' => '/documentos/2018/CAS/CAS16/CAS16RF.pdf',
            'fecha' => formatDatetimeToDB('02/03/2018 08:49 AM'),
            'announcement_id' => 30,
        ]);
        AnnouncementLink::create([
            'titulo' => 'ACTA DE REUNIÓN DEL COMITÉ DE EVALUACIÓN CAS N° 016 - 2018',
            'url' => '/documentos/2018/CAS/CAS16/CAS_016_A_R.pdf',
            'fecha' => formatDatetimeToDB('01/03/2018 03:18 PM'),
            'announcement_id' => 30,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS -APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS16/CAS16R.pdf',
            'fecha' => formatDatetimeToDB('28/02/2018 03:22 PM'),
            'announcement_id' => 30,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS16/CAS_No16.pdf',
            'fecha' => formatDatetimeToDB('12/02/2018 11:47 AM'),
            'announcement_id' => 30,
        ]);

        // Announcement 31
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES DE LA TERCERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/PROCESO _CAS _N°_017_2018.pdf',
            'fecha' => formatDatetimeToDB('01/06/2018 05:35 PM'),
            'announcement_id' => 31,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINAL DE LA TERCERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/PROCESO_CAS_N°_017_2018.pdf',
            'fecha' => formatDatetimeToDB('31/05/2018 03:47 PM'),
            'announcement_id' => 31,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO-REESTRUCTURACIÓN DE CRONOGRAMA',
            'url' => '/documentos/2018/CAS/CAS17/cas017_comunicado.pdf',
            'fecha' => formatDatetimeToDB('28/05/2018 11:13 AM'),
            'announcement_id' => 31,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS-APTOS PARA LA EVALUACIÓN DE CAPACIDADES(3RA CONV.)',
            'url' => '/documentos/2018/CAS/CAS17/cas017_rf3.pdf',
            'fecha' => formatDatetimeToDB('28/05/2018 08:33 AM'),
            'announcement_id' => 31,
        ]);
        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS17/CAS_17_T.pdf',
            'fecha' => formatDatetimeToDB('07/05/2018 11:55 AM'),
            'announcement_id' => 31,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS17/cas017_rf2.pdf',
            'fecha' => formatDatetimeToDB('18/04/2018 03:46 PM'),
            'announcement_id' => 31,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS-APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS17/cas17_2d_aptos.pdf',
            'fecha' => formatDatetimeToDB('13/04/2018 04:49 PM'),
            'announcement_id' => 31,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/AVISOS/comunicado_18.pdf',
            'fecha' => formatDatetimeToDB('13/04/2018 10:21 AM'),
            'announcement_id' => 31,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS17/cas17_2daconv.pdf',
            'fecha' => formatDatetimeToDB('19/03/2018 10:18 AM'),
            'announcement_id' => 31,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS17/CAS17_RF.pdf',
            'fecha' => formatDatetimeToDB('09/03/2018 10:15 AM'),
            'announcement_id' => 31,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS - APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS17/CAS_17_R.pdf',
            'fecha' => formatDatetimeToDB('07/03/2018 09:20 AM'),
            'announcement_id' => 31,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS17/CAS17.pdf',
            'fecha' => formatDatetimeToDB('21/02/2018 04:00 PM'),
            'announcement_id' => 31,
        ]);

        // Announcement 32
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES QUINTA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS18/cas018_resf5.pdf',
            'fecha' => formatDatetimeToDB('10/08/2018 08:07 AM'),
            'announcement_id' => 32,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS DEL PROCESO DE EVALUACIÓN CURRICULAR (QUINTA CONVOCATORIA)',
            'url' => '/documentos/2018/CAS/CAS18/cas018_res5.pdf',
            'fecha' => formatDatetimeToDB('03/08/2018 11:05 AM'),
            'announcement_id' => 32,
        ]);
        AnnouncementLink::create([
            'titulo' => 'QUINTA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS18/cas18_conv5.pdf',
            'fecha' => formatDatetimeToDB('23/07/2018 11:40 AM'),
            'announcement_id' => 32,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CUARTA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS18/cas18_conv4.pdf',
            'fecha' => formatDatetimeToDB('12/06/2018 09:23 AM'),
            'announcement_id' => 32,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES DE LA TERCERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/PROCESO _CAS _N°_018_2018.pdf',
            'fecha' => formatDatetimeToDB('01/06/2018 05:28 PM'),
            'announcement_id' => 32,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINAL DE LA TERCERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/PROCESO_CAS_N°_018_2018.pdf',
            'fecha' => formatDatetimeToDB('31/05/2018 03:35 PM'),
            'announcement_id' => 32,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS-APTOS PARA LA EVALUACIÓN DE CAPACIDADES(3RA CONV.)',
            'url' => '/documentos/2018/CAS/CAS18/cas018_rf3.pdf',
            'fecha' => formatDatetimeToDB('28/05/2018 08:34 AM'),
            'announcement_id' => 32,
        ]);
        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS18/CAS_18_T.pdf',
            'fecha' => formatDatetimeToDB('07/05/2018 11:50 AM'),
            'announcement_id' => 32,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS18/cas018_rf2.pdf',
            'fecha' => formatDatetimeToDB('18/04/2018 03:47 PM'),
            'announcement_id' => 32,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS-APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS18/cas18_2d_aptos.pdf',
            'fecha' => formatDatetimeToDB('13/04/2018 04:50 PM'),
            'announcement_id' => 32,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/AVISOS/comunicado_18.pdf',
            'fecha' => formatDatetimeToDB('13/04/2018 10:22 AM'),
            'announcement_id' => 32,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS18/cas18_2daconv.pdf',
            'fecha' => formatDatetimeToDB('19/03/2018 10:10 AM'),
            'announcement_id' => 32,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS18/CAS18_RF.pdf',
            'fecha' => formatDatetimeToDB('09/03/2018 10:17 AM'),
            'announcement_id' => 32,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS - APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS18/CAS_18_R.pdf',
            'fecha' => formatDatetimeToDB('07/03/2018 09:25 AM'),
            'announcement_id' => 32,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS18/CAS18.pdf',
            'fecha' => formatDatetimeToDB('21/02/2018 04:03 PM'),
            'announcement_id' => 32,
        ]);

        // Announcement 33
        AnnouncementLink::create([
            'titulo' => 'RESULTADO FINAL DE LA TERCERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/PROCESO _CAS _N°_019_2018.pdf',
            'fecha' => formatDatetimeToDB('01/06/2018 05:32 PM'),
            'announcement_id' => 33,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS-APTOS PARA LA EVALUACIÓN DE CAPACIDADES(3RA CONV.)',
            'url' => '/documentos/2018/CAS/CAS19/cas019_rf3.pdf',
            'fecha' => formatDatetimeToDB('28/05/2018 08:44 AM'),
            'announcement_id' => 33,
        ]);
        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS19/CAS_19_T.pdf',
            'fecha' => formatDatetimeToDB('07/05/2018 11:57 AM'),
            'announcement_id' => 33,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS-APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS19/cas19_2d_aptos.pdf',
            'fecha' => formatDatetimeToDB('13/04/2018 04:51 PM'),
            'announcement_id' => 33,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/AVISOS/comunicado_18.pdf',
            'fecha' => formatDatetimeToDB('13/04/2018 10:22 AM'),
            'announcement_id' => 33,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS19/cas19_2daconv.pdf',
            'fecha' => formatDatetimeToDB('19/03/2018 09:46 AM'),
            'announcement_id' => 33,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS19/CAS19_RF.pdf',
            'fecha' => formatDatetimeToDB('09/03/2018 10:19 AM'),
            'announcement_id' => 33,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS - APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS19/CAS19_RF.pdf',
            'fecha' => formatDatetimeToDB('07/03/2018 09:31 AM'),
            'announcement_id' => 33,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS19/CAS19.pdf',
            'fecha' => formatDatetimeToDB('21/02/2018 04:59 PM'),
            'announcement_id' => 33,
        ]);

        // Announcement 34
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS20/CAS20_RF.pdf',
            'fecha' => formatDatetimeToDB('09/03/2018 10:20 AM'),
            'announcement_id' => 34,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS - APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS20/CAS_020_R.pdf',
            'fecha' => formatDatetimeToDB('07/03/2018 09:33 AM'),
            'announcement_id' => 34,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS20/CAS20.pdf',
            'fecha' => formatDatetimeToDB('21/02/2018 04:48 PM'),
            'announcement_id' => 34,
        ]);

        // Announcement 35
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS21/CAS21_RF.pdf',
            'fecha' => formatDatetimeToDB('09/03/2018 10:22 AM'),
            'announcement_id' => 35,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS - APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS21/CAS_021_R.pdf',
            'fecha' => formatDatetimeToDB('07/03/2018 09:35 AM'),
            'announcement_id' => 35,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS21/CAS21.pdf',
            'fecha' => formatDatetimeToDB('21/02/2018 05:02 PM'),
            'announcement_id' => 35,
        ]);

        // Announcement 36
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS22/CAS22_RF.pdf',
            'fecha' => formatDatetimeToDB('09/03/2018 10:25 AM'),
            'announcement_id' => 36,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS - APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS22/CAS_022_R.pdf',
            'fecha' => formatDatetimeToDB('07/03/2018 09:40 AM'),
            'announcement_id' => 36,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS22/CAS22.pdf',
            'fecha' => formatDatetimeToDB('21/02/2018 05:08 PM'),
            'announcement_id' => 36,
        ]);

        // Announcement 37
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS-APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS23/cas23_aptos.pdf',
            'fecha' => formatDatetimeToDB('13/04/2018 04:52 PM'),
            'announcement_id' => 37,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS23/cas23.pdf',
            'fecha' => formatDatetimeToDB('27/03/2018 11:02 AM'),
            'announcement_id' => 37,
        ]);

        // Announcement 38
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS24/cas024_rf.pdf',
            'fecha' => formatDatetimeToDB('17/04/2018 08:31 PM'),
            'announcement_id' => 38,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS-APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS24/cas24_aptos.pdf',
            'fecha' => formatDatetimeToDB('13/04/2018 04:52 PM'),
            'announcement_id' => 38,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS24/cas24.pdf',
            'fecha' => formatDatetimeToDB('27/03/2018 11:09 AM'),
            'announcement_id' => 38,
        ]);

        // Announcement 39
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS25/cas025_conv2.pdf',
            'fecha' => formatDatetimeToDB('25/05/2018 10:30 AM'),
            'announcement_id' => 39,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS25/cas25.pdf',
            'fecha' => formatDatetimeToDB('27/03/2018 11:14 AM'),
            'announcement_id' => 39,
        ]);

        // Announcement 40
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS026/CAS26_RF.pdf',
            'fecha' => formatDatetimeToDB('23/05/2018 10:48 AM'),
            'announcement_id' => 40,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/CAS/CAS026/cas26_c.pdf',
            'fecha' => formatDatetimeToDB('16/05/2018 09:21 AM'),
            'announcement_id' => 40,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS-APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS026/cas26.pdf',
            'fecha' => formatDatetimeToDB('14/05/2018 10:27 AM'),
            'announcement_id' => 40,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO Y CRONOGRAMA',
            'url' => '/documentos/2018/CAS/CAS026/CAS26.pdf',
            'fecha' => formatDatetimeToDB('09/05/2018 09:29 AM'),
            'announcement_id' => 40,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS026/cas026_conv1.pdf',
            'fecha' => formatDatetimeToDB('18/04/2018 09:14 AM'),
            'announcement_id' => 40,
        ]);

        // Announcement 41
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas01_rfin.pdf',
            'fecha' => formatDatetimeToDB('11/02/2019 07:57 PM'),
            'announcement_id' => 41,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS APTOPS PARA LA EVALUACIÓN',
            'url' => '/documentos/2019/cas/cas01_raptos.pdf',
            'fecha' => formatDatetimeToDB('06/02/2019 06:16 PM'),
            'announcement_id' => 41,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA',
            'url' => '/documentos/2019/cas/cas01_crono.pdf',
            'fecha' => formatDatetimeToDB('06/02/2019 06:15 PM'),
            'announcement_id' => 41,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS DE HOJA DE VIDA',
            'url' => '/documentos/2019/cas/cas001_rhv1.pdf',
            'fecha' => formatDatetimeToDB('06/02/2019 04:20 PM'),
            'announcement_id' => 41,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas_001_2019.pdf',
            'fecha' => formatDatetimeToDB('21/01/2019 10:19 AM'),
            'announcement_id' => 41,
        ]);

        // Announcement 42
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas02/cas02_rf1.pdf',
            'fecha' => formatDatetimeToDB('15/02/2019 03:42 PM'),
            'announcement_id' => 42,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS APTOPS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas02/cas02_aptos_eval.pdf',
            'fecha' => formatDatetimeToDB('13/02/2019 09:21 AM'),
            'announcement_id' => 42,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas02_2019.pdf',
            'fecha' => formatDatetimeToDB('28/01/2019 09:50 AM'),
            'announcement_id' => 42,
        ]);

        // Announcement 43
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas03/cas_003_2019_2_rf.pdf',
            'fecha' => formatDatetimeToDB('09/05/2019 06:46 PM'),
            'announcement_id' => 43,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES (RECLAMOS)',
            'url' => '/documentos/2019/cas/cas03/cas_003_2019_2_aec_r.pdf',
            'fecha' => formatDatetimeToDB('08/05/2019 05:57 PM'),
            'announcement_id' => 43,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas03/cas_003_2019_2_aec.pdf',
            'fecha' => formatDatetimeToDB('07/05/2019 10:04 AM'),
            'announcement_id' => 43,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas03/cas_003_2019_2.pdf',
            'fecha' => formatDatetimeToDB('16/04/2019 12:34 PM'),
            'announcement_id' => 43,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas03/cas_003_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('25/03/2019 07:56 PM'),
            'announcement_id' => 43,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas03/cas_003_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('22/03/2019 04:58 PM'),
            'announcement_id' => 43,
        ]);
        AnnouncementLink::create([
            'titulo' => 'FE DE ERRATAS',
            'url' => '/documentos/2019/cas/cas03/fe_de_erratas.pdf',
            'fecha' => formatDatetimeToDB('14/03/2019 03:14 PM'),
            'announcement_id' => 43,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas03/cas_003_2019.pdf',
            'fecha' => formatDatetimeToDB('05/03/2019 04:09 PM'),
            'announcement_id' => 43,
        ]);

        // Announcement 44
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas04/cas_004_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('25/03/2019 07:58 PM'),
            'announcement_id' => 44,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas04/cas_004_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('21/03/2019 04:58 PM'),
            'announcement_id' => 44,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas04/cas_004_2019.pdf',
            'fecha' => formatDatetimeToDB('05/03/2019 04:12 PM'),
            'announcement_id' => 44,
        ]);

        // Announcement 45
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas05/cas_05_2019_2_aec.pdf',
            'fecha' => formatDatetimeToDB('25/09/2019 04:51 PM'),
            'announcement_id' => 45,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas05/cas_005_2019_2.pdf',
            'fecha' => formatDatetimeToDB('10/09/2019 09:22 AM'),
            'announcement_id' => 45,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas05/cas_005_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('22/03/2019 05:24 PM'),
            'announcement_id' => 45,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas05/cas_005_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('20/03/2019 04:56 PM'),
            'announcement_id' => 45,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas06/cas_006_2019_2_rf.pdf',
            'fecha' => formatDatetimeToDB('01/05/2019 12:13 PM'),
            'announcement_id' => 45,
        ]);

        // Announcement 46
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas06/cas_006_2019_2_rf.pdf',
            'fecha' => formatDatetimeToDB('01/05/2019 12:13 PM'),
            'announcement_id' => 46,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES (SEGUNDA CONVOCATORIA)',
            'url' => '/documentos/2019/cas/cas06/cas_006_2019_2_aec.pdf',
            'fecha' => formatDatetimeToDB('23/04/2019 03:57 PM'),
            'announcement_id' => 46,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas06/cas_006_2019_2.pdf',
            'fecha' => formatDatetimeToDB('03/04/2019 05:35 PM'),
            'announcement_id' => 46,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas06/cas_006_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('25/03/2019 08:00 PM'),
            'announcement_id' => 46,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas06/cas_006_2019.pdf',
            'fecha' => formatDatetimeToDB('05/03/2019 04:19 PM'),
            'announcement_id' => 46,
        ]);

        // Announcement 47
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas07/cas_007_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('29/03/2019 08:36 AM'),
            'announcement_id' => 47,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas07/cas_007_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('26/03/2019 05:02 PM'),
            'announcement_id' => 47,
        ]);
        AnnouncementLink::create([
            'titulo' => 'FE DE ERRATAS',
            'url' => '/documentos/2019/cas/cas07/fe_de_erratas.pdf',
            'fecha' => formatDatetimeToDB('14/03/2019 03:18 PM'),
            'announcement_id' => 47,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas07/cas_007_2019.pdf',
            'fecha' => formatDatetimeToDB('08/03/2019 12:02 PM'),
            'announcement_id' => 47,
        ]);

        // Announcement 48
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas09/cas_009_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('29/03/2019 08:37 AM'),
            'announcement_id' => 48,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas09/cas_009_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('26/03/2019 05:04 PM'),
            'announcement_id' => 48,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas09/cas_009_2019.pdf',
            'fecha' => formatDatetimeToDB('08/03/2019 12:02 PM'),
            'announcement_id' => 48,
        ]);

        // Announcement 49
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas10/cas_010_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('29/03/2019 06:17 PM'),
            'announcement_id' => 49,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas10/cas_010_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('29/03/2019 08:37 AM'),
            'announcement_id' => 49,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas10/cas_010_2019.pdf',
            'fecha' => formatDatetimeToDB('12/03/2019 01:06 PM'),
            'announcement_id' => 49,
        ]);

        // Announcement 50
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas11/cas_011_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('29/03/2019 06:28 PM'),
            'announcement_id' => 50,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas11/cas_011_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('29/03/2019 05:05 PM'),
            'announcement_id' => 50,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas11/cas_011_2019.pdf',
            'fecha' => formatDatetimeToDB('12/03/2019 01:07 PM'),
            'announcement_id' => 50,
        ]);

        // Announcement 51
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas12/cas_012_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('29/03/2019 06:17 PM'),
            'announcement_id' => 51,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas12/cas_012_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('26/03/2019 05:06 PM'),
            'announcement_id' => 51,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas12/cas_012_2019.pdf',
            'fecha' => formatDatetimeToDB('12/03/2019 06:14 PM'),
            'announcement_id' => 51,
        ]);

        // Announcement 52
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas13/cas_013_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('02/04/2019 01:21 PM'),
            'announcement_id' => 52,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas13/cas_013_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('29/03/2019 05:29 PM'),
            'announcement_id' => 52,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas13/cas_013_2019.pdf',
            'fecha' => formatDatetimeToDB('13/03/2019 08:52 AM'),
            'announcement_id' => 52,
        ]);

        // Announcement 53
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES (SEGUNDA CONVOCATORIA)',
            'url' => '/documentos/2019/cas/cas14/cas_014_2019_2_rf2.pdf',
            'fecha' => formatDatetimeToDB('13/06/2019 05:26 PM'),
            'announcement_id' => 53,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES (TERCERA CONVOCATORIA)',
            'url' => '/documentos/2019/cas/cas14/cas_014_2019_3_aec.pdf',
            'fecha' => formatDatetimeToDB('11/06/2019 08:20 PM'),
            'announcement_id' => 53,
        ]);
        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas14/cas_014_2019_3.pdf',
            'fecha' => formatDatetimeToDB('23/05/2019 12:12 PM'),
            'announcement_id' => 53,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas14/cas_014_2019_2_rf.pdf',
            'fecha' => formatDatetimeToDB('08/05/2019 06:00 PM'),
            'announcement_id' => 53,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas14/cas_014_2019_2_aec.pdf',
            'fecha' => formatDatetimeToDB('06/05/2019 04:43 PM'),
            'announcement_id' => 53,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas14/cas_014_2019_2.pdf',
            'fecha' => formatDatetimeToDB('16/04/2019 09:15 AM'),
            'announcement_id' => 53,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas14/cas_014_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('29/03/2019 06:14 PM'),
            'announcement_id' => 53,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas14/cas_014_2019.pdf',
            'fecha' => formatDatetimeToDB('13/03/2019 08:53 AM'),
            'announcement_id' => 53,
        ]);

        // Announcement 54
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas15/cas_015_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('02/04/2019 01:21 PM'),
            'announcement_id' => 54,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas15/cas_015_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('29/03/2019 06:15 PM'),
            'announcement_id' => 54,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas15/cas_015_2019.pdf',
            'fecha' => formatDatetimeToDB('13/03/2019 08:53 AM'),
            'announcement_id' => 54,
        ]);

        // Announcement 55
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas16/cas_016_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('02/04/2019 01:22 PM'),
            'announcement_id' => 55,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas16/cas_016_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('29/03/2019 06:15 PM'),
            'announcement_id' => 55,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas16/cas_016_2019.pdf',
            'fecha' => formatDatetimeToDB('13/03/2019 08:54 AM'),
            'announcement_id' => 55,
        ]);

        // Announcement 56
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas17/cas_017_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('04/04/2019 05:47 PM'),
            'announcement_id' => 56,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas17/cas_017_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('02/04/2019 09:52 AM'),
            'announcement_id' => 56,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas17/cas_017_2019.pdf',
            'fecha' => formatDatetimeToDB('21/03/2019 12:11 PM'),
            'announcement_id' => 56,
        ]);

        // Announcement 57
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES (TERCERA CONVOCATORIA)',
            'url' => '/documentos/2019/cas/cas18/cas_018_2019_rf3.pdf',
            'fecha' => formatDatetimeToDB('05/06/2019 05:49 PM'),
            'announcement_id' => 57,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES (TERCERA CONVOCATORIA)',
            'url' => '/documentos/2019/cas/cas18/cas_018_2019_aec3.pdf',
            'fecha' => formatDatetimeToDB('30/05/2019 05:35 PM'),
            'announcement_id' => 57,
        ]);
        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas18/cas_018_2019_3.pdf',
            'fecha' => formatDatetimeToDB('10/05/2019 09:46 AM'),
            'announcement_id' => 57,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas18/cas_018_2019_2_rf.pdf',
            'fecha' => formatDatetimeToDB('09/05/2019 06:49 PM'),
            'announcement_id' => 57,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES (SEGUNDA CONVOCATORIA)',
            'url' => '/documentos/2019/cas/cas18/cas_018_2019_aec2.pdf',
            'fecha' => formatDatetimeToDB('06/05/2019 05:40 PM'),
            'announcement_id' => 57,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas18/cas_018_2019_2.pdf',
            'fecha' => formatDatetimeToDB('15/04/2019 10:26 AM'),
            'announcement_id' => 57,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas18/cas_018_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('09/04/2019 12:15 PM'),
            'announcement_id' => 57,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas18/cas_018_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('04/04/2019 05:49 PM'),
            'announcement_id' => 57,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas18/cas_018_2019.pdf',
            'fecha' => formatDatetimeToDB('21/03/2019 10:42 AM'),
            'announcement_id' => 57,
        ]);

        // Announcement 58
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES (TERCERA CONVOCATORIA)',
            'url' => '/documentos/2019/cas/cas19/cas_019_2019_3_rf.pdf',
            'fecha' => formatDatetimeToDB('15/07/2019 09:38 AM'),
            'announcement_id' => 58,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES (TERCERA CONVOCATORIA)',
            'url' => '/documentos/2019/cas/cas19/cas_019_2019_3_aec.pdf',
            'fecha' => formatDatetimeToDB('11/07/2019 07:24 PM'),
            'announcement_id' => 58,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CONOCIMIENTOS (TERCERA CONVOCATORIA)',
            'url' => '/documentos/2019/cas/cas19/cas_019_2019_3_aeco.pdf',
            'fecha' => formatDatetimeToDB('08/07/2019 04:08 PM'),
            'announcement_id' => 58,
        ]);
        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas19/cas_019_2019_3.pdf',
            'fecha' => formatDatetimeToDB('24/06/2019 04:45 PM'),
            'announcement_id' => 58,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES (SEGUNDA CONVOCATORIA)',
            'url' => '/documentos/2019/cas/cas19/cas_019_2019_2_aec.pdf',
            'fecha' => formatDatetimeToDB('11/06/2019 07:53 AM'),
            'announcement_id' => 58,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas19/cas_019_2019_2.pdf',
            'fecha' => formatDatetimeToDB('23/05/2019 12:13 PM'),
            'announcement_id' => 58,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas19/cas_019_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('02/05/2019 03:00 PM'),
            'announcement_id' => 58,
        ]);
        AnnouncementLink::create([
            'titulo' => 'FE DE ERRATAS',
            'url' => '/documentos/2019/cas/cas19/fe_de_erratas.pdf',
            'fecha' => formatDatetimeToDB('26/04/2019 09:02 AM'),
            'announcement_id' => 58,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas19/cas_019_2019.pdf',
            'fecha' => formatDatetimeToDB('12/04/2019 11:41 AM'),
            'announcement_id' => 58,
        ]);

        // Announcement 59
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES (SEGUNDA CONVOCATORIA)',
            'url' => '/documentos/2019/cas/cas20/cas_020_2019_2_rf.pdf',
            'fecha' => formatDatetimeToDB('14/06/2019 01:16 PM'),
            'announcement_id' => 59,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES (SEGUNDA CONVOCATORIA)',
            'url' => '/documentos/2019/cas/cas20/cas_020_2019_2_aec.pdf',
            'fecha' => formatDatetimeToDB('12/06/2019 09:26 AM'),
            'announcement_id' => 59,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas20/cas_020_2019_2.pdf',
            'fecha' => formatDatetimeToDB('23/05/2019 04:03 PM'),
            'announcement_id' => 59,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas20/cas_020_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('20/05/2019 06:35 PM'),
            'announcement_id' => 59,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES (MODIFICADO)',
            'url' => '/documentos/2019/cas/cas20/cas_020_2019_aec_m.pdf',
            'fecha' => formatDatetimeToDB('16/05/2019 04:10 PM'),
            'announcement_id' => 59,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas20/cas_020_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('15/05/2019 12:20 PM'),
            'announcement_id' => 59,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2019/cas/cas20/cas_020_2019_c.pdf',
            'fecha' => formatDatetimeToDB('15/05/2019 12:17 PM'),
            'announcement_id' => 59,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas20/cas_020_2019.pdf',
            'fecha' => formatDatetimeToDB('23/04/2019 12:26 PM'),
            'announcement_id' => 59,
        ]);

        // Announcement 60
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas21/cas_021_2019_3_rf.pdf',
            'fecha' => formatDatetimeToDB('17/10/2019 08:33 AM'),
            'announcement_id' => 60,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CONOCIMIENTOS',
            'url' => '/documentos/2019/cas/cas21/cas_021_2019_3_aeco.pdf',
            'fecha' => formatDatetimeToDB('11/10/2019 03:34 PM'),
            'announcement_id' => 60,
        ]);
        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas21/cas_021_2019_3.pdf',
            'fecha' => formatDatetimeToDB('19/09/2019 05:34 PM'),
            'announcement_id' => 60,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas21/cas_021_2019_2.pdf',
            'fecha' => formatDatetimeToDB('20/08/2019 12:18 PM'),
            'announcement_id' => 60,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas21/cas_021_2019.pdf',
            'fecha' => formatDatetimeToDB('09/05/2019 03:50 PM'),
            'announcement_id' => 60,
        ]);

        // Announcement 61
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas22/cas_022_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('04/10/2019 09:48 AM'),
            'announcement_id' => 61,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CONOCIMIENTOS',
            'url' => '/documentos/2019/cas/cas22/cas_022_2019_aeco.pdf',
            'fecha' => formatDatetimeToDB('25/09/2019 05:26 PM'),
            'announcement_id' => 61,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas22/cas_022_2019.pdf',
            'fecha' => formatDatetimeToDB('23/08/2019 11:45 AM'),
            'announcement_id' => 61,
        ]);

        // Announcement 62
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas23/cas_023_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('09/08/2019 11:52 AM'),
            'announcement_id' => 62,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2019/cas/cas23/cas_023_2019_c.pdf',
            'fecha' => formatDatetimeToDB('19/07/2019 07:28 PM'),
            'announcement_id' => 62,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CONOCIMIENTOS',
            'url' => '/documentos/2019/cas/cas23/cas_023_2019_3_aeco.pdf',
            'fecha' => formatDatetimeToDB('18/07/2019 03:12 PM'),
            'announcement_id' => 62,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas23/cas_023_2019.pdf',
            'fecha' => formatDatetimeToDB('01/07/2019 09:35 AM'),
            'announcement_id' => 62,
        ]);

        // Announcement 63
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2019/cas/cas24/cas_024_2019_3_c1.pdf',
            'fecha' => formatDatetimeToDB('25/11/2019 12:35 PM'),
            'announcement_id' => 63,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2019/cas/cas24/cas_024_2019_3_c.pdf',
            'fecha' => formatDatetimeToDB('19/11/2019 11:59 AM'),
            'announcement_id' => 63,
        ]);
        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas24/cas_024_2019_3.pdf',
            'fecha' => formatDatetimeToDB('30/10/2019 12:05 PM'),
            'announcement_id' => 63,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CONOCIMIENTOS',
            'url' => '/documentos/2019/cas/cas24/cas_024_2019_2_aeco.pdf',
            'fecha' => formatDatetimeToDB('06/09/2019 04:29 PM'),
            'announcement_id' => 63,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas24/cas_024_2019_2.pdf',
            'fecha' => formatDatetimeToDB('19/08/2019 06:37 PM'),
            'announcement_id' => 63,
        ]);
        AnnouncementLink::create([
            'titulo' => 'ACTA DECLARATORIA DE PLAZA DESIERTA',
            'url' => '/documentos/2019/cas/cas24/cas_024_2019_acta_desierta.pdf',
            'fecha' => formatDatetimeToDB('12/08/2019 04:59 PM'),
            'announcement_id' => 63,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas24/cas_024_2019.pdf',
            'fecha' => formatDatetimeToDB('24/07/2019 08:28 AM'),
            'announcement_id' => 63,
        ]);

        // Announcement 64
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas25/cas_025_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('16/08/2019 06:12 PM'),
            'announcement_id' => 64,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2019/cas/cas25/cas_025_2019_comunicado.pdf',
            'fecha' => formatDatetimeToDB('13/08/2019 06:08 PM'),
            'announcement_id' => 64,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CONOCIMIENTOS',
            'url' => '/documentos/2019/cas/cas25/cas_025_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('13/08/2019 06:05 PM'),
            'announcement_id' => 64,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas25/cas_025_2019.pdf',
            'fecha' => formatDatetimeToDB('24/07/2019 08:29 AM'),
            'announcement_id' => 64,
        ]);

        // Announcement 65
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas26/cas_026_2019_2_rf.pdf',
            'fecha' => formatDatetimeToDB('16/09/2019 06:16 PM'),
            'announcement_id' => 65,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CONOCIMIENTOS (SEGUNDA CONVOCATORIA)',
            'url' => '/documentos/2019/cas/cas26/cas_026_2019_2_aeco.pdf',
            'fecha' => formatDatetimeToDB('12/09/2019 05:47 PM'),
            'announcement_id' => 65,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2019/cas/cas26/cas_026_2019_c.pdf',
            'fecha' => formatDatetimeToDB('11/09/2019 11:10 AM'),
            'announcement_id' => 65,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas26/cas_026_2019_2.pdf',
            'fecha' => formatDatetimeToDB('22/08/2019 07:40 AM'),
            'announcement_id' => 65,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas26/cas_026_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('16/08/2019 06:10 PM'),
            'announcement_id' => 65,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2019/cas/cas26/cas_026_2019_comunicado.pdf',
            'fecha' => formatDatetimeToDB('13/08/2019 06:09 PM'),
            'announcement_id' => 65,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CONOCIMIENTOS',
            'url' => '/documentos/2019/cas/cas26/cas_026_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('13/08/2019 06:09 PM'),
            'announcement_id' => 65,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas26/cas_026_2019.pdf',
            'fecha' => formatDatetimeToDB('24/07/2019 08:29 AM'),
            'announcement_id' => 65,
        ]);

        // Announcement 66
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas27/cas_027_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('02/09/2019 06:18 PM'),
            'announcement_id' => 66,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas27/cas_027_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('27/08/2019 01:01 PM'),
            'announcement_id' => 66,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas27/cas_027_2019.pdf',
            'fecha' => formatDatetimeToDB('09/08/2019 11:55 AM'),
            'announcement_id' => 66,
        ]);

        // Announcement 67
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas28/cas_028_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('21/08/2019 05:32 PM'),
            'announcement_id' => 67,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas28/cas_028_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('20/08/2019 07:59 PM'),
            'announcement_id' => 67,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CONOCIMIENTOS',
            'url' => '/documentos/2019/cas/cas28/cas_028_2019_aeco.pdf',
            'fecha' => formatDatetimeToDB('19/08/2019 12:35 PM'),
            'announcement_id' => 67,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas28/cas_028_2019.pdf',
            'fecha' => formatDatetimeToDB('26/07/2019 12:01 PM'),
            'announcement_id' => 67,
        ]);

        // Announcement 68
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CONOCIMIENTOS',
            'url' => '/documentos/2019/cas/cas29/cas_029_2019_2_aeco.pdf',
            'fecha' => formatDatetimeToDB('01/10/2019 08:42 AM'),
            'announcement_id' => 68,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas29/cas_029_2019_2.pdf',
            'fecha' => formatDatetimeToDB('16/09/2019 10:49 AM'),
            'announcement_id' => 68,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2019/cas/cas29/cas_029_2019_aec.pdf',
            'fecha' => formatDatetimeToDB('11/09/2019 03:59 PM'),
            'announcement_id' => 68,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2019/cas/cas29/cas_029_2019_c.pdf',
            'fecha' => formatDatetimeToDB('10/09/2019 05:59 PM'),
            'announcement_id' => 68,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CONOCIMIENTOS',
            'url' => '/documentos/2019/cas/cas29/cas_029_2019_aeco.pdf',
            'fecha' => formatDatetimeToDB('09/09/2019 06:08 PM'),
            'announcement_id' => 68,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas29/cas_029_2019.pdf',
            'fecha' => formatDatetimeToDB('20/08/2019 12:21 PM'),
            'announcement_id' => 68,
        ]);

        // Announcement 69
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2019/cas/cas30/cas_030_2019_rf.pdf',
            'fecha' => formatDatetimeToDB('23/01/2020 10:20 AM'),
            'announcement_id' => 69,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2019/cas/cas30/cas_030_2019_comunicado.pdf',
            'fecha' => formatDatetimeToDB('20/01/2020 11:34 AM'),
            'announcement_id' => 69,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CONOCIMIENTOS',
            'url' => '/documentos/2019/cas/cas30/cas_030_2019_aeco.pdf',
            'fecha' => formatDatetimeToDB('20/01/2020 11:31 AM'),
            'announcement_id' => 69,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2019/cas/cas30/cas_030_2019.pdf',
            'fecha' => formatDatetimeToDB('23/12/2019 04:38 PM'),
            'announcement_id' => 69,
        ]);
        // Final Grupo 3

        // Announcement 70
        AnnouncementLink::create([
            'titulo' => 'RESULTADO FINAL 2DA',
            'url' => '/documentos/2017/CAS/CAS020/cas020_rf2da.pdf',
            'fecha' => formatDatetimeToDB('27/06/2017 08:55 AM'),
            'announcement_id' => 70,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADO FINAL HOJA DE VIDA 2DA',
            'url' => '/documentos/2017/CAS/CAS020/cas020_rf2.pdf',
            'fecha' => formatDatetimeToDB('23/06/2017 06:22 PM'),
            'announcement_id' => 70,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA 2DA',
            'url' => '/documentos/2017/CAS/CAS020/cas020_cronograma2.pdf',
            'fecha' => formatDatetimeToDB('21/06/2017 04:13 PM'),
            'announcement_id' => 70,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS020/CAS020_2da_convocatoria.pdf',
            'fecha' => formatDatetimeToDB('13/06/2017 08:25 AM'),
            'announcement_id' => 70,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2017/CAS/CAS020/cas020_resultados_finales(1ra).pdf',
            'fecha' => formatDatetimeToDB('07/06/2017 04:21 PM'),
            'announcement_id' => 70,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADO FINAL EVALUACION DE HOJA DE VIDA(RECLAMOS)',
            'url' => '/documentos/2017/CAS/CAS020/cas020_rf_evaluacion_(reclamos).pdf',
            'fecha' => formatDatetimeToDB('05/06/2017 09:15 AM'),
            'announcement_id' => 70,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS DE HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS020/CAS020_RESULTADOSHV.pdf',
            'fecha' => formatDatetimeToDB('01/06/2017 06:27 PM'),
            'announcement_id' => 70,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS020/CAS020_1RA_COVOCATORIA.pdf',
            'fecha' => formatDatetimeToDB('24/05/2017 12:40 PM'),
            'announcement_id' => 70,
        ]);

        // Announcement 71
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES 2DA',
            'url' => '/documentos/2017/CAS/CAS021/cas021_rf2da.pdf',
            'fecha' => formatDatetimeToDB('31/07/2017 06:08 PM'),
            'announcement_id' => 71,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA',
            'url' => '/documentos/2017/CAS/CAS021/cas021_cronograma.pdf',
            'fecha' => formatDatetimeToDB('12/07/2017 07:41 PM'),
            'announcement_id' => 71,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS021/cas021_2daconv.pdf',
            'fecha' => formatDatetimeToDB('27/06/2017 09:24 AM'),
            'announcement_id' => 71,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES(1ra)',
            'url' => '/documentos/2017/CAS/CAS021/cas021_resultadosfinales_1ra.pdf',
            'fecha' => formatDatetimeToDB('09/06/2017 07:35 PM'),
            'announcement_id' => 71,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADO FINAL EVALUACION DE HOJA DE VIDA(RECLAMOS)',
            'url' => '/documentos/2017/CAS/CAS021/cas021_resultados_hv_reclamos.pdf',
            'fecha' => formatDatetimeToDB('09/06/2017 03:37 PM'),
            'announcement_id' => 71,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS DE EVALUACION DE HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS021/CAS021_RESULTADOS_HV.pdf',
            'fecha' => formatDatetimeToDB('07/06/2017 11:45 AM'),
            'announcement_id' => 71,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS021/CAS021_1RA_COVOCATORIA.pdf',
            'fecha' => formatDatetimeToDB('24/05/2017 12:50 PM'),
            'announcement_id' => 71,
        ]);

        // Announcement 72
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES(1ra)',
            'url' => '/documentos/2017/CAS/CAS022/cas022_resultadosfinales_1ra.pdf',
            'fecha' => formatDatetimeToDB('09/06/2017 08:12 PM'),
            'announcement_id' => 72,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADO FINAL EVALUACION DE HOJA DE VIDA(RECLAMOS)',
            'url' => '/documentos/2017/CAS/CAS022/cas022_resultados_hv_reclamos.pdf',
            'fecha' => formatDatetimeToDB('09/06/2017 07:11 AM'),
            'announcement_id' => 72,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS DE EVALUACION DE HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS022/CAS022_RESULTADOS_HV.pdf',
            'fecha' => formatDatetimeToDB('07/06/2017 11:30 AM'),
            'announcement_id' => 72,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS022/CAS022_1RA_COVOCATORIA.pdf',
            'fecha' => formatDatetimeToDB('24/05/2017 12:52 PM'),
            'announcement_id' => 72,
        ]);

        // Announcement 73
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2017/CAS/CAS023/cas023_cr.pdf',
            'fecha' => formatDatetimeToDB('25/08/2017 10:47 AM'),
            'announcement_id' => 73,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS023/cas023_rf_hv.pdf',
            'fecha' => formatDatetimeToDB('24/08/2017 12:43 PM'),
            'announcement_id' => 73,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS023/cas023_2daconv.pdf',
            'fecha' => formatDatetimeToDB('14/08/2017 03:24 PM'),
            'announcement_id' => 73,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA-2DA',
            'url' => '/documentos/2017/CAS/CAS023/cas023_2daconv.pdf',
            'fecha' => formatDatetimeToDB('14/08/2017 03:24 PM'),
            'announcement_id' => 73,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA-2DA',
            'url' => '/documentos/2017/CAS/CAS023/cas023_cronograma2.pdf',
            'fecha' => formatDatetimeToDB('24/07/2017 04:06 PM'),
            'announcement_id' => 73,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA',
            'url' => '/documentos/2017/CAS/CAS023/cas023_cronograma.pdf',
            'fecha' => formatDatetimeToDB('12/07/2017 07:43 PM'),
            'announcement_id' => 73,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2017/CAS/CAS023/cas023_comunicado.pdf',
            'fecha' => formatDatetimeToDB('10/07/2017 10:05 AM'),
            'announcement_id' => 73,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS023/cas023_1raconv.pdf',
            'fecha' => formatDatetimeToDB('27/06/2017 09:11 AM'),
            'announcement_id' => 73,
        ]);

        // Announcement 74
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2017/CAS/CAS024/cas024_rf.pdf',
            'fecha' => formatDatetimeToDB('26/07/2017 06:15 PM'),
            'announcement_id' => 74,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADO HOJA DE VIDA(APTOS)',
            'url' => '/documentos/2017/CAS/CAS024/cas024_rhv.pdf',
            'fecha' => formatDatetimeToDB('22/07/2017 08:04 AM'),
            'announcement_id' => 74,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS024/cas024_1raconv.pdf',
            'fecha' => formatDatetimeToDB('27/06/2017 09:18 AM'),
            'announcement_id' => 74,
        ]);

        // Announcement 75
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2017/CAS/CAS025/cas025_rf.pdf',
            'fecha' => formatDatetimeToDB('31/08/2017 06:08 PM'),
            'announcement_id' => 75,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS025/cas025_hv.pdf',
            'fecha' => formatDatetimeToDB('28/08/2017 06:38 PM'),
            'announcement_id' => 75,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2017/CAS/CAS025/cas_cr_25-30.pdf',
            'fecha' => formatDatetimeToDB('25/08/2017 10:49 AM'),
            'announcement_id' => 75,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS025/cas25_primeraconvocatoria.pdf',
            'fecha' => formatDatetimeToDB('04/08/2017 05:57 PM'),
            'announcement_id' => 75,
        ]);

        // Announcement 76
        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS026/cas026_conv3.pdf',
            'fecha' => formatDatetimeToDB('24/10/2017 09:20 AM'),
            'announcement_id' => 76,
        ]);
        AnnouncementLink::create([
            'titulo' => 'ACTA DE REUNIÓN DE LA COMISIÓN DE EVALUACIÓN',
            'url' => '/documentos/2017/CAS/CAS026/cas026_arce.pdf',
            'fecha' => formatDatetimeToDB('05/10/2017 06:15 PM'),
            'announcement_id' => 76,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES 2DA',
            'url' => '/documentos/2017/CAS/CAS027/cas027_rf2.pdf',
            'fecha' => formatDatetimeToDB('05/10/2017 06:13 PM'),
            'announcement_id' => 76,
        ]);
        AnnouncementLink::create([
            'titulo' => 'ACTA DE REUNIÓN DE LA COMISIÓN DE EVALUACIÓN',
            'url' => '/documentos/2017/CAS/CAS030/cas26_28_30_arce.pdf',
            'fecha' => formatDatetimeToDB('03/10/2017 06:00 PM'),
            'announcement_id' => 76,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES 2DA',
            'url' => '/documentos/2017/CAS/CAS026/cas026_rf2.pdf',
            'fecha' => formatDatetimeToDB('03/10/2017 12:41 PM'),
            'announcement_id' => 76,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2017/CAS/CAS026/cas26_27_28_29_30_ps.pdf',
            'fecha' => formatDatetimeToDB('29/09/2017 06:00 PM'),
            'announcement_id' => 76,
        ]);
        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida',
            'url' => '/documentos/2017/CAS/CAS026/cas026_rhv2.pdf',
            'fecha' => formatDatetimeToDB('29/09/2017 12:02 PM'),
            'announcement_id' => 76,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS026/cas026_conv2.pdf',
            'fecha' => formatDatetimeToDB('14/09/2017 03:33 PM'),
            'announcement_id' => 76,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2017/CAS/RESULTADOS FINALES',
            'fecha' => formatDatetimeToDB('31/08/2017 06:09 PM'),
            'announcement_id' => 76,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS026/cas026_hv.pdf',
            'fecha' => formatDatetimeToDB('28/08/2017 06:39 PM'),
            'announcement_id' => 76,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO 2DA',
            'url' => '/documentos/2017/CAS/CAS025/cas_cr_25-30.pdf',
            'fecha' => formatDatetimeToDB('25/08/2017 10:50 AM'),
            'announcement_id' => 76,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2017/CAS/CAS026/cronograma_reprogramacion.pdf',
            'fecha' => formatDatetimeToDB('14/08/2017 03:01 PM'),
            'announcement_id' => 76,
        ]);
        AnnouncementLink::create([
            'titulo' => '2017/CAS/PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS026/cas26_primeraconvocatoria.pdf',
            'fecha' => formatDatetimeToDB('04/08/2017 05:59 PM'),
            'announcement_id' => 76,
        ]);

        // Announcement 77
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES 2DA',
            'url' => '/documentos/2017/CAS/CAS027/cas027_rf2.pdf',
            'fecha' => formatDatetimeToDB('03/10/2017 12:42 PM'),
            'announcement_id' => 77,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2017/CAS/CAS026/cas26_27_28_29_30_ps.pdf',
            'fecha' => formatDatetimeToDB('29/09/2017 06:00 PM'),
            'announcement_id' => 77,
        ]);
        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida',
            'url' => '/documentos/2017/CAS/CAS027/cas27_rhv2.pdf',
            'fecha' => formatDatetimeToDB('29/09/2017 12:13 PM'),
            'announcement_id' => 77,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS027/cas027_conv2.pdf',
            'fecha' => formatDatetimeToDB('14/09/2017 03:34 PM'),
            'announcement_id' => 77,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2017/CAS/CAS027/cas027_rf.pdf',
            'fecha' => formatDatetimeToDB('31/08/2017 06:09 PM'),
            'announcement_id' => 77,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS027/cas027_hv.pdf',
            'fecha' => formatDatetimeToDB('28/08/2017 06:40 PM'),
            'announcement_id' => 77,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO 2DA',
            'url' => '/documentos/2017/CAS/CAS025/cas_cr_25-30.pdf',
            'fecha' => formatDatetimeToDB('25/08/2017 12:52 PM'),
            'announcement_id' => 77,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2017/CAS/CAS026/cronograma_reprogramacion.pdf',
            'fecha' => formatDatetimeToDB('14/08/2017 03:05 PM'),
            'announcement_id' => 77,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS027/cas27_primeraconvocatoria.pdf',
            'fecha' => formatDatetimeToDB('04/08/2017 04:53 PM'),
            'announcement_id' => 77,
        ]);

        // Announcement 78
        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS028/cas28_conv3.pdf',
            'fecha' => formatDatetimeToDB('24/10/2017 09:05 AM'),
            'announcement_id' => 78,
        ]);
        AnnouncementLink::create([
            'titulo' => 'ACTA DE REUNIÓN DE LA COMISIÓN DE EVALUACIÓN',
            'url' => '/documentos/2017/CAS/CAS030/cas26_28_30_arce.pdf',
            'fecha' => formatDatetimeToDB('03/10/2017 06:00 PM'),
            'announcement_id' => 78,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2017/CAS/CAS026/cas26_27_28_29_30_ps.pdf',
            'fecha' => formatDatetimeToDB('29/09/2017 06:00 PM'),
            'announcement_id' => 78,
        ]);
        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida',
            'url' => '/documentos/2017/CAS/CAS028/cas28_rhv2.pdf',
            'fecha' => formatDatetimeToDB('29/09/2017 12:16 PM'),
            'announcement_id' => 78,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS028/cas028_conv2.pdf',
            'fecha' => formatDatetimeToDB('14/09/2017 03:35 PM'),
            'announcement_id' => 78,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS028/cas028_hv.pdf',
            'fecha' => formatDatetimeToDB('28/08/2017 06:40 PM'),
            'announcement_id' => 78,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO 2DA',
            'url' => '/documentos/2017/CAS/CAS025/cas_cr_25-30.pdf',
            'fecha' => formatDatetimeToDB('25/08/2017 10:55 AM'),
            'announcement_id' => 78,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2017/CAS/CAS026/cronograma_reprogramacion.pdf',
            'fecha' => formatDatetimeToDB('14/08/2017 03:06 PM'),
            'announcement_id' => 78,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS028/cas28_primeraconvocatoria.pdf',
            'fecha' => formatDatetimeToDB('04/08/2017 04:14 PM'),
            'announcement_id' => 78,
        ]);

        // Announcement 79
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES 2DA',
            'url' => '/documentos/2017/CAS/CAS029/cas029_rf2.pdf',
            'fecha' => formatDatetimeToDB('03/10/2017 12:42 PM'),
            'announcement_id' => 79,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADO FINAL DE HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS029/cas29_rfhv2.pdf',
            'fecha' => formatDatetimeToDB('02/10/2017 09:00 AM'),
            'announcement_id' => 79,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2017/CAS/CAS026/cas26_27_28_29_30_ps.pdf',
            'fecha' => formatDatetimeToDB('29/09/2017 06:00 PM'),
            'announcement_id' => 79,
        ]);
        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida',
            'url' => '/documentos/2017/CAS/CAS029/cas29_rhv2.pdf',
            'fecha' => formatDatetimeToDB('29/09/2017 12:19 PM'),
            'announcement_id' => 79,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS029/cas029_conv2.pdf',
            'fecha' => formatDatetimeToDB('14/09/2017 03:36 PM'),
            'announcement_id' => 79,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS029/cas029_hv.pdf',
            'fecha' => formatDatetimeToDB('28/08/2017 06:40 PM'),
            'announcement_id' => 79,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO 2DA',
            'url' => '/documentos/2017/CAS/CAS025/cas_cr_25-30.pdf',
            'fecha' => formatDatetimeToDB('25/08/2017 10:55 AM'),
            'announcement_id' => 79,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2017/CAS/CAS026/cronograma_reprogramacion.pdf',
            'fecha' => formatDatetimeToDB('14/08/2017 03:07 PM'),
            'announcement_id' => 79,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS029/cas29_primeraconvocatoria.pdf',
            'fecha' => formatDatetimeToDB('04/08/2017 05:26 PM'),
            'announcement_id' => 79,
        ]);

        // Announcement 80
        AnnouncementLink::create([
            'titulo' => 'ACTA DE REUNIÓN DE LA COMISIÓN DE EVALUACIÓN',
            'url' => '/documentos/2017/CAS/CAS030/cas26_28_30_arce.pdf',
            'fecha' => formatDatetimeToDB('03/10/2017 06:00 PM'),
            'announcement_id' => 80,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2017/CAS/CAS026/cas26_27_28_29_30_ps.pdf',
            'fecha' => formatDatetimeToDB('29/09/2017 06:00 PM'),
            'announcement_id' => 80,
        ]);
        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida',
            'url' => '/documentos/2017/CAS/CAS030/cas30_rhv2.pdf',
            'fecha' => formatDatetimeToDB('29/09/2017 12:21 PM'),
            'announcement_id' => 80,
        ]);
        AnnouncementLink::create([
            'titulo' => 'FE DE ERRATAS',
            'url' => '/documentos/2017/CAS/CAS030/cas030_fr.pdf',
            'fecha' => formatDatetimeToDB('20/09/2017 04:07 PM'),
            'announcement_id' => 80,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS030/cas030_conv2.pdf',
            'fecha' => formatDatetimeToDB('14/09/2017 03:36 PM'),
            'announcement_id' => 80,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2017/CAS/CAS030/cas030_rf.pdf',
            'fecha' => formatDatetimeToDB('31/08/2017 06:10 PM'),
            'announcement_id' => 80,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS030/cas030_hv.pdf',
            'fecha' => formatDatetimeToDB('28/08/2017 06:41 PM'),
            'announcement_id' => 80,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO 2DA',
            'url' => '/documentos/2017/CAS/CAS025/cas_cr_25-30.pdf',
            'fecha' => formatDatetimeToDB('25/08/2017 11:56 AM'),
            'announcement_id' => 80,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2017/CAS/CAS026/cronograma_reprogramacion.pdf',
            'fecha' => formatDatetimeToDB('14/08/2017 03:08 PM'),
            'announcement_id' => 80,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS030/cas30_primeraconvocatoria.pdf',
            'fecha' => formatDatetimeToDB('04/08/2017 05:27 PM'),
            'announcement_id' => 80,
        ]);

        // Announcement 81
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2017/CAS/CAS031/cas031_rf.pdf',
            'fecha' => formatDatetimeToDB('21/08/2017 09:20 AM'),
            'announcement_id' => 81,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2017/CAS/CAS031/cas031_cronograma_ree.pdf',
            'fecha' => formatDatetimeToDB('16/08/2017 09:54 AM'),
            'announcement_id' => 81,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS031/cas031_resultadohv.pdf',
            'fecha' => formatDatetimeToDB('16/08/2017 09:40 AM'),
            'announcement_id' => 81,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS031/cas31_primeraconvocatoria.pdf',
            'fecha' => formatDatetimeToDB('04/08/2017 10:28 AM'),
            'announcement_id' => 81,
        ]);

        // Announcement 82
        AnnouncementLink::create([
            'titulo' => 'Resultados Finales (3ra)',
            'url' => '/documentos/2017/CAS/CAS032/cas032_rf3.pdf',
            'fecha' => formatDatetimeToDB('31/10/2017 09:00 AM'),
            'announcement_id' => 82,
        ]);
        AnnouncementLink::create([
            'titulo' => 'Resultado Hoja de Vida',
            'url' => '/documentos/2017/CAS/CAS032/cas032_rhv3.pdf',
            'fecha' => formatDatetimeToDB('24/10/2017 08:57 AM'),
            'announcement_id' => 82,
        ]);
        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS032/cas32_conv3.pdf',
            'fecha' => formatDatetimeToDB('13/10/2017 09:00 AM'),
            'announcement_id' => 82,
        ]);
        AnnouncementLink::create([
            'titulo' => 'Resultados Finales (2da)',
            'url' => '/documentos/2017/CAS/CAS032/cas032_rf2.pdf',
            'fecha' => formatDatetimeToDB('18/09/2017 11:28 AM'),
            'announcement_id' => 82,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS032/cas_rhv2.pdf',
            'fecha' => formatDatetimeToDB('13/09/2017 04:59 PM'),
            'announcement_id' => 82,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS032/cas032_2daconv.pdf',
            'fecha' => formatDatetimeToDB('04/09/2017 04:12 PM'),
            'announcement_id' => 82,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2017/CAS/CAS032/cas032_rf.pdf',
            'fecha' => formatDatetimeToDB('29/08/2017 06:44 PM'),
            'announcement_id' => 82,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2017/CAS/CAS032/cas032_cr.pdf',
            'fecha' => formatDatetimeToDB('25/08/2017 12:48 PM'),
            'announcement_id' => 82,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS032/cas032_rf_hv.pdf',
            'fecha' => formatDatetimeToDB('23/08/2017 08:41 AM'),
            'announcement_id' => 82,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS032/cas032_1raconv.pdf',
            'fecha' => formatDatetimeToDB('14/08/2017 03:23 PM'),
            'announcement_id' => 82,
        ]);

        // Announcement 83
        AnnouncementLink::create([
            'titulo' => 'Resultados Finales',
            'url' => '/documentos/2017/CAS/CAS033/cas033_rf1.pdf',
            'fecha' => formatDatetimeToDB('28/09/2017 08:56 AM'),
            'announcement_id' => 83,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2017/CAS/CAS033/cas033_cronog.pdf',
            'fecha' => formatDatetimeToDB('20/09/2017 05:09 PM'),
            'announcement_id' => 83,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS033/cas33_rfhv.pdf',
            'fecha' => formatDatetimeToDB('20/09/2017 11:08 AM'),
            'announcement_id' => 83,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS033/cas033_1raconv.pdf',
            'fecha' => formatDatetimeToDB('04/09/2017 04:16 PM'),
            'announcement_id' => 83,
        ]);

        // Announcement 84
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS034/cas034_conv2.pdf',
            'fecha' => formatDatetimeToDB('24/10/2017 09:00 AM'),
            'announcement_id' => 84,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS034/cas034_conv1.pdf',
            'fecha' => formatDatetimeToDB('25/09/2017 11:15 AM'),
            'announcement_id' => 84,
        ]);

        // Announcement 85
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS035/cas035_conv1.pdf',
            'fecha' => formatDatetimeToDB('25/09/2017 11:24 AM'),
            'announcement_id' => 85,
        ]);

        // Announcement 86
        AnnouncementLink::create([
            'titulo' => 'RESULTADO FINAL',
            'url' => '/documentos/2017/CAS/cas036_rf.pdf',
            'fecha' => formatDatetimeToDB('21/11/2017 12:34 PM'),
            'announcement_id' => 86,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RECLAMOS',
            'url' => '/documentos/2017/CAS/cas036_reclamos.pdf',
            'fecha' => formatDatetimeToDB('20/11/2017 09:29 AM'),
            'announcement_id' => 86,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2017/CAS/CAS N°036-2017.pdf',
            'fecha' => formatDatetimeToDB('15/11/2017 06:35 PM'),
            'announcement_id' => 86,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS036/cas036_conv2.pdf',
            'fecha' => formatDatetimeToDB('07/11/2017 03:23 PM'),
            'announcement_id' => 86,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2017/CAS/CAS036/cas036_rhv.pdf',
            'fecha' => formatDatetimeToDB('11/10/2017 03:52 PM'),
            'announcement_id' => 86,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2017/CAS/CAS036/cas036_conv1.pdf',
            'fecha' => formatDatetimeToDB('26/09/2017 11:37 AM'),
            'announcement_id' => 86,
        ]);

        // Announcement 87
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS027/cas027_rf1.pdf',
            'fecha' => formatDatetimeToDB('11/05/2018 03:38 PM'),
            'announcement_id' => 87,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO Y RESULTADO',
            'url' => '/documentos/2018/CAS/CAS027/cas27.pdf',
            'fecha' => formatDatetimeToDB('09/05/2018 11:29 AM'),
            'announcement_id' => 87,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS027/cas027_conv1.pdf',
            'fecha' => formatDatetimeToDB('18/04/2018 09:36 AM'),
            'announcement_id' => 87,
        ]);

        // Announcement 88
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES QUINTA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS028/cas028_rf5.pdf',
            'fecha' => formatDatetimeToDB('24/10/2018 10:44 AM'),
            'announcement_id' => 88,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/cas/PROCESO CAS N° 028-2018-resultados.pdf',
            'fecha' => formatDatetimeToDB('25/10/2018 10:31 AM'),
            'announcement_id' => 88,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS DEL PROCESO DE EVALUACIÓN CURRICULAR - APTOS PARA LA EVALUACIÓN DE CAPACIDADES.',
            'url' => '/documentos/2018/cas/PROCESO CAS N° 028-2018.pdf',
            'fecha' => formatDatetimeToDB('24/10/2018 03:45 PM'),
            'announcement_id' => 88,
        ]);
        AnnouncementLink::create([
            'titulo' => 'QUINTA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS028/cas028_conv5.pdf',
            'fecha' => formatDatetimeToDB('02/10/2018 09:53 AM'),
            'announcement_id' => 88,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES(4ta CONV.)',
            'url' => '/documentos/2018/CAS/CAS028/cas28_rf4.pdf',
            'fecha' => formatDatetimeToDB('25/09/2018 08:12 AM'),
            'announcement_id' => 88,
        ]);
        AnnouncementLink::create([
            'titulo' => 'ACTA DE EVALUACIÓN DE EXPEDIENTES DE RECLAMO',
            'url' => '/documentos/2018/CAS/CAS028/cas28_acta-reclamo4.pdf',
            'fecha' => formatDatetimeToDB('25/09/2018 11:43 AM'),
            'announcement_id' => 88,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS-APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS028/cas028_raptos4.pdf',
            'fecha' => formatDatetimeToDB('21/09/2018 03:42 PM'),
            'announcement_id' => 88,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CUARTA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS028/cas28_conv4.pdf',
            'fecha' => formatDatetimeToDB('06/09/2018 08:08 AM'),
            'announcement_id' => 88,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/CAS028/cas28_comunicado.pdf',
            'fecha' => formatDatetimeToDB('27/08/2018 08:27 AM'),
            'announcement_id' => 88,
        ]);
        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS028/cas028_conv3.pdf',
            'fecha' => formatDatetimeToDB('20/08/2018 12:48 PM'),
            'announcement_id' => 88,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS DEL PROCESO DE EVALUACIÓN CURRICULAR (SEGUNDA CONVOCATORIA)',
            'url' => '/documentos/2018/CAS/CAS028/cas028_res.pdf',
            'fecha' => formatDatetimeToDB('23/07/2018 09:48 AM'),
            'announcement_id' => 88,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS028/cas028_conv2.pdf',
            'fecha' => formatDatetimeToDB('22/06/2018 10:14 AM'),
            'announcement_id' => 88,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS - APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS_28_R.pdf',
            'fecha' => formatDatetimeToDB('09/05/2018 12:45 PM'),
            'announcement_id' => 88,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO Y CRONOGRAMA',
            'url' => '/documentos/2018/CAS/CAS028/cas28.pdf',
            'fecha' => formatDatetimeToDB('09/05/2018 11:27 AM'),
            'announcement_id' => 88,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS028/cas028_conv1.pdf',
            'fecha' => formatDatetimeToDB('18/04/2018 10:13 AM'),
            'announcement_id' => 88,
        ]);

        // Announcement 89
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES(2da conv)',
            'url' => '/documentos/2018/CAS/CAS029/cas029_rf2.pdf',
            'fecha' => formatDatetimeToDB('27/06/2018 08:32 PM'),
            'announcement_id' => 89,
        ]);
        AnnouncementLink::create([
            'titulo' => 'ACTA DE EVALUACIÓN DE EXPEDIENTES DE RECLAMO',
            'url' => '/documentos/2018/CAS/CAS029/cas029_acta_c2.pdf',
            'fecha' => formatDatetimeToDB('27/06/2018 08:05 AM'),
            'announcement_id' => 89,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/CAS029/COMUNICADO.pdf',
            'fecha' => formatDatetimeToDB('25/06/2018 12:35 PM'),
            'announcement_id' => 89,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN CURRICULAR - APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS029/RESULTADO.pdf',
            'fecha' => formatDatetimeToDB('25/06/2018 12:34 PM'),
            'announcement_id' => 89,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS029/PROCESO_CAS_N°_029.pdf',
            'fecha' => formatDatetimeToDB('30/05/2018 04:37 PM'),
            'announcement_id' => 89,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO Y RESULTADO DE APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS029/PROCESO_CAS_N%C2%B0_029.pdf',
            'fecha' => formatDatetimeToDB('09/05/2018 11:29 AM'),
            'announcement_id' => 89,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS029/cas029_conv1.pdf',
            'fecha' => formatDatetimeToDB('18/04/2018 09:47 AM'),
            'announcement_id' => 89,
        ]);

        // Announcement 90
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS030/cas30_rf.pdf',
            'fecha' => formatDatetimeToDB('21/05/2018 03:44 PM'),
            'announcement_id' => 90,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2018/CAS/CAS030/CAS 030-2018 Resultados_Hoja_de_Vida.pdf',
            'fecha' => formatDatetimeToDB('17/05/2018 10:30 AM'),
            'announcement_id' => 90,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO Y CRONOGRAMA',
            'url' => '/documentos/2018/CAS/CAS030/CAS30.pdf',
            'fecha' => formatDatetimeToDB('08/05/2018 01:01 PM'),
            'announcement_id' => 90,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS030/cas030_conv1.pdf',
            'fecha' => formatDatetimeToDB('18/04/2018 09:49 AM'),
            'announcement_id' => 90,
        ]);

        // Announcement 91
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES(2da conv)',
            'url' => '/documentos/2018/CAS/CAS031/cas31_rf2.pdf',
            'fecha' => formatDatetimeToDB('13/07/2018 03:28 PM'),
            'announcement_id' => 91,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADO DE HOJA DE VIDA',
            'url' => '/documentos/2018/CAS/CAS_31.PDF',
            'fecha' => formatDatetimeToDB('11/07/2018 10:59 AM'),
            'announcement_id' => 91,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2018/CAS/CAS031/cas31_32_33_ncronog.pdf',
            'fecha' => formatDatetimeToDB('11/07/2018 03:05 PM'),
            'announcement_id' => 91,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/CAS031/COMUNICADO.pdf',
            'fecha' => formatDatetimeToDB('22/06/2018 10:42 AM'),
            'announcement_id' => 91,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS031/cas031_conv2.pdf',
            'fecha' => formatDatetimeToDB('22/06/2018 10:15 AM'),
            'announcement_id' => 91,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2018/CAS/CAS031/CAS 031-2018 Resultados_Hoja_de_Vida.pdf',
            'fecha' => formatDatetimeToDB('17/05/2018 10:33 AM'),
            'announcement_id' => 91,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS031/cas031_conv1.pdf',
            'fecha' => formatDatetimeToDB('18/04/2018 10:17 AM'),
            'announcement_id' => 91,
        ]);

        // Announcement 92
        AnnouncementLink::create([
            'titulo' => 'QUINTA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS032/cas032_conv5.pdf',
            'fecha' => formatDatetimeToDB('27/09/2018 04:54 PM'),
            'announcement_id' => 92,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN CURRICULAR - APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS032/cas032_raptos4.pdf',
            'fecha' => formatDatetimeToDB('24/09/2018 12:01 PM'),
            'announcement_id' => 92,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CUARTA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS032/cas032_conv4.pdf',
            'fecha' => formatDatetimeToDB('07/09/2018 09:11 AM'),
            'announcement_id' => 92,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/CAS032/cas32_comunicado.pdf',
            'fecha' => formatDatetimeToDB('27/08/2018 08:30 AM'),
            'announcement_id' => 92,
        ]);
        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS032/cas032_conv3.pdf',
            'fecha' => formatDatetimeToDB('20/08/2018 12:01 PM'),
            'announcement_id' => 92,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES(2da conv)',
            'url' => '/documentos/2018/CAS/CAS032/cas32_rf2.pdf',
            'fecha' => formatDatetimeToDB('13/07/2018 03:30 PM'),
            'announcement_id' => 92,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS DE HOJA DE VIDA',
            'url' => '/documentos/2018/CAS/CAS_32.PDF',
            'fecha' => formatDatetimeToDB('11/07/2018 10:02 AM'),
            'announcement_id' => 92,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2018/CAS/CAS031/cas31_32_33_ncronog.pdf',
            'fecha' => formatDatetimeToDB('11/07/2018 03:13 PM'),
            'announcement_id' => 92,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/CAS032/COMUNICADO.pdf',
            'fecha' => formatDatetimeToDB('22/06/2018 10:42 AM'),
            'announcement_id' => 92,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS032/cas032_conv2.pdf',
            'fecha' => formatDatetimeToDB('22/06/2018 10:16 AM'),
            'announcement_id' => 92,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS032/cas32_rf.pdf',
            'fecha' => formatDatetimeToDB('21/05/2018 01:45 PM'),
            'announcement_id' => 92,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2018/CAS/CAS032/CAS 032-2018 Resultados_Hoja_de_Vida.pdf',
            'fecha' => formatDatetimeToDB('17/05/2018 10:34 AM'),
            'announcement_id' => 92,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO Y CRONOGRAMA',
            'url' => '/documentos/2018/CAS/CAS30.pdf',
            'fecha' => formatDatetimeToDB('08/05/2018 09:17 AM'),
            'announcement_id' => 92,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS032/cas032_conv1.pdf',
            'fecha' => formatDatetimeToDB('18/04/2018 10:25 AM'),
            'announcement_id' => 92,
        ]);

        // Announcement 93
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN CURRICULAR - APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS033/cas033_res5.pdf',
            'fecha' => formatDatetimeToDB('18/10/2018 05:20 PM'),
            'announcement_id' => 93,
        ]);
        AnnouncementLink::create([
            'titulo' => 'QUINTA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS033/cas033_conv5.pdf',
            'fecha' => formatDatetimeToDB('27/09/2018 04:53 PM'),
            'announcement_id' => 93,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN CURRICULAR - APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS033/cas033_raptos4.pdf',
            'fecha' => formatDatetimeToDB('24/09/2018 11:59 AM'),
            'announcement_id' => 93,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CUARTA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS033/cas033_conv4.pdf',
            'fecha' => formatDatetimeToDB('07/09/2018 09:12 AM'),
            'announcement_id' => 93,
        ]);
        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS033/cas033_conv3.pdf',
            'fecha' => formatDatetimeToDB('20/08/2018 12:51 PM'),
            'announcement_id' => 93,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES(2da conv)',
            'url' => '/documentos/2018/CAS/CAS033/cas33_rf2.pdf',
            'fecha' => formatDatetimeToDB('13/07/2018 03:31 PM'),
            'announcement_id' => 93,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS DE HOJA DE VIDA',
            'url' => '/documentos/2018/CAS/CAS_33.PDF',
            'fecha' => formatDatetimeToDB('11/07/2018 10:05 AM'),
            'announcement_id' => 93,
        ]);
        AnnouncementLink::create([
            'titulo' => 'CRONOGRAMA REESTRUCTURADO',
            'url' => '/documentos/2018/CAS/CAS031/cas31_32_33_ncronog.pdf',
            'fecha' => formatDatetimeToDB('11/07/2018 03:13 PM'),
            'announcement_id' => 93,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/CAS033/COMUNICADO.pdf',
            'fecha' => formatDatetimeToDB('22/06/2018 10:43 AM'),
            'announcement_id' => 93,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS033/cas033_conv2.pdf',
            'fecha' => formatDatetimeToDB('22/06/2018 10:16 AM'),
            'announcement_id' => 93,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS033/cas33_rf.pdf',
            'fecha' => formatDatetimeToDB('21/05/2018 01:46 PM'),
            'announcement_id' => 93,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2018/CAS/CAS033/CAS 033-2018 Resultados_Hoja_de_Vida.pdf',
            'fecha' => formatDatetimeToDB('17/05/2018 10:35 AM'),
            'announcement_id' => 93,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO Y CRONOGRAMA',
            'url' => '/documentos/2018/CAS/CAS30.pdf',
            'fecha' => formatDatetimeToDB('09/05/2018 09:18 AM'),
            'announcement_id' => 93,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS033/cas033_conv1.pdf',
            'fecha' => formatDatetimeToDB('18/04/2018 10:55 AM'),
            'announcement_id' => 93,
        ]);

        // Announcement 94
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS034/cas34_rf.pdf',
            'fecha' => formatDatetimeToDB('21/05/2018 01:49 PM'),
            'announcement_id' => 94,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS HOJA DE VIDA',
            'url' => '/documentos/2018/CAS/CAS034/CAS 034-2018 Resultados_Hoja_de_Vida.pdf',
            'fecha' => formatDatetimeToDB('17/05/2018 10:36 AM'),
            'announcement_id' => 94,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO Y CRONOGRAMA',
            'url' => '/documentos/2018/CAS/CAS30.pdf',
            'fecha' => formatDatetimeToDB('09/05/2018 09:18 AM'),
            'announcement_id' => 94,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS034/cas034_conv1.pdf',
            'fecha' => formatDatetimeToDB('18/04/2018 11:05 AM'),
            'announcement_id' => 94,
        ]);

        // Announcement 95
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS035/casRFInales.pdf',
            'fecha' => formatDatetimeToDB('15/06/2018 08:11 AM'),
            'announcement_id' => 95,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS-APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS035/cas035_rf_aptos.pdf',
            'fecha' => formatDatetimeToDB('12/06/2018 11:19 AM'),
            'announcement_id' => 95,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PROCESO DE SELECCIÓN CAS N°035 Y 036-2018',
            'url' => '/documentos/2018/CAS/PROCESO _CAS _N°_035_2018.pdf',
            'fecha' => formatDatetimeToDB('08/06/2018 03:25 PM'),
            'announcement_id' => 95,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS035/CAS35.pdf',
            'fecha' => formatDatetimeToDB('25/05/2018 10:17 AM'),
            'announcement_id' => 95,
        ]);

        // Announcement 96
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/CAS036/cas036_resf.pdf',
            'fecha' => formatDatetimeToDB('03/08/2018 11:10 AM'),
            'announcement_id' => 96,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO-CRONOGRAMA',
            'url' => '/documentos/2018/CAS/CAS036/cas036_comunicado.pdf',
            'fecha' => formatDatetimeToDB('23/07/2018 04:42 PM'),
            'announcement_id' => 96,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/CAS036/comunicado CAS_036.pdf',
            'fecha' => formatDatetimeToDB('14/06/2018 11:15 AM'),
            'announcement_id' => 96,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS-APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/CAS036/cas036_rf_aptos.pdf',
            'fecha' => formatDatetimeToDB('12/06/2018 11:20 AM'),
            'announcement_id' => 96,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS036/cas036_conv1.pdf',
            'fecha' => formatDatetimeToDB('25/05/2018 10:00 AM'),
            'announcement_id' => 96,
        ]);

        // Announcement 97
        AnnouncementLink::create([
            'titulo' => 'CANCELACIÓN CAS',
            'url' => '/documentos/2018/CAS/CAS037/cas037_cancelacion.pdf',
            'fecha' => formatDatetimeToDB('03/08/2018 08:24 AM'),
            'announcement_id' => 97,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/CAS037/cas037_conv1.pdf',
            'fecha' => formatDatetimeToDB('25/06/2018 06:49 PM'),
            'announcement_id' => 97,
        ]);

        // Announcement 98
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/cas38/cas38_rf1.pdf',
            'fecha' => formatDatetimeToDB('16/08/2018 10:53 AM'),
            'announcement_id' => 98,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/cas39/comunicado1.pdf',
            'fecha' => formatDatetimeToDB('13/08/2018 06:33 PM'),
            'announcement_id' => 98,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN CURRICULAR - APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/cas38/cas38_res1.pdf',
            'fecha' => formatDatetimeToDB('13/08/2018 06:28 PM'),
            'announcement_id' => 98,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/cas38/cas38_conv1.pdf',
            'fecha' => formatDatetimeToDB('20/07/2018 04:30 PM'),
            'announcement_id' => 98,
        ]);

        // Announcement 99
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/cas39/cas39_rf1.pdf',
            'fecha' => formatDatetimeToDB('16/08/2018 10:54 AM'),
            'announcement_id' => 99,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/cas38/comunicado1.pdf',
            'fecha' => formatDatetimeToDB('13/08/2018 06:32 PM'),
            'announcement_id' => 99,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN CURRICULAR - APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/cas39/cas39_res1.pdf',
            'fecha' => formatDatetimeToDB('13/08/2018 06:31 PM'),
            'announcement_id' => 99,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/cas39/cas39_conv1.pdf',
            'fecha' => formatDatetimeToDB('20/07/2018 04:34 PM'),
            'announcement_id' => 99,
        ]);

        // Announcement 100
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/cas40/cas040_rf.pdf',
            'fecha' => formatDatetimeToDB('08/11/2018 07:09 PM'),
            'announcement_id' => 100,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/cas40/cas040_comunicado.pdf',
            'fecha' => formatDatetimeToDB('06/11/2018 03:39 PM'),
            'announcement_id' => 100,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN CURRICULAR - APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/cas40/cas040_raptos.pd',
            'fecha' => formatDatetimeToDB('06/11/2018 03:38 PM'),
            'announcement_id' => 100,
        ]);
        AnnouncementLink::create([
            'titulo' => 'TERCERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/cas40/cas040_conv3.pdf',
            'fecha' => formatDatetimeToDB('11/10/2018 05:13 PM'),
            'announcement_id' => 100,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/cas40/cas040_resf2.pdf',
            'fecha' => formatDatetimeToDB('05/10/2018 03:14 PM'),
            'announcement_id' => 100,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN CURRICULAR - APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/cas40/cas40_rhv2.pdf',
            'fecha' => formatDatetimeToDB('02/10/2018 04:17 PM'),
            'announcement_id' => 100,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/cas40/cas40_cov2.pdf',
            'fecha' => formatDatetimeToDB('13/09/2018 09:15 AM'),
            'announcement_id' => 100,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/cas40/cas040_resf.pdf',
            'fecha' => formatDatetimeToDB('11/09/2018 04:51 PM'),
            'announcement_id' => 100,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS-APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/cas40/cas40_rhv.pdf',
            'fecha' => formatDatetimeToDB('04/09/2018 04:48 PM'),
            'announcement_id' => 100,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/CAS/cas40/cas40_comunicado.pdf',
            'fecha' => formatDatetimeToDB('27/08/2018 08:34 AM'),
            'announcement_id' => 100,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/cas40/cas040_conv.pdf',
            'fecha' => formatDatetimeToDB('20/08/2018 12:54 PM'),
            'announcement_id' => 100,
        ]);

        // Announcement 101
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/cas41/cas41_rf1.pdf',
            'fecha' => formatDatetimeToDB('25/09/2018 09:43 AM'),
            'announcement_id' => 101,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN CURRICULAR - APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/cas41/cas041_res1.pdf',
            'fecha' => formatDatetimeToDB('21/09/2018 05:52 PM'),
            'announcement_id' => 101,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/cas41/cas041_conv1.pdf',
            'fecha' => formatDatetimeToDB('05/09/2018 12:50 PM'),
            'announcement_id' => 101,
        ]);

        // Announcement 102
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/cas42/cas42_conv2.pdf',
            'fecha' => formatDatetimeToDB('28/09/2018 03:31 PM'),
            'announcement_id' => 102,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/CAS/cas42/cas42_rf1.pdf',
            'fecha' => formatDatetimeToDB('25/09/2018 09:44 AM'),
            'announcement_id' => 102,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN CURRICULAR - APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/cas42/cas042_res1.pdf',
            'fecha' => formatDatetimeToDB('21/09/2018 05:51 PM'),
            'announcement_id' => 102,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/CAS/cas42/cas042_conv1.pdf',
            'fecha' => formatDatetimeToDB('05/09/2018 12:54 PM'),
            'announcement_id' => 102,
        ]);

        // Announcement 103
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/cas/cas43/cas43_rf1.pdf',
            'fecha' => formatDatetimeToDB('26/09/2018 11:44 AM'),
            'announcement_id' => 103,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS-APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/cas/cas43/cas043_raptos.pdf',
            'fecha' => formatDatetimeToDB('21/09/2018 01:40 PM'),
            'announcement_id' => 103,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/cas/cas43/cas43_conv1.pdf',
            'fecha' => formatDatetimeToDB('06/09/2018 08:20 AM'),
            'announcement_id' => 103,
        ]);

        // Announcement 104
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/cas/cas44/cas044_resf2.pdf',
            'fecha' => formatDatetimeToDB('22/10/2018 05:24 PM'),
            'announcement_id' => 104,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN CURRICULAR - APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/cas/cas44/cas044_res2.pdf',
            'fecha' => formatDatetimeToDB('18/10/2018 05:18 PM'),
            'announcement_id' => 104,
        ]);
        AnnouncementLink::create([
            'titulo' => 'SEGUNDA CONVOCATORIA',
            'url' => '/documentos/2018/cas/cas44/cas044_conv2.pdf',
            'fecha' => formatDatetimeToDB('03/10/2018 08:18 AM'),
            'announcement_id' => 104,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/cas/cas44/cas44_rf1.pdf',
            'fecha' => formatDatetimeToDB('25/09/2018 08:06 AM'),
            'announcement_id' => 104,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN CURRICULAR - APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/cas/cas44/cas044_res1.pdf',
            'fecha' => formatDatetimeToDB('21/09/2018 05:43 PM'),
            'announcement_id' => 104,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/cas/cas44/cas044_conv.pdf',
            'fecha' => formatDatetimeToDB('10/09/2018 08:53 AM'),
            'announcement_id' => 104,
        ]);

        // Announcement 105
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/cas/cas45/cas045_resf.pdf',
            'fecha' => formatDatetimeToDB('12/10/2018 05:04 PM'),
            'announcement_id' => 105,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN CURRICULAR - APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/CAS/cas/cas45/cas045_resp.pdf',
            'fecha' => formatDatetimeToDB('10/10/2018 03:30 PM'),
            'announcement_id' => 105,
        ]);
        AnnouncementLink::create([
            'titulo' => 'FE DE ERRATAS',
            'url' => '/documentos/2018/cas/cas45/cas45_fe_erratas.pdf',
            'fecha' => formatDatetimeToDB('26/09/2018 07:54 AM'),
            'announcement_id' => 105,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/cas/cas45/cas045_conv1.pdf',
            'fecha' => formatDatetimeToDB('21/09/2018 05:46 PM'),
            'announcement_id' => 105,
        ]);

        // Announcement 106
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/cas/cas46/cas046_rf.pdf',
            'fecha' => formatDatetimeToDB('07/11/2018 04:54 PM'),
            'announcement_id' => 106,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN CURRICULAR - APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/cas/cas46/cas046_raptos.pdf',
            'fecha' => formatDatetimeToDB('19/10/2018 10:31 AM'),
            'announcement_id' => 106,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/cas/cas46/cas46_conv.pdf',
            'fecha' => formatDatetimeToDB('02/10/2018 09:56 AM'),
            'announcement_id' => 106,
        ]);

        // Announcement 107
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN CURRICULAR - APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2018/cas/cas47/cas047_raptos.pdf',
            'fecha' => formatDatetimeToDB('19/10/2018 06:33 PM'),
            'announcement_id' => 107,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/cas/cas47/cas47_conv.pdf',
            'fecha' => formatDatetimeToDB('02/10/2018 09:59 AM'),
            'announcement_id' => 107,
        ]);

        // Announcement 108
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/cas/cas48/cas048_rf1.pdf',
            'fecha' => formatDatetimeToDB('31/10/2018 08:49 AM'),
            'announcement_id' => 108,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2018/cas/cas48/cas48_comun1.pdf',
            'fecha' => formatDatetimeToDB('26/10/2018 03:55 PM'),
            'announcement_id' => 108,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS DE HOJA DE VIDA',
            'url' => '/documentos/2018/cas/cas48/cas48_rhv1.pdf',
            'fecha' => formatDatetimeToDB('26/10/2018 10:01 AM'),
            'announcement_id' => 108,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/cas/cas48/cas048_conv.pdf',
            'fecha' => formatDatetimeToDB('03/10/2018 10:17 AM'),
            'announcement_id' => 108,
        ]);

        // Announcement 109
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2018/cas/cas49/cas049_rf.pdf',
            'fecha' => formatDatetimeToDB('26/10/2018 10:47 AM'),
            'announcement_id' => 109,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS DEL PROCESO DE EVALUACIÓN CURRICULAR - APTOS PARA LA EVALUACIÓN DE CAPACIDADES.',
            'url' => '/documentos/2018/cas/PROCESO CAS N° 049-2018-RESULTADOS.pdf',
            'fecha' => formatDatetimeToDB('25/10/2018 04:15 PM'),
            'announcement_id' => 109,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2018/cas/cas49/cas049_conv.pdf',
            'fecha' => formatDatetimeToDB('05/10/2018 05:14 PM'),
            'announcement_id' => 109,
        ]);

        // Announcement 110
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2020/cas/cas01/cas_001_2020_rf.pdf',
            'fecha' => formatDatetimeToDB('06/02/2020 07:34 AM'),
            'announcement_id' => 110,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADO DE EVALUACIÓN DE HOJA DE VIDA',
            'url' => '/documentos/2020/cas/cas01/cas_001_2020_rhv.pdf',
            'fecha' => formatDatetimeToDB('04/02/2020 10:29 AM'),
            'announcement_id' => 110,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2020/cas/cas01/cas_001_2020_c2.pdf',
            'fecha' => formatDatetimeToDB('28/01/2020 03:52 PM'),
            'announcement_id' => 110,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2020/cas/cas01/cas_001_2020_c.pdf',
            'fecha' => formatDatetimeToDB('27/01/2020 05:45 PM'),
            'announcement_id' => 110,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2020/cas/cas01/cas_001_2020.pdf',
            'fecha' => formatDatetimeToDB('13/01/2020 09:16 AM'),
            'announcement_id' => 110,
        ]);

        // Announcement 111
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2020/cas/cas02/cas_002_2020_rf.pdf',
            'fecha' => formatDatetimeToDB('19/02/2020 12:16 PM'),
            'announcement_id' => 111,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2020/cas/cas02/cas_002_2020_aec.pdf',
            'fecha' => formatDatetimeToDB('13/02/2020 05:55 PM'),
            'announcement_id' => 111,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2020/cas/cas02/cas_002_2020.pdf',
            'fecha' => formatDatetimeToDB('24/01/2020 10:12 AM'),
            'announcement_id' => 111,
        ]);

        // Announcement 112
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2020/cas/cas03/cas_003_2020_rf.pd',
            'fecha' => formatDatetimeToDB('12/02/2020 06:02 PM'),
            'announcement_id' => 112,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2020/cas/cas03/cas_003_2020_comunicado.pdf',
            'fecha' => formatDatetimeToDB('11/02/2020 05:48 PM'),
            'announcement_id' => 112,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2020/cas/cas03/cas_003_2020_aec.pdf',
            'fecha' => formatDatetimeToDB('07/02/2020 05:35 PM'),
            'announcement_id' => 112,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2020/cas/cas03/cas_003_2020.pdf',
            'fecha' => formatDatetimeToDB('23/01/2020 03:53 PM'),
            'announcement_id' => 112,
        ]);

        // Announcement 113
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2020/cas/cas04/cas_004_2020_rf.pdf',
            'fecha' => formatDatetimeToDB('12/02/2020 06:06 PM'),
            'announcement_id' => 113,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2020/cas/cas04/cas_004_2020_comunicado.pdf',
            'fecha' => formatDatetimeToDB('11/02/2020 05:48 PM'),
            'announcement_id' => 113,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2020/cas/cas04/cas_004_2020_aec.pdf',
            'fecha' => formatDatetimeToDB('07/02/2020 05:37 PM'),
            'announcement_id' => 113,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2020/cas/cas04/cas_004_2020.pdf',
            'fecha' => formatDatetimeToDB('23/01/2020 03:56 PM'),
            'announcement_id' => 113,
        ]);

        // Announcement 114
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2020/cas/cas05/cas_005_2020_rf.pdf',
            'fecha' => formatDatetimeToDB('21/02/2020 04:27 PM'),
            'announcement_id' => 114,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2020/cas/cas05/cas_005_2020_aec.pdf',
            'fecha' => formatDatetimeToDB('17/02/2020 06:26 PM'),
            'announcement_id' => 114,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2020/cas/cas05/cas_005_2020.pdf',
            'fecha' => formatDatetimeToDB('04/02/2020 12:05 PM'),
            'announcement_id' => 114,
        ]);

        // Announcement 115
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2020/cas/cas06/cas_006_2020_rf.pdf',
            'fecha' => formatDatetimeToDB('17/02/2020 07:10 PM'),
            'announcement_id' => 115,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS DE RECLAMOS',
            'url' => '/documentos/2020/cas/cas06/cas_006_2020_rc.pdf',
            'fecha' => formatDatetimeToDB('14/02/2020 05:42 PM'),
            'announcement_id' => 115,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2020/cas/cas06/cas_006_2020_aec.pdf',
            'fecha' => formatDatetimeToDB('14/02/2020 08:18 AM'),
            'announcement_id' => 115,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2020/cas/cas06/cas_006_2020_c.pdf',
            'fecha' => formatDatetimeToDB('11/02/2020 08:05 PM'),
            'announcement_id' => 115,
        ]);
        AnnouncementLink::create([
            'titulo' => 'FE DE ERRATAS',
            'url' => '/documentos/2020/cas/cas06/cas_006_2020_f-e.pdf',
            'fecha' => formatDatetimeToDB('07/02/2020 09:40 AM'),
            'announcement_id' => 115,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2020/cas/cas06/cas_006_2020.pdf',
            'fecha' => formatDatetimeToDB('23/01/2020 04:51 PM'),
            'announcement_id' => 115,
        ]);

        // Announcement 116
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2020/cas/cas07/cas_007_2020_rf.pdf',
            'fecha' => formatDatetimeToDB('21/02/2020 04:31 PM'),
            'announcement_id' => 116,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2020/cas/cas07/cas_007_2020_aec.pdf',
            'fecha' => formatDatetimeToDB('17/02/2020 06:26 PM'),
            'announcement_id' => 116,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2020/cas/cas07/cas_007_2020.pdf',
            'fecha' => formatDatetimeToDB('04/02/2020 12:07 PM'),
            'announcement_id' => 116,
        ]);

        // Announcement 117
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2020/cas/cas08/cas_008_2020_rf.pdf',
            'fecha' => formatDatetimeToDB('26/02/2020 08:14 AM'),
            'announcement_id' => 117,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RECLAMOS',
            'url' => '/documentos/2020/cas/cas08/cas_008_2020_reclamos.pdf',
            'fecha' => formatDatetimeToDB('24/02/2020 01:32 PM'),
            'announcement_id' => 117,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2020/cas/cas08/cas_008_2020_c.pdf',
            'fecha' => formatDatetimeToDB('24/02/2020 11:46 AM'),
            'announcement_id' => 117,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA LA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2020/cas/cas08/cas_008_2020_aec.pdf',
            'fecha' => formatDatetimeToDB('24/02/2020 10:37 AM'),
            'announcement_id' => 117,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2020/cas/cas08/cas_008_2020.pdf',
            'fecha' => formatDatetimeToDB('05/02/2020 08:59 AM'),
            'announcement_id' => 117,
        ]);

        // Announcement 118
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2020/cas/cas09/cas_009_2020_rf.pdf',
            'fecha' => formatDatetimeToDB('26/02/2020 08:14 AM'),
            'announcement_id' => 118,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2020/cas/cas09/cas_009_2020_c.pdf',
            'fecha' => formatDatetimeToDB('24/02/2020 11:49 AM'),
            'announcement_id' => 118,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2020/cas/cas09/cas_009_2020_aec.pdf',
            'fecha' => formatDatetimeToDB('21/02/2020 04:32 PM'),
            'announcement_id' => 118,
        ]);
        AnnouncementLink::create([
            'titulo' => 'FE DE ERRATAS',
            'url' => '/documentos/2020/cas/cas09/cas_009_2020_f-e.pdf',
            'fecha' => formatDatetimeToDB('21/02/2020 01:00 PM'),
            'announcement_id' => 118,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2020/cas/cas09/cas_009_2020.pdf',
            'fecha' => formatDatetimeToDB('06/02/2020 10:14 AM'),
            'announcement_id' => 118,
        ]);

        // Announcement 119
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2020/cas/cas10/cas_010_2020_rf.pdf',
            'fecha' => formatDatetimeToDB('26/02/2020 08:15 AM'),
            'announcement_id' => 119,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2020/cas/cas10/cas_010_2020_c.pdf',
            'fecha' => formatDatetimeToDB('24/02/2020 11:49 AM'),
            'announcement_id' => 119,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/documentos/2020/cas/cas10/cas_010_2020_aec.pdf',
            'fecha' => formatDatetimeToDB('21/02/2020 06:36 PM'),
            'announcement_id' => 119,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2020/cas/cas10/cas_010_2020.pdf',
            'fecha' => formatDatetimeToDB('05/02/2020 09:00 AM'),
            'announcement_id' => 119,
        ]);

        // Announcement 120
        AnnouncementLink::create([
            'titulo' => 'FE DE ERRATAS',
            'url' => '/documentos/2020/cas/cas11/cas_011_2020_f-e.pdf',
            'fecha' => formatDatetimeToDB('20/02/2020 12:56 PM'),
            'announcement_id' => 120,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2020/cas/cas11/cas_011_2020.pdf',
            'fecha' => formatDatetimeToDB('12/02/2020 08:21 AM'),
            'announcement_id' => 120,
        ]);

        // Announcement 121
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS FINALES',
            'url' => '/documentos/2020/cas/cas12/cas_012_2020_rf.pdf',
            'fecha' => formatDatetimeToDB('26/02/2020 09:47 AM'),
            'announcement_id' => 121,
        ]);
        AnnouncementLink::create([
            'titulo' => 'RESULTADOS EVALUACIÓN TIC',
            'url' => '/documentos/2020/cas/cas12/cas_012_2020_tic.pdf',
            'fecha' => formatDatetimeToDB('25/02/2020 11:21 AM'),
            'announcement_id' => 121,
        ]);
        AnnouncementLink::create([
            'titulo' => 'COMUNICADO',
            'url' => '/documentos/2020/cas/cas12/cas_012_2020_c.pdf',
            'fecha' => formatDatetimeToDB('24/02/2020 12:59 PM'),
            'announcement_id' => 121,
        ]);
        AnnouncementLink::create([
            'titulo' => 'APTOS PARA EVALUACIÓN DE CAPACIDADES',
            'url' => '/ckeditor_assets/attachments/692/cas_012_2020_aec.pdf',
            'fecha' => formatDatetimeToDB('21/02/2020 08:00 PM'),
            'announcement_id' => 121,
        ]);
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2020/cas/cas12/cas_012_2020.pdf',
            'fecha' => formatDatetimeToDB('05/02/2020 05:53 PM'),
            'announcement_id' => 121,
        ]);

        // Announcement 122
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2020/cas/cas13/cas_013_2020.pdf',
            'fecha' => formatDatetimeToDB('20/02/2020 10:27 AM'),
            'announcement_id' => 122,
        ]);

        // Announcement 123
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2020/cas/cas14/cas_014_2020.pdf',
            'fecha' => formatDatetimeToDB('27/02/2020 05:39 PM'),
            'announcement_id' => 123,
        ]);

        // Announcement 124
        AnnouncementLink::create([
            'titulo' => 'PRIMERA CONVOCATORIA',
            'url' => '/documentos/2020/cas/cas15/cas_015_2020.pdf',
            'fecha' => formatDatetimeToDB('27/02/2020 05:39 PM'),
            'announcement_id' => 124,
        ]);
    }
}
