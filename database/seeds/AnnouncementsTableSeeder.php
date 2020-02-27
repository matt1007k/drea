<?php

use App\Models\Announcement;
use Illuminate\Database\Seeder;

class AnnouncementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Grupo 1 2017
        Announcement::create([
            'titulo' => 'ONCE(11) COORDINADORES LOCALES DEL PROGRAMA PRESUPUESTALES "PREVAED"',
            'numero' => '01-2017',
            'fecha' => '2017-01-23 15:13:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'UN COORDINADOR REGIONAL DE CALIDAD DE LA INFORMACIÓN PARA EL PROGRAMA PRESUPUESTAL 0090 "PELA"',
            'numero' => '02-2017',
            'fecha' => '2017-02-18 16:02:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'UN GESTOR REGIONAL PARA EL PROGRAMA PRESUPUESTAL 0090 "PELA"',
            'numero' => '03-2017',
            'fecha' => '2017-02-18 16:13:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) AUDITOR PARA EJECUTAR SERVICIOS DE CONTROL Y SERVICIOS RELACIONADOS PARA EL ÓRGANO DE CONTROL INSTITUCIONAL DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN AYACUCHO.',
            'numero' => '037',
            'fecha' => '2017-06-25 16:44:00',
            'estado' => 'en proceso',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'UN ACOMPAÑANTE PARA LA ENSEÑANZA DEL IDIOMA INGLÉS INSTITUCIONES EDUCATIVA PÚBLICAS DEL NIVEL DE EDUCACIÓN SECUNDARIA DE LA REGIÓN AYACUCHO – SEDE CANGALLO, HUAMANGA Y VÍCTOR FAJARDO.',
            'numero' => '04-2017',
            'fecha' => '2017-02-18 16:38:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'UN ACOMPAÑANTE PARA LA ENSEÑANZA DEL IDIOMA INGLÉS-INSTITUCIONES EDUCATIVA PÚBLICAS DEL NIVEL DE EDUCACIÓN SECUNDARIA DE LA REGIÓN AYACUCHO – SEDE LA MAR.',
            'numero' => '05-2017',
            'fecha' => '2017-02-18 16:42:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'UN ACOMPAÑANTE PARA LA ENSEÑANZA DEL IDIOMA INGLÉS-INSTITUCIONES EDUCATIVA PÚBLICAS DEL NIVEL DE EDUCACIÓN SECUNDARIA DE LA REGIÓN AYACUCHO – SEDE LUCANAS Y PARINACOCHAS.',
            'numero' => '06-2017',
            'fecha' => '2017-02-18 16:45:00',
            'estado' => 'cancelado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'UN ACOMPAÑANTE PARA LA ENSEÑANZA DEL IDIOMA INGLÉS',
            'numero' => '07-2017',
            'fecha' => '2017-02-18 16:46:00',
            'estado' => 'cancelado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'UN ESPECIALISTA REGIONAL EN EDUCACIÓN ESPECIAL PARA EL PROGRAMA PRESUPUESTAL 0106',
            'numero' => '08-2017',
            'fecha' => '2017-02-18 16:51:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'UN ESPECIALISTA PARA LA GESTIÓN DEL INCREMENTO EN EL ACCESO PARA EL PROGRAMA PRESUPUESTAL 0091',
            'numero' => '09-2017',
            'fecha' => '2017-02-18 16:52:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'UN ESPECIALISTA DE GENERACIÓN DE CONDICIONES EN II.EE. CREADAS PARA EL PROGRAMA PRESUPUESTAL 0091',
            'numero' => '10-2017',
            'fecha' => '2017-02-18 16:52:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'UN GESTOR REGIONAL PARA EL INCREMENTO EN EL ACCESO PARA EL PROGRAMA PRESUPUESTAL 0091',
            'numero' => '11-2017',
            'fecha' => '2017-02-18 16:53:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'UN (01) COORDINADOR TÉCNICO (A) PARA EL PROGRAMA PRESUPUESTAL Nº 0051 PREVENCIÓN Y TRATAMIENTO DEL CONSUMO DE DROGAS.',
            'numero' => '12-2017',
            'fecha' => '2017-02-18 16:54:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'SIETE (07) FACILITADORES (AS) PARA EL PROGRAMA Nº 0051 PREVENCIÓN Y TRATAMIENTO DEL CONSUMO DE DROGAS, EN EL ÁMBITO DE INTERVENCIÓN DE LA UGEL HUAMANGA.',
            'numero' => '13-2017',
            'fecha' => '2017-02-18 16:55:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => '(03) FACILITADORES (AS) PARA EL PROGRAMA PRESUPUESTAL Nº 0051 PREVENCIÓN Y TRATAMIENTO DEL CONSUMO DE DROGAS, EN EL ÀMBITO DE INTERVENCIÓN DE LA UGEL HUANTA.',
            'numero' => '14-2017',
            'fecha' => '2017-02-18 16:56:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'UN FACILITADOR (A) DE PREVENCION SELECTIVA PARA EL PROGRAMA PRESUPUESTAL Nº 0051 PREVENCIÓN Y TRATAMIENTO DEL CONSUMO DE DROGAS.',
            'numero' => '15-2017',
            'fecha' => '2017-02-18 16:58:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'DOS (02) ACOMPAÑANTES PEDAGÓGICOS DE COMUNICACIÓN SPSR PARA EL PROGRAMA PRESUPUESTAL 0090 "PELA"',
            'numero' => '16-2017',
            'fecha' => '2017-03-13 05:05:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'DOS (02) ACOMPAÑANTES PEDAGÓGICOS DE MATEMÁTICA SPSR PARA EL PROGRAMA PRESUPUESTAL 0090 "PELA"',
            'numero' => '17-2017',
            'fecha' => '2017-03-13 08:46:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'DOS (02) ACOMPAÑANTES SOCIAL COMUNITARIO SPSR PARA EL PROGRAMA PRESUPUESTAL 0090 "PELA"',
            'numero' => '18-2017',
            'fecha' => '2017-03-13 08:48:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'UN (01) PROFESIONAL EN SEGUIMIENTO Y MONITOREO DE PROGRAMAS PRESUPUESTALES DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO - 2017"PELA"',
            'numero' => '19-2017',
            'fecha' => '2017-04-04 08:49:00',
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);

        //Grupo 2 2018
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACION ADMINISTRATIVA DE SERVICIOS DE UN (1) AUDITOR PARA EJECUTAR SERVICIOS DE CONTROL Y SERVICIOS RELACIONADOS PARA EL ÓRGANO DE CONTROL INSTITUCIONAL DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '07',
            'fecha' => '2018-02-05 14:47:00',
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ABOGADO PARA EJECUTAR SERVICIOS DE CONTROL Y SERVICIOS RELACIONADOS PARA EL ÓRGANO DE CONTROL INSTITUCIONAL DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN AYACUCHO',
            'numero' => '08',
            'fecha' => '2018-02-05 14:48:00',
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN PROFESIONAL PARA DESEMPEÑAR EL CARGO Y FUNCIONES DE UN RESPONSABLE DE LA UNIDAD FORMULADORA DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '09',
            'fecha' => '2018-02-05 15:01:00',
            'estado' => 'cancelado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ESPECIALISTA EN PROYECTOS DE INVERSIÓN DE LA UNIDAD FORMULADORA DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN AYACUCHO.',
            'numero' => '10',
            'fecha' => '2018-02-05 15:20:00',
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (04) VIGILANTES PARA LABORAR EN EL IESPP "FILIBERTO GARCÍA CUELLAR" DE LA PROVINCIA DE PARINACOCHAS ,DISTRITO DE CORACORA PARA EL AÑO 2018',
            'numero' => '11',
            'fecha' => '2018-02-12 10:00:00',
            'estado' => 'cancelado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (03) VIGILANTES PARA LABORAR EN EL IESPP "PUQUIO" DE LA PROVINCIA DE LUCANAS ,DISTRITO DE PUQUIO PARA EL 2018.',
            'numero' => '12',
            'fecha' => '2018-02-12 10:10:00',
            'estado' => 'cancelado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (04) VIGILANTES PARA LABORAR EN EL IESPP "NUESTRA SEÑORA DE LOURDES" DE LA PROVINCIA DE HUAMANGA,DISTRITO DE AYACUCHO PARA EL 2018.',
            'numero' => '13',
            'fecha' => '2018-02-12 10:20:00',
            'estado' => 'cancelado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE (03) VIGILANTES PARA LABORAR EN EL IESPP "BENIGNO AYALA ESQUIVEL" PROVINCIA CANGALLO ,DISTRITO DE CANGALLO PARA EL AÑO 2018',
            'numero' => '14',
            'fecha' => '2018-02-12 10:28:00',
            'estado' => 'cancelado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE (03) VIGILANTES PARA LABORAR EN EL I.S.E.S.P.P "JOSÉ SALVADOR CAVERO OVALLE" DE LA PROVINCIA DE HUANTA',
            'numero' => '15',
            'fecha' => '2018-02-12 11:29:00',
            'estado' => 'cancelado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE (01) ESPECIALISTA EN CONTRATACIONES DEL ESTADO PARA EL ÁREA DE ABASTECIMIENTO Y SERVICIOS AUXILIARES DE LA DREA AYACUCHO',
            'numero' => '16',
            'fecha' => formatDatetimeToDB('12/02/2018 11:40 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE (2) ESPECIALISTAS AMBIENTALES EN EDUCACIÓN SECUNDARIA PARA PROGRAMA PRESUPUESTAL 0072 " DESARROLLO ALTERNATIVO,INTEGRAL Y SOSTENIBLE-PIRDAIS "DREA-AYACUCHO',
            'numero' => '17',
            'fecha' => formatDatetimeToDB('20/02/2018 04:00 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓM ADMINISTRATIVA DE SERVICIOS DE (1) ESPECIALISTA AMBIENTAL EN EDUCACIÓN PRIMARIA PARA EL PROGRAMA PRESUPUESTAL 0072"DESARROLLO ALTERNATIVO,INTEGRAL Y SOSTENIBLE"DREA_AYACUCHO',
            'numero' => '18',
            'fecha' => formatDatetimeToDB('21/02/2018 03:57 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN ESPECIALISTA AMBIENTAL EDUCACIÓN INICIAL PARA PROGRAMA PRESUPUESTAL 0072 "DESARROLLO ALTERNATIVO,INTEGRAL Y SOSTENIBLE-PIRDAIS" DREA -AYACUCHO',
            'numero' => '19',
            'fecha' => formatDatetimeToDB('21/02/2018 04:54 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) COORDINADOR REGIONAL PARA EL PROGRAMA PRESUPUESTAL 0072 " DESARROLLO ALTERNATIVO, INTEGRAL Y SOSTENIBLE - PIRDAIS" DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '20',
            'fecha' => formatDatetimeToDB('21/02/2018 04:42 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (1) ESPECIALISTA EN COMUNICACIONES PARA EL PROGRAMA PRESUPUESTAL 0072 " DESARROLLO ALTERNATIVO, INTEGRAL Y SOSTENIBLE - PIRDAIS " DREA -AYACUCHO',
            'numero' => '21',
            'fecha' => formatDatetimeToDB('21/02/2018 04:54 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ESPECIALISTA ADMINISTRATIVO, INTEGRAL Y SOSTENIBLE- PIRDAIS" DREA - AYACUCHO',
            'numero' => '22',
            'fecha' => formatDatetimeToDB('21/02/2018 05:05 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) PROFESIONAL PARA DESEMPEÑAR EL CARGO Y FUNCIONES DE RESPONSABLE DE LA UNIDAD FORMULADORA DE LA DRE - AYACUCHO .',
            'numero' => '23',
            'fecha' => formatDatetimeToDB('27/03/2018 10:57 AM'),
            'estado' => 'desierto',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ESPECIALISTA ADMINISTRATIVO PARA LA OFICINA DE ADMINISTRACIÓN DE LA DRE - AYACUCHO',
            'numero' => '24',
            'fecha' => formatDatetimeToDB('27/03/2018 11:05 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ABOGADO PARA LA SECRETARÍA TÉCNICA DE LOS ÓRGANOS INSTRUCTORES DEL PROCEDIMIENTO ADMINISTRATIVO DISCIPLINARIO DE LA DRE - AYACUCHO',
            'numero' => '25',
            'fecha' => formatDatetimeToDB('27/03/2018 11:10 AM'),
            'estado' => 'desierto',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN ESPECIALISTA PARA EL PROGRAMA PRESUPUESTAL 0091 "INCREMENTO EN EL ACCESO DE LA POBLACIÓN DE 3 A 16 AÑOS DE EDAD A LOS SERVICIOS EDUCATIVOS PÚBLICOS DE LA EDUCACIÓN BÁSICA REGULAR"',
            'numero' => '26',
            'fecha' => formatDatetimeToDB('18/04/2018 09:06 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);

        //Grupo 3 2019
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE ONCE (11) COORDINADORES LOCALES PARA EL PROGRAMA PRESUPUESTAL 0068 - REDUCCIÓN DE LA VULNERABILIDAD Y ATENCIÓN DE EMERGENCIAS POR DESASTRES DE LA DRE - AYACUCHO.',
            'numero' => '001',
            'fecha' => formatDatetimeToDB('22/01/2019 07:18 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ESPECIALISTA EN CONTRATACIONES DEL ESTADO PARA EL AREA DE ABASTECIMIENTO Y SERVICIOS AUXILIARES DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN AYACUCHO',
            'numero' => '002',
            'fecha' => formatDatetimeToDB('28/01/2019 09:47 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) RESPONSABLE DE ADQUISICIONES PARA EL ÁREA DE ABASTECIMIENTOS Y SERVICIOS AUXILIARES DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN AYACUCHO',
            'numero' => '003',
            'fecha' => formatDatetimeToDB('05/03/2019 04:07 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) RESPONSABLE DEL ÁREA DE ABASTECIMIENTOS Y SERVICIOS AUXILIARES DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO.',
            'numero' => '004',
            'fecha' => formatDatetimeToDB('05/03/2019 04:11 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ABOGADO PARA LA SECRETARÍA TÉCNICA DE LOS ÓRGANOS INSTRUCTORES DEL PROCEDIMIENTO ADMINISTRATIVO DISCIPLINARIO DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO.',
            'numero' => '005',
            'fecha' => formatDatetimeToDB('05/03/2019 04:16 PM'),
            'estado' => 'desierto',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) PROFESIONAL PARA DESEMPEÑAR EL CARGO Y FUNCIONES DE RESPONSABLE DE LA UNIDAD FORMULADORA DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO.',
            'numero' => '006',
            'fecha' => formatDatetimeToDB('05/03/2019 04:18 PM'),
            'estado' => 'desierto',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) TÉCNICO ADMINISTRATIVO PARA LA DIRECCIÓN DE GESTIÓN PEDAGÓGICA DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO.',
            'numero' => '007',
            'fecha' => formatDatetimeToDB('08/03/2019 11:59 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ESPECIALISTA ADMINISTRATIVO PARA LA DIRECCIÓN DE GESTIÓN PEDAGÓGICA DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO.',
            'numero' => '009',
            'fecha' => formatDatetimeToDB('08/03/2019 12:01 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) GESTOR(A) REGIONAL EN EL MARCO DEL PROGRAMA PRESUPUESTAL N° 0090 LOGROS DE APRENDIZAJE DE LOS ESTUDIANTES DE EDUCACIÓN BÁSICA REGULAR - PELA, DE LA DRE AYACUCHO',
            'numero' => '010',
            'fecha' => formatDatetimeToDB('12/03/2019 12:55 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) COORDINADOR(A) REGIONAL DE CALIDAD DE LA INFORMACIÓN EN EL MARCO DEL PROGRAMA PRESUPUESTAL N° 0090 - PELA, DE LA DRE AYACUCHO',
            'numero' => '011',
            'fecha' => formatDatetimeToDB('12/03/2019 12:57 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ESPECIALISTA EN SEGUIMIENTO Y MONITOREO DE FORMACIÓN DOCENTE EN EL MARCO DE LA MEJORA DE LA FORMACIÓN EN CARRERAS DOCENTES EN IES NO UNIVERSITARIA PARA LA DRE AYACUCHO',
            'numero' => '012',
            'fecha' => formatDatetimeToDB('12/03/2019 06:11 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE DOS (02) VIGILANTES PARA LABORAR EN EL IESPP REVALIDADO "JOSÉ SALVADOR CAVERO OVALLE", DE LA PROVINCIA DE HUANTA.',
            'numero' => '013',
            'fecha' => formatDatetimeToDB('13/03/2019 08:22 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) VIGILANTE PARA LABORAR EN IESPP REVALIDADO "PUQUIO" DE LA PROVINCIA DE LUCANAS.',
            'numero' => '014',
            'fecha' => formatDatetimeToDB('13/03/2019 08:25 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) VIGILANTE PARA LABORAR EN EL IESPP REVALIDADO "FILIBERTO GARCÍA CUÉLLAR" DE LA PROVINCIA DE PARINACOCHAS.',
            'numero' => '015',
            'fecha' => formatDatetimeToDB('13/03/2019 08:27 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE DOS (02) VIGILANTES PARA LABORAR EN EL IESPP REVALIDADO "NUESTRA SEÑORA DE LOURDES" DE LA PROVINCIA DE HUAMANGA.',
            'numero' => '016',
            'fecha' => formatDatetimeToDB('13/03/2019 08:50 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) COORDINADOR LOCAL PARA EL PROGRAMA EL PROGRAMA PRESUPUESTAL 0068 - REDUCCIÓN DE LA VULNERABILIDAD Y ATENCIÓN DE EMERGENCIAS POR DESASTRES DE LA DRE AYACUCHO',
            'numero' => '017',
            'fecha' => formatDatetimeToDB('21/03/2019 12:10 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) INGENIERO PARA LA UNIDAD FORMULADORA DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '018',
            'fecha' => formatDatetimeToDB('21/03/2019 10:41 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) COORDINADOR REGIONAL DE CONVIVENCIA ESCOLAR PARA LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '019',
            'fecha' => formatDatetimeToDB('12/04/2019 11:39 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN COORDINADOR LOCAL PARA EL PROGRAMA PRESUPUESTLA 0068 - REDUCCIÓN DE LA VULNERABILIDAD Y ATENCIÓN DE EMERGENCIAS POR DESASTRES DE LA DRE AYACUCHO.',
            'numero' => '020',
            'fecha' => formatDatetimeToDB('23/04/2019 12:16 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ABOGADO PARA LA OFICINA DE ASESORÍA JURÍDICA DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '021',
            'fecha' => formatDatetimeToDB('09/05/2019 03:48 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) TECNICO ADMINISTRATIVO PARA EL EQUIPO DE NUMERACIÓN Y ARCHIVO DE SECRETARIA GENERAL DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '022',
            'fecha' => formatDatetimeToDB('23/08/2019 11:42 AM'),
            'estado' => 'desierto',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ESPECIALISTA ADMINISTRATIVO PARA EL ÁREA DE PERSONAL DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '023',
            'fecha' => formatDatetimeToDB('01/07/2019 09:32 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) GESTOR CURRICULAR DE EDUCACIÓN SECUNDARIA PARA LA DIRECCIÓN DE GESTIÓN PEDAGÓGICA DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '024',
            'fecha' => formatDatetimeToDB('24/07/2019 08:21 AM'),
            'estado' => 'desierto',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) GESTOR CURRICULAR DE EDUCACIÓN SECUNDARIA CON FORMACIÓN TÉCNICA PARA LA DIRECCIÓN DE GESTIÓN PEDAGÓGICA DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '025',
            'fecha' => formatDatetimeToDB('24/07/2019 08:23 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) GESTOR CURRICULAR DE EDUCACIÓN SECUNDARIA JEC PARA LA DIRECCIÓN DE GESTIÓN PEDAGÓGICA DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '026',
            'fecha' => formatDatetimeToDB('24/07/2019 08:23 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) VIGILANTE PARA LABORAR EL INSTITUTO DE EDUCACIÓN SUPERIOR PEDAGÓGICA PÚBLICA REVALIDADO "JOSÉ SALVADOR CAVERO OVALLE"...',
            'numero' => '027',
            'fecha' => formatDatetimeToDB('09/08/2019 11:50 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) COORDINADOR LOCAL PARA EL PROGRAMA PRESUPUESTAL 0068 - REDUCCIÓN DE LA VULNERABILIDAD Y ATENCIÓN DE EMERGENCIA POR DESASTRES DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '028',
            'fecha' => formatDatetimeToDB('26/07/2019 11:56 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) AUDITOR PARA EJECUTAR SERVICIOS DE CONTROL Y SERVICIOS RELACIONADOS PARA EL ÓRGANO DE CONTROL INSTITUCIONAL DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '029',
            'fecha' => formatDatetimeToDB('20/08/2019 12:19 PM'),
            'estado' => 'desierto',
            'grupo_id' => 3,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) INGENIERO PARA LA UNIDAD FORMULADORA DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '030',
            'fecha' => formatDatetimeToDB('23/12/2019 04:34 PM'),
            'estado' => 'desierto',
            'grupo_id' => 3,
        ]);

        //Grupo 1 2017
        Announcement::create([
            'titulo' => 'DOS (02) COORDINADORES LOCALES DEL PROGRAMA PRESUPUESTAL 068 "PELA"',
            'numero' => '20-2017',
            'fecha' => formatDatetimeToDB('24/05/2017 08:56 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'UNA ACOMPAÑANTE PARA LA ENSEÑANZA DEL IDIOMA INGLÉS-NSTITUCIONES EDUCATIVAS PÚBLICAS DEL NIVEL DE EDUCACIÓN SECUNDARIA DE LA REGIÓN AYACUCHO-SEDE LUCANAS Y PARINACOCHAS.',
            'numero' => '21-2017',
            'fecha' => formatDatetimeToDB('24/05/2017 08:59 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'UN (01) ACOMPAÑANTE PAR ALA ENSEÑANZA DEL IDIOMA INGLÉS-INSTITUCIONES EDUCATIVAS PÚBLICAS DE NIVEL DE EDUCACIÓN SECUNDARIA DE LA REGIÓN AYACUCHO - SEDE HUAMANGA, HUANTA Y LA MAR.',
            'numero' => '22-2017',
            'fecha' => formatDatetimeToDB('24/05/2017 09:00 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN DE UN ASISTENTE ADMINISTRATIVO PARA EL PROGRAMA PRESUPUESTAL 0090',
            'numero' => '23-2017',
            'fecha' => formatDatetimeToDB('27/06/2017 08:59 AM'),
            'estado' => 'en proceso',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN DE UN ESPECIALISTA PAR ALA GESTION DEL INCREMENTO EN EL ACCESO PARA EL PROGRAMA PRESUPUESTAL 0091',
            'numero' => '24-2017',
            'fecha' => formatDatetimeToDB('27/06/2017 09:09 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN ESPECIALISTA EN SEGUIMIENTO Y MONITOREO DE INSTITUTOS DE FORMACIÓN DOCENTE PARA EL PROGRAMA PRESUPUESTAL 0107',
            'numero' => '25-2017',
            'fecha' => formatDatetimeToDB('04/08/2017 05:40 PM'),
            'estado' => 'en proceso',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRACIÓN ADMINISTRATIVA DE SERVICIOS DE CUATRO (04) VIGILANTES PARA LABORAR EN EL INSTITUTO DE EDUCACIÓN SUPERIOR PEDAGÓGICA PÚBLICA REVALIDADO "FILIBETO GARCÍA CUELLAR" DE LA PROVINCIA DE PARINACOCHAS.',
            'numero' => '26-2017',
            'fecha' => formatDatetimeToDB('04/08/2017 05:43 PM'),
            'estado' => 'en proceso',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE CUATRO (04) VIGILANTES PARA LABORAR EN EL IESPP "PUQUIO" DE LA PROVINCIA DE LUCANAS.',
            'numero' => '27-2017',
            'fecha' => formatDatetimeToDB('04/08/2017 05:47 PM'),
            'estado' => 'en proceso',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE TRES (03) VIGILANTES PARA LABORAR EN EL IESPP "JOSÉ SAVADOR CAVERO OVALLE" DE LA PROVINCIA DE HUANTA, DISTRITO DE HUANTA',
            'numero' => '28-2017',
            'fecha' => formatDatetimeToDB('04/08/2017 05:55 PM'),
            'estado' => 'en proceso',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE TRES (03) VIGILANTES PARA LABORAR EN EL IESPP "BENIGNO AYALA ESQUIVEL" DE LA PROVINCIA DE CANGALLO, DISTRITO DE CANGALLO.',
            'numero' => '29-2017',
            'fecha' => formatDatetimeToDB('04/08/2017 05:59 PM'),
            'estado' => 'en proceso',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE TRES (03) VIGILANTES PARA LABORAR EN EL IESPP "NUESTRA SEÑORA DE LOURDES" DE LA PROVINCIA DE HUAMANGA, DISTRITO DE AYACUCHO.',
            'numero' => '30-2017',
            'fecha' => formatDatetimeToDB('04/08/2017 06:04 PM'),
            'estado' => 'en proceso',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN DE UN (01) FACILITADOR (A) PARA EL PROGRAMA N°0051 PREVENCIÓN Y TRATAMIENTO DEL CONSUMO DE DROGAS, EN EL ÁMBITO DE INTERVENCIÓN DE LA UGEL HUAMANGA.',
            'numero' => '31-2017',
            'fecha' => formatDatetimeToDB('04/08/2017 06:08 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN DE TRES (03) COORDINADORES LOCALES DEL PROGRAMA PRESUPUESTAL 068 "REDUCCIÓN DE LA VULNERABILIDAD Y ATENCIÓN DE EMERGENCIAS POR DESASTRES-PREVAED"',
            'numero' => '32-2017',
            'fecha' => formatDatetimeToDB('14/08/2017 12:21 PM'),
            'estado' => 'en proceso',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN DE DOS (02) FACILITADORES (AS) PARA EL PROGRAMA PRESUPUESTAL 0051 PREVENCIÓN Y TRATAMIENTO DEL CONSUMO DE DROGAS, EN EL ÁMBITO DE INTERVENCIÓN DE LA UGEL HUAMANGA.',
            'numero' => '33-2017',
            'fecha' => formatDatetimeToDB('04/09/2017 04:14 PM'),
            'estado' => 'en proceso',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACION ADMINISTRATIVA DE SERVICIOS DE UN (01) VIGILANTE PARA LABORAR EN EL IESPP "JOSÉ SALVADOR CAVERO OVALLE" DE LA PROVINCIA DE HUANTA ,DISTRITO DE HUANTA .',
            'numero' => '34-2017',
            'fecha' => formatDatetimeToDB('25/09/2017 11:03 AM'),
            'estado' => 'en proceso',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01)TÉCNICO ADMINISTRATIVO-RESPONSABLE DE ADQUISICIONES PARA EL ÁREA DE ABASTECIMIENTO Y SERVICIOS AUXILIARES DE LA DREA',
            'numero' => '35-2017',
            'fecha' => formatDatetimeToDB('25/09/2017 11:19 AM'),
            'estado' => 'en proceso',
            'grupo_id' => 1,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN DE UN (01) ACOMPAÑANTE SOCIAL COMUNITARIO SPSR PARA EL PROGRAMA PRESUPUESTAL 0090 "LOGROS DE APRENDIZAJE DE LOS ESTUDIANTES DE EDUCACIÓN BÁSICA REGULAR-PELA 2017"',
            'numero' => '36-2017',
            'fecha' => formatDatetimeToDB('25/09/2017 11:29 AM'),
            'estado' => 'en proceso',
            'grupo_id' => 1,
        ]);

        // Grupo 2 2018
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN ESPECIALISTA EN SEGUIMIENTO Y MONITOREO DE INSTITUTOS DE FORMACIÓN DOCENTE PARA EL PROGRAMA PRESUPUESTAL 0107',
            'numero' => '27',
            'fecha' => formatDatetimeToDB('18/04/2018 09:33 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN ESPECIALISTA REGIONAL EN EDUCACIÓN ESPECIAL PARA EL PROGRAMA PRESUPUESTAL 0106 "INCLUSIÓN DE NIÑOS, NIÑAS Y JÓVENES CON CAPACIDAD EN LA EDUCACIÓN BÁSICA REGULAR"',
            'numero' => '28',
            'fecha' => formatDatetimeToDB('18/04/2018 09:38 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN COORDINADOR REGIONAL DE CALIDAD DE LA INFORMACIÓN PARA EL PROGRAMA PRESUPUESTAL 0090 "LOGROS DE APRENDIZAJE DE LOS ESTUDIANTES DE EDUCACIÓN BÁSICA REGULAR - PELA 2018"',
            'numero' => '29',
            'fecha' => formatDatetimeToDB('18/04/2018 09:41 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE CUATRO VIGILANTES PARA LABORAR EN EL I.E.S.P.P. "NUESTRA SEÑORA DE LOURDES" DE LA PROVINCIA DE HUAMANGA, DISTRITO DE AYACUCHO',
            'numero' => '30',
            'fecha' => formatDatetimeToDB('18/04/2018 09:43 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE CUATRO (04) VIGILANTES PARA LABORAR EN EL I.E.S.P.P "JOSÉ SALVADOR CAVERO OVALLE" DE LA PROVINCIA DE HUANTA DISTRITO DE HUANTA',
            'numero' => '31',
            'fecha' => formatDatetimeToDB('18/04/2018 10:01 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE CUATRO (04) VIGILANTES PARA LABORAR EN EL I.E.S.P.P "PUQUIO " DE LA PROVINCIAS DE LUCANAS DISTRITO DE PUQUIO',
            'numero' => '32',
            'fecha' => formatDatetimeToDB('18/04/2018 10:19 AM'),
            'estado' => 'en proceso',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE CUATRO (04) VIGILANTES PARA LABORAR EN EL I.E.S.P.P "FILIBERTO GARCÍA CUÉLLAR " DE LA PROVINCIA DE PARINACOCHAS DISTRITO DE CORACORA',
            'numero' => '33',
            'fecha' => formatDatetimeToDB('18/04/2018 10:50 AM'),
            'estado' => 'en proceso',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE CUATRO (04) VIGILANTE PARA LABORAR EN EL I.E.S.P.P "BENIGNO AYALA ESQUIVEL" DE LA PROVINCIA DE CANGALLO DISTRITO DE CANGALLO',
            'numero' => '34',
            'fecha' => formatDatetimeToDB('18/04/2018 11:01 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN ESPECIALISTA EN EDUCACIÓN DEL ÁREA DE MATEMÁTICA PARA LA DIRECCIÓN DE GESTIÓN PEDAGÓGICA DREA-EBR 2018',
            'numero' => '35',
            'fecha' => formatDatetimeToDB('25/05/2018 10:11 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN COORDINADOR LOCAL PARA EL PROGRAMA PRESUPUESTAL 0068 - REDUCCIÓN DE LA VULNERABILIDAD Y ATENCIÓN DE EMERGENCIA',
            'numero' => '36',
            'fecha' => formatDatetimeToDB('25/05/2018 09:51 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ABOGADO PARA EL ÓRGANO DE CONTROL INSTITUCIONAL DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO.',
            'numero' => '37',
            'fecha' => formatDatetimeToDB('25/06/2018 06:48 PM'),
            'estado' => 'cancelado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ESPECIALISTA AMBIENTAL EN EDUCACIÓN INICIAL PARA EL PROGRAMA PRESUPUESTAL 0072 "PIRDAIS" DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN',
            'numero' => '38',
            'fecha' => formatDatetimeToDB('20/07/2018 03:54 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ESPECIALISTA AMBIENTAL EN EDUCACIÓN PRIMARIA PARA EL PROGRAMA PRESUPUESTAL 0072 "PIRDAIS" DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN',
            'numero' => '39',
            'fecha' => formatDatetimeToDB('20/07/2018 04:29 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (02) COORDINADORES LOCALES PARA EL PROGRAMA PRESUPUESTAL 0668-REDUCCIÓN DE LA VULNERABILIDAD Y ATENCIÓN DE EMERGENCIAS POR DESASTRES',
            'numero' => '40',
            'fecha' => formatDatetimeToDB('20/08/2018 01:51 PM'),
            'estado' => 'en proceso',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN ACOMPAÑANTE PADAGÓGICO DE MATEMÁTICA PARA SOPORTE PEDAGÓGICO DE SECUNDARIA RURAL NÚCLEO, EN EL MARCO DEL PROGRAMA PRESUPUESTAL 0090',
            'numero' => '41',
            'fecha' => formatDatetimeToDB('05/09/2018 12:39 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ACOMPAÑANTE PEDAGÓGICO DE COMUNICACIÓN PARA SOPORTE PEDAGÓGICO DE SECUNDARIA RURAL NÚCLEO, EN EL MARCO DEL PROGRAMA PRESUPUESTAL 0090',
            'numero' => '42',
            'fecha' => formatDatetimeToDB('05/09/2018 12:47 PM'),
            'estado' => 'en proceso',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) AUDITOR PARA EJECUTAR SERVICIOS DE CONTROL Y SERVICIOS RELACIONADOS PARA EL ÓRGANO DE CONTROL INSTITUCIONAL DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO.',
            'numero' => '43',
            'fecha' => formatDatetimeToDB('06/09/2018 08:18 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) COORDINADOR TÉCNICO REGIONAL PARA EL PROGRAMA PRESUPUESTAL 0051 - PREVENCIÓN DE CONSUMO DE DROGAS DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '44',
            'fecha' => formatDatetimeToDB('10/09/2018 08:50 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ESPECIALISTA EN ECONEGOCIOS PARA EL PROGRAMA PRESUPUESTAL 0072-PIRDAIS DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '45',
            'fecha' => formatDatetimeToDB('21/09/2018 03:44 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN COORDINADOR REGIONAL DE CALIDAD DE LA INFORMACIÓN PARA EL PROGRAMA PRESUPUESTAL 0090 "LOGROS DE APRENDIZAJE DE LOS ESTUDIANTES DE EDUCACIÓN BÁSICA REGULAR - PELA 2018"',
            'numero' => '46',
            'fecha' => formatDatetimeToDB('02/10/2018 09:54 AM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ABOGADO PARA LA SECRETARÍA TÉCNICA DE LOS ÓRGANOS INSTRUCTORES DEL PROCEDIMIENTO ADMINISTRATIVO DISCIPLINARIO DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN AYACUCHO',
            'numero' => '47',
            'fecha' => formatDatetimeToDB('02/10/2018 09:58 AM'),
            'estado' => 'en proceso',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS DE UN (01) ESPECIALISTA EN PROYECTOS DE INVERSIÓN PÚBLICA EN INFRAESTRUCTURA EDUCATIVA PARA LA UNIDAD FORMULADORA DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN AYACUCHO',
            'numero' => '48',
            'fecha' => formatDatetimeToDB('02/10/2018 05:45 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);
        Announcement::create([
            'titulo' => 'CONVOCATORIA PARA LA CONTRATACIÓN ADMINISTRATIVA DE SERVICIOS, POR SUPLENCIA, DE UN (01) ABOGADO PARA LA OFICINA DE ASESORÍA JURÍDICA DE LA DIRECCIÓN REGIONAL DE EDUCACIÓN DE AYACUCHO',
            'numero' => '49',
            'fecha' => formatDatetimeToDB('05/10/2018 05:13 PM'),
            'estado' => 'finalizado',
            'grupo_id' => 2,
        ]);

        // Grupo 4 2020
        // Announcement::create([
        //     'titulo' => '',
        //     'numero' => '07',
        //     'fecha' => formatDatetimeToDB(''),
        //     'estado' => 'finalizado',
        //     'grupo_id' => 4,
        // ]);
    }
}
