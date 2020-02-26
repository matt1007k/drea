<?php

use App\Models\Announcement;
use Illuminate\Database\Seeder;
use App\Models\AnnouncementGroup;
use App\Models\AnnouncementLink;

class AnnouncementGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AnnouncementGroup::truncate();
        Announcement::truncate();
        AnnouncementLink::truncate();
        // Grupos
        AnnouncementGroup::create([
            'nombre' => 'CAS 2017',
            'anio' => '2017',
            'introduccion' => '<p style="text-align: center;"><strong>AVISO</strong></p>

            <p><br />
            El postulante podr&aacute; presentarse s&oacute;lo a una (01) convocatoria en curso. De presentarse a m&aacute;s de una convocatoria simult&aacute;neamente, s&oacute;lo se considerar&aacute; la primera postulaci&oacute;n presentada (seg&uacute;n registro de la Oficina de Atenci&oacute;n al Ciudadano y Gesti&oacute;n Documental). Culminado un proceso de convocatoria con la publicaci&oacute;n del Resultado final, puede postular a otra Convocatoria CAS.<br />
            <br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Instrucci&oacute;n a los postulantes</strong><br />
            <br />
            Las personas interesadas deber&aacute;n presentar,&nbsp; en sobre cerrado dirigido al presidente de la Comisi&oacute;n de Evaluaci&oacute;n y Selecci&oacute;n consignando como referencia, el n&uacute;mero de convocatoria a la que postula, los siguientes documentos:<br />
            <br />
            1. Formato Est&aacute;ndar de Hoja de Vida (en original) debidamente suscrito, documentado, autenticado y ordenado.<br />
            2. Copia autenticada del DNI o Carn&eacute; de Extranjer&iacute;a &ndash;de ser el caso (vigente y legible).<br />
            3. Declaraci&oacute;n Jurada en original, debidamente suscrita.<br />
            4. Declaraci&oacute;n Jurada de Afiliaci&oacute;n al R&eacute;gimen Previsional, debidamente suscrita.<br />
            <br />
            <strong>NOTA</strong><br />
            Las postulaciones que se reciban en otro formato o no se encuentren debidamente autenticados y ordenados, no ser&aacute;n consideradas aptas para el proceso.<br />
            <br />
            <strong>FORMATOS</strong><br />
            FMT Anexo 01 &ndash; Carta de Postulaci&oacute;n [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_01_CARTA_POSTULACION.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_01_CARTA_POSTULACION.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 02 &ndash; Declaraci&oacute;n Jurada Postulante [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_02_DECLARACION_JURADA_POSTULANTE.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_02_DECLARACION_JURADA_POSTULANTE.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 03 &ndash; Declaraci&oacute;n Jurada Afiliaci&oacute;n [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_03_DECLARACION_JURADA_AFILIACION.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_03_DECLARACION_JURADA_AFILIACION.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 04 &ndash; Declaraci&oacute;n Jurada Domicilio [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_04_DECLARACION_JURADA_DOMICILIO.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_04_DECLARACION_JURADA_DOMICILIO.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 05 &ndash; Declaraci&oacute;n Jurada Licencias [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_05_DECLARACION_JURADA_LICENCIAS.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_05_DECLARACION_JURADA_LICENCIAS.docx" target="_blank">Ver</a>]<br />
            FMT Etiqueta para presentaci&oacute;n de sobres [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ETIQUETA_PARA_PRESENTACION_SOBRES.docx" href="/documentos/2017/MARZO/CAS/FMT_ETIQUETA_PARA_PRESENTACION_SOBRES.docx" target="_blank">Ver</a>]<br />
            FMT Hoja de vida cas [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_HOJA_DE_VIDA_CAS.docx" href="/documentos/2017/MARZO/CAS/FMT_HOJA_DE_VIDA_CAS.docx" target="_blank">Ver</a>]<br />
            <br />
            Las personas que cumplan con los requisitos enunciados, deber&aacute;n enviar la documentaci&oacute;n antes se&ntilde;alada, a la&nbsp;<strong>MESA DE PARTES</strong>&nbsp;<strong>de la Direcci&oacute;n Regional de Educaci&oacute;n de Ayacucho, sito: Jr. 28 de Julio N&deg; 383 &ndash; Ayacucho, en las fechas y horas indicadas en la convocatoria.</strong></p>
            ',
        ]);

        AnnouncementGroup::create([
            'nombre' => 'CAS 2018',
            'anio' => '2018',
            'introduccion' => '<p style="text-align: center;"><strong>AVISO</strong></p>

            <p><br />
            El postulante podr&aacute; presentarse s&oacute;lo a una (01) convocatoria en curso. De presentarse a m&aacute;s de una convocatoria simult&aacute;neamente, s&oacute;lo se considerar&aacute; la primera postulaci&oacute;n presentada (seg&uacute;n registro de la Oficina de Atenci&oacute;n al Ciudadano y Gesti&oacute;n Documental). Culminado un proceso de convocatoria con la publicaci&oacute;n del Resultado final, puede postular a otra Convocatoria CAS.<br />
            <br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Instrucci&oacute;n a los postulantes</strong><br />
            <br />
            Las personas interesadas deber&aacute;n presentar,&nbsp; en sobre cerrado dirigido al presidente de la Comisi&oacute;n de Evaluaci&oacute;n y Selecci&oacute;n consignando como referencia, el n&uacute;mero de convocatoria a la que postula, los siguientes documentos:<br />
            <br />
            1. Formato Est&aacute;ndar de Hoja de Vida (en original) debidamente suscrito, documentado, autenticado y ordenado.<br />
            2. Copia autenticada del DNI o Carn&eacute; de Extranjer&iacute;a &ndash;de ser el caso (vigente y legible).<br />
            3. Declaraci&oacute;n Jurada en original, debidamente suscrita.<br />
            4. Declaraci&oacute;n Jurada de Afiliaci&oacute;n al R&eacute;gimen Previsional, debidamente suscrita.<br />
            <br />
            <strong>NOTA</strong><br />
            Las postulaciones que se reciban en otro formato o no se encuentren debidamente autenticados y ordenados, no ser&aacute;n consideradas aptas para el proceso.<br />
            <br />
            <strong>FORMATOS</strong><br />
            FMT Anexo 01 &ndash; Carta de Postulaci&oacute;n [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_01_CARTA_POSTULACION.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_01_CARTA_POSTULACION.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 02 &ndash; Declaraci&oacute;n Jurada Postulante [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_02_DECLARACION_JURADA_POSTULANTE.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_02_DECLARACION_JURADA_POSTULANTE.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 03 &ndash; Declaraci&oacute;n Jurada Afiliaci&oacute;n [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_03_DECLARACION_JURADA_AFILIACION.docx" href="documentos/2018/ENERO/OTROS/Anexo03.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 04 &ndash; Declaraci&oacute;n Jurada Domicilio [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_04_DECLARACION_JURADA_DOMICILIO.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_04_DECLARACION_JURADA_DOMICILIO.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 05 &ndash; Declaraci&oacute;n Jurada Licencias [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_05_DECLARACION_JURADA_LICENCIAS.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_05_DECLARACION_JURADA_LICENCIAS.docx" target="_blank">Ver</a>]<br />
            FMT Etiqueta para presentaci&oacute;n de sobres [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ETIQUETA_PARA_PRESENTACION_SOBRES.docx" href="/documentos/2017/MARZO/CAS/FMT_ETIQUETA_PARA_PRESENTACION_SOBRES.docx" target="_blank">Ver</a>]<br />
            FMT Hoja de vida cas [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_HOJA_DE_VIDA_CAS.docx" href="/documentos/2017/MARZO/CAS/FMT_HOJA_DE_VIDA_CAS.docx" target="_blank">Ver</a>]<br />
            <br />
            Las personas que cumplan con los requisitos enunciados, deber&aacute;n enviar la documentaci&oacute;n antes se&ntilde;alada, a la&nbsp;<strong>MESA DE PARTES</strong>&nbsp;<strong>de la Direcci&oacute;n Regional de Educaci&oacute;n de Ayacucho, sito: Jr. 28 de Julio N&deg; 383 &ndash; Ayacucho, en las fechas y horas indicadas en la convocatoria.</strong></p>
            ',
        ]);

        AnnouncementGroup::create([
            'nombre' => 'CAS 2019',
            'anio' => '2019',
            'introduccion' => '<p style="text-align: center;"><strong>AVISO</strong></p>

            <p><br />
            El postulante podr&aacute; presentarse s&oacute;lo a una (01) convocatoria en curso. De presentarse a m&aacute;s de una convocatoria simult&aacute;neamente, s&oacute;lo se considerar&aacute; la primera postulaci&oacute;n presentada (seg&uacute;n registro de la Oficina de Atenci&oacute;n al Ciudadano y Gesti&oacute;n Documental). Culminado un proceso de convocatoria con la publicaci&oacute;n del Resultado final, puede postular a otra Convocatoria CAS.<br />
            <br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Instrucci&oacute;n a los postulantes</strong><br />
            <br />
            Las personas interesadas deber&aacute;n presentar,&nbsp; en sobre cerrado dirigido al presidente de la Comisi&oacute;n de Evaluaci&oacute;n y Selecci&oacute;n consignando como referencia, el n&uacute;mero de convocatoria a la que postula, los siguientes documentos:<br />
            <br />
            1. Formato Est&aacute;ndar de Hoja de Vida (en original) debidamente suscrito, documentado, autenticado y ordenado.<br />
            2. Copia autenticada del DNI o Carn&eacute; de Extranjer&iacute;a &ndash;de ser el caso (vigente y legible).<br />
            3. Declaraci&oacute;n Jurada en original, debidamente suscrita.<br />
            4. Declaraci&oacute;n Jurada de Afiliaci&oacute;n al R&eacute;gimen Previsional, debidamente suscrita.<br />
            <br />
            <strong>NOTA</strong><br />
            Las postulaciones que se reciban en otro formato o no se encuentren debidamente autenticados y ordenados, no ser&aacute;n consideradas aptas para el proceso.<br />
            <br />
            <strong>FORMATOS</strong><br />
            FMT Anexo 01 &ndash; Carta de Postulaci&oacute;n [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_01_CARTA_POSTULACION.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_01_CARTA_POSTULACION.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 02 &ndash; Declaraci&oacute;n Jurada Postulante [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_02_DECLARACION_JURADA_POSTULANTE.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_02_DECLARACION_JURADA_POSTULANTE.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 03 &ndash; Declaraci&oacute;n Jurada Afiliaci&oacute;n [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_03_DECLARACION_JURADA_AFILIACION.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_03_DECLARACION_JURADA_AFILIACION.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 04 &ndash; Declaraci&oacute;n Jurada Domicilio [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_04_DECLARACION_JURADA_DOMICILIO.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_04_DECLARACION_JURADA_DOMICILIO.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 05 &ndash; Declaraci&oacute;n Jurada Licencias [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_05_DECLARACION_JURADA_LICENCIAS.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_05_DECLARACION_JURADA_LICENCIAS.docx" target="_blank">Ver</a>]<br />
            FMT Etiqueta para presentaci&oacute;n de sobres [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ETIQUETA_PARA_PRESENTACION_SOBRES.docx" href="/documentos/2017/MARZO/CAS/FMT_ETIQUETA_PARA_PRESENTACION_SOBRES.docx" target="_blank">Ver</a>]<br />
            FMT Hoja de vida cas [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_HOJA_DE_VIDA_CAS.docx" href="/documentos/2017/MARZO/CAS/FMT_HOJA_DE_VIDA_CAS.docx" target="_blank">Ver</a>]<br />
            <br />
            Las personas que cumplan con los requisitos enunciados, deber&aacute;n enviar la documentaci&oacute;n antes se&ntilde;alada, a la&nbsp;<strong>MESA DE PARTES</strong>&nbsp;<strong>de la Direcci&oacute;n Regional de Educaci&oacute;n de Ayacucho, sito: Jr. 28 de Julio N&deg; 383 &ndash; Ayacucho, en las fechas y horas indicadas en la convocatoria.</strong></p>            
            ',
        ]);


        AnnouncementGroup::create([
            'nombre' => 'CAS 2020',
            'anio' => '2020',
            'introduccion' => '<p style="text-align: center;"><strong>AVISO</strong></p>

            <p><br />
            El postulante podr&aacute; presentarse s&oacute;lo a una (01) convocatoria en curso. De presentarse a m&aacute;s de una convocatoria simult&aacute;neamente, s&oacute;lo se considerar&aacute; la primera postulaci&oacute;n presentada (seg&uacute;n registro de la Oficina de Atenci&oacute;n al Ciudadano y Gesti&oacute;n Documental). Culminado un proceso de convocatoria con la publicaci&oacute;n del Resultado final, puede postular a otra Convocatoria CAS.<br />
            <br />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>Instrucci&oacute;n a los postulantes</strong><br />
            <br />
            Las personas interesadas deber&aacute;n presentar,&nbsp; en sobre cerrado dirigido al presidente de la Comisi&oacute;n de Evaluaci&oacute;n y Selecci&oacute;n consignando como referencia, el n&uacute;mero de convocatoria a la que postula, los siguientes documentos:<br />
            <br />
            1. Formato Est&aacute;ndar de Hoja de Vida (en original) debidamente suscrito, documentado, autenticado y ordenado.<br />
            2. Copia autenticada del DNI o Carn&eacute; de Extranjer&iacute;a &ndash;de ser el caso (vigente y legible).<br />
            3. Declaraci&oacute;n Jurada en original, debidamente suscrita.<br />
            4. Declaraci&oacute;n Jurada de Afiliaci&oacute;n al R&eacute;gimen Previsional, debidamente suscrita.<br />
            <br />
            <strong>NOTA</strong><br />
            Las postulaciones que se reciban en otro formato o no se encuentren debidamente autenticados y ordenados, no ser&aacute;n consideradas aptas para el proceso.<br />
            <br />
            <strong>FORMATOS</strong><br />
            FMT Anexo 01 &ndash; Carta de Postulaci&oacute;n [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_01_CARTA_POSTULACION.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_01_CARTA_POSTULACION.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 02 &ndash; Declaraci&oacute;n Jurada Postulante [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_02_DECLARACION_JURADA_POSTULANTE.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_02_DECLARACION_JURADA_POSTULANTE.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 03 &ndash; Declaraci&oacute;n Jurada Afiliaci&oacute;n [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_03_DECLARACION_JURADA_AFILIACION.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_03_DECLARACION_JURADA_AFILIACION.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 04 &ndash; Declaraci&oacute;n Jurada Domicilio [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_04_DECLARACION_JURADA_DOMICILIO.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_04_DECLARACION_JURADA_DOMICILIO.docx" target="_blank">Ver</a>]<br />
            FMT Anexo 05 &ndash; Declaraci&oacute;n Jurada Licencias [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ANEXO_05_DECLARACION_JURADA_LICENCIAS.docx" href="/documentos/2017/MARZO/CAS/FMT_ANEXO_05_DECLARACION_JURADA_LICENCIAS.docx" target="_blank">Ver</a>]<br />
            FMT Etiqueta para presentaci&oacute;n de sobres [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_ETIQUETA_PARA_PRESENTACION_SOBRES.docx" href="/documentos/2017/MARZO/CAS/FMT_ETIQUETA_PARA_PRESENTACION_SOBRES.docx" target="_blank">Ver</a>]<br />
            FMT Hoja de vida cas [<a data-mce-href="Documentos/2017/MARZO/CAS/FMT_HOJA_DE_VIDA_CAS.docx" href="/documentos/2017/MARZO/CAS/FMT_HOJA_DE_VIDA_CAS.docx" target="_blank">Ver</a>]<br />
            <br />
            Las personas que cumplan con los requisitos enunciados, deber&aacute;n enviar la documentaci&oacute;n antes se&ntilde;alada, a la&nbsp;<strong>MESA DE PARTES</strong>&nbsp;<strong>de la Direcci&oacute;n Regional de Educaci&oacute;n de Ayacucho, sito: Jr. 28 de Julio N&deg; 383 &ndash; Ayacucho, en las fechas y horas indicadas en la convocatoria.</strong></p>            
            ',
        ]);
    }
}
