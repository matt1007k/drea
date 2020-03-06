<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        Post::create([
            'titulo' => 'COAR 2020',
            'fecha' => formatDatetimeToDB('02/01/2020 11:02 AM'),
            'contenido' => '<p style="text-align: center;"><span style="font-size:20px;"><span style="color:#3498db;">ADMISI&Oacute;N 2020</span></span></p><p style="text-align: center;"><a href="http://admisioncoar.minedu.gob.pe/"><img alt="" src="/ckeditor_assets/pictures/613/content_coar3.png" style="width: 800px; height: 407px;" /></a></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'CONVOCATORIA DIRECTOR GENERAL 2020',
            'fecha' => formatDatetimeToDB('07/01/2020 04:43 PM'),
            'contenido' => '<p style="text-align: center;"><span style="font-size:24px;"><strong><span style="color:#e74c3c;">CONVOCATORIA EXCEPCIONAL PARA ENCARGATURA DE PUESTO Y DE FUNCIONES DE DIRECTOR GENERAL - 2020</span></strong></span></p>
            <p style="text-align: center;"><span style="font-size:24px;"><strong><span style="color:#e74c3c;"><img alt="" src="/ckeditor_assets/pictures/616/content_2020.jpg" style="width: 700px; height: 832px;" /></span></strong></span></p>
            <strong><span style="font-size:20px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/617/conv_exce_encarg_2020.pdf">VER DOCUMENTO</a></strong></span></strong>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'CHEQUES SENTENCIAS JUDICIALES ENERO 2020',
            'fecha' => formatDatetimeToDB('09/01/2020 05:04 PM'),
            'contenido' => '<p style="text-align: center;"><span style="font-size:36px;"><span style="color:#e74c3c;"><strong>CHEQUES SENTENCIAS JUDICIALES</strong></span></span></p>
            <p style="text-align: center;"><span style="color:#e74c3c;"><strong><span style="font-size:28px;"><img alt="" src="/ckeditor_assets/pictures/618/content_atencion.png" style="width: 700px; height: 249px;" /></span></strong></span></p>
            <p><strong><span style="font-size:28px;">Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/619/cheques_sentencias_juduciales.xls">CHEQUES SENTENCIAS JUDICIALES</a></span></strong></p>
            <p><strong><span style="font-size:28px;">NOTA: </span><span style="font-size:26px;">&Uacute;LTIMO D&Iacute;A DE COBRO 30 DE ENERO 2020, EN CAJA - DREA. CASO CONTRARIO SER&Aacute; REVERTIDO AUTOM&Aacute;TICAMENTE A TESORO P&Uacute;BLICO POR CORRESPONDER AL A&Ntilde;O 2019.</span></strong></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'PRECISIONES CONTRATACIÓN DOCENTE 2020',
            'fecha' => formatDatetimeToDB('10/01/2020 01:13 PM'),
            'contenido' => '<h2 style="text-align: center;"><span style="color:#e74c3c;"><strong><img alt="" src="/ckeditor_assets/pictures/620/content_captura.png" style="width: 800px; height: 597px;" /></strong></span><br />
            &nbsp;</h2><p><strong>VER DOCUMENTO&nbsp;(DAR CLICK) --&gt;&nbsp;<a href="/ckeditor_assets/attachments/621/precisiones_contratacion_docente.pdf" target="_blank">PRECISIONES CONTRATACI&Oacute;N DOCENTE 2020</a></strong></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'CHEQUES ANULADOS REPROGRAMABLES ENERO 2020',
            'fecha' => formatDatetimeToDB('13/01/2020 12:25 PM'),
            'contenido' => '<p style="text-align: center;"><span style="color:#e74c3c;"><span style="font-size:36px;"><strong>CHEQUES ANULADOS REPROGRAMABLES</strong></span></span></p>
            <p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/623/content_atencion.png" style="width: 700px; height: 249px;" /></p>
            <p><strong><span style="font-size:24px;">Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/624/cheques_anulados_reprogramables.xls">CHEQUES ANULADOS REPROGRAMABLES</a></span></strong></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'ADJUDICACION DE PLAZAS 2020',
            'fecha' => formatDatetimeToDB('14/01/2020 12:26 PM'),
            'contenido' => '<p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/625/content_captura.png" style="width: 800px; height: 566px;" /></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'ANAR',
            'fecha' => formatDatetimeToDB('20/01/2020 12:14 PM'),
            'contenido' => '<p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/627/content_anar.jpg" style="width: 712px; height: 1000px;" /></p>
            <p><strong><span style="font-size:24px;">VER (Dar click) --&gt; <a href="/ckeditor_assets/attachments/628/oficiom_025_2020.pdf">ESTRATEGIA DE DIFUSI&Oacute;N</a></span></strong></p>
            <p><strong><span style="font-size:24px;">VER (Dar click) --&gt; <a href="/ckeditor_assets/attachments/629/rdrs_2898_1.jpeg">RESOLUCI&Oacute;N (1)</a></span></strong></p>
            <p><strong><span style="font-size:24px;">VER (Dar click) --&gt; <a href="/ckeditor_assets/attachments/630/rdrs_2998_2.jpeg">RESOLUCI&Oacute;N (2)</a></span></strong></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'Concurso 2020',
            'fecha' => formatDatetimeToDB('21/01/2020 08:52 AM'),
            'contenido' => '<p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/631/content_82613026_2874306182633145_6341235976630697984_o.png" style="width: 662px; height: 834px;" /></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'Ministra febrero',
            'fecha' => formatDatetimeToDB('21/01/2020 09:00 AM'),
            'contenido' => '<p style="text-align: center;"><span style="font-size:14px;"><span style="color:#3498db;"><span style="background:white"><span style="line-height:107%"><span style="font-family:&quot;Helvetica&quot;,sans-serif">Ministra de Educaci&oacute;n, Flor Pablo Medina, visitar&aacute; Ayacucho</span></span></span></span></span></p>
            <p style="text-align: justify;"><span style="font-size:9.0pt"><span style="background:white"><span style="line-height:107%"><span style="font-family:&quot;Helvetica&quot;,sans-serif"><span style="color:#666666">Gobernador Regional de Ayacucho Carlos Alberto R&uacute;a Carbajal desarroll&oacute; una productiva reuni&oacute;n de trabajo con la Ministra de Educaci&oacute;n, Flor Pablo Medina, quien nos visitar&aacute; Ayacucho </span></span></span></span></span><span style="font-variant-ligatures:normal; text-align:start; -webkit-text-stroke-width:0px"><span style="font-variant-caps:normal"><span style="orphans:2"><span style="widows:2"><span style="text-decoration-style:initial"><span style="text-decoration-color:initial"><span style="word-spacing:0px">la segunda semana de febrero del presente a&ntilde;o, para socializar y evaluar los alcances para el licenciamiento de los institutos de nuestra regi&oacute;n.</span></span></span></span></span></span></span></p>
            <p style="text-align: justify;"><span style="font-size:9.0pt"><span style="background:white"><span style="line-height:107%"><span style="font-family:&quot;Helvetica&quot;,sans-serif"><span style="color:#666666">&ldquo;El licenciamiento es un proceso que permitir&aacute; ordenar la educaci&oacute;n superior tecnol&oacute;gica a nivel regional y nacional. Es el primer paso para buscar la excelencia acad&eacute;mica de los estudiantes; ahora el instituto podr&aacute; otorgar el grado de bachiller t&eacute;cnico a sus egresados, con la posibilidad de transitar a otros niveles superiores de la educaci&oacute;n&rdquo;, asegur&oacute; Pablo.</span></span></span></span></span></p>
            <p style="text-align: justify;"><span style="font-size:9.0pt"><span style="background:white"><span style="line-height:107%"><span style="font-family:&quot;Helvetica&quot;,sans-serif"><span style="color:#666666">Explic&oacute; que las condiciones b&aacute;sicas de calidad que exige la Ley abarca cinco puntos: Gesti&oacute;n institucional que demuestre la coherencia y solidez organizativa con el modelo educativo; gesti&oacute;n acad&eacute;mica y programas de estudios pertinentes; infraestructura f&iacute;sica, equipamiento y recursos para el aprendizaje adecuado; disponibilidad de personal docente id&oacute;neo y suficiente para los programas de estudios; y previsi&oacute;n econ&oacute;mica y financiera.&nbsp;</span></span></span></span></span><span style="font-size:9.0pt"><span style="background:white"><span style="line-height:107%"><span style="font-family:&quot;Helvetica&quot;,sans-serif"><span style="color:#666666">Cabe mencionar que la Ley N&deg; 30512 &ndash; Ley de Institutos y Escuelas de Educaci&oacute;n Superior y de la Carrera P&uacute;blica de sus Docentes, incorpor&oacute; procedimientos importantes que aseguren la oferta de la calidad educativa en los IEST, en ese sentido, un aspecto fundamental fue la necesidad de la obtenci&oacute;n del licenciamiento en todos los IEST del pa&iacute;s.</span></span></span></span></span></p>
            <p style="text-align: center;"><span style="font-size:9.0pt"><span style="background:white"><span style="line-height:107%"><span style="font-family:&quot;Helvetica&quot;,sans-serif"><span style="color:#666666"><img alt="" src="/ckeditor_assets/pictures/632/content_82835330_946277015765938_1670491164291104768_o.jpg" style="width: 700px; height: 525px;" /></span></span></span></span></span></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'Servidor',
            'fecha' => formatDatetimeToDB('21/01/2020 03:20 PM'),
            'contenido' => '<p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/635/content_83015264_465917377409783_4070490542511751168_n.png" style="width: 643px; height: 905px;" /></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'AVANZA',
            'fecha' => formatDatetimeToDB('22/01/2020 07:49 AM'),
            'contenido' => '<p style="text-align: center;"><span style="font-size:16px;"><span style="color:#3498db;">Sobre &nbsp;el &nbsp;proceso &nbsp;de &nbsp;contrataci&oacute;n &nbsp;de &nbsp;docentes, &nbsp;asistentes &nbsp;y auxiliares en Institutos de Educaci&oacute;n Superior Tecnol&oacute;gico p&uacute;blicos</span></span></p>
            <div class="WordSection1"><p style="margin-top:0cm; margin-right:48.25pt; margin-bottom:.0001pt; margin-left:65.05pt; text-align:justify"><span style="line-height:115%"><span lang="EN-US" style="font-size:10.5pt"><span style="line-height:115%"><span style="font-family:&quot;Arial&quot;,sans-serif">De acuerdo al literal a) del numeral 6.4.2 de la Norma T&eacute;cnica denominada &ldquo;Disposiciones que regulan los procesos de selecci&oacute;n y contrataci&oacute;n de docentes, asistentes y auxiliares en Institutos de Educaci&oacute;n Superior p&uacute;blicos&rdquo;, es responsabilidad de la Direcci&oacute;n Regional de Educaci&oacute;n (DRE), se ha aprobado la convocatoria del proceso de contrataci&oacute;n de docentes, asistentes y auxiliares; as&iacute; como promover su difusi&oacute;n en paneles informativos, portal web institucional u otros medios de comunicaci&oacute;n masivos. Asimismo, de lo establecido en el numeral 7.2.2.2 de la referida Norma T&eacute;cnica, dicha convocatoria es aprobada mediante resoluci&oacute;n por la DRE y publicada como m&aacute;ximo la primera semana del mes de enero de cada a&ntilde;o por el Director General del IES; <span style="text-decoration:none"><span style="text-underline:none">con la finalidad de mantener la transparencia en el concurso y publicar el referido cronograma en la p&aacute;gina web del Ministerio de Educaci&oacute;n.&nbsp;</span></span></span></span></span></span><span style="line-height:115%"><span lang="EN-US" style="font-size:10.5pt"><span style="line-height:115%"><span style="font-family:&quot;Arial&quot;,sans-serif">Por otro lado, corresponde informar que a la fecha, se han registrado inconvenientes de car&aacute;cter t&eacute;cnico en la etapa de inscripci&oacute;n y registro virtual de los postulantes llevada a cabo a trav&eacute;s del aplicativo AVANZA, por lo que en el marco del numeral 8.21 de la referida Norma T&eacute;cnica, de no ser posible el uso del aplicativo inform&aacute;tico en el desarrollo de las etapas de selecci&oacute;n y contrataci&oacute;n de docentes, regulares, docentes altamente especializados, docentes extraordinarios, asistentes y auxiliares, &eacute;stas se llevaran a cabo utilizando los formatos publicados en el portal institucional del Ministerio de Educaci&oacute;n de manera f&iacute;sica y manual.</span></span></span></span></p>
            <p style="margin: 0cm 48.25pt 0.0001pt 65.05pt; text-align: center;"><span style="line-height:115%"><span lang="EN-US" style="font-size:10.5pt"><span style="line-height:115%"><span style="font-family:&quot;Arial&quot;,sans-serif"><img alt="" src="/ckeditor_assets/pictures/637/content_bp82.jpg" style="width: 650px; height: 390px;" /></span></span></span></span></p>
            </div><p style="text-align: center;">&nbsp;</p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'ADJUDICACIÓN DE PLAZAS DOCENTES DE LA DRE AYACUCHO (II FASE)',
            'fecha' => formatDatetimeToDB('22/01/2020 02:53 PM'),
            'contenido' => '<p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/643/content_captura.png" style="width: 800px; height: 558px;" /></p>
            <p><strong>VER DOCUMENTO&nbsp;(DAR CLICK) --&gt;&nbsp;<a href="/ckeditor_assets/attachments/644/cronograma_ii_fase.pdf" target="_blank">CRONOGRAMA - ADJUDICACI&Oacute;N DE PLAZAS DOCENTES DE LA DRE AYACUCHO (II FASE)</a></strong></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'PLAZAS DESIERTAS DE LA DRE AYACUCHO CONVOCADAS PARA LA II FASE',
            'fecha' => formatDatetimeToDB('22/01/2020 03:00 PM'),
            'contenido' => '<p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/641/content_captura.png" style="width: 800px; height: 426px;" /></p>
            <p><strong>VER DOCUMENTO&nbsp;(DAR CLICK) --&gt;&nbsp;<a href="/ckeditor_assets/attachments/639/plazas_vacantes_ii_fase.pdf" target="_blank">PLAZAS DESIERTAS DE LA DRE AYACUCHO CONVOCADAS PARA LA II FASE (CONTRATACI&Oacute;N POR EVALUACI&Oacute;N DE EXPEDIENTES)</a></strong></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'Admisión 2020',
            'fecha' => formatDatetimeToDB('23/01/2020 07:35 AM'),
            'contenido' => '<p style="text-align: center;"><span style="font-size:14px;"><span style="color:#3498db;"><b>Propuesta de rango de fechas de actividades de admisi&oacute;n para definir los cronogramas del proceso de Admisi&oacute;n de los IESP periodo 2010-I en la DRE Ayacucho</b></span></span></p>
            <p style="text-align: center;"><span style="font-size:14px;"><span style="color:#3498db;"><b><img alt="" src="/ckeditor_assets/pictures/645/content_examen.png" style="width: 700px; height: 416px;" /></b></span></span></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'ESFAC',
            'fecha' => formatDatetimeToDB('23/01/2020 12:14 PM'),
            'contenido' => '<p style="text-align: center;"><span style="font-size:14px;"><span style="color:#3498db;"><a href="https://aesup.webnode.es/_files/200000041-1720a1720c/CONVOCATORIA%20ESFA.pdf"><img alt="" src="/ckeditor_assets/pictures/646/content_esfa2.png" style="width: 687px; height: 544px;" /></a></span></span></p>
            <p style="text-align: center;"><a href="https://aesup.webnode.es/_files/200000041-1720a1720c/CONVOCATORIA%20ESFA.pdf"><span style="color:#3498db;">RELACI&Oacute;N DE PLAZAS VACANTES PARA CONTRATO EN LA ESFAP &quot;FELIPE GUAMAN POMA DE AYALA&quot;</span></a></p>
            <p style="text-align: center;"><span style="color:#3498db;"><a href="https://aesup.webnode.es/_files/200000041-1720a1720c/CONVOCATORIA%20ESFA.pdf"><img alt="" src="/ckeditor_assets/pictures/647/content_descargar.png" style="width: 256px; height: 59px;" /></a></span></p>
            <p style="text-align: center;"><a href="https://aesup.webnode.es/_files/200000043-44cea44cec/FICHA%20DEL%20POSTULANTE%20DOCENTE%20ESFA.pdf"><span style="color:#3498db;"><strong>FICHA DE POSTULANTE A UTILIZAR EN EL PROCESO DE CONTRATO DE DOCENTE ESFA</strong></span></a></p>
            <p style="text-align: center;"><a href="https://aesup.webnode.es/_files/200000043-44cea44cec/FICHA%20DEL%20POSTULANTE%20DOCENTE%20ESFA.pdf"><span style="color:#3498db;"><img alt="" src="/ckeditor_assets/pictures/647/content_descargar.png" style="width: 256px; height: 59px;" /></span></a></p>
            <p style="text-align: center;"><a href="https://aesup.webnode.es/_files/200000042-9945b9945e/declaracion%20jurada%20docente%20esfa.pdf">DECLARACI&Oacute;N JURADA </a></p>
            <p style="text-align: center;"><span style="color:#3498db;"><a href="https://aesup.webnode.es/_files/200000042-9945b9945e/declaracion%20jurada%20docente%20esfa.pdf"><img alt="" src="/ckeditor_assets/pictures/647/content_descargar.png" style="width: 256px; height: 59px;" /></a></span></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'COMUNICADO PLAZAS 2020',
            'fecha' => formatDatetimeToDB('24/01/2020 10:47 AM'),
            'contenido' => '<p style="text-align: center;"><span style="color:#e74c3c;"><u><span style="font-size:36px;"><strong>COMUNICADO</strong></span></u></span></p>
            <p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/649/content_comunicado_convoc.jpg" style="width: 800px; height: 470px;" /></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'AVISO BIAE',
            'fecha' => formatDatetimeToDB('28/01/2020 11:30 AM'),
            'contenido' => '<p><img alt="" src="/ckeditor_assets/pictures/650/content_post_facebook.png" style="width: 800px; height: 800px;" /></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'CRONOGRAMA ROTACION DE PLAZAS',
            'fecha' => formatDatetimeToDB('28/01/2020 04:05 PM'),
            'contenido' => '<p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/654/content_cronograma_rotacion_2020.jpg" style="width: 700px; height: 892px;" /></p>
            <p><span style="font-size:24px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/655/cronograma_rotacion_2020.pdf">CRONOGRAMA DEL PROCESO DE ROTACI&Oacute;N DEL PERSONAL ADMINISTRATIVO</a></strong></span></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'Huapaya',
            'fecha' => formatDatetimeToDB('29/01/2020 09:38 AM'),
            'contenido' => '<p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/633/content_huapaya3.png" style="width: 415px; height: 483px;" /></p>
            <p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/634/content_iesp_no_pagues_2.png" style="width: 302px; height: 331px;" /><img alt="" src="/ckeditor_assets/pictures/651/content_descarg222.jpg" style="width: 225px; height: 225px;" /></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'Munieducativo',
            'fecha' => formatDatetimeToDB('29/01/2020 10:25 AM'),
            'contenido' => '<h1 style="text-align: center;"><span style="color:#3498db;">Minedu promueve Pacto Nacional por la Educaci&oacute;n en el MuniEducativo 2020</span></h1>
            <p style="text-align: center;"><span style="color:#3498db;"><img alt="" src="/ckeditor_assets/pictures/652/content_standard_cadeejecutivo29012020.jpg" style="width: 645px; height: 363px;" /></span></p>
            <p style="text-align: justify;">Este viernes 31 se realizar&aacute; el MuniEducativo Nacional 2020, que contar&aacute; con la participaci&oacute;n de m&aacute;s de 200 alcaldes provinciales y distritales, 26 directores y gerentes regionales de educaci&oacute;n, con el objetivo de generar compromisos consensuados para la mejora de la gesti&oacute;n educativa descentralizada y el buen inicio del a&ntilde;o escolar 2020. El encuentro, que ser&aacute; inaugurado por la Ministra de Educaci&oacute;n, Flor Pablo Medina, busca construir un espacio de alineamiento de agendas entre los gobiernos locales, sus gobiernos regionales y el MINEDU, con el fin de suscribir un Pacto Nacional por la Educaci&oacute;n con compromisos claros que fortalezcan el liderazgo de los gobiernos locales para generar condiciones favorables de bienestar y mejora de los aprendizajes de nuestros estudiantes.</p>
            <p style="text-align: justify;">En este evento se presentar&aacute;n experiencias exitosas nacionales e internacionales de municipalidades que han logrado resultados importantes en educaci&oacute;n; se dar&aacute;n a conocer mecanismos de cooperaci&oacute;n y financiamiento de proyectos educativos y se lanzar&aacute; la categor&iacute;a de gobiernos locales en el concurso de reconocimiento de buenas pr&aacute;cticas de gesti&oacute;n educativa, organizado por Minedu, adem&aacute;s se contar&aacute; con una feria de servicios y asistencia t&eacute;cnica permanente para los alcaldes. Adicionalmente y con el fin de generar estrategias para cerrar la brecha de infraestructura educativa en el pa&iacute;s, se presentar&aacute;n propuestas normativas para atender la problem&aacute;tica del saneamiento f&iacute;sico legal de terrenos para educaci&oacute;n, principalmente en comunidades campesinas e ind&iacute;genas. Al final de la jornada, las autoridades presentes firmar&aacute;n el Pacto Nacional de gobiernos locales por la Educaci&oacute;n, documento que fortalecer&aacute; la participaci&oacute;n de las municipalidades en la gesti&oacute;n educativa y se&ntilde;alar&aacute; una ruta de trabajo conjunto en la construcci&oacute;n del Proyecto Educativo Nacional al 2036.</p>
            <p style="text-align: justify;">La reuni&oacute;n ser&aacute; de 9:00 a.m. a 6:00 p.m. en la Escuela Nacional de Control, de la Contralor&iacute;a General de la Rep&uacute;blica.</p>
            <p style="text-align: justify;">&nbsp;</p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'Lanzamiento',
            'fecha' => formatDatetimeToDB('29/01/2020 03:16 PM'),
            'contenido' => '<p style="text-align: center;"><span style="color:#3498db;"><span style="font-size:14px;">Lanzamiento del Buen Inicio del A&ntilde;o Escolar 2020 - Ayacucho</span></span></p>
            <p style="text-align: center;"><span style="color:#3498db;"><span style="font-size:14px;"><img alt="" src="/ckeditor_assets/pictures/653/content_83137581_2816444221754651_146420035030614016_o.jpg" style="width: 700px; height: 539px;" /></span></span></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'REPORTE ROTACION PLAZAS 2020',
            'fecha' => formatDatetimeToDB('29/01/2020 04:07 PM'),
            'contenido' => '<p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/656/content_reporte_rotacion_plazas.jpg" style="width: 800px; height: 398px;" /></p>
            <p><span style="font-size:24px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/657/reporte_rotacion_plazas.pdf">REPORTE DE PLAZAS VACANTES PARA PROCESO DE ROTACI&Oacute;N DE PERSONAL ADMINISTRATIVO</a></strong></span></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'CUADRO DE MERITOS 2 FASE 2020 DRE AYACUCHO',
            'fecha' => formatDatetimeToDB('31/01/2020 04:11 PM'),
            'contenido' => '<p style="text-align: center;"><span style="font-size:26px;"><span style="color:#e74c3c;"><strong>CUADRO DE M&Eacute;RITOS&nbsp;- ADJUDICACI&Oacute;N&nbsp;II FASE&nbsp;(DRE AYACUCHO)</strong></span></span></p>
            <p style="text-align: center;"><span style="font-size:26px;"><span style="color:#e74c3c;"><strong><img alt="" src="/ckeditor_assets/pictures/658/content_cuadro_meritos_2fase_2020.jpg" style="width: 800px; height: 554px;" /></strong></span></span></p>
            <b><span style="font-size:22px;"><b>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/659/cuadro_meritos_2fase_2020.pdf">CUADRO DE M&Eacute;RITOS</a></b></span></b>',
            'publicado' => true,
        ]);

        Post::create([
            'titulo' => 'CONVOCATORIA PUESTOS AUCARA 2020',
            'fecha' => formatDatetimeToDB('03/02/2020 03:48 PM'),
            'contenido' => '<p style="text-align: center;"><span style="color:#e74c3c;"><strong><span style="font-size:26px;">CONVOCATORIA PARA ENCARGATURA DE PUESTOS DE RESPONSABLES DE UNIDADES, &Aacute;REAS Y COORDINACIONES</span></strong></span></p>
            <p style="text-align: center;"><span style="color:#e74c3c;"><strong><span style="font-size:26px;"><img alt="" src="/ckeditor_assets/pictures/662/content_convocatoria_puestos_aucara.jpg" style="width: 700px; height: 1032px;" /></span></strong></span></p>
            <p><strong><span style="font-size:24px;">Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/663/convocatoria_puestos_aucara.pdf">VER DOCUMENTO</a></span></strong></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'CONVOCATORIA ENCARGATURA FGC 2020',
            'fecha' => formatDatetimeToDB('03/02/2020 03:51 PM'),
            'contenido' => '<p style="text-align: center;"><strong><span style="color:#e74c3c;"><span style="font-size:26px;">CONVOCATORIA PARA ENCARGATURA DE PUESTO O FUNCIONES DE DIRECTOR GENERAL - IESTP FEDERICO GONZALES CABEZUDO</span></span></strong></p>
            <p style="text-align: center;"><strong><span style="color:#e74c3c;"><span style="font-size:26px;"><img alt="" src="/ckeditor_assets/pictures/664/content_convocatoria_director_fgc.jpg" style="width: 700px; height: 966px;" /></span></span></strong></p>
            <strong><span style="font-size:24px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/665/convocatoria_director_fgc.pdf">VER DOCUMENTO</a></strong></span></strong>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'AVISO RESOLUCION 172 2020',
            'fecha' => formatDatetimeToDB('05/02/2020 08:49 AM'),
            'contenido' => '<h2 style="text-align: center;"><span style="color:#e74c3c;"><strong>CONVOCATORIA PARA CONTRATACI&Oacute;N DOCENTE EN LOS INSTITUTOS DE EDUCACI&Oacute;N SUPERIOR PEDAG&Oacute;GICA P&Uacute;BLICOS DE LA REGI&Oacute;N AYACUCHO</strong></span><br />
            &nbsp;</h2><p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/666/content_captura.png" style="width: 800px; height: 443px;" /></p>
            <p style="text-align: center;"><strong>VER DOCUMENTO&nbsp;(DAR CLICK) --&gt;&nbsp;<a href="/ckeditor_assets/attachments/667/rdrs_n_0172-2020.pdf" target="_blank">CONVOCATORIA PARA CONTRATACI&Oacute;N DOCENTE EN LOS INSTITUTOS DE EDUCACI&Oacute;N SUPERIOR PEDAG&Oacute;GICA P&Uacute;BLICOS DE LA REGI&Oacute;N AYACUCHO</a></strong></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'CUADRO FINAL MERITOS II FASE',
            'fecha' => formatDatetimeToDB('05/02/2020 05:39 PM'),
            'contenido' => '<p style="text-align: center;"><span style="color:#e74c3c;"><strong><span style="font-size:28px;">CUADRO FINAL DE M&Eacute;RITOS - II FASE</span></strong></span></p>
            <p style="text-align: center;"><span style="color:#e74c3c;"><strong><span style="font-size:28px;"><img alt="" src="/ckeditor_assets/pictures/668/content_cuadro_finvl_meritos_iifase.jpg" style="width: 800px; height: 553px;" /></span></strong></span></p>
            <strong><span style="font-size:24px;"><strong>Ver (dar click) --&gt; <a href="/ckeditor_assets/attachments/669/cuadro_finvl_meritos_iifase.pdf">VER CUADRO DE M&Eacute;RITOS</a></strong></span></strong>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'COMUNICADO DREA 2020',
            'fecha' => formatDatetimeToDB('06/02/2020 09:11 PM'),
            'contenido' => '<p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/670/content_comunicado_drea_2020.jpg" style="width: 800px; height: 566px;" /></p>
            <strong><span style="font-size:24px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/671/comunicado_drea_2020.pdf">VER COMUNICADO</a></strong></span></strong>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'RELACION DE VACANTES Y HORAS PARA COMPLETAR EL PLAN DE ESTUDIO III FASE DE ADJUDICACIÓN',
            'fecha' => formatDatetimeToDB('07/02/2020 05:45 PM'),
            'contenido' => '<h2 style="text-align: center;"><span style="color:#e74c3c;"><strong>RELACION DE VACANTES Y HORAS PARA COMPLETAR EL PLAN DE ESTUDIO III FASE DE ADJUDICACI&Oacute;N</strong></span></h2>
            <h2 style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/675/content_captura.png" style="width: 800px; height: 378px;" /></h2>
            <p><strong>VER DOCUMENTO&nbsp;(DAR CLICK) --&gt;&nbsp;<a href="/ckeditor_assets/attachments/676/3ra_fase_adjud_docents_2020.pdf" target="_blank">RELACION DE VACANTES Y HORAS PARA COMPLETAR EL PLAN DE ESTUDIO III FASE DE ADJUDICACI&Oacute;N</a></strong></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'COMUNICADO ROTACION DL 276',
            'fecha' => formatDatetimeToDB('11/02/2020 05:43 PM'),
            'contenido' => '<p style="text-align: center;"><span style="font-size:48px;"><span style="color:#e74c3c;"><u><strong>COMUNICADO</strong></u></span></span></p>
            <p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/677/content_comunicado_proceso_rotacion.jpg" style="width: 800px; height: 547px;" /></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'CRONOGRAMA CONTRATO DOCENTE 2020',
            'fecha' => formatDatetimeToDB('12/02/2020 09:43 AM'),
            'contenido' => '<p style="text-align: center;"><span style="color:#e74c3c;"><strong><u><span style="font-size:28px;">CRONOGRAMA CONTRATO DOCENTE INSTITUTOS DE EDUCACI&Oacute;N SUPERIOR TECNOL&Oacute;GICO 2020</span></u></strong></span></p>
            <p style="text-align: center;"><span style="color:#e74c3c;"><strong><u><span style="font-size:28px;"><img alt="" src="/ckeditor_assets/pictures/660/content_cronograma_contrato_docente_2020.jpg" style="width: 700px; height: 1064px;" /></span></u></strong></span></p>
            <p><span style="font-size:24px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/661/cronograma_contrato_docente_2020.pdf">CRONOGRAMA CONTRATO DOCENTE</a></strong></span></p>
            <p><span style="font-size:24px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/672/posiciones_vacantes_iestp_2020.pdf">POSICIONES VACANTES</a></strong></span></p>
            <p><span style="font-size:24px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/673/anexo-4.pdf" target="_blank">DECLARACION JURADA</a></strong></span></p>
            <p><span style="font-size:24px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/674/ficha-postulante-docente.doc" target="_blank">FICHA DE POSTULANTE</a></strong></span></p>
            <p><span style="font-size:24px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/678/fe_erratas.pdf" target="_blank">FE DE ERRATAS</a></strong></span></p>
            <strong><span style="font-size:24px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/679/posiciones_vacantes_generadas_encargatura.pdf">POSICIONES VACANTES GENERADAS POR ENCARGATURA</a></strong></span></strong>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'Precisiones',
            'fecha' => formatDatetimeToDB('13/02/2020 04:50 PM'),
            'contenido' => '<p style="text-align: center;"><span style="font-size:14px;"><span style="color:#3498db;">Precisiones sobre el proceso de contrataci&oacute;n de docentes en IEST p&uacute;blicos</span></span></p>
            <p style="text-align: center;"><span style="font-size:14px;"><span style="color:#3498db;"><img alt="" src="/ckeditor_assets/pictures/680/content_web.png" style="width: 706px; height: 413px;" /></span></span></p>
            <p style="text-align: center;"><span style="font-size:14px;"><span style="color:#3498db;"><a href="https://aesup.webnode.es/_files/200000044-2b0642b066/OFICIO_MULTIPLE-00005-2020-MINEDU-VMGP-DIGESUTPA-DISERTPA%20Ayacucho.pdf"><img alt="" src="/ckeditor_assets/pictures/681/content_descargar.png" style="width: 256px; height: 82px;" /></a></span></span></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'TERCERA FASE DE ADJUDICACIÓN POSTULANTES OBSERVADOS',
            'fecha' => formatDatetimeToDB('14/02/2020 08:30 AM'),
            'contenido' => '<h3 style="text-align: center;"><strong><span style="color:#e74c3c;">TERCERA FASE DE ADJUDICACI&Oacute;N DEL PROCESO DE CONTRATACI&Oacute;N DOCENTE 2020 - POSTULANTES OBSERVADOS</span></strong></h3>
            <h3><img alt="" src="/ckeditor_assets/pictures/686/content_captura.png" style="width: 800px; height: 393px;" /></h3>
            <p><strong>VER DOCUMENTO&nbsp;(DAR CLICK) --&gt;&nbsp;<a href="/ckeditor_assets/attachments/685/iii_fase_postulantes_observados.pdf" target="_blank">TERCERA FASE DE ADJUDICACI&Oacute;N - POSTULANTES OBSERVADOS</a></strong></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'CUADRO FINAL DE MÉRITOS - III FASE',
            'fecha' => formatDatetimeToDB('14/02/2020 08:31 AM'),
            'contenido' => '<h2 style="text-align: center;"><strong><span style="color:#e74c3c;">CUADRO FINAL DE M&Eacute;RITOS - III FASE</span></strong></h2>
            <h2 style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/683/content_captura.png" style="width: 800px; height: 315px;" /></h2>
            <p><strong>VER DOCUMENTO&nbsp;(DAR CLICK) --&gt;&nbsp;<a href="/ckeditor_assets/attachments/684/iii_fase_cuadro_de_meritos.pdf" target="_blank">CUADRO FINAL DE M&Eacute;RITOS - III FASE</a></strong></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'RESULTADOS FEDERICO GONZALES CABEZUDO 2020',
            'fecha' => formatDatetimeToDB('19/02/2020 06:32 PM'),
            'contenido' => '<h3 style="text-align: center;"><span style="font-size:24px;"><strong><span style="color:#e74c3c;">PROCESO DE SELECCI&Oacute;N DE PERSONAL PARA OCUPAR EL CARGO DE DIRECTOR GENERAL DEL IESTP&nbsp;&quot;FEDERICO GONZ&Aacute;LES CABEZUDO&quot; - 2020</span></strong></span></h3>
            <h3 style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/687/content_captura.png" style="width: 800px; height: 449px;" /></h3>
            <p><span style="font-size:20px;"><strong>VER DOCUMENTO&nbsp;(DAR CLICK) --&gt;&nbsp;<a href="/ckeditor_assets/attachments/688/skm_36720022007160.pdf" target="_blank">RESULTADOS EVALUACION DE EXPEDIENTES</a></strong></span></p>
            <p><span style="font-size:20px;"><strong>VER DOCUMENTO&nbsp;(DAR CLICK) --&gt;&nbsp;<a href="/ckeditor_assets/attachments/689/comunicado_fgc_2020.pdf" target="_blank">COMUNICADO</a></strong></span></p>
            <p>&nbsp;</p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'CONCURSO PÚBLICO SAN MIGUEL 2020',
            'fecha' => formatDatetimeToDB('26/02/2020 09:51 AM'),
            'contenido' => '<p style="text-align: center;"><span style="font-size:24px;"><span style="color:#e74c3c;"><strong>COMISI&Oacute;N DE EVALUACI&Oacute;N DEL PROCESO DE CONCURSO P&Uacute;BLICO DE M&Eacute;RITOS DE DOCENTES REGULARES DEL IESTP &quot;SAN MIGUEL&quot; - 2020</strong></span></span></p>
            <p style="text-align: center;"><span style="font-size:24px;"><span style="color:#e74c3c;"><strong><img alt="" src="/ckeditor_assets/pictures/694/content_iestpsanmiguel.jpg" style="width: 800px; height: 496px;" /></strong></span></span></p>
            <p><span style="font-size:20px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/695/iestpsanmiguel2020.pdf">RESULTADOS EVALUACI&Oacute;N DE EXPEDIENTES</a></strong></span></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'Coronavirus',
            'fecha' => formatDatetimeToDB('26/02/2020 05:27 PM'),
            'contenido' => '<p style="text-align: center;"><span style="color:#3498db;">RECOMENDACIONES PARA PREVENIR Y CONTROLAR EL RIESGO DEL CORONAVIRUS EN LAS INSTITUCIONES EDUCATIVAS&nbsp;</span></p>
            <p style="text-align: justify;">&iquest;Qu&eacute; es el coronavirus?&nbsp;<br />
            Los coronavirus son conocidos por provocar un amplio rango de enfermedades, desde un resfriado hasta infeccionesrespiratorias. El nuevo coronavirus es una cepa no&nbsp;identificada en humanos previamente.<br />
            Los coronavirus son una familia de virus que se descubri&oacute; en la d&eacute;cada de los 60 pero&nbsp;cuyo origenes todav&iacute;a desconocido. Sus diferentes tipos provocan diferentes enfermedades, desde un resfriado com&uacute;n hasta un s&iacute;ndrome<br />
            respiratorio grave (una&nbsp; forma grave de neumon&iacute;a).&nbsp;</p>
            <p style="text-align: center;"><a href="https://aesup.webnode.es/_files/200000045-3e9f63e9f9/Coronavirus.pdf"><img alt="" src="/ckeditor_assets/pictures/682/content_descargar.png" style="width: 156px; height: 36px;" /></a></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'EBA',
            'fecha' => formatDatetimeToDB('28/02/2020 08:08 AM'),
            'contenido' => '<p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/693/content_eba.png" style="width: 637px; height: 347px;" /></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'RESULTADOS PARCIALES DE EVALUACIÓN DE EXPEDIENTES - DOCENTES REGULARES EDUCACIÓN SUPERIOR 2020',
            'fecha' => formatDatetimeToDB('28/02/2020 03:48 PM'),
            'contenido' => '<p style="text-align: center;"><span style="font-size:24px;"><span style="color:#e74c3c;"><strong>RESULTADOS PARCIALES DE EVALUACI&Oacute;N DE EXPEDIENTES - DOCENTES REGULARES EDUCACI&Oacute;N SUPERIOR 2020</strong></span></span></p>
            <p style="text-align: center;"><span style="font-size:24px;"><span style="color:#e74c3c;"><strong>IESTP &quot;MANUEL ANTONIO HIERRO POZO&quot;</strong></span></span></p>
            <p style="text-align: center;"><span style="font-size:24px;"><span style="color:#e74c3c;"><strong><img alt="" src="/ckeditor_assets/pictures/701/content_asdfdasf.jpg" style="width: 800px; height: 394px;" /></strong></span></span></p>
            <p><span style="font-size:20px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/700/mahp_evaluacion_exped.pdf">RESULTADOS PARCIALES</a></strong></span></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'RESULTADOS PARCIALES SAN JUAN VILCASHUAMAN',
            'fecha' => formatDatetimeToDB('28/02/2020 03:52 PM'),
            'contenido' => '<p style="text-align: center;"><span style="font-size:24px;"><span style="color:#e74c3c;"><strong>RESULTADOS PARCIALES DE EVALUACI&Oacute;N CURRICULAR IESTP &quot;SAN JUAN&quot; - VILCASHUAM&Aacute;N</strong></span></span></p>
            <p style="text-align: center;"><span style="font-size:24px;"><span style="color:#e74c3c;"><strong><img alt="" src="/ckeditor_assets/pictures/702/content_sanjuan_vilcas.jpg" style="width: 600px; height: 908px;" /></strong></span></span></p>
            <strong><span style="font-size:20px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/703/res_parc_vilcas.pdf">RESULTADOS PARCIALES</a></strong></span></strong>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'RESULTADOS EVALUACIÓN EXPEDIENTES FGC 2020',
            'fecha' => formatDatetimeToDB('28/02/2020 06:02 PM'),
            'contenido' => 'p style="text-align: center;"><span style="font-size:24px;"><span style="color:#e74c3c;"><strong>RESULTADOS EVALUACI&Oacute;N EXPEDIENTES IESTP &quot;FEDERICO GONZALES CABEZUDO&quot;&nbsp;HUANCASANCOS 2020</strong></span></span></p>
            <p style="text-align: center;"><span style="font-size:24px;"><span style="color:#e74c3c;"><strong><img alt="" src="/ckeditor_assets/pictures/709/content_fgc_2020.jpg" style="width: 800px; height: 383px;" /></strong></span></span></p>
            <p><span style="font-size:20px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/710/res_eval_exp_fgc_2020.pdf">RESULTADOS EVALUACI&Oacute;N DE EXPEDIENTES</a></strong></span></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'RESULTADOS EVALUACIÓN EXPEDIENTES SDG 2020',
            'fecha' => formatDatetimeToDB('28/02/2020 07:13 PM'),
            'contenido' => '<p style="text-align: center;"><span style="font-size:24px;"><span style="color:#e74c3c;"><strong>RESULTADOS EVALUACI&Oacute;N EXPEDIENTES IESTP &quot;SANTO DOMINGO DE GUZM&Aacute;N&quot;&nbsp;2020</strong></span></span></p>
            <p style="text-align: center;"><span style="font-size:24px;"><span style="color:#e74c3c;"><strong><img alt="" src="/ckeditor_assets/pictures/711/content_resevalexpsdg.jpg" style="width: 800px; height: 481px;" /></strong></span></span></p>
            <strong><span style="font-size:20px;"><strong>Ver (Dar click) --&gt; <a href="/ckeditor_assets/attachments/712/res_eval_exp_sdg.pdf">RESULTADOS DE EVALUACI&Oacute;N</a></strong></span></strong>',
            'publicado' => true,
        ]);

        Post::create([
            'titulo' => 'MÉRITOS DE DOCENTES REGULARES DEL IEST PÚBLICO "PERÚ COREA DEL SUR" - 2020',
            'fecha' => formatDatetimeToDB('02/03/2020 08:02 AM'),
            'contenido' => '<h2 style="text-align: center;"><strong><span style="color:#e74c3c;">COMISI&Oacute;N DE EVALUACI&Oacute;N DEL PROCESO DEL CONCURSO P&Uacute;BLICO DE M&Eacute;RITOS DE DOCENTES REGULARES DEL IEST P&Uacute;BLICO &quot;PER&Uacute; COREA DEL SUR&quot; - 2020</span></strong></h2>
            <p style="text-align: center;"><strong><span style="color:#e74c3c;"><img alt="" src="/ckeditor_assets/pictures/713/content_captura.png" style="width: 800px; height: 516px;" /></span></strong></p>
            <p><strong>VER DOCUMENTO&nbsp;(DAR CLICK) --&gt;&nbsp;<a href="http://dreayacucho.gob.pe/ckeditor_assets/attachments/708/skm_36720022905210.pdf" target="_blank">COMISI&Oacute;N DE EVALUACI&Oacute;N DEL PROCESO DEL CONCURSO P&Uacute;BLICO DE M&Eacute;RITOS DE DOCENTES REGULARES DEL IEST P&Uacute;BLICO &quot;PER&Uacute; COREA DEL SUR&quot; - 2020</a></strong></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'Beca "UNIVERSIDAD DE CÓRDOBA"',
            'fecha' => formatDatetimeToDB('02/03/2020 05:49 PM'),
            'contenido' => '<h2 style="text-align: center;"><span style="color:#e74c3c;"><strong>OPORTUNIDAD &quot;BECAS EN LA UNIVERSIDAD DE C&Oacute;RDOBA - ESPA&Ntilde;A&quot;</strong></span><br />
            &nbsp;</h2>
            <h2>📌Estimad@s compartimos estas oportunidades para nuestros estudiantes y egresados JEC💛:<br />
            -Beca &quot;UNIVERSIDAD DE C&Oacute;RDOBA&quot;📚: 76 becas para 11 carreras profesionales en universidad de Espa&ntilde;a. Fecha l&iacute;mite para remitir documentos a la universidad de C&oacute;rdoba: 7 de marzo<br />
            -Programa &quot;CREANDO TU FUTURO&quot;💪(Organizaci&oacute;n Kuepa y Fundaci&oacute;n Citibank): 250 becas de preparaci&oacute;n laboral<br />
            Fecha l&iacute;mite para inscripci&oacute;n: 30 de abril<br />
            📢Los invitamos a revisar el siguiente link, ayudemos a que nuestros j&oacute;venes accedan a estas oportunidades.</h2>
            <h1><strong>Enlace</strong>: <a href="http://jec.perueduca.pe/?page_id=5024">http://jec.perueduca.pe/?page_id=5024</a></h1>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'MAHP',
            'fecha' => formatDatetimeToDB('03/03/2020 04:42 PM'),
            'contenido' => '<p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/705/content_whatsapp_image_2020-02-15_at_5_11_39_pm.jpeg" style="width: 600px; height: 830px;" /></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'IEST HUAPAYA',
            'fecha' => formatDatetimeToDB('03/03/2020 04:50 PM'),
            'contenido' => '<p style="text-align: center;"><a href="http://iestpvictoralvarezhuapaya.edu.pe/admision/"><img alt="" src="/ckeditor_assets/pictures/707/content_huapaya13.png" style="width: 400px; height: 413px;" /><img alt="" src="/ckeditor_assets/pictures/706/content_huapaya_11.png" style="width: 400px; height: 413px;" /></a></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'ABSOLUCIÓN',
            'fecha' => formatDatetimeToDB('03/03/2020 06:43 PM'),
            'contenido' => '<p align="center" style="margin-bottom:.0001pt; text-align:center"><span style="line-height:normal"><b><span style="font-size:14.0pt"><span style="font-family:&quot;Trebuchet MS&quot;,sans-serif"><span style="color:black">GOBIERNO REGIONAL DE AYACUCHO</span></span></span></b></span></p>
            <p align="center" style="margin-bottom:.0001pt; text-align:center">&nbsp;</p>
            <p align="center" style="margin-bottom:.0001pt; text-align:center"><span style="line-height:normal"><b><span style="font-size:14.0pt"><span style="font-family:&quot;Trebuchet MS&quot;,sans-serif"><span style="color:black">DIRECCI&Oacute;N REGIONAL DE EDUCACI&Oacute;N&nbsp; DE AYACUCHO</span></span></span></b></span></p>
            <p align="center" style="margin-bottom:.0001pt; text-align:center"><span style="line-height:normal"><b><span style="font-size:14.0pt"><span style="font-family:&quot;Trebuchet MS&quot;,sans-serif"><span style="color:black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; COMISI&Oacute;N DE EVALUACI&Oacute;N DEL PROCESO DE CONCURSO P&Uacute;BLICO DE M&Eacute;RITOS DE DOCENTES REGULARES DE&nbsp;IEST P&Uacute;BLICOS -2020&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span></b></span></p>
            <p style="margin-bottom: 0.0001pt; text-align: center;"><a href="https://aesup.webnode.es/_files/200000046-4340643409/SKM_36720030407140-rotado%20(1).pdf"><span style="font-size:20px;"><span style="color:#3498db;">RESULTADOS &nbsp;DE LA EVALUACI&Oacute;N DE EXPEDIENTES -ETAPA ABSOLUCI&Oacute;N DE RECLAMOS(*)<span style="line-height:normal"><b><span style="font-family:&quot;Trebuchet MS&quot;,sans-serif"><img alt="" src="https://aesup.webnode.es/_files/200000046-4340643409/SKM_36720030407140-rotado%20(1).pdf" /></span></b></span></span></span></a></p>
            <p align="center" style="margin-bottom:.0001pt; text-align:center"><span style="line-height:normal"><b><span style="font-size:14.0pt"><span style="font-family:&quot;Trebuchet MS&quot;,sans-serif"><span style="color:black"><a href="https://aesup.webnode.es/_files/200000046-4340643409/SKM_36720030407140-rotado%20(1).pdf"><img alt="" src="/ckeditor_assets/pictures/682/content_descargar.png" style="width: 256px; height: 59px;" /></a></span></span></span></b></span></p>
            <p align="center" style="text-align:center"><img alt="" src="/ckeditor_assets/pictures/714/content_pinas.png" style="width: 500px; height: 346px;" /></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'SAN JUAN',
            'fecha' => formatDatetimeToDB('04/03/2020 09:42 AM'),
            'contenido' => '<p style="text-align: center;"><span style="font-size:18px;"><span style="color:#3498db;">CLASE MODELO, ENTREVISTA PERSONAL DE LA CONVOCATORIA PARA EL CONCURSO P&Uacute;BLICO DE M&Egrave;RITOS ABIERTO DE DOCENTES REGULARES DEL IEST P&Uacute;BLICO &ldquo;SAN JUAN&rdquo;</span></span></p>
            <p style="text-align: center;"><span style="font-size:18px;"><span style="color:#3498db;"><img alt="" src="/ckeditor_assets/pictures/715/content_san_juan.png" style="width: 500px; height: 274px;" /></span></span></p>
            <p style="text-align: center;"><span style="font-size:18px;"><span style="color:#3498db;"><a href="https://aesup.webnode.es/_files/200000047-77a1277a14/SKM_36720030422070-rotado.pdf"><img alt="" src="/ckeditor_assets/pictures/716/content_descargar.png" style="width: 256px; height: 59px;" /></a></span></span></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'sin bolsa',
            'fecha' => formatDatetimeToDB('04/03/2020 09:50 AM'),
            'contenido' => '<p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/398/content_sin_bolsa.png" style="width: 800px; height: 362px;" /></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'SALUD',
            'fecha' => formatDatetimeToDB('04/03/2020 09:57 AM'),
            'contenido' => '<p style="text-align: center;"><img alt="" src="/ckeditor_assets/pictures/717/content_salud.png" style="width: 630px; height: 393px;" /></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'PAPAYITA',
            'fecha' => formatDatetimeToDB('04/03/2020 10:03 AM'),
            'contenido' => '<p style="text-align: center;"><a href="http://iestpvictoralvarezhuapaya.edu.pe/"><img alt="" src="/ckeditor_assets/pictures/719/content_huapaya.png" style="width: 478px; height: 531px;" /></a></p>',
            'publicado' => true,
        ]);
        Post::create([
            'titulo' => 'MIKI',
            'fecha' => formatDatetimeToDB('04/03/2020 04:18 PM'),
            'contenido' => '<p align="center" style="margin-bottom:.0001pt; text-align:center"><span style="font-size:14px;"><span style="color:#3498db;"><span style="line-height:normal"><b><span style="font-family:&quot;Arial Narrow&quot;,sans-serif">PUBLICACI&Oacute;N DE TEMAS PARA EL DICTADO DE CLASE MODELO DE ACUERDO AL SORTEO DE FECHA 04/03/2020</span></b></span></span></span></p>
            <p align="center" style="margin-bottom:.0001pt; text-align:center"><span style="font-size:14px;"><span style="color:#3498db;"><span style="line-height:normal"><b><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><img alt="" src="/ckeditor_assets/pictures/721/content_mikis.png" style="width: 700px; height: 389px;" /></span></b></span></span></span></p>
            <p align="center" style="margin-bottom:.0001pt; text-align:center"><span style="line-height:normal"><b><u><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:black">NOTA:</span></span></span></u></b><span style="font-size:9.0pt"><span style="font-family:&quot;Arial Narrow&quot;,sans-serif"><span style="color:black"> La clase modelo se realizar&aacute; el d&iacute;a 05/03/2020, a horas 7:30 am de acuerdo al n&uacute;mero de orden realizado, en el Instituto de Educaci&oacute;n&nbsp; Superior Pedag&oacute;gico P&uacute;blico &quot;<b>Nuestra Se&ntilde;ora de Lourdes</b>&quot;</span></span></span></span></p>',
            'publicado' => true,
        ]);
    }
}
