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
 * Strings for component 'enrol_arlo', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   enrol_arlo
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alert'] = 'Alerta';
$string['alertsiteadmins'] = 'Administradores del sitio';
$string['apipassword'] = 'Contraseña Arlo';
$string['apipassword_desc'] = '¿Olvidó su contraseña? <a title="{$a->title}" href="{$a->url}" target="_blank">Aprenda a reiniciarla.</a>';
$string['apirequests'] = 'Solicitudes API';
$string['apistatusclienterror'] = '¡Error en conexión al cliente!';
$string['apistatusok'] = 'OK, la última solicitud fue {$a}';
$string['apistatusservererror'] = 'Servicio no disponible actualmente';
$string['apiusername'] = 'Nombre_de_usuario Arlo';
$string['arlo:config'] = 'Configurar instancias de inscripción Arlo';
$string['arloconnection'] = 'Conexión Arlo';
$string['arlo:manage'] = 'Gestionar instancias de incripción Arlo';
$string['arlo:synchronizecore'] = 'Manualmente jalar nuevos recursos de curso';
$string['arlo:synchronizeinstance'] = 'Manualmente jalar nuevos registros y empujar nuevos resultados para una instancia de inscripción';
$string['arlo:unenrol'] = 'Des-inscribir usuarios supendidos';
$string['assignedgroup'] = 'Grupo asignado';
$string['assignrole'] = 'Asignar rol';
$string['associatearlotemplate'] = 'Asociar plantilla Arlo';
$string['associatetemplatewithcourse'] = 'Asociar Plantilla Arlo con curso Moodle';
$string['backtoenrolmentmethods'] = 'Regresar a métodos de inscripción';
$string['changessaved'] = 'Cambios guardados';
$string['communications'] = 'Comunicaciones';
$string['completed'] = 'completado';
$string['configuration'] = 'Configuración';
$string['coursewelcome'] = 'BienVenida al curso';
$string['creategroup'] = 'Crear grupo nuevo';
$string['customwelcomemessage'] = 'Mensaje personalizado de BienVenida';
$string['defaultgroupnametext'] = '{$a->name} grupo Arlo';
$string['defaultperiod'] = 'Duración por defecto de inscripción';
$string['defaultperiod_desc'] = 'Duración por defecto del tiempo por el cual es válida esta inscripción. Si se configura a cero, la duración de la inscripción será ilimitada por defecto.';
$string['defaultperiod_help'] = 'Duración por defecto del tiempo por el cual es válida esta inscripción, comenzando con el momento en el que el usuario es inscrito. Si se deshabilita, la duración de la inscripción será ilimitada por defecto.';
$string['defaultrole'] = 'Rol por defecto';
$string['defaultrole_help'] = 'El rol que debería de ser asignado a usuarios durante la inscripción';
$string['delivered'] = 'Entregado';
$string['enrolment'] = 'Inscripción';
$string['enrolperiod'] = 'Duración de inscripción';
$string['enrolusers'] = 'Inscribir usuarios';
$string['error_duplicateusers_smallmessage'] = 'Se encontraron usuarios duplicados en Moodle al concordar Contacto Arlo';
$string['error_duplicateusers_subject'] = 'Se encontraron usuarios duplicados en Moodle al concordar Contacto Arlo';
$string['error_incorrectcontenttype_smallmessage'] = '[enrol/arlo] Tipo de Contenido Incorrecto';
$string['error_incorrectcontenttype_subject'] = '[enrol/arlo] Tipo de Contenido Incorrecto';
$string['error_invalidcredentials_smallmessage'] = 'Moodle no puede conectarse a Arlo API. Por favor revise las configuraciones de la conexión: {$a->url}';
$string['error_invalidcredentials_subject'] = 'Moodle no puede conectarse a API Arlo';
$string['errorselectevent'] = 'Usted debe seleccionar un evento';
$string['errorselectonlineactvity'] = 'Usted debe seleccionar una Actividad En-línea';
$string['errorselecttemplate'] = 'Por favor seleccione una Plantilla de evento';
$string['errorselecttype'] = 'Usted debe seleccionar un Tipo';
$string['event'] = 'Evento';
$string['eventcreated'] = 'Evento creado';
$string['events'] = 'Eventos';
$string['eventupdated'] = 'Evento actualizado';
$string['expiredaction'] = 'Acción de caducidad de inscripción';
$string['expiredaction_help'] = 'Seleccionar acción a realizar cuando caduca la inscripción del usuario. Por favor tome nota de que algunos datos del usuario y configuraciones son purgadas del curso durante la des-inscripción del curso.';
$string['expirymessagesubject'] = 'Notificación de caducidad de inscripción';
$string['expirymessagetext'] = 'Estimado {$a->user},

Esta es una notificación de que su inscripción en el curso  \'{$a->coursename}\' ha caducado.';
$string['expirynotify'] = 'Notificarle al usuario sobre caducidad de inscripción';
$string['expirynotify_help'] = 'Esta configuración determina si es que son enviados mensajes de notificación de caducidad de inscripción.';
$string['extra'] = 'Extra';
$string['fail'] = 'Reprobar';
$string['failed'] = 'Reprobado';
$string['inprogress'] = 'En progreso';
$string['instanceexists'] = 'Arlo ya está sincronizado con rol seleccionado';
$string['locktimeout'] = 'La operación agotó el tiempo de espera mientras esperaba un bloqueo';
$string['longtime'] = 'Este proceso puede demorar mucho tiempo';
$string['managearlo'] = 'Gestionar Arlo';
$string['matchuseraccountsby'] = 'Aparear cuentas de usuario por';
$string['messagenotsent'] = 'Mensaje no enviado';
$string['messageprovider:alerts'] = 'Problemas de integración Alerta Arlo';
$string['messagesent'] = 'Mensaje enviado';
$string['newaccountdetails'] = 'Detalles de cuenta nueva';
$string['newuserdefaultemail'] = 'Nuevo Email por defecto de usuario';
$string['newuserdefaultemail_help'] = 'Nuevo Email por defecto de usuario';
$string['noeventsoractivitiesfound'] = 'Sin eventos  "Activos" o';
$string['notifyexpiry'] = 'Notificar caducidad';
$string['notok'] = 'No OK';
$string['notstarted'] = 'No iniciado';
$string['ok'] = 'OK';
$string['onlineactivities'] = 'Actividades en-línea';
$string['onlineactivity'] = 'Actividad en-línea';
$string['onlineactivitycreated'] = 'Actividad en-línea creada';
$string['onlineactivityupdated'] = 'Actividad en-línea actualizada';
$string['operationiscurrentlylocked'] = 'La operación está bloqueada actualmente por otro proceso.';
$string['pass'] = 'Pasar';
$string['platform'] = 'URL de plataforma Arlo';
$string['pluginname'] = 'Inscripción Arlo';
$string['pluginname_desc'] = '<p>Estas inscripciones son gestionadas por local_arlo</p>';
$string['pluginnotenabled'] = '¡Plugin no habilitado!';
$string['pluginstatus'] = 'Estatus';
$string['pusheventresults'] = 'Empujar Resultados del Evento';
$string['pushonlineactivityresults'] = 'Empujar resultados de ActividadEnLínea';
$string['queued'] = 'Puesto en cola';
$string['remove'] = 'Quitar';
$string['removetemplatedanger'] = '<div class="alert alert-danger" role="alert">
<strong>¡Importante!</strong>
<p>El quitar la plantilla asociada quitará a todas las personas del curso que estén en las siguientes instancias de inscripción:</p>
{$a}
</div>';
$string['resulting'] = 'Resultando';
$string['savechanges'] = 'Guardar cambios';
$string['sendcoursewelcomemessage'] = 'Enviar mensaje de BienVenida al curso';
$string['sendcoursewelcomemessage_help'] = 'Si se habilita, los usuarios recibirán un mensaje de BienVenida vía Email cuando ellos sean inscritos en un curso.';
$string['status'] = 'Activo';
$string['synchronize'] = 'Sincronizar';
$string['synchronizeinstance'] = 'Jalar manualmente registros nuevos y empujar resultados nuevos para una instancia de inscripción';
$string['synctask'] = 'Sincronización de datos Arlo';
$string['template'] = 'Plantilla';
$string['timelogged'] = 'Tiempo anotado en bitácoras';
$string['type'] = 'Tipo';
$string['typeofevent'] = 'Tipo de Evento';
$string['unknown'] = 'Desconocido';
$string['unlock'] = 'Desbloquear';
$string['uri'] = 'URI';
$string['usercreation'] = 'Creación de usuario';
$string['welcometocourse'] = 'BienVenido a {$a}';
$string['welcometocoursetext'] = 'Bienvenido a {$a->coursename}!

Su nombre_de_usuario: {$a->username}

¿Olvidó su contraseña?

Usted puede reiniciar su contraseña usando la siguiente URL:

{$a->forgotpasswordurl}

Usted puede acceder a este curso en la siguiente URL:

{$a->courseurl}';
