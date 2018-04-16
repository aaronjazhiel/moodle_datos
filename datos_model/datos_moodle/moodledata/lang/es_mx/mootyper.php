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
 * Strings for component 'mootyper', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   mootyper
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allstring'] = 'Todos';
$string['average'] = 'Promedio';
$string['bymootyper'] = 'por ejercicio';
$string['byuser'] = 'por usuario';
$string['cancel'] = 'Cancelar';
$string['charttitleallgrades'] = 'Todas las calificaciones';
$string['charttitlemyowngrades'] = 'Mis Propias Calificaciones';
$string['chere'] = 'Elija aquí para empezar';
$string['closebeforeopen'] = 'No se pudo actualizar el MooTyper. Usted ha especificado una fecha de cierre anterior a la fecha de apertura.';
$string['configdateformat'] = 'Esto define como se muestran las fechas en reportes de calificación. El valor por defecto, "M d, Y G:i" es Mes, día, año y formato del tiempo de 24 horas. Refiérase al manual de PHP para más ejemplos y constantes de fechas predefinidas.';
$string['configpassword_desc'] = 'Si es que se necesita o no una contraseña para acceder a la lección.';
$string['configrequirepassword'] = 'Configurar contraseña';
$string['configtimelimit_desc'] = 'Si se configura un límite de tiempo, se muestra una advertencia al principio de la lección y hay un cronómetro descendiente. Si se configura a cero, entonces no hay límite de tiempo.';
$string['continue'] = 'Continuar';
$string['continuoustype'] = 'Teclear contínuamente';
$string['continuoustype_help'] = 'Si se habilita, un caracter mal tecleado no necesita ser corregido.';
$string['countmistypedspaces'] = 'Contar espacios mal tecleados';
$string['countmistypedspaces_help'] = 'Si se habilita, un espacio mal tecleado es contado como un error.';
$string['course_exercises_viewed'] = 'Ejercicios vistos';
$string['csvexport'] = 'Exportar a .CSV';
$string['dateformat'] = 'Formato por defecto de fecha';
$string['defaultlayout'] = 'Disposición del teclado por defecto';
$string['defaultprecision'] = 'Precisión al teclear por defecto %';
$string['eaccess0'] = 'Cualquier maestro';
$string['eaccess1'] = 'Maestro dentro de este curso';
$string['eaccess2'] = 'Solamente yo';
$string['eaddnew'] = 'Añadir nuevo ejercicio / categoría';
$string['editable'] = 'Puede editar';
$string['editexercises'] = 'Exportar / editar ejercicios';
$string['eeditlabel'] = 'Editar';
$string['eheading'] = 'Gestionar ejercicios MooTyper';
$string['emanage'] = 'Para gestionar ejercicios y categorías elija aquí';
$string['emptypassword'] = 'La contraseña no puede estar vacía';
$string['ename'] = 'Título del ejercicio';
$string['endlesson'] = 'Fin de la categoría / lección';
$string['enterpassword'] = 'Por favor escriba la contraseña:';
$string['eremove'] = 'Remover';
$string['etext'] = 'Texto';
$string['etitle'] = 'Ejercicios MooTyper';
$string['eventlessonexport'] = 'Lección exportada';
$string['examdone'] = 'El examen ya fue tomado.';
$string['excategory'] = 'Categoría de ejercicios';
$string['excategory_help'] = 'Elija un nombre de Lección a usar en este MooTyper';
$string['exercise'] = 'Ejercicio {$a} de';
$string['exercise_added'] = 'Ejercicio / categoría añadido';
$string['exercise_edited'] = 'Ejercicio editado';
$string['exercise_removed'] = 'Se quitó un ejercicio';
$string['export'] = 'Exportar :';
$string['exportconfirm'] = 'Confirmar que quiere exportar';
$string['failbgc_colour'] = '#FF6C6C';
$string['failbgc_descr'] = 'Esto configura el color del fondo para una calificación reprobatoria.';
$string['failbgc_title'] = 'Color del fondo para una calificación reprobatoria';
$string['fconfirm'] = 'Confirmar';
$string['fcontinue'] = 'Continuar';
$string['fexercise'] = 'Ejercicio';
$string['flesson'] = 'Lección';
$string['fmode'] = 'Modo';
$string['fmode_help'] = 'El modo de lección presentará cada ejercicio en una Lección/Categoría hasta que todos sean completados. El modo examen mostrará solamente el ejercicio seleccionado para el examen. Una vez que Usted haga click en Guardar y mostrar, Usted no podrá cambiar el modo.';
$string['fnewexercise'] = 'Ejercicio será parte de';
$string['fnewlesson'] = 'crear nueva lección/categoría';
$string['fsecurity'] = 'Seguridad';
$string['fsettings'] = 'Configuraciones';
$string['fsetup'] = 'Configuración';
$string['fullhits'] = 'Todos los aciertos';
$string['grade_removed'] = 'Se quitó una calificación';
$string['gradesfilename'] = 'grades.csv';
$string['gviewmode'] = 'Vista';
$string['hitsperminute'] = 'Aciertos/minuto';
$string['invalidaccess'] = 'Usted no tiene permiso para ver esta página.';
$string['isexamtext'] = 'Examen';
$string['kblimportadd'] = 'la distribución del teclado fua añadida exitosamente a la base de datos.';
$string['kblimportnotadd'] = 'la distribución del teclado ya estaba en la base de datos. Nada por hacer.';
$string['keybdbgc'] = 'Color del fondo del teclado';
$string['keybdbgc_help'] = 'Esto configura el color del fondo alrededor de las teclas del teclado. Usted puede ingresar un color HEXadecimal o el nombre de un color (en idioma inglés), como por ejemplo #95fc89 o green.';
$string['keyboardbgc_colour'] = '#DDDDDD';
$string['keyboardbgc_descr'] = 'Esto configura el color del fondo alrededor de las teclas del taclado.';
$string['keyboardbgc_title'] = 'Color del fondo del teclado';
$string['keytopbgc'] = 'Color superior de tecla';
$string['keytopbgc_help'] = 'Esto configura el color del la parte superior de las teclas excepto de la fila inicial. Usted puede ingresar un color HEXadecimal o el nombre de un color (en idioma inglés), como por ejemplo #95fc89 o green.';
$string['layout'] = 'Disposición del teclado';
$string['layout_help'] = 'Usted puede seleccionar una disposición del teclado a mostrar cuando se configura a \'Si\' la opción para Mostrar teclado.';
$string['layout_imported'] = 'Distribución del teclado importada';
$string['lesson_export'] = 'Configuración de exportación de lección';
$string['lesson_exported'] = 'Lección / categoría exportada';
$string['lesson_export_filename'] = 'Nombre del archivo de exportación de lección';
$string['lesson_export_filenameconfig'] = 'Añadir GMT (hora de Greenwich) como parte de nombres de archivos de lecciones, para un sistema simple de manejo de versiones.';
$string['lesson_imported'] = 'Lección / categoría importada';
$string['lesson_removed'] = 'Se quitó una lección y su ejercicio';
$string['loginfail'] = 'Falló el ingreso, por favor inténtelo nuevamente...';
$string['lsnimport'] = 'Importar lección / diseño del teclado';
$string['lsnimportadd'] = 'fue añadido exitosamente a la BasedeDatos.';
$string['lsnimportnotadd'] = 'ya estaba en la BasedeDatos. Nada que hacer.';
$string['lsnname'] = 'nombre de categoría';
$string['modulename'] = 'MooTyper';
$string['modulename_help'] = 'El módulo MooTyper nos permite aprender cómo mecanografiar';
$string['modulenameplural'] = 'MooTypers';
$string['mootyper'] = 'mootyper';
$string['mootyper:addinstance'] = 'Añadir instancia';
$string['mootyper:aftersetup'] = 'Después de la configuración';
$string['mootyperclosed'] = 'Este MooTyper se cerró en {$a}.';
$string['mootyperclosetime'] = 'Hora de cierre';
$string['mootyper:editall'] = 'Editar todo';
$string['mootyperfieldset'] = 'Conjuntodecampos de ejemplo personalizado';
$string['mootypername'] = 'Título de prueba';
$string['mootypername_help'] = 'Debido a la variedad de lecciones y ejercicios que Usted puede tener, el nombre debería de dejar claro para cual examen o lección MooTyper está configurada esta actividad. Se soporta la sintaxis Markdown.';
$string['mootyperopen'] = 'Este MooTyper se abrirá en {$a}.';
$string['mootyperopentime'] = 'Hora de apertura';
$string['mootyper:setup'] = 'Configuración';
$string['mootyper:view'] = 'Vista';
$string['mootyper:viewgrades'] = 'Ver todas las calificaciones';
$string['mootyper:viewmygrades'] = 'Ver mis calificaciones';
$string['nogrades'] = 'Aun sin calificaciones...';
$string['normalkeytops_colour'] = '#CCCCCC';
$string['normalkeytops_descr'] = 'Esto configura el color de la parte superior de las teclas excepto de la fila inicial.';
$string['normalkeytops_title'] = 'Color de la parte superior de tecla';
$string['notavailable'] = '<b>¡ Actualmente no-disponible !<br></b>';
$string['noteditablebyme'] = 'No editable por mí.';
$string['notreadyyet'] = 'Todavía no está listo... por favor inténtelo de nuevo después.';
$string['options'] = 'Opciones';
$string['overview'] = 'Vista general';
$string['overview_help'] = 'MooTyper es una actividad para aprender a teclear usando un teclado de computadora.  Están incluidas algunas lecciones con múltiples ejercicios y los profesores, mánagers y administradores pueden añadir más. Las lecciones pueden descargarse para respaldo o transferencia a otros usuarios Moodle. Las lecciones también puede subirse para aumentar las ya instaladas.';
$string['passbgc_colour'] = '#7FEF6C';
$string['passbgc_descr'] = 'Esto configura el color del fondo para una calificación aprobatoria.';
$string['passbgc_title'] = 'Color del fondo de calificación aprobatoria';
$string['password'] = 'Contraseña';
$string['passwordprotectedlesson'] = '{$a} es una actividad MooTyper protegida por contraseña.';
$string['pluginadministration'] = 'Administración de MooTyper';
$string['pluginname'] = 'MoooTyper';
$string['precision'] = 'Precisión';
$string['removeall'] = 'Quitar a todos de :';
$string['removeexconfirm'] = 'Confirmar que Usted está a punto de quitar un ejercicio de';
$string['removelsnconfirm'] = 'Confirmar que Usted está a punto de quitar completamente :';
$string['reqfield'] = 'Campo requerido';
$string['requiredgoal'] = 'Precisión requerida';
$string['requiredgoal_help'] = 'Ingresar precisión requerida para finalización exitosa de un ejercicio.';
$string['requirepassword'] = 'Requerir contraseña';
$string['resetmootyperall'] = 'Reiniciar todos los intentos y calificaciones MooTyper.';
$string['returnto'] = 'Regresar a {$a}';
$string['rhitspermin'] = 'Aciertos por minuto:';
$string['rmistakes'] = 'Errores:';
$string['rprecision'] = 'Precisión:';
$string['rprogress'] = 'Progreso:';
$string['rtime'] = 'Tiempo:';
$string['sflesson'] = 'Lección';
$string['showkeyboard'] = 'Mostrar teclado';
$string['showkeyboard_help'] = 'Si se habilita, se mostrará una representación visual del arreglo del teclado seleccionado cuando un usuario está tecleando un ejercicio.';
$string['showrecentactivity'] = 'Mostrar actividad reciente';
$string['showrecentactivityconfig'] = 'Todos pueden ver notificaciones en reportes de actividad reciente.';
$string['statsbgc'] = 'Color del fondo de estadísticas';
$string['statsbgc_help'] = 'Esto configura el color del fondo de la barra de estadísticas. Usted puede ingresar un color HEXadecimal o un nombre de color (¿en idioma inglés?), como por ejemplo #95fc89 o green';
$string['statscolor_colour'] = '#CCCCCC';
$string['statscolor_descr'] = 'Esto configura el color del fondo de la barra de estadísticas.';
$string['statscolor_title'] = 'Color del fondo de la barra de estadísticas';
$string['student'] = 'Estudiante';
$string['suspicion_colour'] = '#FFFF00';
$string['suspicion_descr'] = 'Esto configura el color del calificador para una calificación con resultados sopechosos.';
$string['suspicion_title'] = 'Color de advertencia de calificación sospechosa';
$string['testing'] = 'Color de prueba';
$string['timeinseconds'] = 'Tiempo transcurrido';
$string['timeisup'] = 'Se acabó el tiempo';
$string['timelimit'] = 'Límite de tiempo';
$string['timelimit_help'] = 'Si se habilita, se muestra una advertencia respecto al límite de tiempo al principio del ejercicio y se muestra un cronómetro descendiente. Las letras tecleadas después de que el tiempo se haya agotado no son contadas.';
$string['timetaken'] = 'Completado';
$string['usepassword'] = 'Lección protegida por contraseña';
$string['usepassword_help'] = 'si se habilita, se necesita una contraseña para acceder a la lección.';
$string['vaccess0'] = 'Todos los maestros';
$string['vaccess1'] = 'Maestro dentro del curso';
$string['vaccess2'] = 'Solamente yo';
$string['viewgrades'] = 'Ver todas las calificaciones';
$string['viewmygrades'] = 'Ver mis calificaciones';
$string['visibility'] = 'Categoría visible a';
$string['vmistakes'] = 'Errores';
$string['wpm'] = 'Palabras Por Minuto';
$string['xaxislabel'] = 'Rango';
