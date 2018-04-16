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
 * Strings for component 'organizer', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   organizer
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['absolutedeadline'] = 'Fin del registro';
$string['absolutedeadline_help'] = 'Active esto para definir el tiempo después del cual ya no serán posibles más acciones del estudiante';
$string['actionlink_delete'] = 'eliminar';
$string['actionlink_edit'] = 'editar';
$string['actionlink_eval'] = 'calificar';
$string['actionlink_print'] = 'imprimir';
$string['addappointment'] = 'Añadir cita';
$string['addslots_placesinfo'] = 'Esta acción creará {$a->numplaces} nuevos posibles lugares, haciendo un total de {$a->totalplaces} posibles lugares para {$a->numstudents} estudiantes.';
$string['addslots_placesinfo_group'] = 'Esta acción creará {$a->numplaces} nuevos posibles lugares, haciendo un total de {$a->totalplaces} posibles lugares para{$a->numgroups} grupos.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'The organizer details and registration form will be available from <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'Inicio del registro';
$string['allowsubmissionsfromdate_help'] = 'Active ésto si desea hacer este organizador accesible a los estudiantes depués de un cierto período de tiempo.';
$string['allowsubmissionsfromdatesummary'] = 'Este organizador aceptará registros desde <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Siempre mostrar descripción';
$string['alwaysshowdescription_help'] = 'Si se deshabilita, la descripción superior de la Tarea solamente será visible para los estudiantes en el afecha de "Inicio del registro".';
$string['applicant'] = 'Esta es lapersona que registró al grupo';
$string['appointmentcomments'] = 'Comentarios';
$string['appointmentcomments_help'] = 'Aquí puede añadirse información adicional acerca de las citas';
$string['appointmentdatetime'] = 'Fecha y hora';
$string['appointment_reminder:student:fullmessage'] = 'Hola {$a->receivername}!

Como parte del curso {$a->courseid} {$a->coursefullname}, Usted tiene una cita con {$a->sendername} el día {$a->date} a la hora {$a->time} en {$a->location}.

Sistema de Mensajería de Moodle';
$string['appointment_reminder:student:group:fullmessage'] = 'Hola {$a->receivername}!

Como parte del curso {$a->courseid} {$a->coursefullname}, Usted tiene una cita grupal con {$a->sendername} el día {$a->date} a la hora {$a->time} en {$a->location}.

Sistema de Mensajería de Moodle';
$string['appointment_reminder:student:group:smallmessage'] = 'Usted tiene una cita grupal con {$a->sendername} el día {$a->date} a las {$a->time} en {$a->location}.';
$string['appointment_reminder:student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Recordatorio de cita grupal';
$string['appointment_reminder:student:smallmessage'] = 'Usted tiene una cita programada con {$a->sendername} el día {$a->date} a las {$a->time} en {$a->location}.';
$string['appointment_reminder:student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Recordatorio de cita';
$string['appointment_reminder:teacher:digest:fullmessage'] = 'Hola {$a->receivername}!

Usted tiene las siguientes citas programadas para mañana:

{$a->digest}

TUWEL Messaging System';
$string['appointment_reminder:teacher:digest:smallmessage'] = 'Usted ha recibido un mensaje resumido de sus citas para mañana.';
$string['appointment_reminder:teacher:digest:subject'] = 'Resumen de la cita programada';
$string['appointment_reminder:teacher:fullmessage'] = 'Hola {$a->receivername}!

Como una parte del curso {$a->courseid} {$a->coursefullname}, Usted tiene una cita programada con estudiantes en {$a->date} a las {$a->time} en {$a->location}.

TUWEL Messaging System';
$string['appointment_reminder:teacher:group:digest:fullmessage'] = 'Hola {$a->receivername}!

Mañana tiene Usted las citas programadas siguientes:

{$a->digest}

TUWEL Messaging System';
$string['appointment_reminder:teacher:group:digest:smallmessage'] = 'Usted ha recibido un mensaje resumido de sus ctas para mañana.';
$string['appointment_reminder:teacher:group:digest:subject'] = 'Resumen de citas';
$string['appointment_reminder:teacher:smallmessage'] = 'Usted tiene una cita con estudiantes el {$a->date} a las {$a->time} en {$a->location}.';
$string['appointment_reminder:teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Recordatorio de cita';
$string['assign'] = 'Asignar';
$string['assign_notify:student:fullmessage'] = '¡ Hola {$a->receivername} !

Como parte del curso {$a->courseid} {$a->coursefullname}, se le ha asignado a Usted una cita con {$a->slot_teacher} en {$a->date} a las {$a->time} por {$a->sendername}.

Profesor: {$a->slot_teacher}
Lugar: {$a->slot_location}
Fecha: {$a->date} y hora {$a->time}

Sistema de Mensajería de Moodle';
$string['assign_notify:student:group:fullmessage'] = '¡ Hola {$a->receivername} !

Como parte del curso {$a->courseid} {$a->coursefullname}, se le ha asignado a Usted una cita con {$a->slot_teacher} en {$a->date} a las {$a->time} por {$a->sendername}.

Profesor: {$a->slot_teacher}
Lugar: {$a->slot_location}
Fecha: {$a->date} y hora {$a->time}

Sistema de Mensajería de Moodle';
$string['assignsuccess'] = 'El espacio-tiempo ha sido asignado exitosamente y los participantes han sido notificados';
$string['assign_title'] = 'Asignar citas';
$string['atlocation'] = 'en';
$string['availability'] = 'Disponibilidad';
$string['availablefrom'] = 'Solicitudes posibles desde';
$string['availablegrouplist'] = 'Grupos disponibles';
$string['availableslotsfor'] = 'Espacios disponibles para';
$string['back'] = 'Regresar';
$string['btn_add'] = 'Añadir nuevos espacios';
$string['btn_assign'] = 'Asignar espacio';
$string['btn_comment'] = 'Editar comentario';
$string['btn_delete'] = 'Quitar espacios seleccionados';
$string['btn_edit'] = 'Editar espacios seleccionados';
$string['btn_eval'] = 'Calificar espacios seleccionados';
$string['btn_eval_short'] = 'Calificación';
$string['btn_print'] = 'Imprimir espacios seleccionados';
$string['btn_queue'] = 'Cola';
$string['btn_reeval'] = 'Re-evaluar';
$string['btn_register'] = 'Registrar';
$string['btn_remind'] = 'Enviar recordatorio';
$string['btn_reregister'] = 'Re-registrar';
$string['btn_save'] = 'Guardar comentario';
$string['btn_send'] = 'Enviar';
$string['btn_start'] = 'Iniciar';
$string['btn_unqueue'] = 'Quitar de la cola';
$string['btn_unregister'] = 'Des-registrar';
$string['cannot_eval'] = 'No se puede evaluar; el estudiante tiene un(a)';
$string['can_reregister'] = 'Usted puede re-registrarse a otra cita.';
$string['changegradewarning'] = 'Este organizador ha calificado citas y el cambiar la calificación no re-calculará automáticamente  las calificaciones existentes. Usted debe de re-calificar todas las citas existentes, si desea cambiar la calificación.';
$string['collision'] = '¡Advertencia! Se detectó colisión con evento(s) siguiente(s):';
$string['configabsolutedeadline'] = 'El diferencial de fecha y hora con respecto a la fecha y hora actuales.';
$string['configahead'] = 'de anticipación';
$string['configday'] = 'día';
$string['configdays'] = 'día';
$string['configdigest'] = 'Mandar resumen de citas del día siguiente al profesor.';
$string['configdigest_label'] = 'Mandar resumen de citas al profesor.';
$string['configdontsend'] = 'No enviar';
$string['configemailteachers'] = 'Mandar notificaciones por E-mail a profesores acerca de cambios en el estatus de registro.';
$string['configemailteachers_label'] = 'Mandar notificaciones por E-mail a profesores';
$string['confighour'] = 'hora';
$string['confighours'] = 'horas';
$string['configintro'] = 'Los valores que Usted configure aquí definen los valores por defecto que son usados en el formato de configuración cuando usted crea un nuevo Organizador.';
$string['configlocationlink'] = 'El enlace hacia un motor de búsqueda usado para mmostrar el camino a la localización. Ponga $searchstring en la URL en donde vaya la consulta.';
$string['configmaximumgrade'] = 'Configurar el valor por defecto seleccionado en el campo para calificación al crear un nuevo Organizador. Ésta es la máxima calificación que puede asignarse a un estudiante para su cita.';
$string['configminute'] = 'minuto';
$string['configminutes'] = 'minutos';
$string['configmonth'] = 'mes';
$string['configmonths'] = 'meses';
$string['confignever'] = 'Nunca';
$string['configrelativedeadline'] = 'El tiempo de anticipación por defecto de una cita para notificarles a los asistentes previamente.';
$string['configrequiremodintro'] = 'Deshabilite esta opción si Usted no quiere forzar a los usuarios a que escriban la descripción de cada actividad.';
$string['configweek'] = 'semana';
$string['configweeks'] = 'semanas';
$string['configyear'] = 'año';
$string['confirm_conflicts'] = '¿Está Usted seguro de querer ignorar las colisiones y querer crear los espacios de tiempo?';
$string['confirm_delete'] = 'Eliminar';
$string['confirm_organizer_remind_all'] = 'Enviar';
$string['create'] = 'Crear';
$string['createsubmit'] = 'Crear espacios de tiempo';
$string['datapreviewtitle'] = 'Vista previa de datos';
$string['datapreviewtitle_help'] = 'Haga click en [+] o [-] para mostrar o para ocultar columnas en la vistaprevia de impresión.';
$string['datetemplate'] = '%d.%m.%Y';
$string['day'] = 'día';
$string['day_0'] = 'Lunes';
$string['day_1'] = 'Martes';
$string['day_2'] = 'Miércoles';
$string['day_3'] = 'Jueves';
$string['day_4'] = 'Viernes';
$string['day_5'] = 'Sábado';
$string['day_6'] = 'Domingo';
$string['day_pl'] = 'días';
$string['deleteheader'] = 'Eliminando los siguientes espacios';
$string['deletekeep'] = 'La cita siguiente será cancelada. Los estudiantes registrados serán notificados y los lugares serán eliminados:';
$string['deletenoslots'] = 'Sin espacios eliminables seleccionados';
$string['deleteorganizergrades'] = 'Eliminar calificaciones delLibro de calificaciones';
$string['delete_organizer_grades'] = 'Eliminando calificaciones de todos los organizadores';
$string['downloadfile'] = 'Descargar archivo';
$string['duedate'] = 'Fecha esperada';
$string['duedateerror'] = '¡ No puede configurarse fecha límite absoluta anterior a la fecha de disponible !';
$string['duration'] = 'Duración';
$string['edit_notify:student:fullmessage'] = 'Hola {$a->receivername}!

Como una parte del curso {$a->courseid} {$a->coursefullname}, los detalles de la cita programada con {$a->sendername} en el día {$a->date} a las {$a->time} han sido cambiados.

Profesor: {$a->slot_teacher}
Lugar: {$a->slot_location}
Máx. participantes: {$a->slot_maxparticipants}
Comentsario:
{$a->slot_comments}

TUWEL Messaging System';
$string['edit_notify:student:group:smallmessage'] = 'Los detalles de la cita grupal con{$a->sendername} el {$a->date} a las {$a->time} han sido cambiados.';
$string['edit_notify:student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Detalles de cita cambiados';
$string['edit_notify:student:smallmessage'] = 'Los detalles de la cita con {$a->sendername} el {$a->date} a las {$a->time} han sido cambiados.';
$string['edit_notify:student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Detalles de cita cambiados';
$string['edit_notify:teacher:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Detalles de cita cambiados';
$string['edit_notify:teacher:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Detalles de cita cambiados';
$string['edit_submit'] = 'Implementar los cambios';
$string['emailteachers'] = 'Mandarles notificación por Email a profesores';
$string['err_availablefromearly'] = '¡Esta fecha no puede configurarse posterior a la fecha de inicio!';
$string['err_availablefromlate'] = '¡Esta fecha no puede configurarse posterior a la fecha de fin!';
$string['err_availablepastdeadline'] = 'Este espacio-tiempo no puede hacerse disponible  más allá de la fecha-hora límite del agendador ({$a->deadline})!';
$string['err_collision'] = 'Este marco está en colisión con otros marcos';
$string['err_comments'] = 'Usted debe de escribir una descripción';
$string['err_enddate'] = '¡La fecha final no puede ponerse antes de la fecha de inicio!';
$string['err_fromto'] = '¡La fecha final no puede ponerse antes de la fecha de inicio!';
$string['err_fullminute'] = 'La duración debe ser minutos completos.';
$string['err_fullminutegap'] = 'El hueco tiene que ser un minuto completo.';
$string['err_isgrouporganizer_app'] = '¡No puede cambiarse el modo de grupo dado que ya existen citas programadas agendadas ene ste organizador!';
$string['err_location'] = '¡Usted debe escribir un sitio!';
$string['err_noslots'] = '¡No se seleccionaron espacios!';
$string['err_posint'] = '¡Usted debe escribir un número entero positivo!';
$string['err_startdate'] = '¡ La fecha de inicio no puede ser anterior a la fecha de hoy ({$a->now}) !';
$string['eval_allow_new_appointments'] = 'Permitir re-programar-cita';
$string['eval_attended'] = 'Asistida';
$string['eval_feedback'] = 'Retroalimentación';
$string['eval_grade'] = 'Calificación';
$string['eval_header'] = 'Espacios de tiempo seleccionados';
$string['eval_no_participants'] = 'Este espacio no tienen participantes';
$string['eval_notify_newappointment:student:group:smallmessage'] = 'Su cita grupal de {$a->date} a las {$a->time} en {$a->location} ha sido evaluada.';
$string['eval_notify_newappointment:student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Cita evaluada';
$string['eval_notify_newappointment:student:smallmessage'] = 'Su cita del {$a->date} a las {$a->time} ie {$a->location} ha sido evaluada.';
$string['eval_notify_newappointment:student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Cita evaluada';
$string['eval_notify:student:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Cita evaluada';
$string['eval_notify:student:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Cita evaluada';
$string['eval_not_occured'] = 'Este espacio aun no ha ocurrido';
$string['evaluate'] = 'Evaluar';
$string['eventappointmentadded'] = 'El estudiante se registró a un espacio.';
$string['eventappointmentassigned'] = 'La cita ha sido asignada por un profesor.';
$string['eventappointmentcommented'] = 'La reservación ha sido comentada.';
$string['eventappointmentevaluated'] = 'La reservación ha sido evaulada.';
$string['eventappointmentlistprinted'] = 'La reservación ha sido impresa.';
$string['eventappointmentremindersent'] = 'Recordatorio de cita enviado.';
$string['eventappointmentremoved'] = 'El estudiante se des-registró de un espacio.';
$string['eventappwith:group'] = 'Cita programada grupal';
$string['eventappwith:single'] = 'Cita programada';
$string['eventnoparticipants'] = 'sin participantes';
$string['eventqueueadded'] = 'Añadido a lista de espera';
$string['eventqueueremoved'] = 'Quitado de la lista de espera';
$string['eventregistrationsviewed'] = 'Pestaña de registro vista.';
$string['eventslotcreated'] = 'Se crearon nuevos espacios.';
$string['eventslotdeleted'] = 'Espacio eliminado';
$string['eventslotupdated'] = 'Espacio actualizado.';
$string['eventslotviewed'] = 'Espacios vistos.';
$string['eventteacheranonymous'] = 'un profesor anónimo';
$string['eventtemplate'] = '{$a->courselink} / {$a->organizerlink}: {$a->appwith} {$a->with} {$a->participants}<br />Localización: {$a->location}<br />';
$string['eventtemplatecomment'] = 'Comentario:<br />{$a}<br />';
$string['eventtitle'] = '{$a->coursename} / {$a->organizername}: {$a->appwith}';
$string['eventwith'] = 'con';
$string['eventwithout'] = 'con';
$string['exportsettings'] = 'Exportar configuraciones';
$string['finalgrade'] = 'Este valor ha sido configurado en el Libro de calificaciones y no puede ser cambiado con el Organizador.';
$string['font_large'] = 'grande';
$string['font_medium'] = 'mediano';
$string['font_small'] = 'pequeño';
$string['format'] = 'Formato';
$string['format_csv_comma'] = 'CSV (;)';
$string['format_csv_tab'] = 'CSV (tab)';
$string['format_ods'] = 'ODS';
$string['format_pdf'] = 'PDF';
$string['format_xls'] = 'XLS';
$string['format_xlsx'] = 'XLSX';
$string['fulldatelongtemplate'] = '%A %d. %B %Y';
$string['fulldatetemplate'] = '%a %d.%m.%Y';
$string['fulldatetimelongtemplate'] = '%A %d. %B %Y %H:%M';
$string['fulldatetimetemplate'] = '%a %d.%m.%Y %H:%M';
$string['fullname_template'] = '{$a->firstname} {$a->lastname}';
$string['gap'] = 'Hueco';
$string['gap_help'] = 'Define el hueco entre dos citas.';
$string['grade'] = 'Calificación máxima';
$string['grade_help'] = 'Define la máxima cantidad de puntos que pueden otorgarse para cualquier cita que pueda ser calificada.';
$string['groupoptions'] = 'Configuraciones del grupo';
$string['grouporganizer_desc_nogroup'] = 'Este es  un organizador de grupo. Los estudiantes pueden registrar sus grupos a citas. Todos los miembros del grupo pueden cambiar y comentar el registro.';
$string['grouppicker'] = 'Selector de grupo';
$string['group_registration_notify:student:queue:group:smallmessage'] = '{$a->sendername} ha añadido a su grupo de Usted {$a->groupname} a la lista de espera del espacio-tiempo en {$a->date} a las {$a->time}.';
$string['group_registration_notify:student:queue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo en lista-de-espera';
$string['group_registration_notify:student:register:group:smallmessage'] = '{$a->sendername} ha registrado a su grupo {$a->groupname} al espacio-tiempo en {$a->date} a las {$a->time}.';
$string['group_registration_notify:student:register:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo registrado';
$string['group_registration_notify:student:register:smallmessage'] = '{$a->sendername} ha registrado su grupo {$a->groupname} al espacio-tiempo en {$a->date} a las {$a->time}.';
$string['group_registration_notify:student:register:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo registrado';
$string['group_registration_notify:student:reregister:group:smallmessage'] = '{$a->sendername} ha re-regisrado a su grupo  {$a->groupname} a un nuevo espacio-tiempo en {$a->date} a las {$a->time}.';
$string['group_registration_notify:student:reregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo re-registrado';
$string['group_registration_notify:student:reregister:smallmessage'] = '{$a->sendername} ha re-regisrado a su grupo {$a->groupname} para un nuevo espacio-tiempo en {$a->date} a las {$a->time}.';
$string['group_registration_notify:student:reregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo re-registrado';
$string['group_registration_notify:student:unqueue:group:smallmessage'] = '{$a->sendername} ha quitado a su grupo {$a->groupname} de la lista de espera del espacio-tiempo en {$a->date} a las {$a->time}.';
$string['group_registration_notify:student:unqueue:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo quitado de la lista-de-espera';
$string['group_registration_notify:student:unregister:group:smallmessage'] = '{$a->sendername} ha des-registrado su grupo {$a->groupname} del horario en {$a->date} a las  {$a->time}.';
$string['group_registration_notify:student:unregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo no-registrado';
$string['group_registration_notify:student:unregister:smallmessage'] = '{$a->sendername} ha des-registrado a su grupo {$a->groupname} del espacio-tiempo en {$a->date} a las {$a->time}.';
$string['group_registration_notify:student:unregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo no-registrado';
$string['group_slot_available'] = 'Espacio disponible';
$string['group_slot_full'] = 'Espacio tomado';
$string['groupwarning'] = '¡Revise más abajo las opciones de grupo!';
$string['headerfooter'] = 'Imprimir encabezado/pie de página';
$string['headerfooter_help'] = 'Imprimir encabezado/pie de página si se selecciona';
$string['hidecalendar'] = 'Ocultar calendario';
$string['hidecalendar_help'] = 'Activar para ocultar el calendario en este organizador';
$string['hour'] = 'hora';
$string['hour_pl'] = 'horas';
$string['id'] = 'ID';
$string['img_title_evaluated'] = 'El espacio está evaluado';
$string['img_title_no_participants'] = 'El espacio no tiene participantes';
$string['img_title_past_deadline'] = 'El espacio ya pasó su fecha límite';
$string['img_title_pending'] = 'El espacio está pendiente de evaluación';
$string['infobox_app_countdown'] = 'Tiempo restante para la cita: {$a->days} días, {$a->hours} horas, {$a->minutes} minutos, {$a->seconds} segundos';
$string['infobox_app_occured'] = 'La cita ya ha ocurrido.';
$string['infobox_deadline_countdown'] = 'Tiempo restante para la fecha/hora límite: {$a->days} días, {$a->hours} horas, {$a->minutes} minutos, {$a->seconds} segundos';
$string['infobox_deadline_passed'] = 'Ha pasado la fecha límite del registro. Usted ya no puede cambiar registros.';
$string['infobox_deadlines_title'] = 'Fechas límite';
$string['infobox_description_title'] = 'Descripción del organizador';
$string['infobox_feedback_title'] = 'Retroalimentación';
$string['infobox_group'] = 'Mi grupo: {$a->groupname}';
$string['infobox_hidelegend'] = 'Ocultar letrero';
$string['infobox_legend_title'] = 'Letrero';
$string['infobox_messages_title'] = 'Mensajes del sistema';
$string['infobox_messaging_title'] = 'Opciones de mensajería';
$string['infobox_mycomments_title'] = 'Mis comentarios';
$string['infobox_myslot_noslot'] = 'Usted no está registrado a ningun espacio-tiempo  actualmente.';
$string['infobox_myslot_title'] = 'Mi espacio';
$string['infobox_organizer_expired'] = 'Este organizador caducó en {$a->date} a las {$a->time}';
$string['infobox_organizer_expires'] = 'Este organizador caducará en {$a->date} a las {$a->time}.';
$string['infobox_organizer_never_expires'] = 'Este organizador no caduca nunca';
$string['infobox_showfreeslots'] = 'Mostrar solamente espacios libres';
$string['infobox_showlegend'] = 'Mostrar letrero';
$string['infobox_showmyslotsonly'] = 'Mostrar solamente mis espacios';
$string['infobox_showslots'] = 'Mostrar espacios de tiempo pasados';
$string['infobox_slotoverview_title'] = 'Vista general de espacio-tiempo';
$string['infobox_title'] = 'Caja-de-información';
$string['introeditor_error'] = '¡Debe darse descripción del organizador!';
$string['invalidgrouping'] = '¡Usted deb seleccionar un agrupamiento válido!';
$string['inwaitingqueue'] = 'Lista_de_espera';
$string['isgrouporganizer'] = 'Citas registradas grupales';
$string['isgrouporganizer_help'] = 'Active esto si desea que el organizador maneje grupos en lugar de usuarios individuales. Tome nota de que, si lo deja desactivado, el organizador tofavía permite que más usuarios asistan a la misma cita.';
$string['legend_anonymous'] = 'Espacio anónimo';
$string['legend_comments'] = 'Comentarios del Estudiante/Profesor';
$string['legend_evaluated'] = 'Espacio evaluado';
$string['legend_feedback'] = 'Retroalimentación del Profesor';
$string['legend_group_applicant'] = 'Solicitante del grupo';
$string['legend_halfanonymous'] = 'Solamente visibles participantes de sus propios espacio-tiempos';
$string['legend_no_participants'] = 'El espacio no tiene participantes';
$string['legend_not_occured'] = 'La cita todavía no ocurre';
$string['legend_organizer_expired'] = 'Organizador caduco';
$string['legend_past_deadline'] = 'Espacio-tiempo pasado de la fecha-hora límite';
$string['legend_pending'] = 'Espacio pendiente de evaluación';
$string['legend_section_details'] = 'Íconos de detalles de espacio-tiempo';
$string['legend_section_status'] = 'Íconos de estatus';
$string['location'] = 'Lugar';
$string['location_help'] = 'escriba el nombre del lugar en donde se desarrollarán las citas';
$string['locationlink'] = 'URL del enlace de localización del sitio';
$string['locationlinkenable'] = 'autoenlace de información de localización';
$string['locationlink_help'] = 'Escriba aquí la dirección completa del sitio web al que Usted desea que el enlace de localización se refiera. Este sitio debería de contener por lo menos la información acerca de como alcanzar la localización. Por favor escriba la dirección completa (incluyendo http://)';
$string['maillink'] = 'El organizador está disponible <a href="{$a}">aquí</a>.';
$string['maxparticipants'] = 'Máx. participantes';
$string['maxparticipants_help'] = 'Define el número máximo de estudiantes que se pueden registrar a estos espacio-tiempos. en caso de un organizador de grupo, este número está siempre limitado a uno.';
$string['message_autogenerated2'] = 'Mensaje auto-generado';
$string['message_custommessage'] = 'Mensaje personalizado';
$string['message_custommessage_help'] = 'Use este campopara escribir un texto personal dentro del mensaje auto-generado.';
$string['message_error_slot_full_group'] = '¡ Este espacio de tiempo ya está tomado !';
$string['message_error_slot_full_single'] = '¡Este espacio-tiempo no tiene lugares libres disponibles!';
$string['message_error_unknown_unqueue'] = '¡Su entrada en lista de espera no pudo ser quitada! Error desconocido.';
$string['message_error_unknown_unregister'] = '¡Su registro no pudo ser quitado! Error desconocido.';
$string['message_info_available'] = 'Hay {$a->freeslots} espacio-tiempos vacíos disponibles para  {$a->notregistered} usuarios sin una cita.';
$string['message_info_available_group'] = 'Hay {$a->freeslots} There are {$a->freeslots} empty slots available for {$a->notregistered} groups without any appointment. {$a->notregistered} grupos sin una cita.';
$string['message_info_reminders_sent_pl'] = '{$a->count} recordatorios fueron enviados.';
$string['message_info_reminders_sent_sg'] = '{$a->count} recordatorio fue enviado.';
$string['message_info_slots_added_pl'] = '{$a->count} nuevos espacios fueron añadidos';
$string['message_info_slots_added_sg'] = '{$a->count} nuevo espacio-tiempo añadido.';
$string['message_info_slots_deleted'] = 'Los siguientes espacio-tiempos fueron eliminados:<br/>
{$a->deleted} espacio-tiempos eliminados.<br/>
{$a->notified} usuarios han sido notificados.';
$string['message_info_slots_deleted_group'] = 'Los siguientes espacio-tiempos fueron eliminados:<br/>
{$a->deleted} espacio-tiempos eliminados.<br/>
{$a->notified} usuarios han sido notificados.';
$string['messageprovider:appointment_reminder:student'] = 'Recordatorio de organizador de citas';
$string['messageprovider:appointment_reminder:teacher'] = 'Recordatorio de organizador de citas (profesor)';
$string['messageprovider:assign_notify:student'] = 'Asignación de organizador por profesor';
$string['messageprovider:edit_notify:student'] = 'Cambios del organizador';
$string['messageprovider:edit_notify:teacher'] = 'Cambios del organizador (Profesor)';
$string['messageprovider:eval_notify:student'] = 'Notificación de evaluación de Organizador';
$string['messageprovider:group_registration_notify:student'] = 'Notificación de registro de grupo de Organizador';
$string['messageprovider:manual_reminder:student'] = 'Notificación de cita manual de Organizador';
$string['messageprovider:register_notify:teacher'] = 'Notificación de registro de Organizador';
$string['messageprovider:register_reminder:student'] = 'Recordatorio de registro de Organizador';
$string['messageprovider:test'] = 'Mensaje de Prueba del Organizador';
$string['messages_all'] = 'Todos los registros, re-registros y des-registros';
$string['messages_none'] = 'Sin notificaciones de registro';
$string['messages_re_unreg'] = 'Solamente Re-registros y des-registros';
$string['message_warning_no_slots_added'] = '¡ No se añadieron nuevos espacis !';
$string['message_warning_no_slots_selected'] = '¡ Usted debe primeramente seleccionar al menos un espacio !';
$string['min'] = 'minuto';
$string['min_pl'] = 'minutos';
$string['modformwarningplural'] = '¡ Estos campos no pueden ser editados porque ya hay citas hechas en este Organizador !';
$string['modformwarningsingular'] = '¡ Este campo no puede ser editado porque ya hay citas hechas en este Organizador !';
$string['modulename'] = 'Organizador';
$string['modulename_help'] = 'Los organizadores le permiten al profesor hacer citas con estudiantes al crear horarios en los cuales se pueden registrar los estudiantes.';
$string['modulenameplural'] = 'Organizadores';
$string['multimember'] = '¡Los usuarios no pueden pertenecer a grupos múltiples dentro del mismo agrupamiento!';
$string['multimemberspecific'] = '¡El usuario {$a->username} {$a->idnumber} está registrado en más d eun grupo! ({$a->groups})';
$string['multipleappointmentenddate'] = 'Fecha de término';
$string['multipleappointmentstartdate'] = 'Fecha de inicio';
$string['mymoodle_attended'] = '{$a->attended}/{$a->total} estudiantes han completado una cita';
$string['mymoodle_attended_group'] = '{$a->attended}/{$a->total} grupos han completado una cita';
$string['mymoodle_attended_group_short'] = '{$a->attended}/{$a->total} groupos completados';
$string['mymoodle_attended_short'] = '{$a->attended}/{$a->total} estudiantes completados';
$string['mymoodle_completed_app'] = 'Uste dcompletó su cita del {$a->date} a las {$a->time}';
$string['mymoodle_completed_app_group'] = 'Su grupo {$a->groupname} asistió a la cita el {$a->date} a las {$a->time}';
$string['mymoodle_missed_app'] = 'Usted no acudió a la cita el {$a->date} a las {$a->time}';
$string['mymoodle_missed_app_group'] = 'Su grupo {$a->groupname} no asistió a la cita el {$a->date} a las {$a->time}';
$string['mymoodle_next_slot'] = 'Siguiente espacio en {$a->date} a las {$a->time}';
$string['mymoodle_no_reg_slot'] = 'Usted aun no se ha registrado a un espacio de tiempo';
$string['mymoodle_no_reg_slot_group'] = 'Su grupo {$a->groupname} aun no se ha registrado para un espacio-tiempo';
$string['mymoodle_no_slots'] = 'Sin espacios próximos futuros';
$string['mymoodle_organizer_expired'] = 'Este Organizador caducó en {$a->date} a las {$a->time}. Usted ya no puede usarlo más';
$string['mymoodle_organizer_expires'] = 'Este organizador caduca en {$a->date} a las {$a->time}';
$string['mymoodle_pending_app'] = 'Su cita está pendiente de evaluación';
$string['mymoodle_pending_app_group'] = 'Las citas de su grupo {$a->groupname} están pendientes de evaluación';
$string['mymoodle_registered'] = '{$a->registered}/{$a->total} estudiantes se han registrado para una cita';
$string['mymoodle_registered_group'] = '{$a->registered}/{$a->total} grupos se han registrado para una cita';
$string['mymoodle_registered_group_short'] = '{$a->registered}/{$a->total} grupos registrados';
$string['mymoodle_registered_short'] = '{$a->registered}/{$a->total} estudiantes registrados';
$string['mymoodle_upcoming_app'] = 'Su cita tendrá lugar en {$a->date} a las {$a->time} en {$a->location}';
$string['mymoodle_upcoming_app_group'] = 'La cita de su grupo, {$a->groupname}, tendrá lugar en {$a->date} a las {$a->time} en {$a->location}';
$string['newslot'] = 'Añadir más espacio-tiempos';
$string['no_due_my_slots'] = 'Todos los espacio-tiempos en este organizador han caducado o están ocultos.';
$string['no_due_slots'] = 'Todos los espacio-tiempos creados en este organizador han caducado';
$string['nofreeslots'] = 'Sin espacios libres disponibles.';
$string['nogroup'] = 'Sin grupo';
$string['no_my_slots'] = 'Uste dno tiene espacio-tiempos creados en este organizador';
$string['noparticipants'] = 'Sin participantes';
$string['noslots'] = 'Sin espacios para';
$string['no_slots'] = 'No hay espacio-tiempos creados en este organizador';
$string['no_slots_defined'] = 'No hay espacio-tiempos de citas disponibles por el momento.';
$string['no_slots_defined_teacher'] = 'No hay espacio-tiempos de citas presentes en este momento. Haga click <a href="{$a->link}">aquí</a> para crear algunos ahorita mismo.';
$string['noslotsselected'] = '¡ Sin espacios seleccionados !';
$string['notificationtime'] = 'Recordatorio de cita relativa';
$string['notificationtime_help'] = 'Define con cuanto tiempo de anticipación se les recordará a los estudiantes sobre su cita registrada.';
$string['numentries'] = 'Entradas mostradas por página';
$string['organizer'] = 'Organizador';
$string['organizer:addinstance'] = 'Añadir un nuevo organizador';
$string['organizer:addslots'] = 'Añadir nuevos espacios de tiempo';
$string['organizer:assignslots'] = 'Asignar espacio de tiempo a estudiante';
$string['organizer:comment'] = 'Añadir comentarios';
$string['organizercommon'] = 'Configuraciones del organizador';
$string['organizer:deleteslots'] = 'Eliminar espacios de tiempo existentes';
$string['organizer:editslots'] = 'Editar espacios de tiempo existentes';
$string['organizer:evalslots'] = 'Calificar espacios de tiempo completados';
$string['organizername'] = 'Nombre del Organizador';
$string['organizer:printslots'] = 'Imprimir espacios de tiempo existentes';
$string['organizer:receivemessagesstudent'] = 'Recibir mensajes conforme se envíen alos estudiantes';
$string['organizer:receivemessagesteacher'] = 'Recibir los mensajes enviados a los profesores';
$string['organizer:register'] = 'Registrar a un espacio de tiempo';
$string['organizer_remind_all_no_recepients'] = 'No hay destinatarios válidos';
$string['organizer_remind_all_recepients_pl'] = 'Un total de {$a->count} mensajes serán enviados a los siguientes destinatarios:';
$string['organizer_remind_all_recepients_sg'] = 'Un total de {$a->count} mensajes serán enviados a los siguientes destinatarios:';
$string['organizer_remind_all_title'] = 'Enviar recordatorios';
$string['organizer:sendreminders'] = 'Enviar recordatorios de registro a estudiantes';
$string['organizer:unregister'] = 'Des-registrar de un espacio de tiempo';
$string['organizer:viewallslots'] = 'Ver todos los espacios de tiempo como un profesor';
$string['organizer:viewmyslots'] = 'Ver los espacios de tiempo propios como un profesor';
$string['organizer:viewregistrations'] = 'Ver estatus de registros de estudiantes';
$string['organizer:viewstudentview'] = 'Ver todos los espacios de tiempo como un estudiante';
$string['orientationlandscape'] = 'apaisado';
$string['orientationportrait'] = 'retrato';
$string['otherheader'] = 'Otro';
$string['pageorientation'] = 'Orientación de la página';
$string['pdf_notactive'] = 'inactivo';
$string['pdfsettings'] = 'Configuraciones PDF';
$string['places_inqueue'] = '{$a->inqueue} en lista de espera';
$string['places_inqueue_withposition'] = '{$a->queueposition}. posición en lista de espera';
$string['places_taken_pl'] = '{$a->numtakenplaces}/{$a->totalplaces} lugares tomados';
$string['places_taken_sg'] = '{$a->numtakenplaces}/{$a->totalplaces} lugares tomados';
$string['pluginadministration'] = 'Administración del organizador';
$string['pluginname'] = 'Organizador';
$string['position'] = 'Posiciones en la cola';
$string['printout'] = 'Impresión';
$string['printpreview'] = 'Previsualizar impresión (primeras 10 entradas)';
$string['print_return'] = 'Regresar a vista general de espacio';
$string['printsubmit'] = 'Mostrar tabla para impresión';
$string['queue'] = 'Colas de espera';
$string['queuebody'] = 'Su registro para un espacio-tiempo ha sido promovido del estatus "lista de espera" al estatus "reservado".';
$string['queuesubject'] = 'Organizador Moodle: Promovido de la cola';
$string['recipientname'] = '&lt;nombre del destinatario&gt;';
$string['register_notify:teacher:register:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo registrado';
$string['register_notify:teacher:reregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo re-registrado';
$string['register_notify:teacher:reregister:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Estudiante re-registrado';
$string['register_notify:teacher:unregister:group:subject'] = '[{$a->courseid}{$a->courseshortname} / {$a->organizername}] - Grupo des-registrado';
$string['register_reminder:group:smallmessage'] = 'Por favor, registre su grupo a un (nuevo) espacio de tiempo.';
$string['register_reminder:student:group:smallmessage'] = 'Por favor, registre su grupo a un nuevo espacio de tiempo.';
$string['reg_status'] = 'Estatus del registro';
$string['reg_status_not_registered'] = 'No registrado';
$string['reg_status_organizer_expired'] = 'Organizador caducó';
$string['reg_status_registered'] = 'Registrado';
$string['reg_status_slot_attended'] = 'Asistido';
$string['reg_status_slot_attended_reapp'] = 'Asistido, se permitió re-agendar';
$string['reg_status_slot_available'] = 'Espacio disponible';
$string['reg_status_slot_expired'] = 'Espacio caducado';
$string['reg_status_slot_full'] = 'Espacio lleno';
$string['reg_status_slot_not_attended'] = 'No asistió';
$string['reg_status_slot_not_attended_reapp'] = 'No asistió, se permite re-agendar';
$string['reg_status_slot_past_deadline'] = 'Espacio-tiempo pasado de la fecha-hora límite';
$string['reg_status_slot_pending'] = 'Espacio pendiente de evaluación';
$string['relativedeadline'] = 'Fecha límite relativa';
$string['relative_deadline_before'] = 'antes de la cita';
$string['relativedeadline_help'] = 'Configura la fecha límite para la solicitud para un lapso de tiempo específico anticipadamente. Los estudiantes no podrán cambiar su registro o des-registrarse una vez que haya pasado esta fecha límite.';
$string['relative_deadline_now'] = 'Iniciando ahora';
$string['remindall_desc'] = 'Mandar recordatorios a todos los estudiantes sin una cita';
$string['requiremodintro'] = 'Requerir descripción de actividad';
$string['resetorganizerall'] = 'Borrar todos los datos del organizador (horarios y citas)';
$string['reset_organizer_all'] = 'Eliminando espacio-tiempos, citas y eventos relacionados';
$string['reviewsubmit'] = 'Revisar espacios de tiempo';
$string['rewievslotsheader'] = 'Revisar espacios de tiempo';
$string['sec'] = 'seg';
$string['sec_pl'] = 'segundos';
$string['select_all_slots'] = 'Selescionar todos los espacios visibles';
$string['selectedgrouplist'] = 'Grupos seleccionados';
$string['selectedslots'] = 'Espacios seleccionados';
$string['slot_anonymous'] = 'Espacio anónimo';
$string['slotassignedby'] = 'Espacio asignado por';
$string['slotdetails'] = 'Detalles del espacio';
$string['slotfrom'] = 'de';
$string['slotlistempty'] = 'No se encontraron espacios.';
$string['slotperiodendtime'] = 'Fecha de fin';
$string['slotperiodheader'] = 'Generar espacio-tiempos para rango de fechas';
$string['slotperiodheader_help'] = 'Especificar la fecha de inicio y término al cual se aplicarán los tiempos diarios (sección inferior). especificar aquí también si es que el espacio-tiempo será visible para los estudiantes.';
$string['slotperiodstarttime'] = 'Fecha inicial';
$string['slot_slotvisible'] = 'Miembros visibles solamente si es su propio espacio';
$string['slottimeframesheader'] = 'Marcos de tiempo específicos';
$string['slotto'] = 'para';
$string['slot_visible'] = 'Miembros del espacio siempre visibles';
$string['status_no_entries'] = 'Este organizador no tiene estudiantes registrados';
$string['stroptimal'] = 'óptimo';
$string['studentcomment_title'] = 'Comentarios del estudiante';
$string['taballapp'] = 'Citas programadas';
$string['tabstatus'] = 'Estatus de registro';
$string['tabstud'] = 'Vista del estudiante';
$string['teacher'] = 'Profesor';
$string['teachercomment_title'] = 'Comentarios del profesor';
$string['teacherfeedback_title'] = 'Retroalimentación del profesor';
$string['teacherid'] = 'Profesor';
$string['teacherid_help'] = 'Seleccione al profesor que Usted quiere que lidere las citas programadas';
$string['teacherinvisible'] = 'Profesor invisible';
$string['teacher_unchanged'] = '-- sin-cambio --';
$string['teachervisible'] = 'Profesor visible';
$string['teachervisible_help'] = 'Active esto si Usted quiere permitirles a  los estudiantes que vean al profesor asociado con el horario.';
$string['th_actions'] = 'Acción';
$string['th_appdetails'] = 'Detalles';
$string['th_attended'] = 'Att.';
$string['th_comments'] = 'Comentarios';
$string['th_datetime'] = 'Fecha y hora';
$string['th_datetimedeadline'] = 'Fecha y hora';
$string['th_details'] = 'Estatus';
$string['th_duration'] = 'Duración';
$string['th_email'] = 'Email';
$string['th_evaluated'] = 'Eval';
$string['th_feedback'] = 'Retroalimentación';
$string['th_firstname'] = 'Nombre(s)';
$string['th_grade'] = 'Calificación';
$string['th_group'] = 'Grupo';
$string['th_groupname'] = 'Grupo';
$string['th_idnumber'] = 'Número ID';
$string['th_lastname'] = 'Apellido(s)';
$string['th_location'] = 'Lugar';
$string['th_participant'] = 'Participante';
$string['th_participants'] = 'Participantes';
$string['th_status'] = 'Estatus';
$string['th_teacher'] = 'Profesor';
$string['timeshift'] = 'Moviendo la fecha límite absoluta';
$string['timetemplate'] = '%H:%M';
$string['title_add'] = 'Añadir nuevos espacios para citas';
$string['title_comment'] = 'Editar sus comentarios';
$string['title_delete'] = 'Eliminar espacios de tiempo seleccionados';
$string['title_edit'] = 'Editar espacios de tiempo seleccionados';
$string['title_eval'] = 'Evaluar espacios de tiempo seleccionados';
$string['title_print'] = 'Imprimir espacios';
$string['totalslots'] = 'desde {$a->starttime} hasta {$a->endtime}, {$a->duration} {$a->unit} cada uno, {$a->totalslots} espaciotiempo(s) en total.';
$string['unavailableslot'] = 'Este espacio está disponible desde';
$string['unknown'] = 'Desconocido';
$string['visibility'] = 'Visibilidad de miembros - preconfiguración';
$string['visibility_all'] = 'Visible';
$string['visibility_anonymous'] = 'Anónimo(s)';
$string['visibility_slot'] = 'Solamente visible para miembros del espacio';
$string['warning_groupingid'] = 'Modo de grupo habilitado. Usted debe de seleccionar un agrupamiento válido.';
$string['warninggroupmode'] = '¡Usted debe de habilitar el modo de grupo y seleccionar un agrupamiento para crear un organizador de grupo!';
$string['warningtext1'] = '¡Los espacio-tiempos seleccionados contienen valores diferentes en este campo!';
$string['warningtext2'] = '¡ADVERTENCIA! ¡Los contenidos de este campo han cambiado!';
