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
 * Strings for component 'vpl', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   vpl
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['about'] = 'Acerca de';
$string['acceptcertificates'] = 'Aceptar certificados auto-firmados';
$string['acceptcertificates_description'] = 'Si los servidores de ejecución no están usando certificados auto-firmados, desactive esta opción';
$string['acceptcertificatesnote'] = '<p>Usted está usando una conexión encriptada.<p/>
<p>Para usar una conexión encriptada con los servidores de ejecución, se necesita que Usted acepte sus certificados.</p>
<p>Si tiene problemas con este proceso, Usted puede intentar usar una conexión HTTTP (sin-encriptar) o algun otro navegador.</p>
<p>Por favor, haga click en los enlaces siguientes (servidor #) y acepte el certificado ofrecido.</p>';
$string['addfile'] = 'Añadir archivo';
$string['advanced'] = 'Avanzado';
$string['allfiles'] = 'Todos los archivos';
$string['allsubmissions'] = 'Todos los envíos';
$string['always_use_ws'] = 'Usar siempre protocolo no-encriptado websocket';
$string['always_use_wss'] = 'Usar siempre protocolo encriptado websocket';
$string['anyfile'] = 'Cualquier archivo';
$string['attemptnumber'] = 'Intento número {$a}';
$string['autodetect'] = 'Autodetectar';
$string['automaticevaluation'] = 'Evaluación automática';
$string['automaticgrading'] = 'Calificación automática';
$string['averageperiods'] = 'Periodos medios {$a}';
$string['averagetime'] = 'Tiempo medio {$a}';
$string['basedon'] = 'Basado en';
$string['basic'] = 'Básico';
$string['binaryfile'] = 'Archivo binario';
$string['browserupdate'] = 'Por favor actualiza tu navegador a la última versión<br />o utiliza algún otro que soporte Websocket.';
$string['calculate'] = 'Calcular';
$string['changesNotSaved'] = 'Los cambios no se han guardado';
$string['check_jail_servers'] = 'Revisar servidores de ejecución';
$string['check_jail_servers_help'] = '<p>Esta página revisa y muestra el estatus de los servidores de ejecución usados para esta actividad.</p>';
$string['clipboard'] = 'Portapapeles';
$string['closed'] = 'Cerrado';
$string['comments'] = 'Comentarios';
$string['compilation'] = 'Compilación';
$string['connected'] = 'conectado';
$string['connecting'] = 'conectando';
$string['connection_closed'] = 'conexión cerrada';
$string['connection_fail'] = 'conexión fallida';
$string['console'] = 'Consola';
$string['copy'] = 'Copiar';
$string['create_new_file'] = 'Crea un nuevo archivo para editar';
$string['currentstatus'] = 'Estado actual';
$string['cut'] = 'Cortar';
$string['datesubmitted'] = 'Fecha enviada';
$string['debug'] = 'Depurar';
$string['debugging'] = 'Depurando';
$string['debugscript'] = 'Script Depuración';
$string['debugscript_help'] = 'Seleccionar script depuración para usar en esta actividad';
$string['defaultexefilesize'] = 'Máximo tamaño por defecto de un archivo en ejecución';
$string['defaultexememory'] = 'Máxima memoria usada por defecto';
$string['defaultexeprocesses'] = 'Número máximo por defecto de procesos';
$string['defaultexetime'] = 'Tiempo máximo de ejecución por defecto';
$string['defaultfilesize'] = 'Tamaño máximo por defecto de cada archivo de subida';
$string['defaultresourcelimits'] = 'Límites de recursos para ejecución por defecto';
$string['delete'] = 'Borrar';
$string['deleteallsubmissions'] = 'Elimina todos los envíos';
$string['delete_file_fq'] = '¿Confirma el borrado del archivo \'{\\$a}\'?';
$string['delete_file_q'] = '¿Borrar el archivo?';
$string['depends_on_https'] = 'Use ws o wss dependiendo de si está usando http o https';
$string['description'] = 'Descripción';
$string['diff'] = 'dif';
$string['discard_submission_period'] = 'Periodo de descarte de envíos';
$string['discard_submission_period_description'] = 'Para cada estudiante y tarea, se intenta descartar envíos manteniendo la última y al menos una por cada periodo';
$string['download'] = 'Descarga';
$string['downloadallsubmissions'] = 'Descargar todos los envíos';
$string['downloadsubmissions'] = 'Descargar envíos';
$string['duedate'] = 'Fecha realización';
$string['edit'] = 'Editar';
$string['editing'] = 'Editando';
$string['editortheme'] = 'Tema editor';
$string['evaluate'] = 'Evaluar';
$string['evaluateonsubmission'] = 'Evaluar al enviar';
$string['evaluating'] = 'Evaluando';
$string['evaluation'] = 'Evaluación';
$string['examples'] = 'Ejemplos';
$string['execution'] = 'Ejecución';
$string['executionfiles'] = 'Archivos para la ejecución';
$string['executionfiles_help'] = '<h2>Introducción</h2>
<p>Aquí se establecen los archivos necesarios para la ejecución, depurado o evaluación de una entrega.
Esto incluye archivos script, programas de prueba y archivos de datos.</p>
<h2>Script por omisión para ejecutar o depurar</h2>
<p>Si no se establecen los script de ejecución o depuración,
el sistema deduce el lenguaje empleado atendiendo a la extensión de los archivos entregados
para usar un script predefinidos. La siguiente tabla muestra los lenguajes soportados, las extensiones de archivos usadas, los script disponibles, el compilador/interprete y depurador usado
por este y finalmente un comentario sobre uso del lenguaje.</p>
<table>
<tr><th>Lenguaje</th>
<th>Exten-siones</th>
<th>Ejecutar</th>
<th>Depurar</th>
<th>Compilador/ intérprete<br>depurador</th>
<th>Comentario</th>
</tr>
<tr>
<td>Ada</td><td>ada, adb, ads</td><td>X</td><td>X</td><td>gnat (Ada 2005)/gdb</td><td>Usa primer archivo como principal</td>
</tr>
<tr>
<td>C</td><td>c</td><td>X</td><td>X</td><td>gcc C99/gdb</td><td>Compila todos los archivos fuente</td>
</tr>
<tr>
<td>C++</td><td>cpp, C</td><td>X</td><td>X</td><td>g++/gdb</td><td>Compila todos los archivos fuente</td>
</tr>
<tr>
<td>C#</td><td>cs</td><td>X</td><td>X</td><td>gmcs+mono/mdb</td><td>Compila todos los archivos fuente</td>
</tr>
<tr>
<td>Fortran</td><td>f, f77</td><td>X</td><td>X</td><td>gfortran/gdb</td><td>Compila todos los archivos fuente</td>
</tr>
<tr>
<td>Haskell</td><td>hs</td><td>X</td><td></td><td>hugs</td><td>Ejecuta primer archivo </td>
</tr>
<tr>
<td>Java</td><td>java</td><td>X</td><td>X</td><td>javac+java/jdb</td><td>Compila todos los archivos fuente.<br />Localiza la clase con main</td>
</tr>
<tr>
<td>Matlab/Octave</td><td>m</td><td>X</td><td>-</td><td>matlab, octave</td><td>Ejecuta el primer archivo .<br>Use vpl_replot después de dibujar..</td>
</tr>
<tr>
<td>Pascal</td><td>pas, p</td><td>X</td><td>X</td><td>fpc o gpc/gdb</td><td>Compila el primer archivo (fpc) o compila todos los archivos fuente.(gpc)</td>
</tr>
<tr>
<td>Perl</td><td>perl, prl</td><td>X</td><td>X</td><td>perl</td><td>Ejecuta primer archivo .</td>
</tr>
<tr>
<td>PHP</td><td>php</td><td>X</td><td>-</td><td>php5</td><td>Ejecuta primer archivo </td>
</tr>
<tr>
<td>Prolog</td><td>pl, pro</td><td>X</td><td>-</td><td>swipl</td><td>Ejecuta primer archivo </td>
</tr>
<tr>
<td>Python</td><td>py</td><td>X</td><td>X</td><td>python</td><td>Ejecuta primer archivo </td>
</tr>
<tr>
<td>Ruby</td><td>rb</td><td>X</td><td>X</td><td>ruby</td><td>Ejecuta primer archivo </td>
</tr>
<tr>
<td>Scheme</td><td>scm, s</td><td>X</td><td>-</td><td>mzscheme</td><td>Ejecuta primer archivo </td>
</tr>
<tr>
<td>Shell script</td><td>sh</td><td>X</td><td>-</td><td>bash</td><td>Ejecuta primer archivo </td>
</tr>
<tr>
<td>SQL</td><td>sql</td><td>X</td><td>-</td><td>sqlite3</td><td>Ejecuta todos los  archivos fuente.<br />Primero los establecidos en archivos de ejecución</td>
</tr>
<tr>
<td>VHDL</td><td>vhd, vhdl</td><td>X</td><td>-</td><td>ghdl</td><td>Compila todos los archivos fuente, el primero debe tener el método Main.</td>
</tr>
</table>
<h2>Evaluación automática</h2>
<p>Si quiere usar las características de evaluación automática de programas de VPL debe rellenar el archivo "vpl_evaluate.cases".
Este archivo tiene el siguiente formato:</p>
<ul>
<li>"<b>case</b> = Descripción del caso": Optional. Establece el inicio de un caso de prueba.</li>
<li>"<b>input</b> = texto": puede ocupar varias líneas. Finaliza cuando se introduce otra instrucción.</li>
<li>"<b>output</b> = texto": puede ocupar varias líneas.  Finaliza con otra instrucción. Un caso de prueba puede tener varias salidas válidas. Existen tres tipos de salidas: sólo números, texto y texto exacto:
 <ul>
 <li><b>números</b>: Se escriben sólo números. Solo se comprueban los número de la salida, el resto del texto es ignorado. Los números reales se comprueban con cierta tolerancia</li>
 <li><b>texto</b>: Sólo se comprueban palabras, la comparación es insensible a mayúsculas y se ignora el resto de los caracteres.</li>
 <li><b>texto exacto</b>: El texto se escribe entre comillas dobles.</li>
 </ul>
 </li>
<li>"<b>grade reduction</b> = [valor|porcentaje%]" : Por defecto cuando se produce un error se descuenta de la nota máxima  (rango_nota/número de casos)
 pero con esta instrucción se puede cambiar el descuento por otro valor o porcentaje.
</li>
 </ul>
<h2>Uso general</h2>
<p>Aquí se establecen los archivos necesarios para preparar la ejecución, depuración o evaluación de una entrega. Esto incluye archivos de script, archivos de pruebas de programas y archivos de datos.</p>
<p>Se puede añadir un nuevo archivo escribiendo su nombre en la caja "Añadir archivo " y pulsando luego el botón "Añadir archivo".</p>
<p>Se puede cargar un archivo existente usando el control "Cargar archivo".</p>
<p>Todos los archivos que se añadan o se cargen pueden ser editados, y todos, excepto los archivos de script mencionados a continuación, pueden renombrarse o eliminarse.</p>
<p>Deben existir tres archivos de script para preparar cada una de las tres posibles acciones. Estos archivos tienen nombres predefinidos: <b>vpl_run.sh</b> (ejecución), <b>vpl_debug.sh</b>, (depuración) y <b>vpl_evaluate.sh</b>, (evaluación)</p>
<p>La ejecución de cualquiera de estos guiones debe generar un archivo denominado <b>vpl_execution</b>. Este archivo debe contener código binario ejecutable, o un script que comience por ""#!/bin/sh". La no generación de este archivo imposibilita ejecutar la acción seleccionada.</p>
<p>Si la actividad se basa en otra, los archivos de la actividad base se añaden automáticamente. Los contenidos de los archivos vpl_run.sh, vpl_debug.sh y vpl_evaluate.sh se concatenan para toda la cadena de actividades en la que se base la presente</p>
<p>Finalmente, se añade el archivo <b>vpl_environment.sh</b>, que contiene información sobre la entrega, la cual se suministra mediante variables de entorno:</p>
<ul><li>LANG: el lenguaje empleado.</li>
<li>LC_ALL: el mismo valor que LANG.</li>
<li>VPL_MAXTIME: tiempo máximo de ejecución en segundos.</li>
<li>VPL_FILEBASEURL: URL para acceder a los archivos del curso.</li>
<li>VPL_SUBFILE#: cada nombre de los archivos entregados por el alumno. # va de 0 a número de archivos entregados.</li>
<li>VPL_SUBFILES: lista de todos los archivos entregados.</li>
<li>VPL_VARIATION+id: donde id es el orden de variación comenzando por 0 y el valor es el valor de la variación.<br></li>
</ul>
Si la acción solicitada es "evaluación" se añaden las siguientes variables:
<ul>
	<li>VPL_MAXTIME: máximo tiempo de ejecución en segundos.</li>
	<li>VPL_MAXMEMORY: máxima memoria usable en byte.</li>
	<li>VPL_MAXFILESIZE: tamaño máximo en bytes de un archivo.</li>
	<li>VPL_MAXPROCESSES: número máximo de procesos que pueden ejecutarse simultaneamente.</li>
	<Li>VPL_FILEBASEURL: URL a archivos del curso.</Li>
	<li>VPL_GRADEMIN: minimo nota para esta actividad.</li>
	<li>VPL_GRADEMAX: máxima nota para esta actividad.</li>
</ul>

<h2>Códigos de resultado de evaluación</h2>
<p>La salida de la evaluación es procesada para extraer, si es posible, comentarios sobre la evaluación y la nota propuesta.
Los comentarios se pueden establecer de dos formas: con un comentario de línea definido con una línea que comienza por \'Comment :=>>\' o
con comentarios de bloques que comienza con una línea que contiene únicamente \'<|--\' y termina en una línea que contiene únicamente \'--|>\'.
La calificación se toma de la última línea que comienze por \'Grade :=>>\'.
</p>';
$string['executionoptions'] = 'Opciones de ejecución';
$string['executionoptions_help'] = '<p>En esta página se establecen diferentes opciones de ejecución</p>
<ul>
<li><b>Basado en</b>: permite establecer otra instanción VPL de la que se toman diversas caracteristicas:
<ul><li>Archivos de ejecución (los guiones predefinidos se concatenan)</li>
<li>Límites de los recursos de ejecución.</li>
<li>Variaciones, que se concatenan generando variaciones múltiples.</li>
<li>Tamaño máximo de cada archivo a subir</li>
</ul>
</li>
<li><b>Ejecutar, Depurar y Evaluar</b>: establecen si se puede usar la opción correspondiente durante la edición de la entrega. Esto sólo afecta a los estudiantes, los usuarios con capacidad de calificación pueden usar estas opciones en cualquier caso.</li>
<li><b>Evaluar al entregar</b>: al subir los archivos se produce el proceso de evaluación automáticamente.</li>
<li><b>Calificación automática</b>: si el resultado de la evaluación contiene códigos de nota automática estos se toman como nota definitiva.</li>
</ul>';
$string['file'] = 'Archivo';
$string['fileadded'] = 'El archivo \'{\\$a}\' ha sido añadido';
$string['filedeleted'] = 'El archivo \'{\\$a}\' ha sido borrado';
$string['filelist'] = 'Lista de archivos';
$string['file_name'] = 'Nombre del archivo';
$string['filenotadded'] = 'Archivo no añadido';
$string['fileNotChanged'] = 'Archivo no modificado';
$string['filenotdeleted'] = 'El archivo \'{$a}\' NO ha sido borrado';
$string['filenotrenamed'] = 'El archivo \'{$a}\' NO ha sido renombrado';
$string['filerenamed'] = 'El archivo \'{\\$a->from}\' ha sido renombrado a \'{\\$a->to}\'';
$string['filesChangedNotSaved'] = 'Archivos modificados pero no guardados';
$string['filesNotChanged'] = 'Archivos no modificados';
$string['filestoscan'] = 'Archivos a procesar';
$string['fileupdated'] = 'El archivo \'{\\$a}\' ha sido actualizado';
$string['finalreduction'] = 'Reducción final';
$string['finalreduction_help'] = '<b>FR [NE/FE R]</b><br>
<b>FR</b> Reducción de calificación final.<br>
<b>NE</b> Evaluaciones automáticas solicitadas por el estudiante.<br>
<b>FE</b> Evaluaciones libres permitidas.<br>
<b>R</b> Reducción de calificación por evaluación.Si fuera un porcentaje, se aplica sobre del resultado anterior.<br>';
$string['find'] = 'Encontrar';
$string['find_replace'] = 'Encontrar/Reemplazar';
$string['freeevaluations'] = 'Evaluaciones libres';
$string['freeevaluations_help'] = 'Número de evaluaciones automáticas que no reducen el puntaje final';
$string['fulldescription'] = 'Descripción completa';
$string['fulldescription_help'] = '<p>Usted debe escribir aquí una descripción completa para la actividad.</p>
<p>Si Usted no escribe nada aquí, en su lugar se mostrará la descripción corta.</p>
<p>Si Usted quiere eevaluar automáticamente, las interfaces para als tareas denben de ser detalladas y no-ambiguas.</p>';
$string['fullscreen'] = 'Pantalla completa';
$string['getjails'] = 'Obtener servidores de ejecución';
$string['gradeandnext'] = 'Calificar y siguiente';
$string['graded'] = 'Calificado';
$string['gradedbyuser'] = 'Calificado por el usuario';
$string['gradedon'] = 'Evaluado en';
$string['gradedonby'] = 'Revisado en {$a->date} by {$a->gradername}';
$string['gradenotremoved'] = 'La calificación NO ha sido quitada. Revise la configuración de la actividad en el Libro de Calificaciones.';
$string['gradenotsaved'] = 'La calificación NO ha sido guardada. Revise la configuración de la actividad en el Libro de Calificaciones.';
$string['gradeoptions'] = 'Opciones de calificación';
$string['grader'] = 'Evaluador';
$string['gradercomments'] = 'Reporte de la evaluación';
$string['graderemoved'] = 'La calificación ha sido quitada';
$string['groupwork'] = 'Trabajo en equipo';
$string['inconsistentgroup'] = 'Usted no es miembro de solamente un grupo  (0 o >1)';
$string['incorrect_file_name'] = 'Nombre de archivo incorrecto';
$string['individualwork'] = 'Trabajo individual';
$string['instanceselection'] = 'Selección VPL';
$string['isexample'] = 'Esta actividad actúa como ejemplo';
$string['jail_servers'] = 'Lista de servidores de ejecución';
$string['jail_servers_config'] = 'Configuración de servidores de ejecución';
$string['jail_servers_description'] = 'Escriba una línea para cada servidor';
$string['joinedfiles'] = 'Archivos seleccionados unidos';
$string['keepfiles'] = 'Archivos a mantener mientras se ejecuta';
$string['keepfiles_help'] = '<p>Por razones de seguridad, los archivos añadidos en "Archivosde ejecución", se borran  antes de ejecutar el archivo vpl_execution.</p>
<p>Si es necesario que alguno de estos archivos permanezca en la fase de ejecución,
por ejemplo, para usarlo como datos de entrada de las pruebas, márquelos en esta página</p>';
$string['keyboard'] = 'Teclado';
$string['lasterror'] = 'Información sobre el último error';
$string['lasterrordate'] = 'Fecha del último error';
$string['listofcomments'] = 'Lista de comentarios';
$string['listsimilarity'] = 'Lista de similitudes encontradas';
$string['listwatermarks'] = 'Lista de marcas de agua';
$string['load'] = 'Cargar';
$string['loading'] = 'Cargando';
$string['local_jail_servers'] = 'Servidores de ejecución locales';
$string['local_jail_servers_help'] = '<p>Aquí se establecen los servidores de ejecución locales para esta actividad y las que se basen en ella.</p>
<p>Escriba una la URL completa de servidor en cada línea. Se pueden introducir líneas en blanco y comentarios comenzando la línea por "#".</p>
<p>Si se quiere impedir que esta actividad y las que se basen en ella no use los servidores especificados en las actividades derivadas ni
los especificados globalmente, añada al final una línea que contenga "end_of_jails".
</p>';
$string['manualgrading'] = 'Calificación manual';
$string['maxexefilesize'] = 'Máximo tamaño de un archivo en ejecución';
$string['maxexememory'] = 'Máxima memoria usada';
$string['maxexeprocesses'] = 'Máximo número de procesos';
$string['maxexetime'] = 'Tiempo máximo de ejecución';
$string['maxfiles'] = 'Número máximo de archivos';
$string['maxfilesexceeded'] = 'Superado el número máximo de archivos';
$string['maxfilesize'] = 'Tamaño máximo de cada archivo de subida';
$string['maxfilesizeexceeded'] = 'Superado el tamaño máximo de los archivos';
$string['maximumperiod'] = 'Período máximo {$a}';
$string['maxresourcelimits'] = 'Límites de recursos de ejecución máximos';
$string['maxsimilarityoutput'] = 'Máxima salida por similaridad';
$string['menucheck_jail_servers'] = 'Revisar servidores de ejecución';
$string['menuexecutionfiles'] = 'Archivos ejecución';
$string['menuexecutionoptions'] = 'Opciones';
$string['menukeepfiles'] = 'Archivos a mantener';
$string['menulocal_jail_servers'] = 'Servidores locales de ejecución';
$string['menuresourcelimits'] = 'Límites de recursos';
$string['minsimlevel'] = 'Nínel de similaridad mínimo a mostrar';
$string['moduleconfigtitle'] = 'Configuración del Módulo VPL';
$string['modulename'] = 'Laboratorio de Programación Virtual';
$string['modulename_help'] = '<p>VPL permite la gestión de prácticas de programación teniendo como características más destacadas:
<ul>
<li>Posibilidad de editar el código fuente en el navegador.</li>
<li>Posibilidad de ejecutar las prácticas de forma interactiva desde el navegador.</li>
<li>Posibilidad de ejecutar pruebas que revisen las prácticas.</li>
<li>Búsqueda de similitud entre prácticas para el control del plagio.</li>
<li>Restricciones de entrega de prácticas que limitan el corta y pega de código externo.</li>
</ul></p>
<p><a href="http://vpl.dis.ulpgc.es">Página oficial de Virtual Programming lab</a></p>';
$string['modulename_link'] = 'mod/vpl/view';
$string['modulenameplural'] = 'Laboratorios de Programación Virtuales';
$string['multidelete'] = 'Eliminación múltiple';
$string['nevaluations'] = '{$a} evaluaciones automáticas hechas';
$string['new'] = 'Nuevo';
$string['new_file_name'] = 'Nombre del archivo nuevo';
$string['next'] = 'Siguiente';
$string['nojailavailable'] = 'No hay servidor de ejecución disponible';
$string['noright'] = 'Usted no tiene derechos para acceder';
$string['nosubmission'] = 'Sin envío disponible';
$string['notexecuted'] = 'No ejecutado';
$string['notgraded'] = 'No calificado';
$string['notsaved'] = 'No guardado';
$string['novpls'] = 'Sin laboratorio virtual de programación definido';
$string['nowatermark'] = 'Sellos-de-agua propios {$a}';
$string['nsubmissions'] = '{$a} entregas';
$string['numcluster'] = 'Cluster {$a}';
$string['open'] = 'Abierto';
$string['opnotallowfromclient'] = 'Acción no permitida desde esta máquina';
$string['options'] = 'Opciones';
$string['optionsnotsaved'] = 'Las opciones no han sido guardadas';
$string['optionssaved'] = 'Las opciones han sido guardadas';
$string['origin'] = 'Orígen';
$string['othersources'] = 'Otras fuentes a añadir en el escaneo';
$string['outofmemory'] = 'Memoria agotada';
$string['paste'] = 'Pegar';
$string['pluginadministration'] = 'Administración VPL';
$string['pluginname'] = 'Laboratorio Virtual de Programación';
$string['previoussubmissionslist'] = 'Lista de envíos previos';
$string['print'] = 'Imprimir';
$string['proposedgrade'] = 'Calificación propuesta: {$a}';
$string['proxy'] = 'proxy';
$string['proxy_description'] = 'Proxy desde Moodle a servidores de ejecución.';
$string['redo'] = 'Re-hacer';
$string['reductionbyevaluation'] = 'Reducción por evaluación automática';
$string['reductionbyevaluation_help'] = 'Reducir puntaje final por un valor o porcentaje para cada evaluación automática solicitadad por el estudiante';
$string['regularscreen'] = 'Pantalla regular';
$string['removegrade'] = 'Quitar califdicación';
$string['rename'] = 'Renombrar';
$string['rename_file'] = 'Renombrar archivo';
$string['replace_find'] = 'Remplazar/Buscar';
$string['requestedfiles'] = 'Archivos requeridos';
$string['requestedfiles_help'] = '<p>Aquí se fijan nombres y contenido inicial para los archivos requeridos.</p>
<p>Si no se fijan nombres para el número máximo de archivos establecido en la definición básica de la actividad, los archivos para los que no se han establecido nombres son opcionales y pueden tener cualquier nombre.</p>
<p>Además, se pueden establecer contenidos para los archivos requeridos, de forma que dichos contenidos estarán disponibles la primera vez que el archivo se abra usando el editor, si no se ha realizado una entrega previa.</p>';
$string['requirednet'] = 'Permitir envíos desde red';
$string['requiredpassword'] = 'Se necesita contraseña';
$string['resetfiles'] = 'Reestablecer archivos';
$string['resetvpl'] = 'Re-iniciar {$a}';
$string['resourcelimits'] = 'Límites de Recursos';
$string['resourcelimits_help'] = '<p>Se pueden establecer límites máximos para el tiempo de ejecución, la memoria usada, el tamaño de los archivos generados durante la ejecución y el número de procesos simultáneos.</p>
<p>Estos límites se aplican al ejecutar los archivos de script  vpl_run.sh, vpl_debug.sh y vpl_evaluate.sh, y el archivo vpl_execution generado por ellos.</p>
<p>Si la actividad está basada en otra, los límites establecidos se pueden ver restringidos por los establecidos en aquella y otras en la que la misma se base, además de por los establecidos en la configuración global del módulo.</p>';
$string['restrictededitor'] = 'Deshabilitar subida de archivos externos, pegar y soltar contenido externo';
$string['retrieve'] = 'Buscar resultados';
$string['run'] = 'Correr';
$string['running'] = 'Ejecutando';
$string['runscript'] = 'Script Correr';
$string['runscript_help'] = 'Seleccionar el script a correr para usar en esta actividad';
$string['save'] = 'Guardar';
$string['savecontinue'] = 'Guardar y continuar';
$string['saved'] = 'Guardado';
$string['savedfile'] = 'El archivo \'{\\$a}\' ha sido guardado';
$string['saveoptions'] = 'guardar opciones';
$string['saving'] = 'Guardando';
$string['scanactivity'] = 'Actividad';
$string['scandirectory'] = 'Directorio';
$string['scanningdir'] = 'Escaneando directorio ...';
$string['scanoptions'] = 'Opciones de escaneado';
$string['scanother'] = 'Escanear similitudes en fuentes añadidas';
$string['scanzipfile'] = 'Archivo ZIP';
$string['sebkeys'] = 'Claves de examen de Navegador de Examen Seguro';
$string['sebkeys_help'] = 'Claves de examen de Navegador de Examen Seguro (máx 3) obtenidas del archivo .seb <br>Esto es más confiable que la mera revisión del navegador.<br>https://safeexambrowser.org';
$string['sebrequired'] = 'Se requiere Navegador de Examen Seguro';
$string['sebrequired_help'] = 'Se requiere Navegador de Examen Seguro configurado apropiadamente';
$string['select_all'] = 'Seleccionar todo';
$string['server'] = 'Servidor';
$string['serverexecutionerror'] = 'Error de ejecución del servidor';
$string['shortcuts'] = 'Atajos de teclado';
$string['shortdescription'] = 'Descripción corta';
$string['similarity'] = 'Similitud';
$string['similarto'] = 'Similar';
$string['startdate'] = 'Disponible desde';
$string['submission'] = 'Envío';
$string['submissionperiod'] = 'Plazo de envío';
$string['submissionrestrictions'] = 'Restricciones de los envíos';
$string['submissions'] = 'Envíos';
$string['submissionselection'] = 'Selección del envío';
$string['submissionslist'] = 'Lista de envío';
$string['submissionview'] = 'Vista de envío';
$string['submittedby'] = 'Enviado por {$a}';
$string['submittedon'] = 'Enviado en';
$string['submittedonp'] = 'Enviado en {$a}';
$string['sureresetfiles'] = '¿Quiere perder todo su trabajo y reestablecer los archivos a su estado original?';
$string['test'] = 'Probar actividad';
$string['testcases'] = 'Probar casos';
$string['testcases_help'] = '<p>Para usar las caracteristicas de evaluación automática de programas de VPL debe rellenar el archivo "vpl_evaluate.cases".
Este archivo tiene el siguiente formato:
<ul>
<li>"<b>case</b> = Descripción del caso": Optional. Establece el inicio de un caso de prueba.</li>
<li>"<b>input</b> = texto": puede ocupar varias líneas. Finaliza cuando se introduce otra instrucción.</li>
<li>"<b>output</b> = texto": puede ocupar varias líneas.  Finaliza con otra instrucción. Un caso de prueba puede tener varias salidas válidas. Existen tres tipos de salidas: sólo números, texto y texto exacto:
 <ul>
 <li><b>números</b>: Se escriben sólo números. Solo se comprueban los número de la salida, el resto del texto es ignorado. Los números reales se comprueban con cierta tolerancia</li>
 <li><b>texto</b>: Sólo se comprueban palabras, la comparación es insensible a mayúsculas y se ignara el resto de los caracteres.</li>
 <li><b>texto exacto</b>: El texto se escribe entre comillas dobles.</li>
 </ul>
 </li>
<li>"<b>grade reduction</b> = [valor|porcentaje%]" : Por defecto cuando se produce un error se descuenta de la nota máxima  (rango_nota/número de casos)
 pero con esta instrucción se puede cambiar el descuento por otro valor o porcentaje.
</li>
</ul>';
$string['timeleft'] = 'Tiempo restante';
$string['timelimited'] = 'Tiempo limitado';
$string['timeout'] = 'Tiempo agotado';
$string['timeunlimited'] = 'Tiempo ilimitado';
$string['totalnumberoferrors'] = 'Errores';
$string['undo'] = 'Deshacer';
$string['unexpected_file_name'] = 'Nombre de archivo incorrecto: se esperaba \'{\\$a->expected}\' y se encontro \'{\\$a->found}\'';
$string['unzipping'] = 'Descomprimiendo ...';
$string['uploadfile'] = 'Cargar archivo';
$string['usevariations'] = 'Usar variaciones';
$string['usewatermarks'] = 'Usar sellos-de-agua';
$string['usewatermarks_description'] = 'Añade marcas de agua a los archivos de los estudiantes (sólo en lenguajes soportados)';
$string['variation'] = 'Variación {$a}';
$string['variation_options'] = 'Opciones de variación';
$string['variations'] = 'Variaciones';
$string['variations_help'] = '<p>Se pueden definir variaciones para las actividades. Las variaciones se asignan de forma aleatoria a los estudiantes.</p>
<p>En esta página se puede indicar si la actividad tiene variaciones, dar un título al conjunto de variaciones, y añadir las variaciones deseadas.</p>
<p>Cada variación tiene un código de identificación y una descripción. El identificador se usa en el archivo <b>vpl_enviroment.sh</b> para pasar la
variación asignada al estudiante a los scripts. La descripción, con formato HTML, se muestra a los estudiantes a los que ha sido asignada la variación
correspondiente.</p>';
$string['variations_unused'] = 'Esta actividad tiene variaciones, pero están deshabilitadas';
$string['variationtitle'] = 'Título de variación';
$string['varidentification'] = 'Identificación';
$string['visiblegrade'] = 'Visible';
$string['vpl'] = 'Laboratorio Virtual de Programación (Virtual Programming Lab)';
$string['vpl:addinstance'] = 'Añadir nuevas instancias VPL';
$string['VPL_COMPILATIONFAILED'] = 'Ha fallado la compilación o preparación de ejecución';
$string['vpl_debug.sh'] = 'Este script prepara el depurado (debugging)';
$string['vpl_evaluate.cases'] = 'Casios de prueba para evaluación';
$string['vpl_evaluate.sh'] = 'Este script prepara la evaluación';
$string['vpl:grade'] = 'Asignación de calificación VPL';
$string['vpl:manage'] = 'Gestionar tarea VPL';
$string['vpl_run.sh'] = 'Este script prepara la ejecución';
$string['vpl:setjails'] = 'Configurar servidores de ejecución para instancias VPL particulares';
$string['vpl:similarity'] = 'Buscar similitud de tarea VPL';
$string['vpl:submit'] = 'Enviar tarea VPL';
$string['vpl:view'] = 'Ver descripción completa tarea VPL';
$string['websocket_protocol'] = 'Protocolo WebSocket';
$string['websocket_protocol_description'] = 'Tipo de protocolo WebSocket (ws:// o wss://) usado por el navegador para conectarse a los servidores de ejecuición.';
$string['workingperiods'] = 'Períodos de trabajo';
$string['worktype'] = 'Tipo de trabajo';
