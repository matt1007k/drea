<?php

use App\Models\Document;
use App\Models\TypeDocument;
use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeDocument::truncate();
        Document::truncate();

        $tipo1 = factory(TypeDocument::class)->create(['nombre' => 'Documentos de interés']);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 007-2020-GRA/GOB-GRDS-DREA/DGP-DIR.',
            'descripcion' => 'Identificación de Locales Escolares, declarados en estado de emergencia por peligro inminente en el período de lluevias 2019 - 2020.',
            'archivo' => 'documentos/2020/oficios/oficiom_007_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('10/01/2020 09:56 AM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 008-2020-GRA/GOB-GRDS-DREA/DGP-DIR.',
            'descripcion' => 'Escenario de riesgo ante la presencia de lluvias enero - marzo 2020.',
            'archivo' => 'documentos/2020/oficios/oficiom_008_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('10/01/2020 10:58 AM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 019-2020-GRA/GG-GRDS-DREA-DGP/DR.',
            'descripcion' => 'Comunica suspensión temporal de la adjudicación de plazas en Educación Básica Alternativa por falta de metas de atención.',
            'archivo' => 'documentos/2020/oficios/oficiom_019_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('16/01/2020 04:55 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 021-2020-GRA/GG-GRDS-DREA-DIR.',
            'descripcion' => 'Designación de responsables de Programas Presupuestales y Coordinadores del Programa Presupuestal 0090.',
            'archivo' => 'documentos/2020/oficios/oficiom_021_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('17/01/2020 03:28 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 022-2020-GRA/GG-GRDS-DREA/DGP-DIR.',
            'descripcion' => 'Solicita sinceramiento y validación de plazas para contrato de docentes en función a las metas de atención de Educación Básica Alternativa.',
            'archivo' => 'documentos/2020/oficios/oficiom_022_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('17/01/2020 04:45 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 025-2020-GRA/GG-GRDS-DREA-DIR.',
            'descripcion' => 'Estrategia de difusión de la Línea de Ayuda de la Fundación ANAR.',
            'archivo' => 'documentos/2020/oficios/oficiom_025_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('20/01/2020 12:34 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 027-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Jornada de trabajo del personal administrativo.',
            'archivo' => 'documentos/2020/oficios/oficiom_027_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('21/01/2020 04:32 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 030-2020-GRA/GG-GRDS-DREA/DGP-DIR.',
            'descripcion' => 'Comunica cumplimiento de la Directiva N° 020-2019-GRA/GG-GRDS-DREA-DGP, Disposiciones complementarias de Educación Básica Alternativa.',
            'archivo' => 'documentos/2020/oficios/oficiom_030_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('23/01/2020 11:47 AM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 035-2020-GRA/GG-GRDS-DREA-DIR.',
            'descripcion' => 'Resultados de la Evaluación JEC de nivel de inglés de los años 2018 y 2019, valido para el proceso de Contratación Docente año 2020.',
            'archivo' => 'documentos/2020/oficios/oficiom_035_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('23/01/2020 03:30 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 037-2020-GRA/GG-GRDS-DREA-DIR.',
            'descripcion' => 'Convoca a Primer Taller de Fortalecimiento de Capacidades en Regiones 2020 dirigido a servidores de las DRE y UGEL',
            'archivo' => 'documentos/2020/oficios/oficiom_037_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('24/01/2020 11:27 AM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO N° 232-2020-GRA/GOB-GG-GRDS-DREA/DGP-DIR.',
            'descripcion' => 'Comunica levantamiento de suspensión de adjudicación de plazas para contrato de docentes de Educación Básica Alternativa.',
            'archivo' => 'documentos/2020/oficios/oficio_232_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('24/01/2020 04:01 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 040-2020-GRA/GG-GRDS-DREA-DIR.',
            'descripcion' => 'Solicita designación de responsable de Compromisos de Desempeño 2020.',
            'archivo' => 'documentos/2020/oficios/oficiom_040_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('24/01/2020 05:24 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 050-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Establece disposiciones para la Contratación Administrativa de Servicios del personal de las intervenciones y acciones pedagógicas en el marco de los Programas Presupuestales.',
            'archivo' => 'documentos/2020/oficios/oficiom_050_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('29/01/2020 04:34 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 073-2020-GRA/GG-GRDS-DREA/DGP-DIR.',
            'descripcion' => 'Convocatoria a la " I Asistencia Técnica Regional de Educación Básica Alternativa".',
            'archivo' => 'documentos/2020/oficios/oficiom_073_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('11/02/2020 03:17 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 076-2020-GRA/GG-GRDS-DREA-DGP-DIR.',
            'descripcion' => 'Movilización de bienes en el marco de la Intervención de Rutas Solidarias.',
            'archivo' => 'documentos/2020/oficios/oficiom_076_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('11/02/2020 03:23 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 066-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Sobre renuncia docente adjudicado en el proceso de Contratación Docente 2020.',
            'archivo' => 'documentos/2020/oficios/oficiom_066_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('18/02/2020 09:57 AM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 079-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Sobre renuncia de docente adjudicado en el proceso de Contratación Docente 2020.',
            'archivo' => 'documentos/2020/oficios/oficiom_079_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('18/02/2020 09:58 AM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 097-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Sobre renuncia de docentes adjudicados en el proceso de Contratación Docente 2020.',
            'archivo' => 'documentos/2020/oficios/oficiom_097_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('18/02/2020 09:59 AM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 113-2020-GRA/GRDS-DREA-DGP-DIR.',
            'descripcion' => 'Orientaciones para implementar los Talleres Deportivos y Recreativos en el 2020.',
            'archivo' => 'documentos/2020/oficios/oficiom_113_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('24/02/2020 12:26 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 121-2020-GRA/GRDS-DREA-DGP-DIR.',
            'descripcion' => 'Cumplimiento de compromiso firmado por Especialistas de Educación Fisica de las UGEL de la región Ayacucho.',
            'archivo' => 'documentos/2020/oficios/oficiom_121_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('27/02/2020 05:31 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO N° 564-2020-GRA/GRDS-DREA-DGP-DIR.',
            'descripcion' => 'Comunica ejecución de los Juegos de Educación Superior 2020 Etapa Regional.',
            'archivo' => 'documentos/2020/oficios/oficio_564_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('27/02/2020 05:36 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 105-2020-GRA/GG-GRDS-DREA-OA-APER.  ',
            'descripcion' => 'Sobre renuncia de docentes adjudicados en el proceso de Contratación Docente 2020',
            'archivo' => 'documentos/2020/oficios/oficiom_105_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('28/02/2020 12:52 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 106-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Sobre renuncia de docentes adjudicados en el proceso de Contratación Docente 2020.',
            'archivo' => 'documentos/2020/oficios/oficiom_106_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('28/02/2020 12:55 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 107-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Remite oficio del Ministerio de Educación.',
            'archivo' => 'documentos/2020/oficios/oficiom_107_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('28/02/2020 12:56 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 108-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Sobre renuncia de docentes adjudicados en el proceso de Contratación Docente 2020.',
            'archivo' => 'documentos/2020/oficios/oficiom_108_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('28/02/2020 12:57 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 109-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Traslada comunicación de acogimiento al sinceramiento de deuda tributaria.',
            'archivo' => 'documentos/2020/oficios/oficiom_109_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('28/02/2020 12:58 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 110-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Traslada comunicación de acogimiento al sinceramiento de deuda tributaria.',
            'archivo' => 'documentos/2020/oficios/oficiom_110_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('28/02/2020 12:59 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 122-2020-GRA/GRDS-DREA-DGP-DIR.',
            'descripcion' => 'Acciones de prevención, mantenimiento y protección de infraestructuras deportivas y materiales educativos del área de Educación Fisica.',
            'archivo' => 'documentos/2020/oficios/oficiom_0122_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('03/03/2020 08:12 AM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO N° 564-2020-GRA/GRDS-DREA-DGP-DIR.',
            'descripcion' => 'Comunica ejecución de los Juegos de Educación Superior 2020 Etapa Regional.',
            'archivo' => 'documentos/2020/oficios/oficio_0564_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('03/03/2020 08:19 AM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO N° 567-2020-GRA/GRDS-DREA-DGP-DIR.',
            'descripcion' => 'Comunica organización y ejecución del "Campeonato Deportivo de Confraternidad entre los trabajadores de la DREA y las UGEL de la región Ayacucho".',
            'archivo' => 'documentos/2020/oficios/oficio_0567_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('03/03/2020 08:20 AM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 149-2020-GRA/GRDS-DREA-OADM-DIR.',
            'descripcion' => 'Solicita información de manera urgente.',
            'archivo' => 'documentos/2020/oficios/oficiom_149_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('05/03/2020 11:55 AM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 150-2020-GRA/GRDS-DREA-OADM-DIR.',
            'descripcion' => 'Solicita información de manera urgente. ',
            'archivo' => 'documentos/2020/oficios/oficiom_150_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('05/03/2020 11:57 AM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 124-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Sobre renuncia de docentes adjudicados en el proceso de Contratación Docente 2020.',
            'archivo' => 'documentos/2020/oficios/oficiom_124_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('06/03/2020 10:17 AM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 125-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Sobre renuncia de docentes adjudicados en el proceso de Contratación Docente 2020',
            'archivo' => 'documentos/2020/oficios/oficiom_125_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('06/03/2020 03:41 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 126-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Sobre renuncia de docentes adjudicados en el proceso de Contratación Docente 2020',
            'archivo' => 'documentos/2020/oficios/oficiom_126_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('06/03/2020 03:42 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 127-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Sobre renuncia de docentes adjudicados en el proceso de Contratación Docente 2020',
            'archivo' => 'documentos/2020/oficios/oficiom_127_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('06/03/2020 03:43 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 128-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Sobre renuncia de docentes adjudicados en el proceso de Contratación Docente 2020',
            'archivo' => 'documentos/2020/oficios/oficiom_128_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('06/03/2020 03:43 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 144-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Reitera cumplimiento de revisión y actualización de los datos de los servidores de la entidad a su cargo.',
            'archivo' => 'documentos/2020/oficios/oficiom_144_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('06/03/2020 03:45 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 152-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'SComunica declaración de improcedencia de paro nacional convocado por la Federación Nacional de Reunificación de Trabajadores Administrativos del Serctor Educación - FERTASE PERÚ ',
            'archivo' => 'documentos/2020/oficios/oficiom_152_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('06/03/2020 03:46 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);
        Document::create([
            'titulo' => 'OFICIO MULTIPLE N° 154-2020-GRA/GG-GRDS-DREA-OA-APER.',
            'descripcion' => 'Sobre renuncia de docentes adjudicados en el proceso de Contratación Docente 2020',
            'archivo' => 'documentos/2020/oficios/oficiom_154_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('06/03/2020 03:47 PM'),
            'publicado' => true,
            'tipo_id' => $tipo1->id,
        ]);

        $tipo2 = factory(TypeDocument::class)->create(['nombre' => 'Resolución']);
        Document::create([
            'titulo' => 'RESOLUCIÓN DIRECTORAL REGIONAL SECTORIAL N° 006-2020-GRA/GOB-GG-GRDS-DREA-DR.',
            'descripcion' => 'SE RESUELVE: DEJAR SIN EFECTO en todos sus extremos la Resolución Directoral Regional Sectorial N° 02506-2019-GRA/GOB-GG-GRDS-DREA-DR del 30 de octubre de 2019.',
            'archivo' => 'documentos/2020/resolucion/rdrs_006_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('06/01/2020 04:14 PM'),
            'publicado' => true,
            'tipo_id' => $tipo2->id,
        ]);
        Document::create([
            'titulo' => 'RESOLUCIÓN DIRECTORAL REGIONAL SECTORIAL N° 056-2020-GRA/GOB-GG-GRDS-DREA-DR.',
            'descripcion' => 'SE RESUELVE: APROBAR la Directiva N° 001-2020-GRA/GG-GRDS-DREA-OA-AP. "Normas que regulan los Permisos y Licencias por Incapacidad Temporal para el Trabajo y Gravidwz para el Personal de la jurisdicción de la Dirección Regional de Educación de Ayacucho", la misma que forma parte integrante de la presente Resolución Directoral Regional Sectorial.',
            'archivo' => 'documentos/2020/resolucion/rdrs_056_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('20/01/2020 05:12 PM'),
            'publicado' => true,
            'tipo_id' => $tipo2->id,
        ]);
        Document::create([
            'titulo' => 'RESOLUCIÓN DIRECTORAL REGIONAL SECTORIAL N° 0169-2020-GRA/GOB-GG-GRDS-DREA-DR.',
            'descripcion' => 'SE RESUELVE: DESIGNAR como responsables de los Compromisos de Desempeño 2020 en las Unidades Ejecutoras de la jurisdicción de la región Ayacucho y al interlocutor Regional de la Dirección Regional de Educación de Ayacucho, a los siguientes funcionarios...',
            'archivo' => 'documentos/2020/resolucion/rdrs_0169_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('29/01/2020 12:39 PM'),
            'publicado' => true,
            'tipo_id' => $tipo2->id,
        ]);
        Document::create([
            'titulo' => 'RESOLUCIÓN DIRECTORAL REGIONAL SECTORIAL N° 00172-2020-GRA/GOB-GG-GRDS-DREA-DR.',
            'descripcion' => 'SE RESUELVE: CONVOCAR al proceso de Contratación Docente en los Institutos de Educacion Superior Pedagógicos Públicos de la Región Ayacucho para el año 2020 aprobada por la Resolución Viceministerial N° 335-2019-MINEDU. ',
            'archivo' => 'documentos/2020/resolucion/rdrs_0172_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('04/02/2020 04:19 PM'),
            'publicado' => true,
            'tipo_id' => $tipo2->id,
        ]);

        $tipo3 = factory(TypeDocument::class)->create(['nombre' => 'Directivas']);

        $tipo4 = factory(TypeDocument::class)->create(['nombre' => 'Notas de prensa']);

        $tipo5 = factory(TypeDocument::class)->create(['nombre' => 'Contratos']);

        $tipo6 = factory(TypeDocument::class)->create(['nombre' => 'Otros']);
        Document::create([
            'titulo' => 'ACLARACIÓN DE AVISO DE SANEAMIENTO DE BIEN INMUEBLE.',
            'descripcion' => 'LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO ACLARA EL AVISO DE SANEAMIENTO DEL PREDIO (OCUPADO POR LA I.E. N° 38984-18-Mx/P "JOSÉ ABEL ALFARO PACHECO" NIVEL INICIAL).',
            'archivo' => 'documentos/2020/otros/saneamiento_21_01_2020.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('21/01/2020 04:24 PM'),
            'publicado' => true,
            'tipo_id' => $tipo6->id,
        ]);
        Document::create([
            'titulo' => 'MEMORIA ANUAL DE GESTIÓN INSTITUCIONAL 2019.',
            'descripcion' => 'Memoria Anual de Gestión Institucional 2019',
            'archivo' => 'documentos/2020/otros/memoria_anual_gestion.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('21/02/2020 11:39 AM'),
            'publicado' => true,
            'tipo_id' => $tipo6->id,
        ]);
        Document::create([
            'titulo' => 'SANEAMIENTO FÍSICO LEGAL DE INMUEBLES DEL MINISTERIO DE EDUCACIÓN DE IEI N°418/Mx-P Y IESTP DE HUALLHUA.',
            'descripcion' => 'LDe conformidad con el Art. 8 del DS N° 130-2001-EF y sus modificatorias; se viene tramitando el saneamiento FíSico Legal de bienes inmuebles a favor del Estado Peruano - Ministerio de Educacion, cuya..',
            'archivo' => 'documentos/2020/otros/pucacolpa.pdf',
            'anio' => '2020',
            'fecha' => formatDatetimeToDB('04/03/2020 12:39 PM'),
            'publicado' => true,
            'tipo_id' => $tipo6->id,
        ]);
    }
}
