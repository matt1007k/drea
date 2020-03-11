<?php

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::truncate();

        // MENUS
        // /unidades
        $menu3 = Menu::find(3);
        $menu3->page()->create([
            'titulo' => 'Unidades de gestión',
            'descripcion' => 'Todas las unidades de gestión que pertenecen a la región de Ayacucho.',
            'contenido' => '<div>
            <div style="border-bottom: 1px rgba(0,0,0,0.1) solid; text-transform: uppercase; margin-bottom: 10px;">
            <h3 style="background-color: cornsilk; padding: 15px; margin-bottom: 0;">Cangallo</h3>
            </div>
            <a href="http://www.ugelcangallo.gob.pe/" style="float: right;" target="_blank">Visitar sitio </a> <strong style="padding-left: 15px;">Director(a): PROF. ROLANDO LEON LANDA</strong><br />
            <strong style="padding-left: 15px;">Tel&eacute;fono:</strong><br />
            <strong style="padding-left: 15px;">Correo electr&oacute;nico:&nbsp;</strong>ugelcangallo301@hotmail.com / &nbsp;roll_dirsg@hotmail.com&nbsp;<br />
            <strong style="padding-left: 15px;">Direcci&oacute;n:&nbsp;</strong>Plaza Principal s/n</div>

            <div>
            <div style="border-bottom: 1px rgba(0,0,0,0.1) solid; text-transform: uppercase; margin-bottom: 10px;">
            <h3 style="background-color: cornsilk; padding: 15px; margin-bottom: 0;">Huamanga</h3>
            </div>
            <a href="http://ugelhuamanga.gob.pe/" style="float: right;" target="_blank">Visitar sitio </a> <strong style="padding-left: 15px;">Director(a):</strong> Dra. DORIS SALOME VALDIVIA SANTOLALLA<br />
            <strong style="padding-left: 15px;">Tel&eacute;fono:</strong> 312030<br />
            <strong style="padding-left: 15px;">Correo electr&oacute;nico:</strong> ugelhuamanga@hotmail.com &nbsp;/ savado_29@hotmail.com<br />
            <strong style="padding-left: 15px;">Direcci&oacute;n:</strong> Jr. San Mart&iacute;n N&deg;771</div>

            <div>
            <div style="border-bottom: 1px rgba(0,0,0,0.1) solid; text-transform: uppercase; margin-bottom: 10px;">
            <h3 style="background-color: cornsilk; padding: 15px; margin-bottom: 0;">Huanta</h3>
            </div>
            <a href="http://ugelhuanta.gob.pe/" style="float: right;" target="_blank">Visitar sitio </a> <strong style="padding-left: 15px;">Director(a):&nbsp;</strong>Prof. JOAN OLIVER HUAM&Aacute;N BASALDUA<br />
            <strong style="padding-left: 15px;">Tel&eacute;fono:&nbsp;</strong>322222<br />
            <strong style="padding-left: 15px;">Correo electr&oacute;nico:&nbsp;</strong>ugelhuanta@hotmail.com / joliverhb@hotmail.com<br />
            <strong style="padding-left: 15px;">Direcci&oacute;n:&nbsp;</strong>Jr. Odilon Vega N&deg;135</div>

            <div>
            <div style="border-bottom: 1px rgba(0,0,0,0.1) solid; text-transform: uppercase; margin-bottom: 10px;">
            <h3 style="background-color: cornsilk; padding: 15px; margin-bottom: 0;">Huanca Sancos</h3>
            </div>
            <a href="http://www.ugelhuancasancos.gob.pe/ugelhuancasancos/" style="float: right;" target="_blank">Visitar sitio </a> <strong style="padding-left: 15px;">Director(a):</strong> Lic. ROBINSON CARMELO FUENTES CORONADO<br />
            <strong style="padding-left: 15px;">Tel&eacute;fono:</strong>&nbsp;<br />
            <strong style="padding-left: 15px;">Correo electr&oacute;nico:</strong> ugel_huancasancos@hotmail.com &nbsp;<br />
            <strong style="padding-left: 15px;">Direcci&oacute;n:</strong> Jr. Arica S/N</div>

            <div>
            <div style="border-bottom: 1px rgba(0,0,0,0.1) solid; text-transform: uppercase; margin-bottom: 10px;">
            <h3 style="background-color: cornsilk; padding: 15px; margin-bottom: 0;">La Mar</h3>
            </div>
            <a href="http://www.ugelamar.gob.pe/" style="float: right;" target="_blank">Visitar sitio </a> <strong style="padding-left: 15px;">Director(a):&nbsp;</strong>Prof. SAMUEL NALVARTE PARIONA<br />
            <strong style="padding-left: 15px;">Tel&eacute;fono:</strong> 324066<br />
            <strong style="padding-left: 15px;">Correo electr&oacute;nico:</strong> rosmarth2@hotmail.com / snalvartep@gmail.com<br />
            <strong style="padding-left: 15px;">Direcci&oacute;n:</strong> Av. Mariscal Caseres S/N</div>

            <div>
            <div style="border-bottom: 1px rgba(0,0,0,0.1) solid; text-transform: uppercase; margin-bottom: 10px;">
            <h3 style="background-color: cornsilk; padding: 15px; margin-bottom: 0;">Lucanas</h3>
            </div>
            <a href="http://www.ugelucanas.gob.pe/" style="float: right;" target="_blank">Visitar sitio </a> <strong style="padding-left: 15px;">Director(a):</strong> Lic. WILFREDO SERAFIN YARIHUAM&Aacute;N FALC&Oacute;N<br />
            <strong style="padding-left: 15px;">Tel&eacute;fono:&nbsp;</strong>452223<br />
            <strong style="padding-left: 15px;">Correo electr&oacute;nico:</strong>&nbsp;wilyarifa12@hotmail.com<br />
            <strong style="padding-left: 15px;">Direcci&oacute;n:</strong> Jr.Bolognesi S/N</div>

            <div>
            <div style="border-bottom: 1px rgba(0,0,0,0.1) solid; text-transform: uppercase; margin-bottom: 10px;">
            <h3 style="background-color: cornsilk; padding: 15px; margin-bottom: 0;">Parinacochas</h3>
            </div>
            <a href="http://www.ugelparinacochas.gob.pe/" style="float: right;" target="_blank">Visitar sitio </a> <strong style="padding-left: 15px;">Director(a):&nbsp;</strong>Mg. BLAS RUPERTO ANDRADE TAPAHUASCO<br />
            <strong style="padding-left: 15px;">Tel&eacute;fono:</strong>&nbsp;<br />
            <strong style="padding-left: 15px;">Correo electr&oacute;nico:</strong> ugelparinacochas@hotmail.com ./ profblasruperto@gmail.com<br />
            <strong style="padding-left: 15px;">Direcci&oacute;n:</strong>&nbsp;</div>

            <div>
            <div style="border-bottom: 1px rgba(0,0,0,0.1) solid; text-transform: uppercase; margin-bottom: 10px;">
            <h3 style="background-color: cornsilk; padding: 15px; margin-bottom: 0;">Paucar del Sara Sara</h3>
            </div>
            <a href="http://www.ugelpaucardelsarasara.gob.pe/" style="float: right;" target="_blank">Visitar sitio </a> <strong style="padding-left: 15px;">Director(a):</strong> Lic. GINES FAUSTINO GUTIERREZ TEJEDA<br />
            <strong style="padding-left: 15px;">Tel&eacute;fono:</strong><br />
            <strong style="padding-left: 15px;">Correo electr&oacute;nico:&nbsp;</strong>ugelpausa@hotmail.com / faustinogt_26@hotmail.com<br />
            <strong style="padding-left: 15px;">Direcci&oacute;n:&nbsp;</strong>Av.28 de Julio N&deg;748</div>

            <div>
            <div style="border-bottom: 1px rgba(0,0,0,0.1) solid; text-transform: uppercase; margin-bottom: 10px;">
            <h3 style="background-color: cornsilk; padding: 15px; margin-bottom: 0;">Sucre</h3>
            </div>
            <a href="http://www.ugelsucre.gob.pe" style="float: right;" target="_blank">Visitar sitio </a> <strong style="padding-left: 15px;">Director(a):&nbsp;</strong>Lic. MARLENE FELICIA MOSQUEIRA NEIRA<br />
            <strong style="padding-left: 15px;">Tel&eacute;fono:</strong><br />
            <strong style="padding-left: 15px;">Correo electr&oacute;nico:&nbsp;</strong>ugelsucre@hotmail.com<br />
            <strong style="padding-left: 15px;">Direcci&oacute;n:&nbsp;</strong>Plaza.San Martin</div>

            <div>
            <div style="border-bottom: 1px rgba(0,0,0,0.1) solid; text-transform: uppercase; margin-bottom: 10px;">
            <h3 style="background-color: cornsilk; padding: 15px; margin-bottom: 0;">Victor Fajardo</h3>
            </div>
            <a href="http://ugelfajardo.gob.pe" style="float: right;" target="_blank">Visitar sitio </a> <strong style="padding-left: 15px;">Director(a):</strong> Mg. HECTOR AUGUSTO FERIA MACIZO<br />
            <strong style="padding-left: 15px;">Tel&eacute;fono:</strong><br />
            <strong style="padding-left: 15px;">Correo electr&oacute;nico: </strong>liz_12321@hotmail.com / ayacuchoferia@hotmail.com<br />
            <strong style="padding-left: 15px;">Direcci&oacute;n:&nbsp;</strong>Plaza Principal s/n</div>

            <div>
            <div style="border-bottom: 1px rgba(0,0,0,0.1) solid; text-transform: uppercase; margin-bottom: 10px;">
            <h3 style="background-color: cornsilk; padding: 15px; margin-bottom: 0;">Vilcashuam&aacute;n</h3>
            </div>
            <a href="http://www.ugelvilcashuaman.gob.pe" style="float: right;" target="_blank">Visitar sitio </a> <strong style="padding-left: 15px;">Director(a):&nbsp;</strong>Mg. JHONY RUTH PALOMINO GUTIERREZ<br />
            <strong style="padding-left: 15px;">Tel&eacute;fono:</strong><br />
            <strong style="padding-left: 15px;">Correo electr&oacute;nico:&nbsp;</strong>ugel_vilcashuaman1@hotmail.com / jruthpalomino@gmail.com<br />
            <strong style="padding-left: 15px;">Direcci&oacute;n:&nbsp;</strong>Psje Incahuasi</div>
            ',
        ]);

        // /docente_2020
        $menu5 = Menu::find(5);
        $menu5->page()->create([
            'titulo' => 'Contratación docente 2020',
            'descripcion' => 'Convoca al proceso de contratación docente 2020 para las distintas provincias de la región de Ayacucho.',
            'contenido' => '<table border="0" cellpadding="5" cellspacing="1" id="customers" style="width:100%;max-width:100%;">
            <tbody>
                <tr>
                    <td>
                    <p><strong><span style="color:#2980b9;">RESOLUCI&Oacute;N DIRECTORAL REGIONAL SECTORIAL N&deg; 0006-2020-GRA/GOB-GG-GRDS-DREA-DR.</span></strong></p>

                    <p>Convoca al proceso de contrataci&oacute;n docente 2020 y aprueba el cronograma&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                    </td>
                    <td><a href="/storage/documentos/2020/docente/RDRS_0006-2020-GRA-GOB-GRDS-DREA-DR_2020.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></td>
                </tr>
            </tbody>
        </table>

        <table border="0" cellpadding="5" cellspacing="1" id="customers" style="width:100%;max-width:100%">
            <tbody>
                <tr>
                    <td>
                    <p><strong><span style="color:#2980b9;">DECRETO SUPREMO N&deg; 017-2019-MINEDU.</span></strong></p>

                    <p style="text-align: justify;">Norma que regula el procedimiento, los requisitos y las condiciones para las contrataciones en el marco del Contrato de Servicio Docente en Educaci&oacute;n B&aacute;sica, a que hace referencia la Ley N&ordm; 30328, Ley que establece medidas en materia educativa y dicta otras disposiciones.</p>
                    </td>
                    <td><a href="/storage/documentos/2020/docente/DS_017-2019-MINEDU_NT_Contratacion_Docente_2020.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></td>
                </tr>
                <tr>
                    <td>
                    <p><strong><span style="color:#2980b9;">CUADRO DE M&Eacute;RITOS PARA EL PROCESO DE CONTRATACI&Oacute;N DOCENTES.</span></strong></p>
                    </td>
                    <td><a href="/storage/documentos/2020/docente/Cuadro_Meritos_Ayacucho.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></td>
                </tr>
                <tr>
                    <td><strong><span style="color:#2980b9;">PRECISIONES CONTRATACI&Oacute;N DOCENTE 2020.</span></strong></td>
                    <td><a href="/storage/paginas/2020/archivos/precisiones_contratacion_docente.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></td>
                </tr>
                <tr>
                    <td><strong><span style="color:#2980b9;">CRONOGRAMA DE PLAZAS DOCENTES DE LA DRE AYACUCHO (II FASE)</span></strong></td>
                    <td><a href="/storage/paginas/2020/archivos/cronograma_ii_fase.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></td>
                </tr>
                <tr>
                    <td><strong><span style="color:#2980b9;">PLAZAS DESIERTAS DE LA DRE AYACUCHO CONVOCADAS PARA LA II FASE (CONTRATACI&Oacute;N POR EVALUACI&Oacute;N DE EXPEDIENTES)</span></strong></td>
                    <td><a href="/storage/paginas/2020/archivos/plazas_vacantes_ii_fase.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></td>
                </tr>
                <tr>
                    <td><strong><span style="color:#2980b9;">CRONOGRAMA DE PLAZAS DOCENTES DE LA DRE AYACUCHO (II FASE)</span></strong></td>
                    <td><a href="/storage/paginas/2020/archivos/cronograma_ii_fase.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></td>
                </tr>
                <tr>
                    <td><font color="#2980b9"><b>LISTA DE OBSERVADOS - TERCERA FASE</b></font></td>
                    <td><a href="//storage/documentos/2020/docente/tercera_fase_observados.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></td>
                </tr>
                <tr>
                    <td><font color="#2980b9"><b>CUADRO FINAL DE M&Eacute;RITOS</b></font></td>
                    <td><a href="//storage/documentos/2020/docente/cuadro_final_meritos.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>
        <style type="text/css">#customers {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }

        #customers td, #customers th {
          border: 1px solid #ddd;
          padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
          text-align: left;
          background-color: #03A9F4;
          color: white;
        }
        </style>
        <table id="customers" class="table">
            <tbody>
                <tr class="bg-custom-primary text-white">
                    <th colspan="2" style="text-align: center;">
                    <h2><strong>PLAZAS</strong></h2>
                    </th>
                </tr>
                <tr>
                    <td><strong>DRE AYACUCHO<a href="/storage/documentos/2020/plazas/DRE_Ayacucho.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="height: 30px; width: 30px; float: right;" /></a></strong></td>
                    <td><strong>UGEL PARINACOCHAS<a href="/storage/documentos/2020/plazas/UGEL_Parinacochas.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="height: 30px; width: 30px; float: right;" /></a></strong></td>
                </tr>
                <tr>
                    <td><strong>UGEL CANGALLO<a href="/storage/documentos/2020/plazas/UGEL_Cangallo.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="height: 30px; width: 30px; float: right;" /></a></strong></td>
                    <td><strong>UGEL P&Aacute;UCAR DEL SARA SARA<a href="/storage/documentos/2020/plazas/UGEL_PáucardelSaraSara.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="height: 30px; width: 30px; float: right;" /></a></strong></td>
                </tr>
                <tr>
                    <td><strong>UGEL HUAMANGA<a href="/storage/documentos/2020/plazas/UGEL_Huamanga.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="height: 30px; width: 30px; float: right;" /></a></strong></td>
                    <td><strong>UGEL SUCRE<a href="/storage/documentos/2020/plazas/UGEL_Sucre.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="height: 30px; width: 30px; float: right;" /></a></strong></td>
                </tr>
                <tr>
                    <td><strong>UGEL HUANCA SANCOS<a href="/storage/documentos/2020/plazas/UGEL_HuancaSancos.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="height: 30px; width: 30px; float: right;" /></a></strong></td>
                    <td><strong>UGEL V&Iacute;CTOR FAJARDO<a href="/storage/documentos/2020/plazas/UGEL_VíctorFajardo.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="height: 30px; width: 30px; float: right;" /></a></strong></td>
                </tr>
                <tr>
                    <td><strong>UGEL HUANTA<a href="/storage/documentos/2020/plazas/UGEL_Huanta.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="height: 30px; width: 30px; float: right;" /></a></strong></td>
                    <td><strong>UGEL VILCAS HUAM&Aacute;N<a href="/storage/documentos/2020/plazas/UGEL_VilcasHuamán.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="height: 30px; width: 30px; float: right;" /></a></strong></td>
                </tr>
                <tr>
                    <td><strong>UGEL LA MAR<a href="/storage/documentos/2020/plazas/UGEL_LaMar.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="height: 30px; width: 30px; float: right;" /></a></strong></td>
                    <td><strong>UGEL LUCANAS<a href="/storage/documentos/2020/plazas/UGEL_Lucanas.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="height: 30px; width: 30px; float: right;" /></a></strong></td>
                </tr>
            </tbody>
        </table>
        ',
        ]);

        // /monitoreo
        $menu9 = Menu::find(9);
        $menu9->page()->create([
            'titulo' => 'DREA Monitoreo',
            'descripcion' => 'Señores usuarios de la aplicación DREA Monitoreo de las distintas UGELes.',
            'contenido' => '<p class="center"><img alt="Funcionamiento DREA Monitoreo" src="/storage/paginas/2020/imagenes/content_si.jpg" width="500" /></p>

            <p>Se&ntilde;ores usuarios de la aplicaci&oacute;n DREA Monitoreo de las distintas UGELes, se hace presente los enlaces para la descarga del archivo instalador APK de la aplicaci&oacute;n y documentos de utilidad para el monitoreo de desempe&ntilde;o, an&aacute;lisis documental y gesti&oacute;n escolar.</p>

            <h3>Archivos y documentos</h3>

            <hr />
            <ul>
                <li><a href="/storage/documentos/2020/monitoreo/guia-instalacion.pdf" target="_blank">Gu&iacute;a de instalaci&oacute;n (Actualizado el 18/11/2017)</a></li>
            </ul>

            <ul>
                <li><a download="" href="/storage/paginas/2020/archivos/monitoreo-v0.2.apk">Instalador APK de la aplicaci&oacute;n Android v0.2 (Publicado&nbsp;el 10/11/2017)</a></li>
                <li><a href="/storage/documentos/2020/monitoreo/manual-usuario-v0.09.pdf" target="_blank">Manual de usuario v0.9 (Presentado&nbsp;en el taller del 31/10/2017)</a></li>
            </ul>

            <ul>
                <li><a href="/storage/paginas/2020/archivos/monitoreo-v0.2b.apk">Instalador APK de la aplicaci&oacute;n Android v0.2b (Publicado el 27/11/2017)</a></li>
                <li><a href="/storage/documentos/2020/monitoreo/manual-exportacion-pdf-para-v0.2b.pdf" target="_blank">Manual exportaci&oacute;n a PDF para la app &quot;DREA Monitoreo&quot; v0.2b (Publicado el 27/11/2017)</a></li>
            </ul>

            <ul>
                <li><a href="/storage/documentos/2020/monitoreo/guia-consulta-monitoreo.pdf" target="_blank">Gu&iacute;a de consulta monitoreo</a></li>
            </ul>
            ',
        ]);

        // /tecnologica_2018
        $menu10 = Menu::find(10);
        $menu10->page()->create([
            'titulo' => 'EDUCACIÓN SUPERIOR TECNOLÓGICA',
            'descripcion' => 'Carrera Pública Docente,  Instituto de Educación Superior Tecnológica, Norma Técnica denominada.',
            'contenido' => '<table align="center" border="0" cellpadding="1" cellspacing="1">
            <thead>
                <tr>
                    <th colspan="2" scope="col"><font color="#e74c3c" face="Trebuchet MS, Helvetica, sans-serif"><span style="font-size: 20px;">PREGUNTAS FRECUENTES SOBRE EL PROCESO DE ENCARGATURA&nbsp;</span></font></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2" style="text-align: justify;">
                    <p><span style="font-size:14px;"><strong>CONCEPTOS CLAVE:</strong>&nbsp;</span></p>

                    <p><span style="font-size:14px;"><strong>CPD&nbsp;</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Carrera P&uacute;blica Docente<br />
                    <strong>IEST&nbsp; &nbsp;</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Instituto de Educaci&oacute;n Superior Tecnol&oacute;gica<br />
                    <strong>Norma T&eacute;cnica</strong>&nbsp; &nbsp; &nbsp; &nbsp;Norma T&eacute;cnica denominada &quot;Disposiciones que regulan los procesos de encargatura de puestos y de funciones de directores generales y responsables de unidades, &aacute;reas y coordinaciones d elos Institutos de Educaci&oacute;n Superior Tecnol&oacute;gico p&uacute;blico&quot;</span></p>
                    <span style="font-size: 16px;"><b>DESCARGAR --------&gt;&nbsp; &nbsp; <a href="/storage/documentos/2017/OTROS/preguntas_pe.pdf" target="_blank">&nbsp;PREGUNTAS SOBRE EL PROCESO DE ENCARGATURA</a></b></span></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: justify;">&nbsp;</td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
                    <td>
                    <p><strong><span style="color:#2980b9;">CRONOGRAMA DEL PROCESO DE CONTRATACI&Oacute;N DE DOCENTES 2018 DE INSTITUTO DE EDUCACI&Oacute;N SUPERIOR TECNOL&Oacute;GICO P&Uacute;BLICO &quot;SAN JUAN&quot; DE VILCAS HUAMAN.</span></strong></p>

                    <p>VER CRONOGRAMA</p>
                    </td>
                    <td>
                    <p><a href="/storage/documentos/2018/avisos/CPC_2018.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
                    <td>
                    <p><strong><span style="color:#2980b9;">EL INSTITUTO DE EDUCACI&Oacute;N SUPERIOR TECNOL&Oacute;GICO P&Uacute;BLICO SANTO DOMINGO DE GUZMAN COMUNICA LOS RESULTADOS PARCIALES, TERCERA CONVOCATORIA.</span></strong></p>

                    <p>VER RESULTADOS</p>
                    </td>
                    <td>
                    <p><a href="/storage/documentos/2018/avisos/concurso_SDG.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
                    <td>
                    <p><strong><span style="color:#2980b9;">CRONOGRAMA DEL PROCESO DE CONTRATACI&Oacute;N DOCENTE&nbsp;2018 DEL IEST. &quot;SANTO DOMINGO DE GUZM&Aacute;N&quot; DE QUEROBAMBA, SUCRE RESOLUCI&Oacute;N MINISTERIAL N&deg; 005-2018-MINEDU TERCERA CONVOCATORIA.</span></strong></p>

                    <p>VER CRONOGRAMA</p>
                    </td>
                    <td>
                    <p><a href="/storage/documentos/2018/avisos.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
                    <td>
                    <p><strong><span style="color:#2980b9;">COMUNICADO DEL COMIT&Eacute;&nbsp; DE&nbsp; CONTRATACI&Oacute;N Y SELECCI&Oacute;N DE DOCENTES DEL IESTP &quot;SAN JUAN&quot; VILCASHUAMAN.</span></strong></p>

                    <p>VER COMUNICADO</p>
                    </td>
                    <td>
                    <p><a href="/storage/documentos/2018/avisos/comunicado_abril_1.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
                    <td>
                    <p><strong><span style="color:#2980b9;">CRONOGRAMA DEL PROCESO DE CONTRATO DOCENTES 2018 DEL INSTITUTO DE EDUCACI&Oacute;N SUPERIOR TECNOL&Oacute;GICO P&Uacute;BLICO &quot;PERU COREA DEL SUR&quot; HUANCAPI II CONVOCATORIA</span></strong></p>

                    <p>Ver cronograma y Cuadro de Posiciones Vacantes</p>
                    </td>
                    <td>
                    <p><a href="/storage/documentos/2018/avisos.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
                    <td>
                    <p><strong><span style="color:#2980b9;">CRONOGRAMA DEL PROCESO DE CONTRATACI&Oacute;N DOCENTE 2018 - IESTP &quot;SAN JUAN&quot; - VILCASHUAM&Aacute;N (2DA CONVOCATORIA-REFORMULADORA)</span></strong></p>

                    <p>CRONOGRAMA.</p>
                    </td>
                    <td>
                    <p><a href="/storage/documentos/2018/avisos/sj-2da.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
                    <td>
                    <p><span style="text-align: justify"><strong><span style="color:#2980b9;">INSTITUTO DE EDUCACI&Oacute;N SUPERIOR TECNOL&Oacute;GICO P&Uacute;BLICO &quot;HATUN SORAS, II CONVOCATORIA PARA EL PROCESO DE SELECCI&Oacute;N Y CONTRATACI&Oacute;N DE DOCENTES REGULARES</span></strong></span></p>

                    <p>LA RELACI&Oacute;N&nbsp;DE PLAZAS VACANTES .</p>
                    </td>
                    <td>
                    <p><a href="/storage/documentos/2018/avisos/2da_convocatoria_de_docentes_regulares_hatun_soras.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
                    <td>
                    <p style="text-align: justify;"><strong><span style="color:#2980b9;">CRONOGRAMA DEL PROCESO DE CONTRATACI&Oacute;N DOCENTE 2018</span></strong></p>

                    <p>DEL INSTITUTO DE EDUCACI&Oacute;N SUPERIOR TECNOL&Oacute;GICO P&Uacute;BLICO &quot;SANTO DOMINGO DE GUZM&Aacute;N&quot; DE QUEROBAMBA, SUCRE RESOLUCI&Oacute;N MINISTERIAL N&deg; 005-2018- MINEDU</p>

                    <p>SEGUNDA CONVOCATORIA.</p>

                    <p>&nbsp;</p>
                    </td>
                    <td>
                    <p><a href="/storage/documentos/2018/avisos/2da_convocatoria_ISTP_Santo_Domingo_Guzman.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 60px; height: 60px;" /></a></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
                    <td>
                    <p style="text-align: justify;"><strong><span style="color:#2980b9;">CRONOGRAMA DEL PROCESO DE SELECCI&Oacute;N DE PERSONAL DOCENTE 2018</span></strong></p>

                    <p>DEL INSTITUTO DE EDUCACI&Oacute;N SUPERIOR TECNOL&Oacute;GICO P&Uacute;BLICO &quot;SAN JUAN &quot;- VILCASHUAMAN</p>

                    <p>SEGUNDA CONVOCATORIA.</p>

                    <p>&nbsp;</p>
                    </td>
                    <td>
                    <p><a href="/storage/documentos/2018/avisos/2da_convocatoria_iestp_san_juan.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 47px; height: 47px;" /></a></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
                    <td>
                    <p><strong><span style="color:#2980b9;">INSTITUTO DE EDUCACI&Oacute;N SUPERIOR TECNOL&Oacute;GICO P&Uacute;BLICO &quot;SANTO DOMINGO DE&nbsp; GUZM&Aacute;N&quot; DE QUEROBAMBA , SUCRE CONCURSO P&Uacute;BLICO DE M&Eacute;RITOS PARA CONTRATACI&Oacute;N DE DOCENTES REGULARES.</span></strong></p>

                    <p>Cuadro de m&eacute;ritos.</p>
                    </td>
                    <td>
                    <p><a href="/storage/documentos/2018/avisos/cuadro_meritos_SDDG.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
                    <td>
                    <p><strong><span style="color:#2980b9;">CUADRO DE RESUMEN DE LISTA DE PLAZAS DESIERTAS DEL IEST P&Uacute;BLICO &quot;HUANTA&quot;.</span></strong></p>

                    <p>Plazas desiertas - segunda convocatoria&nbsp;</p>

                    <p>&nbsp;</p>
                    </td>
                    <td>
                    <p><a href="/storage/documentos/2018/avisos/PLAZAS_DESIERTAS_2 _CONVO.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
                    <td>
                    <p><strong><span style="color:#2980b9;">PUBLICACION DE RESULTADOS PARCIALES</span></strong></p>
                    </td>
                </tr>
                <tr>
                    <td>
                    <p style="text-align: justify;"><span style="font-size:12px;">1.-RESULTADO DE LA REEVALUACION DE EXPEDIENTES&nbsp; DEL I.E.S.T.PUB &quot;SAN JUAN&quot; VH</span></p>
                    </td>
                    <td><a href="/storage/documentos/2018/avisos/RESUL_PARCIALES.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 40px; height: 40px;" title="Descargar PDF" /></a></td>
                </tr>
                <tr>
                    <td>
                    <p style="text-align: justify;"><span style="font-size:12px;">2.ACTA DE REEVALUACION DE EXPEDIENTES&nbsp;</span></p>
                    </td>
                    <td><a href="/storage/documentos/2018/avisos/acta_r.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 40px; height: 40px;" title="Descargar PDF" /></a></td>
                </tr>
                <tr>
                    <td>
                    <p style="text-align: justify;"><span style="font-size: 12px;">3.CUADRO DE MERITOS FINAL 2018 (ADJUDICACI&Oacute;N)</span></p>
                    </td>
                    <td><a href="/storage/documentos/2018/avisos/cuadro_meritos_final_2018.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 40px; height: 40px;" title="Descargar PDF" /></a></td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
                    <td>
                    <p><strong><span style="color:#2980b9;">CRONOGRAMA DEL PROCESO DE CONTRATO DOCENTES&nbsp;&nbsp;2018 DE&nbsp;LOS INSTITUTOS&nbsp; DE EDUCACI&Oacute;N SUPERIOR TECNOL&Oacute;GICOS P&Uacute;BLICOS</span></strong></p>
                    </td>
                </tr>
                <tr>
                    <td>
                    <p style="text-align: justify;"><span style="font-size:12px;">RESOLUCION MINISTERIAL&nbsp; N&deg;005 -2018- MINEDU</span></p>
                    </td>
                </tr>
                <tr>
                    <td>
                    <p style="text-align:justify"><span style="font-size:16px"><b>V</b></span><span style="font-size:14px;"><b>ER (Dar Click)--------&gt; <span style="color:#2980b9"><a href="/storage/documentos/2018/avisos.pdf" target="_blank">VER CRONOGRAMA</a></span></b></span></p>

                    <p style="text-align:justify"><span style="font-size:14px;"><b>VER (Dar Click)--------&gt;&nbsp;&nbsp;<span style="color:#2980b9"><a href="/storage/documentos/2018/avisos.pdf" target="_blank">FE DE ERRATAS</a></span></b></span></p>

                    <p style="text-align:justify"><span style="font-size:14px;"><b>VER (Dar Click)--------&gt;&nbsp;&nbsp;<span style="color:#2980b9"><a href="/storage/documentos/2018/avisos/R_P_SANTO_DOMINGO_GUZMÁN.pdf" target="_blank">RESULTADOS PARCIALES IESTP &quot;SANTO DOMINGO DE GUZM&Aacute;N&quot;</a></span></b></span></p>

                    <p style="text-align:justify"><span style="font-size:14px;"><b>VER (Dar Click)--------&gt;&nbsp;<a href="/storage/documentos/2018/avisos/cuadro_meritos_SDDG.pdf" target="_blank">&nbsp;<span style="color:#2980b9">CUADRO DE M&Eacute;RITOS IESTP &quot;SANTO DOMINGO DE GUZM&Aacute;N&quot;</span></a></b></span></p>
                    </td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
                    <td>
                    <p><strong><span style="color:#2980b9;">CONCURSO&nbsp;INSTITUTO DE EDUCACI&Oacute;N SUPERIOR TECNOL&Oacute;GICA E INSTITUTO DE EDUCACI&Oacute;N SUPERIOR PEDAG&Oacute;GICA</span></strong></p>
                    </td>
                </tr>
                <tr>
                    <td>
                    <p style="text-align: justify;"><span style="font-size:12px;">Si deseas postular a una plaza para la contrataci&oacute;n o matricularte en alguno de los cursos de capacitaci&oacute;n, es necesario que primero te registres para obtener un Usuario y Contrase&ntilde;a, con los cuales puedas iniciar sesi&oacute;n e ingresar tu informaci&oacute;n.</span></p>
                    </td>
                </tr>
                <tr>
                    <td><a href="http://sistemas09.minedu.gob.pe/sisconp/Login.aspx?ReturnUrl=%2fsisconp%2f" target="_blank"><img alt="" src="/storage/paginas/2020/content_ingrese.jpg" style="width: 379px; height: 74px;" title="Registrese aquí" /> </a></td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>

        <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
            <tbody>
                <tr>
                    <td>
                    <p><strong><span style="color:#2980b9;">CRONOGRAMA DEL PROCESO DE CONTRATO DOCENTE 2018 DE LOS IEST P&Uacute;BLICOS-RESOLUCI&Oacute;N MINISTERIAL N&deg;005-2018-MINEDU</span></strong></p>
                    </td>
                </tr>
                <tr>
                    <td>
                    <p style="text-align: justify;"><a href="/storage/documentos/2018/avisos/crono_iest.pdf" target="_blank"><span style="font-size:12px;">VER CRONOGRAMA </span></a></p>
                    </td>
                </tr>
            </tbody>
        </table>
        ',
        ]);

        // /pedagogica_2020
        $menu11 = Menu::find(11);
        $menu11->page()->create([
            'titulo' => 'EDUCACIÓN SUPERIOR PEDAGÓGICA 2020',
            'descripcion' => 'Para postular en los procesos de contrata como docente, el postulante.',
            'contenido' => '<p>
            <style type="text/css">#customers {
              font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }

            #customers td, #customers th {
              border: 1px solid #ddd;
              padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
              text-align: left;
              background-color: #03A9F4;
              color: white;
            }
            </style>
            </p>

            <table border="0" cellpadding="5" cellspacing="1" id="customers" style="width:700px;">
                <tbody>
                    <tr>
                        <td>
                        <p><strong><span style="color:#2980b9;">SEGUNDA CONVOCATORIA DEL CONCURSO PUBLICO DE CONTRATACI&Oacute;N DOCENTES EN LOS INSTITUTOS DE EDUCACI&Oacute;N SUPERIOR PEDAG&Oacute;GICA P&Uacute;BLICOS.</span></strong></p>

                        <p>Para posutular en los procesos de contrata como docente, el postulante debe acreditar los siguientes requisitos:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                        </td>
                        <td><a href="/storage/paginas/2020/archivos/2da_convocatoria_pedagogicos.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></td>
                    </tr>
                    <tr>
                        <td>
                        <p><strong><span style="color:#2980b9;">RESULTADO DE EVALUACI&Oacute;N DE EXPEDIENTE DEL IESTP PERU COREA DEL SUR DE HAUNCAPI</span></strong><strong><span style="color:#2980b9;">.</span></strong></p>

                        <p>Resultados de la evaluacion de expedientes:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                        </td>
                        <td><a href="/storage/paginas/2020/archivos/skm_36720022905210.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></td>
                    </tr>
                </tbody>
            </table>
            ',
        ]);

        // /programa-0051
        $menu12 = Menu::find(12);
        $menu12->page()->create([
            'titulo' => 'PROGRAMA PRESUPUESTAL 0051 PREVENCIÓN Y TRATAMIENTO DEL CONSUMO DE DROGAS',
            'descripcion' => 'PROGRAMA PRESUPUESTAL 0051 PREVENCIÓN Y TRATAMIENTO DEL CONSUMO DE DROGAS',
            'contenido' => '<div class="h2 text-custom-primary mb-3">PROGRAMA PRESUPUESTAL 0051 PREVENCIÓN Y TRATAMIENTO DEL CONSUMO DE DROGAS</div>
            <table border="0" cellpadding="1" cellspacing="1">
            <tbody>
                <tr style="border-bottom:1px solid silver;border-top:1px solid silver;">
                    <td>
                    <p style="text-align: right;"><span style="color:#7f8c8d;"><span style="font-size:11px;"><span style="font-family:Arial,Helvetica,sans-serif;"><span style="margin: 0px;">&nbsp;18/09/2019 10:20 AM</span></span></span></span></p>

                    <p><strong><span style="color:#2980b9;">&iquest;QUE ES EL PROGRAMA PRESUPUESTAL 0051 PREVENCI&Oacute;N Y TRATAMIENTO DEL CONSUMO DE DROGAS?&nbsp;</span></strong></p>

                    <p>Es un programa presupuestal orientado a integrar al gobierno nacional, regional, local y la sociedad civil en un trabajo articulado, permanente e institucionalizado de prevenci&oacute;n y rehabilitaci&oacute;n del consumo de drogas, con especial inter&eacute;s en los &aacute;mbitos educativo, familiar y comunitario...&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                    </td>
                    <td><a href="/storage/paginas/2020/archivos/que_es_ptcd_1.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></td>
                </tr>
                <tr style="border-bottom:1px solid silver;">
                    <td>
                    <p style="text-align: right;"><span style="color:#7f8c8d;"><span style="font-size:11px;"><span style="font-family:Arial,Helvetica,sans-serif;"><span style="margin: 0px;">&nbsp;18/09/2019 04:20 PM</span></span></span></span></p>

                    <p><strong><span style="color:#2980b9;">RESULTADOS: IMPLEMENTACION Y AVANCE DE ACTIVIDADES EN CADA UNIDAD EJECUTORA</span></strong></p>

                    <p>Taller de unificaci&oacute;n de criterios para la implementaci&oacute;n del programa presupuestal de prevenci&oacute;n y tratamiento del consumo de drogas.&nbsp;</p>
                    </td>
                    <td><a href="/storage/paginas/2020/archivos/resultados.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></td>
                </tr>
                <tr style="border-bottom:1px solid silver;">
                    <td>
                    <p style="text-align: right;"><span style="color:#7f8c8d;"><span style="font-size:11px;"><span style="font-family:Arial,Helvetica,sans-serif;"><span style="margin: 0px;">&nbsp;24/09/2019 04:42 PM</span></span></span></span></p>

                    <p><strong><span style="color:#2980b9;">INICIO DE SESIONES PROGRAMA FAMILIAS FUERTES: AMOR Y L&Iacute;MITES</span></strong></p>

                    <p>Durante el mes de agosto del 2019, se dio inicio con la selecci&oacute;n de padres de familia con sus respectivos hijos (as) adolescentes, y formar grupos para dar inicio con las sesiones del Programa Familias Fuertes: Amor y L&iacute;mites.&nbsp;</p>
                    </td>
                    <td><a href="/storage/paginas/2020/archivos/inicio_de_sesiones.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></td>
                </tr>
                <tr style="border-bottom:1px solid silver;">
                    <td>
                    <p style="text-align: right;"><span style="color:#7f8c8d;"><span style="font-size:11px;"><span style="font-family:Arial,Helvetica,sans-serif;"><span style="margin: 0px;">&nbsp;14/11/2019 08:13&nbsp;AM</span></span></span></span></p>

                    <p><strong><span style="color:#2980b9;">RESULTADOS DE APLICACI&Oacute;N DEL PROGRAMA DE PREVENCI&Oacute;N DEL CONSUMO DE DROGAS EN EL &Aacute;MBITO EDUCATIVO A TRAV&Eacute;S DE LA TUTOR&Iacute;A</span></strong></p>

                    <p>La meta total de esta tarea es de 615 aplicaciones, a 17,385 estudiantes beneficiados aproximadamente, correspondiente a la UGEL Huamanga 447 aplicaciones, beneficiando a 13,230 estudiantes y a la UGEL Huanta 168 aplicaciones, beneficiando a 4,155 estudiantes.&nbsp;</p>
                    </td>
                    <td><a href="/storage/paginas/2020/archivos/resultado_de_aplicaciones_culminadas.pdf" target="_blank"><img alt="" src="/img/icons/content_download.png" style="width: 45px; height: 45px;" /></a></td>
                </tr>
            </tbody>
        </table>

        <p>&nbsp;</p>
        ',
        ]);

        // /superatec3
        $menu13 = Menu::find(13);
        $menu13->page()->create([
            'titulo' => 'SUPERATEC3',
            'descripcion' => 'Te invitamos a ser parte de la presentación de SUPERATEC olimpiadas Tecnológicas',
            'contenido' => '<div class="h2 text-custom-primary mb-3">SUPERATEC 3</div>
            <p class="text-center"><img alt="superatec3" src="/storage/paginas/2020/imagenes/content_presentacion_-_ayacucho-01.png" style="width: 500px; height: auto;" /></p>
            ',
        ]);

        // /minedu-aprueba-directiva-para-denuncias-de-casos-de-corrupcion
        $menu14 = Menu::find(14);
        $menu14->page()->create([
            'titulo' => 'MINEDU APRUEBA DIRECTIVA PARA DENUNCIAS DE CASOS DE CORRUPCIÓN',
            'descripcion' => 'Resolución Ministerial N°435-2018-MINEDU aprueba directiva que establece medidas de protección al denunciante, entre ellas, la reserva de la identidad.',
            'contenido' => '<div class="h2 text-custom-primary mb-3">MINEDU APRUEBA DIRECTIVA PARA DENUNCIAS DE CASOS DE CORRUPCIÓN</div>
            <h1><span style="font-size:14px;">Resoluci&oacute;n Ministerial N&deg;435-2018-MINEDU aprueba directiva que establece medidas de protecci&oacute;n al denunciante, entre ellas, la reserva de la identidad.</span></h1>
            <p><img alt="" src="/storage/paginas/2020/imagenes/content_mineduapruebadirectivas.jpg" style="width: 645px; height: 363px;" /></p>
            <p id="cfvej" style="text-align: justify;">El Ministerio de Educaci&oacute;n (Minedu) aprob&oacute; una directiva para regular el tratamiento de las denuncias por presuntos actos de corrupci&oacute;n en el sector, la que establece medidas de protecci&oacute;n al denunciante, entre ellas, la reserva de la identidad.</p>
            <p id="5vu72" style="text-align: justify;">La Resoluci&oacute;n Ministerial N&deg; 435-2018-MINEDU, publicada hoy en el diario oficial El Peruano, aprueba la directiva N&deg; 003-2018-MINEDU/SG-OTEPA, que establece el procedimiento para dichas denuncias en el Minedu, programas nacionales (PRONIED y PRONABEC) y &oacute;rganos desconcentrados (DIGERE y DRELM), en el marco de lo dispuesto por el Decreto Legislativo N&deg; 1327 y su reglamento, emitidos en enero y abril de 2017.</p>
            <p id="d3l05" style="text-align: justify;">Desde la emisi&oacute;n de dicha normativa, es la primera vez que el Minedu dicta lineamientos para su implementaci&oacute;n, estableciendo mecanismos de protecci&oacute;n id&oacute;neos para fomentar la participaci&oacute;n de la ciudadan&iacute;a de manera segura, pues establece la asignaci&oacute;n de un c&oacute;digo cifrado en caso el denunciante solicite la reserva de su identidad, otorga medidas de orden laboral en tanto exista una relaci&oacute;n de trabajo vigente con el Minedu y medidas de protecci&oacute;n en favor del postor o contratista, a fin de no perjudicar su posici&oacute;n como tal en un proceso de contrataci&oacute;n.</p>
            <p id="726gu" style="text-align: justify;">Asimismo, dispone que las denuncias ser&aacute;n efectuadas de manera presencial, por mesa de partes, y no presencial, mediante el correo&nbsp;<a data-origin="link-inside-page" href="http://mailto:cerocorrupcion@minedu.gob.pe/" rel="noreferrer" target="_blank">cerocorrupcion@minedu.gob.pe</a>&nbsp;y la plataforma virtual y la l&iacute;nea gratuita que se habilitar&aacute;n para tales fines.</p>
            <p id="dqbvh" style="text-align: justify;">La directiva, que tambi&eacute;n prev&eacute; la tramitaci&oacute;n de denuncias an&oacute;nimas y las sanciones para quienes denuncien de mala fe presuntos actos de corrupci&oacute;n, establece que toda denuncia recibida en el Minedu, los programas nacionales y los &oacute;rganos desconcentrados deben ser remitidas a la Oficina (OTEPA), quien se encargar&aacute; de evaluarla y canalizarla ante las instancias competentes.</p>
            <p id="b73ar" style="text-align: justify;">Asimismo, la norma dispone que, en un plazo de 60 d&iacute;as h&aacute;biles, la Direcci&oacute;n Regional de Educaci&oacute;n de Lima Metropolitana elaborar&aacute; una directiva que regule el tr&aacute;mite de denuncias por presuntos actos de corrupci&oacute;n en las UGEL bajo su jurisdicci&oacute;n.</p>
            <p id="9egas" style="text-align: justify;">Mediante Oficio M&uacute;ltiple N&deg; 0047-2018-MINEDU/SG-OTEPA del d&iacute;a de hoy, se est&aacute; requiriendo a todas las Direcciones Regionales de Educaci&oacute;n que repliquen dicha directiva en sus jurisdicciones, as&iacute; como en las Ugel bajo su cargo, para lo cual se les dar&aacute; la asistencia necesaria, a trav&eacute;s del sistema de videoconferencias.</p>
            <p id="7b9ob" style="text-align: justify;">Como una medida para prevenir los actos de corrupci&oacute;n, el Minedu, con anterioridad a la daci&oacute;n del Decreto Supremo N&deg; 080-2018-PCM publicado en el Diario Oficial El Peruano el 02.08.18, ha venido implementado como buena pr&aacute;ctica la presentaci&oacute;n de la Declaraci&oacute;n Jurada de Intereses incluyendo no s&oacute;lo a la Alta Direcci&oacute;n, sino tambi&eacute;n a sus asesores, a Directores Generales y Jefes de Oficina, independientemente de su modalidad de contrataci&oacute;n, tanto al interior del Minedu, como en sus unidades ejecutoras y en organismos p&uacute;blicos del sector, contando a la fecha con 195 declaraciones, encontr&aacute;ndonos actualmente en coordinaci&oacute;n con la CAN para que dicha presentaci&oacute;n se ajuste a los requerimientos y precisiones que establece la nueva normativa.</p>
            ',
        ]);

        // /ley-de-la-reforma-magisterial
        $menu15 = Menu::find(15);
        $menu15->page()->create([
            'titulo' => 'LEY DE LA REFORMA MAGISTERIAL',
            'descripcion' => 'LEY DE LA REFORMA MAGISTERIAL',
            'contenido' => '<p><img alt="" src="/storage/paginas/2020/imagenes/content_banner-normatividad.jpg" style="width: 800px; height: 325px;" /></p>
            <p>&nbsp;</p>
            <table align="left" border="0" cellpadding="1" cellspacing="1" style="width:500px;">
                <tbody>
                    <tr>
                        <td>
                        <p><strong>LEY DE REFORMA&nbsp; MAGISTERIAL</strong></p>

                        <p><strong>LEY N.&deg; 29944</strong><br />
                        Reglamento de la Ley de Reforma Magisterial D.S. N.&deg; 004-2013-ED<br />
                        y modificatorias</p>

                        <p>&nbsp;</p>

                        <p><strong>&copy; MINISTERIO DE EDUCACI&Oacute;N</strong><br />
                        Av. De la Arqueolog&iacute;a, cuadra 2, San Borja, Lima, Per&uacute;.<br />
                        Tel&eacute;fono: 615-5800<br />
                        <strong>www.minedu.gob.pe</strong></p>

                        <p><br />
                        Todos los derechos reservados. Prohibida la reproducci&oacute;n de este<br />
                        libro por cualquier medio, total o parcialmente, sin permiso expreso.</p>

                        <p><br />
                        Hecho el Dep&oacute;sito Legal en la Biblioteca Nacional del Per&uacute; N.&deg;</p>

                        <p><br />
                        <strong>Editado por:</strong><br />
                        Ministerio de Educaci&oacute;n<br />
                        Av. De la Arqueolog&iacute;a, cuadra 2, San Borja, Lima.</p>

                        <p><br />
                        <strong>Quinta edici&oacute;n</strong><br />
                        Dise&ntilde;o y diagramaci&oacute;n: Paulina Baz&aacute;n</p>

                        <p><br />
                        <strong>Impreso en:</strong><br />
                        Lima, julio 2018&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>

            <p><br />
            <a href="http://www.minedu.gob.pe/reforma-magisterial/pdf-ley-reforma-magisterial/normas-complementarias-de-la-ley-de-reforma-magisterial.pdf" target="_blank"><img alt="" src="/storage/paginas/2020/imagenes/content_caratula-normas-complementarias.jpg" style="width: 395px; height: 401px;" /></a></p>

            <p>&nbsp;</p>
            ',
        ]);

        // /gracias-maestro-ayacuchano
        $menu16 = Menu::find(16);
        $menu16->page()->create([
            'titulo' => 'Gracias Maestro ayacuchano',
            'descripcion' => 'Gracias Maestro ayacuchano',
            'contenido' => '<div class="h2 text-custom-primary mb-3">Gracias Maestro ayacuchano</div>',
        ]);

        // /esfa3
        $menu17 = Menu::find(17);
        $menu17->page()->create([
            'titulo' => 'ESFA3',
            'descripcion' => 'FICHA DE POSTULANTE Y DECLARACI&Oacute;N JURADA A UTILIZAR EN EL PROCESO DE CONTRATO DE DOCENTE ESFA',
            'contenido' => '<div class="h2 text-custom-primary mb-3">ESFA3</div>
            <p align="center" style="text-align:center"><span style="color:#3498db;"><u><span style="font-size:14px;">FICHA DE POSTULANTE Y DECLARACI&Oacute;N JURADA A UTILIZAR EN EL PROCESO DE CONTRATO DE DOCENTE ESFA</span></u></span></p>
            <p align="center" style="text-align:center"><img alt="" src="https://aesup.webnode.es/_files/200000043-44cea44cec/FICHA%20DEL%20POSTULANTE%20DOCENTE%20ESFA.pdf" /></p>
            ',
        ]);

        // /director-regional-de-educacion-2019
        $menu18 = Menu::find(18);
        $menu18->page()->create([
            'titulo' => 'DIRECTOR REGIONAL DE EDUCACIÓN 2019',
            'descripcion' => 'Mg. GUALBERTO PALOMINO GUTIERREZ ASUMIÓ EL CARGO DE DIRECTOR REGIONAL DE EDUCACIÓN CON RESOLUCIÓN REGIONAL No.018-GRA.',
            'contenido' => '<p style="text-align: center;"><img alt="" src="/storage/paginas/2020/imagenes/content_49948871_1038921642898551_7024405706799316992_o.jpg" style="width: 800px; height: 533px;" /></p>
            <p style="text-align: center;">Mg. GUALBERTO PALOMINO GUTIERREZ ASUMI&Oacute; EL CARGO DE DIRECTOR REGIONAL DE EDUCACI&Oacute;N CON RESOLUCI&Oacute;N REGIONAL No.018-GRA.</p>
            ',
        ]);

        // /calificacion-con-letras
        $menu19 = Menu::find(19);
        $menu19->page()->create([
            'titulo' => 'CALIFICACIÓN CON LETRAS',
            'descripcion' => 'Calificación con letras se implementará en secundaria de manera gradual',
            'contenido' => '<p><span style="font-size:22px;"><strong>Calificaci&oacute;n con letras se implementar&aacute; en secundaria de manera gradual</strong></span></p>
            <p>Ministro Daniel Alfaro informa que la norma est&aacute; a&uacute;n en proceso de elaboraci&oacute;n y recoger&aacute; todas las inquietudes de la ciudadan&iacute;a.</p>
            <p><img alt="" src="/storage/paginas/2020/imagenes/content_calificacion_2019.jpg" style="width: 645px; height: 363px;" /></p>
            <p id="3qu99" style="text-align: justify;">La evaluaci&oacute;n por competencias y con una escala de calificaci&oacute;n con letras se implementar&aacute; en secundaria de manera gradual y recogiendo los comentarios y cr&iacute;ticas de la comunidad educativa, afirm&oacute; hoy el ministro de Educaci&oacute;n, Daniel Alfaro.</p>
            <p id="5qid9" style="text-align: justify;">&nbsp;</p>
            <p id="dfn13" style="text-align: justify;">&ldquo;Si bien el compromiso del Minedu es implementar la evaluaci&oacute;n por competencias, lo haremos de manera gradual. Estamos todav&iacute;a en un proceso de elaboraci&oacute;n de la norma y recogiendo todas las inquietudes que la ciudadan&iacute;a y los actores de inter&eacute;s del sector nos est&aacute;n transmitiendo para mejorar todos los detalles&rdquo;, precis&oacute;.</p>
            <p id="fu1qq" style="text-align: justify;">&nbsp;</p>
            <p id="asqu1" style="text-align: justify;">Alfaro consider&oacute; muy constructivas las cr&iacute;ticas e inquietudes al respecto y se&ntilde;al&oacute; que el Ministerio de Educaci&oacute;n (Minedu) las est&aacute; recogiendo para incluirlas en una norma que se est&aacute; terminando de afinar para que la ciudadan&iacute;a conozca las bondades y ventajas de esta formaci&oacute;n por competencias y sus respectivos instrumentos de evaluaci&oacute;n.</p>
            <p id="22d3c" style="text-align: justify;">&nbsp;</p>
            <p id="asv06" style="text-align: justify;">El titular de Educaci&oacute;n explic&oacute; que, de acuerdo con el Curr&iacute;culo Nacional, el esquema por competencias con las evaluaciones por letras ya se ha implementado en los niveles de inicial y primaria y ahora corresponde implementarlo en secundaria.</p>
            <p id="1n8al" style="text-align: justify;">&nbsp;</p>
            <p id="5viin" style="text-align: justify;">El Curr&iacute;culo Nacional, aplicado desde 2017 de manera gradual en los niveles de educaci&oacute;n inicial y primaria, establece 11 rasgos del perfil que debe tener el egresado de la Educaci&oacute;n B&aacute;sica a trav&eacute;s de 7 enfoques transversales y 31 competencias, y la evaluaci&oacute;n por letras mide c&oacute;mo el estudiante va desarrollando esas competencias a lo largo del ciclo educativo.</p>
            <p id="8p3br" style="text-align: justify;">&nbsp;</p>
            <p id="agngu" style="text-align: justify;">Al respecto, Alfaro inform&oacute; que del 4 al 22 de febrero habr&aacute; una capacitaci&oacute;n sobre la evaluaci&oacute;n por competencias para los 220 especialistas de las UGEL, de modo que a trav&eacute;s de estos se llegue a los 90 mil profesores de secundaria de la educaci&oacute;n p&uacute;blica.</p>
            <p id="eqmjt" style="text-align: justify;">&nbsp;</p>
            <p id="3lj78" style="text-align: justify;">La capacitaci&oacute;n ser&aacute; en plataforma online y tambi&eacute;n presencial para los profesores que tienen dificultades para el acceso a internet, anot&oacute;.</p>
            <p id="fmkaq" style="text-align: justify;">&nbsp;</p>
            <p id="rmds" style="text-align: justify;">Por otra parte, indic&oacute; que el Minedu est&aacute; pidiendo a las universidades que sus ex&aacute;menes de admisi&oacute;n recojan de mejor manera las competencias que se desarrollan en secundaria para que haya un mejor tr&aacute;nsito de la educaci&oacute;n b&aacute;sica a la educaci&oacute;n superior, no solo en las universidades, tambi&eacute;n en los institutos superiores tecnol&oacute;gicos, las escuelas pedag&oacute;gicas y las escuelas de formaci&oacute;n art&iacute;stica.</p>
            <p id="1ipnn" style="text-align: justify;">&nbsp;</p>
            <p id="7btao" style="text-align: justify;">Sostuvo que entre las universidades hay mucho inter&eacute;s para empezar a implementar estos ex&aacute;menes de admisi&oacute;n y para apoyarlas en este proceso este a&ntilde;o habr&aacute; una reuni&oacute;n entre ellas y el Minedu, denominada UNIEjecutivo, en la que se plantear&aacute;n todos los retos que debe afrontar la universidad p&uacute;blica.</p>
            ',
        ]);
    }
}
