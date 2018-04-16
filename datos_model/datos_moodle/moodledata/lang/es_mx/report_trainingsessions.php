<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'report_trainingsessions', language 'es_mx', branch 'MOODLE_30_STABLE'
 *
 * @package   report_trainingsessions
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activitytime'] = 'Tiempo en actividades';
$string['activitytime_help'] = '<p>Este cálculo del tiempo considera todo el tiempo empleado en actividades del curso, dejando afuera el tiempo en el diseño del curso. En ciertos casos (cuando se usa la Revisión del Tiempo de Aprendizaje (no estandard) con asignación estandar del tiempo (http://github.com/vfremaux/moodle-mod_learningtimecheck.git), se usan tiempos estandar adicionales en lugar de tiempos reales extraidos de las bitácoras.</p>';
$string['addcoursegrade'] = 'Puntajes del curso';
$string['addmodulelabel'] = 'Añadir módulo de actividad';
$string['addmoduletitle'] = 'Añadir un módulo de actividad al que Usted quiere que se le añada calificación en el reporte';
$string['advancement'] = 'Avance';
$string['allcourses'] = 'Todos los cursos';
$string['allgroups'] = 'Todos los grupos';
$string['ashtml'] = 'Formato HTML';
$string['asxls'] = 'Subir como EXCEL';
$string['authoritysign'] = 'Autoridad Educativa';
$string['batchdate'] = 'Fecha de la labor';
$string['batchreports_task'] = 'Reportes masivos';
$string['bgcolor'] = 'Color del fondo';
$string['checklistadvice'] = 'Efectos secundarios especiales a la terminación';
$string['chooseagroup'] = 'Elegir un grupo';
$string['chooseaninstitution'] = 'Elegir una institución';
$string['colors'] = 'Colores';
$string['columnname'] = 'Nombre de columna:';
$string['connections'] = 'Conexiones';
$string['contiguoussessions'] = 'Sesiones contiguas';
$string['coupling'] = 'Acoplamiento';
$string['course'] = 'Curso';
$string['courseglobals'] = 'Globales de Curso';
$string['coursegrade'] = 'Habilitar';
$string['courselabel'] = 'como columna:';
$string['coursename'] = 'Nombre de grupo';
$string['courseraw'] = 'Lotes';
$string['coursesessions'] = 'Sesiones de trabajo en curso (tiempos estimados reales)';
$string['coursestart'] = 'Fecha de inicio del curso';
$string['coursesummary'] = 'Resumen del participante';
$string['crop'] = 'Quitar sesiones fuera del rango';
$string['csv'] = 'Texto (CSV)';
$string['csvoutputtoiso'] = 'Salida ISO CSV';
$string['csvoutputtoiso_desc'] = 'Si se habilita, el reporte del curso en bruto se generará en codificación ISO-8859-1 para las aplicaciones antiguas concordantes con CSV';
$string['currentcourse'] = 'Curso actual';
$string['disabled'] = '|--------- deshabiiitado ------|';
$string['done'] = 'Realizado:';
$string['duration'] = 'Duración';
$string['elapsed'] = 'Tiempo total';
$string['elapsedadvice'] = 'El tiempo trasncurrido puede ser diferente del rango de tiempo de sesión debido a tiempos de crédito extra en descansos de sesiones. Refiérase a la configuración del Bloque de Estadísticas de Uso.';
$string['email'] = 'Email';
$string['enablecoursescore'] = 'Habilitar puntaje del curso';
$string['enablelearningtimecheckcoupling'] = 'Habilitar acoplamiento a LTC';
$string['enablelearningtimecheckcoupling_desc'] = 'Si se habilita, los reportes de sesión de trainingsession usarán el filtrado de días laborables del reporte de Revisión de Tiempo de Aprendizaje (LTC)';
$string['enddate'] = 'Fecha final';
$string['enterprisesign'] = 'Empresarial';
$string['equlearningtime'] = 'Tiempo de entrenamiento equivalente:';
$string['errorbadcoursestructure'] = 'Error en estructura de curso : ID malo {$a}';
$string['errorbadviewid'] = 'vista de reporte inexistente';
$string['errorcoursestructurefirstpage'] = 'Error de estructura de curso: falló al obtenerse la primera página';
$string['errorcoursetoolarge'] = 'El curso es demasiado grande. Eligiendo un grupo';
$string['errornotingroup'] = 'Usted no tiene acceso a todos los usuarios y no tiene ninguna membresía de grupo.';
$string['extrauserinfo'] = 'Información adicional del usuario en reportes';
$string['extrauserinfo_desc'] = 'Usted puede añadir opcionalmente datos de campos a la parte de información del usuario';
$string['firstaccess'] = 'Primer acceso';
$string['firstconnection'] = 'Primera conexión';
$string['firstenrolldate'] = 'Primera inscripción';
$string['firstname'] = 'Nombre(s)';
$string['from'] = 'Desde';
$string['generateCSV'] = 'generar como CSV';
$string['generatePDF'] = 'Generar como PDF';
$string['generatereports'] = 'Generar reportes';
$string['generateXLS'] = 'Generar como XLS';
$string['gradesettings'] = 'Configuraciones de calificación';
$string['head1application'] = 'Los colores del Encabezado 1 son usados en la fila del encabezado superior cuando es apropiado.';
$string['head2application'] = 'Los colores del Encabezado 2 son usados en la fila del encabezado normal justo arriba de las columnas de datos. Esto es el caso más común.';
$string['head3application'] = 'Los colores del Encabezado 3 son usados al final del resumen de tabla, cuando es apropiado.';
$string['headsection'] = 'Sección encabezado';
$string['hideemptymodules'] = 'Ocultar módulos vacíos';
$string['hideemptymodules_desc'] = 'Si se habilita, los módulos vacíos (sin tiempo empleado) no se imprimirán en los reportes.';
$string['hits'] = 'Aciertos';
$string['hitslastweek'] = 'Aciertos la semana pasada';
$string['id'] = 'ID';
$string['idnumber'] = 'Número de ID';
$string['in'] = 'Tiempo empleado';
$string['incourses'] = 'En cursos';
$string['insessiontime_help'] = 'Este es el tiempo "en" aprendizaje que coincidió con las reglas validadas';
$string['institution'] = 'Institución';
$string['institutions'] = 'Instituciones';
$string['instructure'] = 'Tiempo en actividades del curso';
$string['interactive'] = 'Interactivo';
$string['interactivetitle'] = '¡Producir este lote ahorita!';
$string['item'] = 'Item';
$string['items'] = 'Ítems';
$string['lastaccess'] = 'Último acceso';
$string['lastname'] = 'Apellido(s)';
$string['layout'] = 'Diseño del documento';
$string['learningtimesessioncrop'] = 'Operación en sesiones fuera del rango';
$string['learningtimesessioncrop_desc'] = 'Al acoplarse con learningtimecheck, las sesiones fuera del rango válido pudieron recortarse, o conservarse y solamente marcarse en los reportes';
$string['libsmissing'] = 'Esta característica ha sido deshabilitada porque faltan librerías. Instale librerías desde http://github.com/vfremaux/moodle-local_vflibs para tener habilitada la generación de PDF.';
$string['mark'] = 'Marcar sesiones fuera del rango';
$string['modgrade'] = 'Calificación de actividad';
$string['modulegrade'] = 'Módulo de actividad';
$string['modulegrades'] = 'Calificaciones de actividad';
$string['never'] = 'nunca';
$string['newtask'] = 'Añadir un nuevo lote';
$string['nodata'] = 'Sin datos de curso';
$string['nopermissiontoview'] = 'Usted no tiene suficientes permisos en este curso para ver esta información';
$string['nosessions'] = 'No se grabaron sesiones de trabajo';
$string['nostructure'] = 'No se detectaron estructuras de curso mesurables';
$string['nothing'] = 'Sin usuarios para compilar';
$string['now'] = '¡ Ahora !';
$string['onefulluserpersheet'] = 'Una información de usuario completa por página';
$string['oneuserperrow'] = 'Una información resumida del usuario por fila en una hoja única';
$string['othertime'] = 'Otro tiempo (no actividad)';
$string['othertime_help'] = '<p>El tiempo empleado que no puede asignarse directamente a un módulo de actividad del curso.</p>';
$string['out'] = 'Tiempo fuera';
$string['outofgroup'] = 'Sin grupo';
$string['outofstructure'] = 'Otro tiempo usado en curso';
$string['outputdir'] = 'Directorio de salida';
$string['outputdirectory'] = 'Directorio de salida en los archivos del curso local';
$string['outsessiontime'] = 'Reglas de Tiempo fuera restante';
$string['outsessiontime_help'] = 'Este es el tiempo restante de aprendizaje que NO coincide con las reglas de validación';
$string['over'] = 'sobre';
$string['parts'] = 'partes';
$string['pdf'] = 'PDF';
$string['pdfabsoluteverticaloffset'] = 'Sesgo vertical absoluto del documento';
$string['pdfabsoluteverticaloffset_desc'] = 'Dice el sesgo (en milímetros) inicial para la generación del documento relativo a la parte superior de la página en la generación del PDF.';
$string['pdfpage'] = 'Página:';
$string['pdfpagecutoff'] = 'Punto de corte de altura de página PDF';
$string['pdfpagecutoff_desc'] = 'Altura (en milímetros) de la página para cambiar a la siguiente página.';
$string['pdfreportfooter'] = 'Imagen del pie de página del reporte en PDF';
$string['pdfreportfooter_desc'] = 'Proporcionar una imagen JPG para el pie de página del fondo (880 pixeles de ancho y hasta 100 pixeles de alto)';
$string['pdfreportheader'] = 'Imagen del encabezado del reporte en PDF';
$string['pdfreportheader_desc'] = 'Proporcionar una imagen JPG para la parte del encabezado superior (880 pixeles de ancho por hasta 220 pixeles de alto)';
$string['pdfreportinnerheader'] = 'Imagen del encabezado interior del reporte en PDF';
$string['pdfreportinnerheader_desc'] = 'Proporcionar una imagen JPG para la parte del encabezado superior en las páginas interiores (880 pixeles de ancho por hasta 150 pixeles de alto). Si no se proporciona ninguna, se usará nuevamente el encabezado de la primera página.';
$string['periodshift'] = 'Mover período';
$string['periodshiftto'] = 'Mofer solamente fecha de "hasta"';
$string['pluginname'] = 'Sesiones de Entrenamiento';
$string['printidnumber'] = 'Imprimir Número ID';
$string['printidnumber_desc'] = 'Si se selecciona, añade IDNumber a reportes';
$string['printsessiontotal'] = 'Mostrar el tiempo transcurrido en sesión en general';
$string['printsessiontotal_desc'] = 'NO mostrar el tiempo total de sesión en la pantalla de reportes de tiempo en sesión .';
$string['quickgroupcompile'] = '<h3>Compilación rápida para {$a} usuarios:</h3><p>La Compilación Rápida proporciona un reporte de resumen rápido para grupos menores a 50 usuarios, directamente en el directorio raíz de sus archivos del curso.</p>';
$string['quickmonthlyreport'] = 'Reportes mensuales rápidos (PDF)';
$string['range'] = 'Rango';
$string['recipient'] = 'Destinatario';
$string['recipient_desc'] = 'Destinatario por defecto de los documentos PDF. Puede ser anulado localmente por cada operador.';
$string['reportdate'] = 'Fecha del reporte';
$string['reportfilemanager'] = 'Gestor de archivos del reporte';
$string['reportformat'] = 'Formato del documento';
$string['reportforuser'] = 'Reporte para';
$string['reportlayout'] = 'Diseño del reporte';
$string['reports'] = 'Reportes';
$string['reportscope'] = 'Alcance';
$string['reportscope_help'] = '<p>Algunos reportes permiten el revisar todos los cursos del usuario. Tome nota de que algunos reportes no usan el Alcance.</p>';
$string['role'] = 'Rol';
$string['scheduledbatches'] = 'Lotes agendados';
$string['scoresettings'] = 'Configuraciones de Reporte de Puntaje';
$string['scoresettingsadvice'] = 'En reportes resumidos del curso (un usuario por línea), Usted puede añadir columnas de salida adicional con puntajes del Libro de calificaciones. Usted puede añadir la calificación global del curso, o elegir añadir una calificación (o más) de actividad única en el reporte.';
$string['sectionname'] = 'Nombre de sección';
$string['seedetails'] = 'Ver detalles';
$string['selectforreport'] = 'Seleccionar para reportes';
$string['sessionduration'] = 'Duración de la sesión';
$string['sessionend'] = 'Fin de sesión';
$string['sessionreportdoctitle'] = 'Reporte de sesión';
$string['sessionreports'] = 'Reporte de sesión de usuario';
$string['sessionreporttitle'] = 'Leyenda explicativa del documento del reporte de sesión';
$string['sessionreporttitle_desc'] = 'Impresa en la primera página de un reporte de sesión de usuario';
$string['sessions'] = 'Sesiones de trabajo';
$string['sessionsonly'] = 'Solamente sesiones del usuario';
$string['sessionstart'] = 'Inicio de sesión';
$string['showhits'] = 'Mostrar eventos (CSV)';
$string['showhits_desc'] = 'Si se configura, el número de aciertos se añadirá a las líneas del CSV';
$string['singleexec'] = 'Corrida única';
$string['siteglobals'] = 'Sitio (secciones no de curso)';
$string['startdate'] = 'Fecha de inicio';
$string['structureitem'] = 'Ítem rastreable de curso';
$string['structuretotal'] = 'Total {$a}:';
$string['studentsign'] = 'Estudiante';
$string['task'] = 'Quehacer {$a}';
$string['taskname'] = 'Quehacer';
$string['taskrecorded'] = 'Quehacer grabado exitosamente';
$string['teachersign'] = 'Profesor';
$string['textapplication'] = 'Esta es una configuraión para texto por defecto del documento.';
$string['textcolor'] = 'Color del texto';
$string['timeelapsed'] = 'Tiempo empleado';
$string['timeelapsedcurweek'] = 'Tiempo empleado semana actual';
$string['timeperpart'] = 'Tiempo transcurrido por parte';
$string['timespent'] = 'Empleado';
$string['timespentlastweek'] = 'Empleado en la semana pasada';
$string['to'] = 'Hasta';
$string['todate'] = 'Fecha final';
$string['tonow'] = 'Hasta ahora';
$string['totalduration'] = 'Duración total';
$string['totalsessions'] = 'Tiempo total de sesión';
$string['totalsessiontime'] = 'Tiempo total de trabajo en sesión';
$string['totalsessiontime_help'] = 'Tome nota de que la lista de sesión cuenta algunas duraciones que pueden estar fuera de este curso. El \'tiempo total de sesión\' usualmente debería ser mayor que el cálculo de \'tiempo en el curso\'';
$string['totalsitetime'] = 'Tiempo total en el sitio';
$string['trainingreports'] = 'Reportes de Entrenamiento';
$string['trainingsessions'] = 'Sesiones de Entrenamiento';
$string['trainingsessions:batch'] = 'Puede hacer reportes masivos';
$string['trainingsessions:downloadreports'] = 'Puede descargar documentos de reporte';
$string['trainingsessions:iscompiled'] = 'Está compilado en reportes';
$string['trainingsessionsreport'] = 'Reporte de Sesiones de Entrenamiento';
$string['trainingsessions_report_advancement'] = 'Reporte de Progreso';
$string['trainingsessions_report_connections'] = 'Reporte de Conexión';
$string['trainingsessions_report_institutions'] = 'Reporte de Institución';
$string['trainingsessionsscores'] = 'Adiciones de puntaje a reportes';
$string['trainingsessions:view'] = 'Puede ver reporte de sesión de entrenamiento';
$string['trainingsessions:viewother'] = 'Puede ver reportes de sesión de entrenamiento de otros usuarios';
$string['unvisited'] = 'No-visitado';
$string['updatefromaccountstart'] = 'Obtener a partir del primer acceso del usuario';
$string['updatefromcoursestart'] = 'Obtener del principio de curso';
$string['uploadglobals'] = 'Subidas de archivos';
$string['uploadresult'] = 'Descargar resultados en bruto';
$string['user'] = 'Por participante';
$string['userlist'] = 'Una fila por participante';
$string['usersheets'] = 'Una hoja-de-cálculo por participante';
$string['usersummary'] = 'Resumen del participante';
$string['visiteditems'] = 'Ítems visitados.';
$string['weekstartdate'] = 'Inicio de semana';
$string['workingsessions'] = 'Sesiones de trabajo:';
$string['xls'] = 'XLS';
