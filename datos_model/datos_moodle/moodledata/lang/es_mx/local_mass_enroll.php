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
 * Strings for component 'local_mass_enroll', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   local_mass_enroll
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['creategroupings'] = 'Craer agrupamiento(s) si fuera necesario';
$string['creategroups'] = 'Craer grupo(s) si fuera necesario';
$string['email_sent'] = 'email enviado a {$a}';
$string['enablemassenrol'] = 'Permitir inscripciones masivas desde administración del curso';
$string['enablemassenrol_help'] = 'Active esta opción para permitir extensiones para inscripción masiva en el árbol de administración del curso';
$string['enablemassunenrol'] = 'Permitir des-inscripciones masivas desde administración del curso';
$string['enablemassunenrol_help'] = 'Active esta opción para permitir extensiones para des-inscripción masiva en el árbol de administración del curso';
$string['enroll'] = 'Inscribirlos a mi curso';
$string['firstcolumn'] = 'La primera columna contiene';
$string['idnumber'] = 'número ID';
$string['im:already_in'] = '{$a} ya incrito(s)';
$string['im:already_in_g'] = 'ya dentro del grupo {$a}';
$string['im:and_added_g'] = 'y añadido(s) al grupo Moodle  {$a}';
$string['im:enrolled_ok'] = '{$a} inscrito(s)';
$string['im:err_opening_file'] = 'error al abrir archivo {$a}';
$string['im:error_addg'] = 'error al añadir grupo {$a->groupe} al curso {$a->courseid}';
$string['im:error_add_g_grp'] = 'error al añadir grupo {$a->groupe} al agrupamiento {$a->groupe}';
$string['im:error_add_grp'] = 'error al añadir agrupamiento {$a->groupe} al curso {$a->courseid}';
$string['im:error_adding_u_g'] = 'error al añadir al grupo {$a}';
$string['im:error_g_unknown'] = 'error de grupo desconocido {$a}';
$string['im:error_in'] = 'error al inscribir a {$a}';
$string['im:error_out'] = 'error al des-inscribir a {$a}';
$string['im:not_in'] = '{$a} NO inscrito';
$string['im:opening_file'] = 'Abriendo archivo : {$a}';
$string['im:stats_g'] = '{$a->nb} grupo(s) creado(s) : {$a->what}';
$string['im:stats_grp'] = '{$a->nb} agrupamiento(s) creado(s) : {$a->what}';
$string['im:stats_i'] = '{$a} inscrito';
$string['im:stats_ui'] = '{$a} des-inscrito';
$string['im:unenrolled_ok'] = '{$a} des-inscrito';
$string['im:user_unknown'] = '{$a} desconocido - saltando la línea';
$string['im:using_role'] = 'Inscribiendo usuarios como : {$a}';
$string['localmassenrolldefaults'] = 'Configuraciones por defecto para inscripción masiva';
$string['localmassenrollextensions'] = 'Configuraciones de extensión del menú';
$string['mail_enrolment'] = 'Hola,
Usted acaba de inscribir la siguiente lista de usuarios a su curso \'{$a->course}\'.
Aquí está un reporte de operaciones:
{$a->report}
Atentamente.';
$string['mail_enrolment_subject'] = 'Inscripciones masivas en {$a}';
$string['mailreport'] = 'Mandarme un reporte por correo electrónico';
$string['mailreportdefault'] = 'Mandar reportes por defecto';
$string['mailreportdefault_help'] = 'Configure la configuración por defecto para enviar reportes para los formatos de (des)inscripción masiva';
$string['mail_unenrolment'] = 'Hola,
Usted acaba de des-inscribir la siguiente lista de usuarios de su curso \'{$a->course}\'.
Aquí está un reporte de operaciones :
{$a->report}
Atentamente.';
$string['mail_unenrolment_subject'] = 'Des-inscripciones masivas en {$a}';
$string['mass_enroll'] = 'Inscripciones masivas';
$string['mass_enroll:enrol'] = 'Inscribir usuarios a un curso mediante archivo CSV';
$string['mass_enroll_help'] = '<h1>Inscripciones masivas</h1>

<p>
A continuación usted podrá inscribir a su curso a los usuarios indicados en una lista en un archivo. La lista deberá contener a un usuario por renglón.
</p>
<p>
<b> El primer renglón  </b> , los renglones vacíos y los usuarios no reconocidos serán ignorados. </p>

<p>
El archivo puede contener una o dos columnas separadas por coma, punto y coma, dos puntos o tabulación.

<b> La primera columna debe contener un identificador único de cuenta ya sea el <i>idnumber</i>) (por defecto),  el Nombre_de_usuario (login) o dirección de correo electrónico del usuario a inscribir. </p>

<p>
La segunda columna es opcional. Si está presente deberá indicar el <b>nombre del grupo</b> al que desea añadir al usuario.

<br>
Si el grupo no existe será creado en su curso junto un agrupamiento con el mismo nombre. Esto es porque las actividades en Moodle se pueden restringir a agrupamientos y no a grupos, por lo que esto hara su vida más simple (se requiere que los agrupamientos hayan sido activados por el administrador del sitio).
</p>

<p>
Puede usted tener, en el mismo archivo, usuarios a añadir a grupos distintos o que no sean agregados a ningún grupo.
</p>

<p>
Puede desseleccionar las opciones de crear grupos y agrupamientos si está seguro que estos ya existen en el curso.
</p>

<p>
Por defecto los usuarios serán inscritos como estudiantes. Usted puede seleccionar otros roles si tiene la autorización para ello.
</p>

<p>
Puede repetir esta acción sin peligro por ejemplo si olvidó o escribió mal el nombre de un grupo.
</p>


<h2> Ejemplos de archivos </h2>

Idnumbers y un nombre de grupo
<pre>
"idnumber";"group"
" 2513110";" 4GEN"
" 2512334";" 4GEN"
" 2314149";" 4GEN"
" 2514854";" 4GEN"
" 2734431";" 4GEN"
" 2514934";" 4GEN"
" 2631955";" 4GEN"
" 2512459";" 4GEN"
" 2510841";" 4GEN"
</pre>

Solo idnumbers
<pre>
idnumber
2513110
2512334
2314149
2514854
2734431
2514934
2631955
</pre>

Solo direcciones de correo electrónico
<pre>
email
toto@insa-lyon.fr
titi@]insa-lyon.fr
tutu@insa-lyon.fr
</pre>

Nombres de usuario y grupos, separados por tabulación (comentarios entre paréntesis) :

<pre>
username grupo
ppollet grupo_prueba (estará en ese grupo)
codet grupo_prueba (también él)
astorck otro_grupo (estará en otro grupo)
yjayet  (no estará en ningún grupo)
(línea vacía ignorada)
usuario_desconocido grupo_prueba (cuenta ignorada)
</pre>

<p>
<span <font color=\'red\'>(*) </font></span>: comillas dobles y espacios añadidos por algunas hojas de cálculo serán removidas
</p>

<p>
<span <font color=\'red\'>(**) </font></span>: la cuenta debe existir en Moodle; este es el caso si Moodle se sincroniza con un directorio externo  (LDAP...)
</p>';
$string['mass_enroll_info'] = '<h1>Inscripciones masivas</h1>

<p>
A continuación usted podrá inscribir a su curso a los usuarios indicados en una lista en un archivo. La lista deberá contener a un usuario por renglón.
</p>
<p>
<b> El primer renglón  </b> , los renglones vacíos y los usuarios no reconocidos serán ignorados. </p>

<p>
El archivo puede contener una o dos columnas separadas por coma, punto y coma, dos puntos o tabulación.

<b> La primera columna debe contener un identificador único de cuenta ya sea el <i>idnumber</i>) (por defecto),  el Nombre_de_usuario (login) o dirección de correo electrónico del usuario a inscribir. </p>

<p>
La segunda columna es opcional. Si está presente deberá indicar el <b>nombre del grupo</b> al que desea añadir al usuario.

<br>
Si el grupo no existe será creado en su curso junto un agrupamiento con el mismo nombre. Esto es porque las actividades en Moodle se pueden restringir a agrupamientos y no a grupos, por lo que esto hara su vida más simple (se requiere que los agrupamientos hayan sido activados por el administrador del sitio).
</p>

<p>
Puede usted tener, en el mismo archivo, usuarios a añadir a grupos distintos o que no sean agregados a ningún grupo.
</p>

<p>
Puede desseleccionar las opciones de crear grupos y agrupamientos si está seguro que estos ya existen en el curso.
</p>

<p>
Por defecto los usuarios serán inscritos como estudiantes. Usted puede seleccionar otros roles si tiene la autorización para ello.
</p>

<p>
Puede repetir esta acción sin peligro por ejemplo si olvidó o escribió mal el nombre de un grupo.
</p>


<h2> Ejemplos de archivos </h2>

Idnumbers y un nombre de grupo
<pre>
"idnumber";"group"
" 2513110";" 4GEN"
" 2512334";" 4GEN"
" 2314149";" 4GEN"
" 2514854";" 4GEN"
" 2734431";" 4GEN"
" 2514934";" 4GEN"
" 2631955";" 4GEN"
" 2512459";" 4GEN"
" 2510841";" 4GEN"
</pre>

Solo idnumbers
<pre>
idnumber
2513110
2512334
2314149
2514854
2734431
2514934
2631955
</pre>

Solo direcciones de correo electrónico
<pre>
email
toto@insa-lyon.fr
titi@]insa-lyon.fr
tutu@insa-lyon.fr
</pre>

Nombres de usuario y grupos, separados por tabulación (comentarios entre paréntesis) :

<pre>
username grupo
ppollet grupo_prueba (estará en ese grupo)
codet grupo_prueba (también él)
astorck otro_grupo (estará en otro grupo)
yjayet  (no estará en ningún grupo)
(línea vacía ignorada)
usuario_desconocido grupo_prueba (cuenta ignorada)
</pre>

<p>
<span <font color=\'red\'>(*) </font></span>: comillas dobles y espacios añadidos por algunas hojas de cálculo serán removidas
</p>

<p>
<span <font color=\'red\'>(**) </font></span>: la cuenta debe existir en Moodle; este es el caso si Moodle se sincroniza con un directorio externo  (LDAP...)
</p>';
$string['massenrollsettings'] = 'Configuraciones de inscripciones masivas';
$string['mass_enroll:unenrol'] = 'Des-inscribir usuarios de un curso mediante archivo CSV';
$string['mass_unenroll'] = 'Des-inscripciones masivas';
$string['mass_unenroll_help'] = '<h1>Des-inscripciones masivas</h1>

<p>
A continuación usted podrá des-inscribir a su curso a los usuarios indicados en una lista en un archivo. La lista deberá contener a un usuario por renglón.
</p>
<p>
<b> El primer renglón  </b> , los renglones vacíos y los usuarios no reconocidos serán ignorados. </p>

<p>
El archivo puede contener una o dos columnas separadas por coma, punto y coma, dos puntos o tabulación.

<b> La primera columna debe contener un identificador único de cuenta ya sea el <i>idnumber</i>) (por defecto),  el Nombre_de_usuario (login) o dirección de correo electrónico del usuario a inscribir. </p>

<p>
La segunda columna será ignorada por lo que puede utilizar el mismo archivo que usó para incribir masivamente.

<p>
Puede repetir esta acción sin peligro por ejemplo si olvidó o escribió mal el nombre de un usuario a des-inscribir.
</p>';
$string['mass_unenroll_info'] = '<h1>Des-inscripciones masivas</h1>

<p>
A continuación usted podrá des-inscribir a su curso a los usuarios indicados en una lista en un archivo. La lista deberá contener a un usuario por renglón.
</p>
<p>
<b> El primer renglón  </b> , los renglones vacíos y los usuarios no reconocidos serán ignorados. </p>

<p>
El archivo puede contener una o dos columnas separadas por coma, punto y coma, dos puntos o tabulación.

<b> La primera columna debe contener un identificador único de cuenta ya sea el <i>idnumber</i>) (por defecto),  el Nombre_de_usuario (login) o dirección de correo electrónico del usuario a inscribir. </p>

<p>
La segunda columna será ignorada por lo que puede utilizar el mismo archivo que usó para incribir masivamente.

<p>
Puede repetir esta acción sin peligro por ejemplo si olvidó o escribió mal el nombre de un usuario a des-inscribir.
</p>';
$string['pluginname'] = 'Inscripción masiva';
$string['roleassign'] = 'Rol a asignar';
$string['unenroll'] = 'Des-inscribirlos de mi curso';
$string['username'] = 'Nombre de Usuario (login)';
