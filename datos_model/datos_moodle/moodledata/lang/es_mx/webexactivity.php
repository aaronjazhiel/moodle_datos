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
 * Strings for component 'webexactivity', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   webexactivity
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additionalsettings'] = 'Configuraciones de reuniones adicionales';
$string['allchat'] = 'Los participantes pueden chatear con otros participantes';
$string['apipassword'] = 'Contraseña Admin Webex';
$string['apipassword_help'] = 'La contraseña para una cuenta de administrador en su sitio.';
$string['apisettings'] = 'Configuraciones API';
$string['apiusername'] = 'Nombre_de_usuario de Admin WebEx';
$string['apiusername_help'] = 'El nombre_del_usuario para una cuenta de administrador en su sitio. Esta debería de ser una cuenta dedicada para Moodle por razones de seguridad.';
$string['availabilityendtime'] = 'Hora final de sisponibilidad extendida';
$string['badpassword'] = 'Su nombre_de_usuario y contraseña de WebEx no coinciden.';
$string['badpasswordexception'] = 'Su contraseña de WebEx es incorrecta y no pudo actualizarse.';
$string['confirmrecordingdelete'] = '¿Está seguro de querer eliminar la grabación <b>{$a->name}</b>, con una duración de {$a->time}? Esto no puede deshacerse.';
$string['confirmrecordingsdelete'] = '¿Está seguro de querer eliminar la grabación seleccionada? Esto no puede deshacerse.';
$string['connectionexception'] = 'Ocurrió un error mientras se intentaba conectar: {$a->error}';
$string['curlsetupexception'] = 'Ocurrió un error al configurar curl.';
$string['defaultmeetingtype'] = 'Tipo de reunión por defcto';
$string['defaultmeetingtype_help'] = 'El tipo de reunión que será preseleccionada al crear una nueva reunión.';
$string['deletelink'] = '<a href="{$a->url}">Eliminar</a>';
$string['deletetime'] = 'Hora de eliminación';
$string['deletionin'] = '<div>{$a->time} para la eliminación.</div>';
$string['deletionsoon'] = '<div>Será eliminado pronto..</div>';
$string['description'] = 'Descripción';
$string['directlinks'] = 'Enlaces directos';
$string['directlinkstext'] = '<p>Estos enlaces proporcionan acceso directo a las grabaciones en el seervidor Moodle. El acceso a ellos no requiere ingresar (autenticarse) al sitio, yno se graban en bitácoras.</p><br />
Streaming: <a target="_blank" href="{$a->streamurl}" alt="Streaming link">{$a->streamurl}</a><br />
Descargar: <a target="_blank" href="{$a->fileurl}" alt="Streaming link">{$a->fileurl}</a><br />';
$string['duration'] = 'Duración esperada';
$string['duration_help'] = 'La duración esperada de la reunión. Solamente es para fines informativos, y no afecta el tiempo que puede durar la reunión.';
$string['enablecallin'] = 'Habilitar Telephone Callin';
$string['enablecallin_help'] = 'Habilitar soporte telephony callin para reuniones recien creadas. No habilitarlo a menos que Usted tenga soporte para CALLIN telephony .';
$string['error_'] = '';
$string['errordeletingrecording'] = 'Error al eliminar grabación';
$string['error_HM_AccessDenied'] = 'Se negó el acceso para alojar esta reunión.';
$string['error_JM_InvalidMeetingKey'] = 'Hubo un error en la clave de reunión en WebEx y Usted no puede unirse a esta reunión.';
$string['error_JM_InvalidMeetingKeyOrPassword'] = 'Hubo un error en la clave de reunión o en la contraseña en WebEx y Usted no puede unirse a esta reunión.';
$string['error_JM_MeetingLocked'] = 'Esta reunión está bloqueada y Usted no puede unírsele.';
$string['error_JM_MeetingNotInProgress'] = 'Actualmente la reunión no está en progreso. Es posible que aun no haya empezado, o que ya terminó.';
$string['error_LI_AccessDenied'] = 'El usuari no pudo ser ingresado a WebEx.';
$string['error_LI_AccountLocked'] = 'La cuenta WebEx del usuario está bloqueada.';
$string['error_LI_AutoLoginDisabled'] = 'Los auto ingresos están deshabilitados para este usuario';
$string['error_LI_InvalidSessionTicket'] = 'Su ticket de sesión es inválido. Por favor inténtelo nuevamente.';
$string['error_LI_InvalidTicket'] = 'Su ticket para ingresar es inválido. Por favor inténtelo nuevamente.';
$string['error_unknown'] = 'Ocurrió un error desconocido.';
$string['event_meeting_ended'] = 'Terminó la reunión';
$string['event_meeting_hosted'] = 'Reunión alojada';
$string['event_meeting_joined'] = 'reunión juntada';
$string['event_meeting_started'] = 'Inició la reunión';
$string['event_recording_created'] = 'Grabación creada';
$string['event_recording_deleted'] = 'Grabación eliminada';
$string['event_recording_downloaded'] = 'Grabación descargada';
$string['event_recording_undeleted'] = 'Grabación des-eliminada';
$string['event_recording_viewed'] = 'Grabación vista';
$string['externallinktext'] = '<p>Este enlace es para participantes que no están inscritos en este curso. Los estudiantes en el curso no necesitarán ser comunicados por Email sobre este enlace, ya que ellos pueden simplemente hacer click en el enlace para \'Unirse a reunión\' en la página anterior. Este mensaje debería ser distribuído cuidadosamente - cualquiera con este enlace podrá acceder a esta reunión. Para invitar a otros a la reunión, copie la URL inferior y envíeselas. Si ésta es una reunión pública, este enlace también puede colocarse en un sitio web</p>';
$string['externalpassword'] = 'Los participantes también necesitan conocer la contraseña de la reunión: <b>{$a}</b>';
$string['getexternallink'] = '<a href="{$a->url}">Obtener enlace de participante externo</a>';
$string['host'] = 'Alojar (Host)';
$string['hostmeetinglink'] = '<a href="{$a->url}">Alojar (Host) Reunión</a>';
$string['hostschedulingexception'] = 'El usuario no puede agendar una reunión para este Host.';
$string['inprogress'] = 'En progreso';
$string['invalidtype'] = 'Tipo inválido';
$string['joinmeetinglink'] = '<a href="{$a->url}">Unirse a Reunión</a>';
$string['longavailability'] = 'Disponibilidad extendida';
$string['longavailability_help'] = 'El configurar esta opción dejará disponible la reunión para alojarla hasta el tiempo de Disponibilidad Estendida. Permite reuniones reutilizables para cosas como horas de oficina.';
$string['manageallrecordings'] = 'Gestionar todas las grabaciones WebEx';
$string['manageallrecordings_help'] = 'Gestionar todas las grabaciones del servidor WebEx, no solamente las que tienen actividad Moodle';
$string['meetingclosegrace'] = 'Período de gracia para reunión';
$string['meetingclosegrace_help'] = 'El número de minutos después de la hora de inicio más la duración, después de los cuales se considererá como completa la reunión.';
$string['meetingpassword'] = 'Contraseña de la reunión';
$string['meetingpast'] = 'Esta reunión ha pasado';
$string['meetingsettings'] = 'Configuraciones de la Reunión';
$string['meetingtemplate'] = 'Plantilla WebEx';
$string['meetingtemplate_help'] = 'Nombre de la plantilla que Usted ha configurado en su cuenta WebEx para este tipo de reunión. Déjelo vacío para usar configuraciones por defecto. Nota: el indicar una plantilla inexistente impedirá crear sesiones de este tipo de reunión.';
$string['meetingtype'] = 'Tipo de reunión';
$string['meetingtypes'] = 'Tipos de reunión';
$string['meetingtypes_desc'] = 'Estos son los tipos de reunión WebEx soportados por este módulo. Para cada tipo, Usted puede seleccionar si está "Disponible" (Usted tiene una  licencia para ello en WebEx, y si Usted quiere que se pueda usar desde Moodle), y si Usted quiere que esté "Disponible para todos los usuarios". Los tipos que están "Disponible", pero no "Disponible para todos los usuarios" solamente serán seleccionados por personas con  el permiso mod/webexactivity:allavailabletypes. "Contraseña de reunión requerida" es para decirle al plugin si es que WebEx requiere una contraseña. Use "Generar contraseñas requeridas" debajo para permitir que un usuario no proporcione una contraseña.';
$string['meetingupcoming'] = 'Esta reunión aun no está disponible para unírsele.';
$string['modulename'] = 'Reunión WebEx (WebEx Meeting)';
$string['modulename_help'] = 'La actividad Reunión WebEx (WebEx Meeting) le permite a los instructores agendar reuniones dentro del sistema de conferencia web WebEx*.

Cuando Usted añade la actividad WebEx Meeting, Usted define la fecha y hora de la reunión, y varios parámetros opcionales (tales como duración esperada, una descripción, etc). Los participantes (estudiantes inscritos) pueden entonces Ingresar a la reunión WebEx al hacer click en un enlace para "Unirse a reunión" debajo de la actividad en Moodle (los profesores verán un enlace que dice "Alojar Reunión"). Si la reunión es grabada, los estudiantes podrán ver la grabación después  de que termine la reunión.

* WebEx es un sistema de conferencia web que le permite a estudiantes y profesores el colaborar sincrónicamente. Transmite audio y video en-tiempo-real, e incluye herramientas tales como pizarrón, chat y compartir escritoro.';
$string['modulenameplural'] = 'Reuniones WebEx';
$string['page_managerecordings'] = 'Gestionar Grabaciones';
$string['page_manageusers'] = 'Gestionar Usuarios';
$string['pluginadministration'] = 'Administración de Reunión WebEx';
$string['pluginname'] = 'Reunión WebEx (WebEx Meeting)';
$string['pluginnamepural'] = 'Reuniones WebEx';
$string['prefix'] = 'Prefijo de nombre_de_usuario';
$string['prefix_help'] = 'Esta cadena será prefijada a todoslos nombres_de_usuarios cresdos por este módulo.';
$string['recordingfileurl'] = 'Descargar';
$string['recordinglength'] = '({$a->time}, {$a->size})';
$string['recordingname'] = 'Nombre de grabación';
$string['recordings'] = 'Grabaciones';
$string['recordingsettings'] = 'Configuraciones de Grabaciones';
$string['recordingstreamurl'] = 'Reproducir';
$string['recordingtrashtime'] = 'Hora de reciclado de grabación';
$string['recordingtrashtime_help'] = 'Número d ehoras que se conservará un agrabación antes de eliminarse permanentemente.';
$string['requiremeetingpassword'] = 'Requerir contraseñas de reunión';
$string['requiremeetingpassword_help'] = 'Requerir que el usuario ingrese una contraseña para la grabación. Si se deja sin activar, y el tipo de reunión está marcada arriba como que requiere contraseña, se generará aleatoriamente una contraseña.';
$string['search:activity'] = 'Reuniones WebEx - información de actividad';
$string['selectnone'] = 'Des-seleccionar todo';
$string['settings'] = 'Configuraciones de Reunión WebEx';
$string['sitename'] = 'Nombre del Sitio';
$string['sitename_help'] = 'La parte del URL antes de .webex.com.Si la URL de su sitio fuera "https://ejemplo.webex.com", Usted escribiría arriba "ejemplo".';
$string['startssoon'] = 'Comenza pronto';
$string['starttime'] = 'Hora de inicio';
$string['stream'] = 'Torrente (Stream)';
$string['studentdownload'] = 'Permitirle a estudiantes que descarguen grabaciones';
$string['studentdownload_help'] = 'Permitirle a los estudiantes que accedan al enlace a descarga para la sgrabaciones.';
$string['studentvisible'] = 'Visible a estudiantes';
$string['task_deleterecordings'] = 'Purgar grabaciones eliminadas';
$string['task_updateallrecordings'] = 'Actualizar todas las grabaciones';
$string['task_updatemediumrecordings'] = 'Actualizar grabaciones pasadas medianas';
$string['task_updateopensessions'] = 'Actualizar sesiones abiertas';
$string['task_updaterecentrecordings'] = 'Actualizar grabaciones pasadas recientes';
$string['typeforall'] = 'Disponible para todos los usuarios';
$string['typeinstalled'] = 'Disponible';
$string['typemeetingcenter'] = 'Centro de Reunión';
$string['typemeetingcenter_desc'] = '';
$string['typepwreq'] = 'Contraseña de reunión requerida';
$string['typetrainingcenter'] = 'Centro de Entrenamiento';
$string['typetrainingcenter_desc'] = '';
$string['undeletelink'] = '<a href="{$a->url}">Des-eliminar</a>';
$string['unknownhostwebexidexception'] = 'ID de Host WebEx no existe';
$string['usereditauto'] = 'Su usuario WebEx es gestionado internamente, y no puede ser editado.';
$string['usereditbad'] = 'Used no debería de haber llegado a esta página.';
$string['usereditunabletoload'] = 'No se puede cargar su usuario desde WebEx.';
$string['userexistsexplanation'] = 'Su dirección Email ({$a->email}) ya está en uso por el Usuario WebEx <b>{$a->username}</b>. Por favor ingrese debajo su contraseña WebEx.';
$string['webexactivity:addinstance'] = 'Añadir una nueva Reunión WebEx';
$string['webexactivity:allavailabletypes'] = 'Crear reuniones de todos los tipos instalados';
$string['webexactivity:hostmeeting'] = 'Alojar y gestionar Reunión WebEx';
$string['webexactivityname'] = 'Nombre de Reunión';
$string['webexactivity:reports'] = 'Usar reportes WebEx';
$string['webexactivity:view'] = 'Ver reunión WebEx';
$string['webexid'] = 'ID de WebEx';
$string['webexrecordings'] = 'Grabaciones WebEx';
$string['webexusercollision'] = 'Colisión con usuario WebEx.';
$string['webexxmlexception'] = 'Ocurrió un error en WebEx al procesar  XML: {$a->errorcode} {$a->error}';
