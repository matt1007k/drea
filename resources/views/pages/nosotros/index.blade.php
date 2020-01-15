@extends('layouts.app')

@section('title', 'Nosotros')

@section('content')
<div class="container pt-4">
    <div class="h2 text-center mb-3 text-custom-primary-dark">La institución</div>
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <div class="card mb-2">
                <div class="card-body">
                    <div class="h4 text-custom-primary-dark">
                        <i class="fas fa-thumbs-up text-custom-secondary"></i>
                        Misión
                    </div>
                    <p class="mt-3 text-justify">
                        “Conducir la gestión pública regional en el marco de las políticas nacionales y sectoriales,
                        contribuyendo al desarrollo integral y sostenible de la región, de manera participativa,
                        inclusiva y
                        eficiente”.
                    </p>
                </div>
            </div>

            <div class="card mb-2">
                <div class="card-body">
                    <div class="h4 text-custom-primary-dark">
                        <i class="fas fa-eye text-custom-secondary"></i>
                        Visión
                    </div>
                    <p class="mt-3 text-justify">
                        “Ayacucho es una región con sólida identidad cultural, comprometida con el desarrollo humano
                        como estrategia fundamental del cambio social; su proyección al futuro está basada en las
                        capacidades humanas de mujeres y hombres, que han desarrollado una estructura productiva
                        diversificada, competitiva, ambientalmente sostenible y articulada al mercado nacional e
                        internacional, que garantiza una buena calidad de vida para todos. El proceso de transformación
                        regional se sustenta en instituciones modernas y transparentes, liderazgos de calidad, el tejido
                        social fortalecido y el ejercicio de la participación ciudadana en la gestión pública”.
                    </p>
                </div>

            </div>

        </div>
        <div class="col-md mb-sm-2">
            <img src="https://www.jornada.com.pe/images/tema_dia/2015_10_02_drea.jpg" alt="" class="img-fluid"
                style="height:100%">
        </div>

    </div>

    <div class="row mb-2">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <div class="h4 text-custom-primary mb-3">
                        <i class="fas fa-hands text-custom-secondary"></i>
                        Valores institucionales
                    </div>
                    <ul class="list-group border-0">
                        <li class="list-group-item border-0 d-flex px-1">
                            <i class="fas fa-check fa-2x text-custom-primary mr-2"></i>
                            <div class="valor">
                                <div class="h5">Responsabilidad</div>
                                <p class="text-justify">
                                    Es un valor fundamental para el trabajo de la organización. Las transgresiones a la
                                    ley, la corrupción son retos políticos y sociales pendientes en la
                                    historia del país. Este valor nos inspira de avanzar con rectitud y en concordancia
                                    con las leyes y compromisos por la educación.
                                </p>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex px-1 py-0">
                            <i class="fas fa-check fa-2x text-custom-primary mr-2"></i>
                            <div class="valor">
                                <div class="h5">Libertad</div>
                                <p class="text-justify">
                                    La educación es un acto de libertad que permite que cada persona u organización
                                    crezca desde su propias potencialidades y anhelos. La libertad
                                    expresa la capacidad del personal por crear y mantener cambios positivos y
                                    permanentes dentro de nuestra organización.
                                </p>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex px-1 py-0">
                            <i class="fas fa-check fa-2x text-custom-primary mr-2"></i>
                            <div class="valor">
                                <div class="h5">Justicia</div>
                                <p class="text-justify">
                                    El trabajo en equipo requiere una muy buena distribución de las tareas, por ello
                                    otorgar a cada funcionario, trabajador lo que le corresponde, no solo
                                    desde el punto de vista salarial sino que también en cuanto se refiere a las
                                    actividades que a cada uno le tocará desempeñar es importante para el
                                    logro de las metas planteadas.
                                </p>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex px-1 py-0">
                            <i class="fas fa-check fa-2x text-custom-primary mr-2"></i>
                            <div class="valor">
                                <div class="h5">Honestidad</div>
                                <p class="text-justify">
                                    La atención del usuario debe de ser una prioridad en el sistema de la DREA. Todos
                                    debemos orientar nuestros esfuerzos hacia ellos. La honestidad
                                    debe de ser una característica y herramienta elemental que genere confianza y la
                                    credibilidad frente a nuestros usuarios.
                                </p>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex px-1 py-0">
                            <i class="fas fa-check fa-2x text-custom-primary mr-2"></i>
                            <div class="valor">
                                <div class="h5">Lealtad</div>
                                <p class="text-justify">
                                    Junto al trabajo en equipo representa la capacidad por la cual podemos salir
                                    adelante frente a los retos complejos. Es necesario que todo el personal
                                    se sienta comprometido con el proyecto de mejorar la calidad educativa de la región.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md">
            <div class="card">
                <div class="card-body">
                    <div class="h4 text-custom-primary mb-3">
                        <i class="fas fa-history text-custom-secondary"></i>
                        Reseña histórica
                    </div>
                    <p class="text-justify">El año de 1970 por la inexorable necesidad de descentralizar la
                        administración
                        educativa, mediante D.S.
                        Nº 036 de fecha 31 de Diciembre de 1969, se crea la Jefatura Departamental de Educación, siendo
                        su
                        primer Jefe el profesor Abraham Aramburú Añaños. La nueva institución todavía mantuvo cierta
                        independencia de la III Región de Educación con sede en Huancayo, en lo que respecta a los
                        procedimientos administrativos e impugnación de resoluciones, delimitándose sus competencias,
                        atribuciones y responsabilidades a nivel del Departamento de Ayacucho e integrándose a esta
                        nueva
                        administración, el Primer y el Segundo Sector Escolar, asignándose para su funcionamiento el
                        local
                        del
                        Ex Colegio “Mariscal Cáceres” o también de la Ex Escuela Normal “Nuestra Señora de Lourdes”. Han
                        transcurrido 36 años de existencia institucional, cuyos servicios en el correr del tiempo y por
                        los
                        cambios en la estructura del Estado y la organización del Ministerio de Educación han
                        experimentado
                        una
                        evolución tanto en forma, dirección, planes, estrategias de desarrollo, cuanto en aspectos
                        estructurales
                        Nominalmente, la entidad ha adoptado diferentes denominaciones tales las de Jefatura
                        Departamental,
                        Zonal, Dirección Zonal, y Dirección Departamental, con dependencia directa del Ministerio de
                        Educación.
                    </p>
                    <p class="text-justify">Hoy se denomina Dirección Regional, y esta ha emergido desde la época de la
                        regionalización del país
                        cuando pasó a depender del Gobierno Regional “Libertadores Wari” ampliando su ámbito a los
                        departamentos
                        de Ica, Huancavelica y la provincia de Andahuaylas. Esta administración fue suprimida con la
                        departamentalización ocurrida en 1998.</p>
                    <p class="text-justify">Durante la reforma educativa impulsada por el Régimen Militar entre
                        1968-1980,
                        la ex
                        Zona de Educación
                        fue centro de la actividad educativa y administración, dependiendo del Pliego Ministerio de
                        Educación En
                        las provincias se organizaron las Supervisiones Educativas, que luego pasaron a ser los Núcleos
                        Educativos Comunales (NEC´s) como órganos de enlace. Posteriormente, fueron convertidos en las
                        Unidades
                        de Servicios Educativos (USE´s), pero sin facultades de resolución o decisión, y también como
                        órganos de
                        enlace en las acciones de supervisión, seguimiento y control. Fueron desactivadas con la
                        expedición
                        de
                        las Resoluciones Ministeriales 333-ED y 600-ED. Cabe recordar, que entre los principios y
                        axiología
                        de
                        la reforma educativa fue lograr que el futuro hombre fuera autocrítico, reflexivo, creador y
                        transformador, capaz de tomar conciencia y cambiar su estatus y realidad social; en cambio el
                        rol
                        del
                        maestro además de ser agente formativo, era elemento integrador y capaz de transformar su
                        realidad
                        bajo
                        los principios de solidaridad, cooperación y participación. </p>
                    <p class="text-justify">Actualmente cuenta con una estructura orgánica no definida, por haberse
                        vulnerado la
                        esencia de las
                        Resoluciones Ministeriales 333-ED y 600-ED. Su ámbito territorial comprende el departamento de
                        Ayacucho
                        y la Sub Región del Sarasara, subsistiendo las USE´s en las capitales de provincias, las ADE´s y
                        los
                        COCOE, que implican un egreso presupuestal para 445 trabajadores aproximadamente, haciéndose
                        imperativa
                        la reestructuración dispuesta por la R.M. Nº 113-2000-ED, teniendo que dejarse de lado los
                        criterios
                        políticos - partidarios y los ajenos a la realidad socio cultural del Departamento. Sin embargo,
                        a
                        través de la Resolución Ministerial Nro. 204-2002-ED, de fecha 12 de enero de 2002, la
                        Organización
                        Interna y el Cuadro para Asignación de Personal CAP, de las Direcciones Regionales de Educación
                        y
                        sus
                        respectivas Unidades de Gestión Educativa Local, donde con esta adecuación la Dirección Regional
                        de
                        Educación de Ayacucho reduce su CAP en 54 trabajadores, reduciendo de 132 trabajadores de
                        conformidad a
                        la R.M. Nro. 0333 y 0600-93-ED, en perjuicio de la DREA. Asimismo, se Aprueba el Reglamento de
                        Organización y Funciones de las Direcciones Regionales de Educación y de las Unidades de Gestión
                        Educativa Local, mediante el D.S. Nro. 015-2002-ED.</p>
                    <p class="text-justify">Dentro de este marco, se hace necesaria la construcción de una nueva
                        infraestructura
                        para la Dirección
                        Regional de Educación, que vaya acorde con las exigencias de modernización de la Administración
                        Pública,
                        en vista de que la infraestructura actual se encuentra en estado de emergencia desde el año
                        2001,
                        por
                        carecer de reparación y mantenimiento que se requiere.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection