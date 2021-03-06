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
 * Strings for component 'grouptool', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   grouptool
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activated_groups'] = '¡Grupos activados!';
$string['active'] = 'Activo';
$string['activegroups'] = 'Grupos activos';
$string['added_member'] = 'Se añadió {$a->username} al grupo {$a->groupname}';
$string['add_member'] = 'Añadir {$a->username} al grupo {$a->groupname}';
$string['administration'] = 'Administración';
$string['administration_alt'] = 'Creación de grupo/agrupamiento, y configuraciones para grupos activos de esta instancia';
$string['agroups'] = 'Grupos activos';
$string['ajax_edit_size_help'] = 'Guardar nuevo tamaño con &lt;Enter&gt;, use &lt;ESC&gt; para lograr abortar, deje vacío para eliminar tamaño individual';
$string['all_groups_full'] = 'El usuario con ID {$a} no pudo registrarse en ningun grupo ¡ porque todos los grupos están llenos !';
$string['allowed'] = 'Permitido';
$string['allow_multiple'] = 'Registros múltiples';
$string['allow_multiple_help'] = 'Permitirle a los estudiantes que se registren en más de 1 grupo al mismo tiempo. Usted tiene que especificar cuantos grupos tienen al menos para escoger  (= grupos mínimos para escoger) y cuantos grupos tienen permitidos como máximo para escoger (= grupos máximos para escoger).';
$string['allow_reg'] = 'Habilitar auto registro';
$string['allow_reg_help'] = 'Habilitar auto registro para estudiantes, de forma tal que puedan registrarse ellos mismos en los grupos activos, que son escogidos debajo.';
$string['allow_unreg'] = 'Permitir des-registro';
$string['allow_unreg_help'] = 'Permitirles a los estudiantes des-registrarse de, o cambiarse a otros grupos antes de la fecha-límite (opcional).';
$string['already_marked'] = '¡Este grupo ya estaba marcado para registro!';
$string['already_member'] = '{$a->username} ya es miembro del grupo {$a->groupname}';
$string['already_occupied'] = 'El lugar en el grupo {$a->grpname}ya está ocupado, porque otro usuario completó el registro más rápidamente. ¡Por favor, busque otro grupo! is already occupied because another user completed the registration faster. Please look for another group!';
$string['already_queued'] = '{$a->username} ya está formado en la cola para el grupo {$a->groupname}!';
$string['already_registered'] = '¡{$a->username} ya está registrado en el grupo {$a->groupname}!';
$string['alwaysshowdescription'] = 'Siempre mostrar descripción';
$string['alwaysshowdescription_help'] = 'Si se deshabilita, la descripción de arriba solamente se volverá visible para los estudiantes durante el período de registro.';
$string['asterisk_marks_moodle_registrations'] = 'Los usuarios con un asterisco inicial (*) ya están registrados en el Grupo-Moodle respectivo';
$string['availabledate'] = 'Inicio del registro';
$string['availabledate_help'] = 'Inicio del período de registro. Después de esta fecha los estudiantes pueden registrarse ellos mismos en los grupos seleccionados (si estuviera habilitado).';
$string['availabledateno'] = 'Siempre disponible';
$string['cant_enrol'] = 'No pued inscribir usuario automáticamente en curso.';
$string['cfg_addinstanceset_head'] = 'Configuraciones de instancia adicional';
$string['cfg_addinstanceset_head_info'] = 'Configuraciones adicionales para herramientagrupo.';
$string['cfg_admin_head'] = 'Configuraciones por defecto en administración de vista';
$string['cfg_admin_head_info'] = 'Configuraciones estándar para pestaña de administración en vista-herramientagrupo.';
$string['cfg_allow_multiple'] = 'Registros múltiples';
$string['cfg_allow_multiple_desc'] = 'Permitir por defecto a estudiantes que se registren en más de un grupo al mismo tiempo.';
$string['cfg_allow_reg'] = 'Permitir auto registro';
$string['cfg_allow_reg_desc'] = 'Habilitar por defecto que los estudiantes se registren ellos mismos';
$string['cfg_allow_unreg'] = 'Permitir des-registro';
$string['cfg_allow_unreg_desc'] = '¿Pueden los usuarios des-registrarse ellos mismos y cambiar de grupo?';
$string['cfg_choose_max'] = 'Elegir máximo';
$string['cfg_choose_max_desc'] = '¿En cuantos grupos se pueden registrar los usuarios al mismo tiempo por defecto?';
$string['cfg_choose_min'] = 'Elegir mínimo';
$string['cfg_choose_min_desc'] = '¿Cuantos grupos tienen los usuarios como mínimo para elegir por defecto?';
$string['cfg_force_importreg'] = 'Forzar registro en herramientagrupo';
$string['cfg_force_importreg_desc'] = 'Forzar mediante herramientagrupo en grupo-Moodle que los usuarios importados sean registrados a la fuerza en esa instancia de grupo también.';
$string['cfg_grpsize'] = 'Tamaño de grupo estándar global';
$string['cfg_grpsize_desc'] = 'Tamño de grupo estándar usado en todas partes en herramientagrupo';
$string['cfg_ifgroupdeleted'] = 'Si los grupos son eliminados';
$string['cfg_ifgroupdeleted_desc'] = 'Los grupos eliminados ¿deberían de ser recreados para la instancia de herramientagrupo o deberían de ser eliminadas las referencias en herramientagrupo (incluyendo datos-del-grupo, registros y cola)? Nota: Si Usted selecciona "recrear grupo", entonces los grupos serán recreados automáticamente después de la eliminación debajo de "Administración del grupo / Usuarios / Grupos".';
$string['cfg_ifmemberadded'] = 'si los grupos son añadidos';
$string['cfg_ifmemberadded_desc'] = 'Los nuevos miembros de grupo añadidos mediante Moodle, ¿ deberían de añadirse también en herramientagrupo, o ser ignorados?';
$string['cfg_ifmemberremoved'] = 'si son eliminados miembros de grupo';
$string['cfg_ifmemberremoved_desc'] = '¿Deberían los registros de herramientagrupo ser eliminados si los usuarios son eliminados del grupo-Moodle correspondiente?';
$string['cfg_immediate_reg'] = 'Registro inmediato';
$string['cfg_immediate_reg_desc'] = '¿Deberían de pasarse a los grupos de Moodle todos los registros?';
$string['cfg_importfields'] = 'Comparar campos para importar';
$string['cfg_importfields_desc'] = 'Define cuales campos en la tabla de usuario van a ser comparados con los datos al importar usuarios. Estos campos son buscados uno-a-uno hasta que se encuentre una concordancia única. Los valores posibles/útiles son por ejemplo: username, idnumber, email. ATENCIÓN: no hay revisión para nombres de campo correctos. Caracteres permitidos: a-z, A-Z y \',\\';
$string['cfg_instance_head'] = 'Configuraciones por defecto de instancia';
$string['cfg_instance_head_info'] = 'Configuraciones por defecto para nuevas instancias de herramientagrupo.';
$string['cfg_max_queues'] = 'Lugares-en-cola máximos simultáneos por participante';
$string['cfg_max_queues_desc'] = 'Determina en cuantos grupos diferentes se puede poner en cola un usuario al mismo tiempo por defecto.';
$string['cfg_moodlesync_head'] = 'Comportamiento de sincronización';
$string['cfg_moodlesync_head_info'] = 'Como debería de comportarse herramientasgrupo si los miembros de grupo de Moodle son añadidos/eliminados o si se eliminan grupos únicos';
$string['cfg_name_scheme'] = 'Esquema de nombre estándar';
$string['cfg_name_scheme_desc'] = 'Esquema de nombre estándar usado para creación de grupo';
$string['cfg_show_members'] = 'Mostrar miembros de grupo';
$string['cfg_show_members_desc'] = 'Determina si es que los miembros del grupo deberían ser visibles por defecto';
$string['cfg_use_individual'] = 'Usar tamaño individual';
$string['cfg_use_individual_desc'] = 'Si por defecto debería de usarse un tamaño de grupo individual para cada grupo';
$string['cfg_use_queue'] = 'Usar cola';
$string['cfg_use_queue_desc'] = 'Si deberían de usarse por defecto colas para registro en grupos llenos.';
$string['cfg_use_size'] = 'Usar tamaño del grupo';
$string['cfg_use_size_desc'] = 'Si por defecto debería estar limitado el tamaño de grupo';
$string['change_group'] = 'Cambiar grupo';
$string['change_group_to'] = '¿Continuar con cambiar-grupo a {$a->groupname}?';
$string['change_group_to_success'] = '¡Cambiar-grupo exitoso! {$a->username} ahora está registrado en el grupo {$a->groupname}!';
$string['checkbox_control_header'] = 'De-/seleccionar grupos y agrupamientos';
$string['checkbox_control_header_help'] = '<p>Al usar esta función Usted puede activar / desactivar grupos de uno o más agrupamientos adentro de su grouptool:
<ol>
<li>Elegir en el campo de selección-múltiple "Todos" (todos los grupos disponibles serán activados / desactivados), un agrupamiento o varios agrupamientos (al usar Ctrl + Click).</li>
<li>Use una de las siguientes opciones "Seleccionar/ Des-seleccionar/ Invertir":
<ul>
<li><b>Seleccionar:</b> Los grupos de los agrupamiento(s) seleccionados serán activados.</li>
<li><b>Des-seleccionar:</b> Los grupos de los agrupamientos  seleccionados serán desactivados </li>
<li><b>Invertir:</b> Todos los grupos de los agrupamientos no-elegidos serán activados. </li>
</ul>
</li>
<li>Asuma su elección al hacer click en el botón "Ir".</li>
</ol>
</p>';
$string['choose'] = 'Elegir...';
$string['chooseactivity'] = 'Usted tiene que elegir un actividad antes de que puedan mostrar datos.';
$string['choose_group'] = '¡Usted debe elegir un grupo destino!';
$string['choose_max'] = 'Máximo de grupos a elegir';
$string['choose_max_text'] = '¡Usted tiene permitido elegir como máximo  <span style="font-weight:bold;">{$a}</span> grupo(s)!';
$string['choose_min'] = 'Máximo de grupos a elegir';
$string['choose_min_max_text'] = '¡Usted tiene que elegir entre <span style="font-weight:bold;">{$a->min}</span> y <span style="font-weight:bold;">{$a->max}</span> grupos!';
$string['choose_minmax_title'] = 'Grupos para elegir';
$string['choose_min_text'] = 'Usted tiene que elegir al menos <span style="font-weight:bold;">{$a}</span> grupo(s)!';
$string['choose_targetgroup'] = 'Importar al grupo';
$string['condition_prevent_access'] = '¡Las condiciones actuales le impiden a Usted acceder a la instancia de revisarmarca (checkmark)!';
$string['confirm_delete'] = 'Usted está a punto de eliminar completamente el grupo. Esto quitará a todos los miembros de este grupo de una forma irrecuperable. ¿Está Usted SEGURO de que desea continuar?';
$string['confirm_delete_title'] = '¿Realmente quiere eliminar este elemento?';
$string['copied_grade_feedback'] = 'Calificación del grupo<br />
+Envío de: {$a->student}<br />
+Calificado por: {$a->teacher}<br />
+Fecha/Hora Original: {$a->date}<br />
+Retroalimentación: {$a->feedback}';
$string['copy'] = 'Copiar';
$string['copy_chosen'] = 'Copiar elegido';
$string['copygrade'] = 'Copiar calificación';
$string['copy_grade_confirm'] = '¿Continuar copiando esta calificación?';
$string['copy_grade_overwrite_confirm'] = '¿Continuar copiando esta calificación? ¡Las calificaciones previas existentes serán sobre-escritas!';
$string['copy_grades_confirm'] = '¿Continuar copiando estas calificaciones?';
$string['copy_grades_errors'] = 'Ocurrió al menos un error al copiar las calificaciones:';
$string['copy_grades_overwrite_confirm'] = '¿Continuar copiando estas calificaciones? ¡Las calificaciones anteriores existentes serán sobre-escritas!';
$string['copy_grades_success'] = 'Las calificaciones siguientes fueron actualizadas exitosamente:';
$string['copy_refgrades_feedback'] = 'Copiar retroalimentaciones y calificaciones de referencia para grupos seleccionados y miembros de otro grupo.';
$string['could_not_add'] = 'No pudo añadirse {$a->username} al grupo {$a->groupname}';
$string['create_1_person_groups'] = 'Crear grupos de 1 persona';
$string['create_assign_groupings'] = 'Crear/Asignar agrupamientos';
$string['create_fromto_groups'] = 'Crear grupos con números de un intervalo (por ejemplo, de 34 a 89).';
$string['create_groupings_confirm'] = '¿Continuar creando agrupamientos como se previsualizaron arriba?';
$string['create_groupings_confirm_problem'] = '¡Ocurrió al menos un error (refiérase a la vista previa de arriba)!';
$string['createGroups'] = 'Crar grupos';
$string['create_groups_confirm'] = '¿Continuar creando grupos como se previsualizaron arriba?';
$string['create_groups_confirm_problem'] = 'Fueron encontrados conflictos al tratar de crear los nuevos grupos basados en el esquema dado del nombre - vea vista previa - Los grupos de Moodle deben de tener nombres únicos. El conflicto puede ser debido a grupos existentes con el mismo nombre o a un error de sintaxis en el esquema de nombrarlos (por ejemplo, vacío, símbolo # faltante).';
$string['createinsertgrouping'] = 'Añadir al agrupamiento';
$string['deactivated_groups'] = '¡Grupos desactivados!';
$string['define_amount_groups'] = 'Definir número de grupos';
$string['define_amount_members'] = 'Definir número de miembros de grupos';
$string['delete_reference'] = 'Eliminar de herramientagrupo';
$string['description'] = 'Descripción';
$string['deselect'] = 'Des-seleccionar';
$string['determinismerror'] = 'El fin del registro no puede ser antes del inicio del registro ni estar en el pasado.';
$string['digits'] = 'Dígitos mínimo';
$string['disabled'] = 'Deshabilitado';
$string['drag'] = 'Mover';
$string['due'] = 'Herramientagrupo pendiente';
$string['duedate'] = 'Fin del registro';
$string['duedate_help'] = 'Fin del período de registro. Después de esta fecha, los estudiantes ya no podrán registrarse ellos mismos y el profesor obtiene acceso para resolver-colas-funcionalidad, etc.';
$string['duedateno'] = 'Sin fecha prometida';
$string['early'] = '{$a} tempranamente';
$string['error_at'] = 'Error en';
$string['error_getting_data'] = '¡Error al obtener datos del grupo! ¡Ya sea que ningun grupo o más de un grupo fueron regresados!';
$string['eventagrpcreated'] = 'Grupo-activo creado';
$string['eventagrpdeleted'] = 'Grupo-activo eliminado';
$string['eventagrpsupdated'] = 'Grupo-activo actualizado';
$string['eventdequeuingstarted'] = 'Quitando de cola iniciado';
$string['eventgroupcreationstarted'] = 'Creación-de-grupo iniciada';
$string['eventgroupgraded'] = 'Grupo calificado';
$string['eventgroupingscreated'] = 'Agrupamientos creados';
$string['eventgrouprecreated'] = 'Grupo recreado';
$string['eventoverviewexported'] = 'Vista general exportada';
$string['eventqueueentrycreated'] = 'Entrada en cola creada';
$string['eventqueueentrydeleted'] = 'Entrada en cola eliminada';
$string['eventregistrationcreated'] = 'Registro creado';
$string['eventregistrationdeleted'] = 'Registro eliminado';
$string['eventregistrationpushstarted'] = 'Empuje de registro iniciado';
$string['eventuserimported'] = 'Usuario importado';
$string['eventuserlistexported'] = 'Lista-de-usuarios exportada';
$string['eventusermoved'] = 'Usuario movido';
$string['feedbackplural'] = 'Retroalimentaciones';
$string['filters_legend'] = 'Filtrar datos';
$string['followchanges'] = 'Seguir cambios';
$string['forceregistration'] = 'Forzar registro en herramientagrupo';
$string['forceregistration_help'] = 'Tome nota de que los grupos de herramientagrupo difieren fundamentalmente de los grupos estándar de Moodle del curso. Active la casilla si Usted quiere importar los usuarios dentro del grupo de herramientagrupo además de importarlos al grupo estándar de Moodle.';
$string['found_multiple'] = 'No puede identificar único, se encontaron múltiples usuarios:';
$string['free'] = 'Gratuito';
$string['fromgttoerror'] = 'El valor de hasta- tiene que ser mayor o igual al valor de desde-';
$string['fullgroup'] = 'El grupo está lleno';
$string['general_information'] = 'Información general';
$string['global_userstats'] = '{$a->reg_users} de {$a->users} usuarios están registrados. {$a->notreg_users} todavía sin registro.';
$string['grading'] = 'Calificar';
$string['grading_activity_title'] = 'Actividad';
$string['grading_alt'] = 'Herramientas para copiar calificaciones de 1 miembro del grupo a todos los demás en el grupo, ya sea para un grupo o para un conjunto de grupos.';
$string['grading_filter_select_title'] = 'Grupo o grupos';
$string['grading_grouping_select_title'] = 'Filtrar agrupamiento';
$string['group_administration'] = 'Administrar grupos';
$string['group_administration_alt'] = 'Administrar grupos (activos) y agrupamientos';
$string['group_assign_error'] = '¡No pudo asignarse grupo!';
$string['group_assign_error_prev'] = '¡No puede asignarse grupo!';
$string['groupcreation'] = 'Cración de grupo';
$string['group_creation'] = 'Crear grupos';
$string['group_creation_alt'] = 'Crear grupos';
$string['group_creation_failed'] = '¡Falló la creación de grupos!';
$string['groupcreationmode'] = 'Modo';
$string['group_creation_success'] = '¡Grupos creados exitosamente!';
$string['groupfromtodigits'] = 'Desde, hasta &amp; dígitos en nombres de grupos:';
$string['groupinfo'] = 'Información del grupo';
$string['grouping_assign_error'] = 'NO pudo asignarse exitosamente al agrupamiento:';
$string['grouping_assign_error_prev'] = 'NO puede asignarse exitosamente al agrupamiento:';
$string['grouping_assign_success'] = 'Fue asignado exitosamente:';
$string['grouping_assign_success_prev'] = 'Puede ser asignado exitosamente:';
$string['grouping_creation_error'] = '¡No pudo crearse agrupamiento!';
$string['grouping_creation_error_prev'] = '¡No puede crearse agrupamiento!';
$string['grouping_creation_only_success'] = '¡Agrupamiento creao exitosamente';
$string['grouping_creation_only_success_prev'] = '¡El agrupamiento puede crearse exitosamente!';
$string['grouping_creation_success'] = '¡Se creao agrupamiento exitosamente y se le asignó el grupo{$a}!';
$string['grouping_creation_success_prev'] = '¡Puede crearse exitosamente agrupamiento y asignarle el grupo {$a} !';
$string['grouping_exists_error'] = '¡No pudo crearse agrupamiento porque ya existe un agrupamiento con este mismo nombre!';
$string['grouping_exists_error_prev'] = '¡No puede crearse agrupamiento porque ya existe un agrupamiento con este mismo nombre!';
$string['groupings_created_and_groups_added'] = '¡Agrupamiento(s) creado y/o grupo(s) añadido(s)!';
$string['groupingscreation'] = 'Crear y asignar agrupamientos';
$string['groupingselect'] = 'Agrupamientos para los grupos seleccionados';
$string['groupingselect_help'] = 'Creando agrupamientos para los grupos seleccionados:<ul>
<li>Crear UN agrupamiento para todos los grupos seleccionados. El nombre del agrupamiento puede ser elegido libremente.</li>
<li>Crear un agrupamiento para CADA grupo seleccionado. El agrupamiento es nombrado de acuerdo al grupo respectivo.</li>
<li>Añadir grupos seleccionados a un agrupamiento existente</li></ul>';
$string['group_not_found'] = '¡El grupo {$a->groupid} no pudo encontrarse en herramientagrupo {$a->grouptoolid}!';
$string['group_not_in_grouping'] = '¡El grupo elegido no es miembro del agrupamiento elegido!';
$string['group_or_member_count'] = 'Número de Grupos/Miembros';
$string['groupoverview'] = 'Vista general del grupo';
$string['group_places'] = 'Lugares del grupo';
$string['groups_created'] = '¡Grupos creados exitosamente!';
$string['groupselection'] = 'Selección de grupo';
$string['groupselection_help'] = 'Elegir los grupos / las personas para los que Usted desea copiar la calificación-referencia y retroalimentación-referencia elegidas al activar la casilla correspondiente. Si solamente 1 grupo es mostrado, Usted selecciona el origen para copiar la calificación elegida al usar el botón correspondiente a la derecha de la entrada.';
$string['groupsize'] = 'Tamño del grupo';
$string['groupstatus'] = 'Estatus';
$string['groupstatus_help'] = 'El estado actual de un grupo es visualizado por el color:<ul><li>Verde - grupo activo. El grupo es asignado a esta herramientagrupo. Si está activo el auto-registro, los estudiantes pueden registrarse a este grupo.</li><li>Rojo - grupo inactivo. El grupo no está disponible en esta herramientagrupo.</li></ul>El estatus puede cambiarse al hacer click en el símbolo.';
$string['grouptool'] = 'Herramientagrupo';
$string['grouptool:addinstance'] = 'Añadir una instancia de herramientagrupo al curso.';
$string['grouptool:administrate_groups'] = 'Administra grupos (activos) y agrupamientos';
$string['grouptool:create_groupings'] = 'Crear agrupamientos usando herramientagrupo.';
$string['grouptool:create_groups'] = 'Crear grupos usando herramientagrupo';
$string['grouptool:export'] = 'Exportar datos de registro y de grupo a diferentes formatos';
$string['grouptoolfieldset'] = 'Configuraciones de instancia';
$string['grouptool:grade'] = 'Copiar calificaciones de un miembro-de-grupo a otros';
$string['grouptool:grade_own_group'] = 'Copiar calificaciones de un miembro-del-grupo a otros si la calificación original fue dada por mí';
$string['grouptool:move_students'] = 'Mover estudiantes hacia otros grupos.';
$string['grouptoolname'] = 'Nombre de herramientagrupo';
$string['grouptoolname_help'] = 'El nombre de la instancia-herramientagrupo';
$string['grouptool:register'] = 'Registrarse a sí mismo en un grupo activo usando herramientagrupo';
$string['grouptool:register_students'] = 'Registrar estudiantes en un grupo activo usando grouptool. (También usado para resolver colas)';
$string['grouptool:view_description'] = 'Ver descripción de herramientagrupo';
$string['grouptool:view_groups'] = 'Ver grupos activos';
$string['grouptool:view_own_registration'] = 'Ver registro(s)  propio(s)';
$string['grouptool:view_registrations'] = 'Ver quien está registrado/en-cola en cual grupo activo usando herramientagrupo';
$string['grouptool:view_regs_course_overview'] = 'Ver una lista de usuarios conteniendo quien está registrado/en-cola en cual grupo activo usando heramientagrupo.';
$string['grouptool:view_regs_course_view'] = 'Ver una lista de usuarios conteniendo quien está registrado/en-cola en cual grupo activo usando heramientagrupo.';
$string['grouptool:view_regs_group_overview'] = 'Ver una lista de usuarios conteniendo quien está registrado/en-cola en cual grupo activo usando heramientagrupo.';
$string['grouptool:view_regs_group_view'] = 'Ver una lista agrupada conteniendo quien está registrado/en-cola en cual grupo activo usando heramientagrupo.';
$string['groupuser_import'] = 'Importar usuarios de grupo';
$string['grp_marked'] = 'Marcado para registro';
$string['grpsizezeroerror'] = 'El tamaño del grupo debe ser un número entero positivo (>= 1)';
$string['ifgroupdeleted'] = 'si el grupo es eliminado';
$string['ifgroupdeleted_help'] = 'Los grupos eliminados ¿deberían de ser recreados para la instancia de herramientagrupo o deberían de ser eliminadas las referencias en herramientagrupo (incluyendo datos-del-grupo, registros y cola)? Nota: Si Usted selecciona "recrear grupo", entonces los grupos serán recreados automáticamente después de la eliminación debajo de "Administración del grupo / Usuarios / Grupos".';
$string['ifmemberadded'] = 'si son añadidos miembros del grupo';
$string['ifmemberadded_help'] = '¿Deberían los nuevos miembros de grupo añadidos via Moodle ser también registrados en herramientagrupo o deberáin ser ignorados?';
$string['ifmemberremoved'] = 'si son removidos miembros del grupo';
$string['ifmemberremoved_help'] = '¿Deberían los registros de herramientagrupo ser eliminados si los usuarios son eliminados del grupo-Moodle correspondiente?';
$string['ignorechanges'] = 'Ignorar cambios';
$string['ignored_not_found_users'] = '¡Al menos un usuario no pudo ser añadido al grupo!';
$string['ignoring_not_found_users'] = 'Al menos un usuario no se encontró en la BasedeDatos. ¡Todos esos usuarios serán ignorados!';
$string['immediate_reg'] = 'Registros inmediatos';
$string['immediate_reg_help'] = 'Si se habilita, el des-registro será enviado al sistema de Moodle. Si no se habilita, los registros son cacheados y pueden ser empujados al sistema Moodle por el profesor.';
$string['import'] = 'Importar';
$string['importbutton'] = 'Importar usuarios';
$string['import_desc'] = 'Importar usuarios mediante lista de números-ID dentro de ciertos grupos';
$string['import_in_inactive_group_rejected'] = 'El registro en el grupo "{$a}" de grouptol ha sido rechazado por causa de su inactividad. Active el grupo en este grouptool ara habilitar el registro.';
$string['import_in_inactive_group_warning'] = 'Nota: El grupo "{$a}" actualmente está inactivo en el contexto de herramientagrupo y por lo tanto no se mostrará. La importación solamente tendrá lugar en el grupo Moodle. ¡No habrá registro en esta instancia de Herramientagrupo!';
$string['import_progress_completed'] = 'Importación completada';
$string['import_progress_import'] = 'Importar usuario';
$string['import_progress_preview_completed'] = 'Importar-vista-previa completada';
$string['import_progress_search'] = 'Buscar usuario';
$string['import_progress_start'] = 'Iniciar importación';
$string['import_user'] = 'Importar {$a->fullname} ({$a->idnumber}) en grupo {$a->groupname} exitosa.';
$string['import_user_prev'] = 'Importar {$a->fullname} ({$a->idnumber}) en grupo {$a->groupname}.';
$string['import_user_problem'] = 'Problema duarnte la importación de {$a->fullname}({$a->idnumber} - {$a->id}) en grupo {$a->groupname}.';
$string['inactive'] = 'Inactivo';
$string['inactivegroups'] = 'Grupos inactivos';
$string['includedeleted'] = 'Incluir usuarios eliminados';
$string['includedeleted_help'] = 'Si se activa, los usuarios eliminados no serán filtrados afuera de la lista. Las cuentas de usuarios eliminadas no pueden ser inscritas en el curso durante el proceso de importación.';
$string['incomplete_only_label'] = 'Mostrar solamente grupos con calificaciones faltantes';
$string['individual_size_info'] = '* Tamaño-de-grupo de configuraciones herramientagrupo';
$string['intro'] = 'DFescripción';
$string['invert'] = 'Invertir';
$string['landscape'] = 'Apaisado';
$string['late'] = '{$a} tardío';
$string['loading'] = 'cargando...';
$string['maxmembers'] = 'Tamaño de grupo global';
$string['max_queues_reached'] = '¡Colas máximas alcanzadas!';
$string['max_regs_reached'] = '¡Registros máximos alcanzados!';
$string['messageprovider:grouptool_moveupreg'] = 'Registro mediante ascenso en la cola';
$string['missing_source_selection'] = '¡No se seleccionaron orígenes!';
$string['modulename'] = 'Herramientagrupo';
$string['modulename_help'] = 'El módulo de Herramientagrupo sirve para diferentes tipos de quehaceres relacionados con los grupos:<ul><li>Permite crear grupos en diferentes modos  (cantidad de grupos/miembros del grupo, grupos de una persona, intervalos de grupos), además de agrupamientos para cada grupo.</li><li>Además, puede usarse para darle a los estudiantes la oportunidad de registrarse ellos mismos a ciertos grupos durante un período definido.</li><li>El módulo también tiene la habilidad de calificar por grupos, por ejemplo al copiar calificaciones de actividad de un miembro del grupo a otros miembros del grupo.</li><li>Importación de usuarios adentro de grupos mediante una lista de números de ID (ID-numbers)</li><li>vista general de todos los grupos del curso incluyendo a todos los registros, miembros, colas en espera, etc. Y la habilidad para exportar estos datos hacia diferentes formatos de archivos (PDF/XLSX/ODS/TXT).</li><li>Lista exportable de todos los usuarios del curso incluyendo sus registros, colas en espera, etc.</li></ul><p>(!) Tome nota de que los grupos en la Herramientagrupo difieren fundamentalmente de los grupos estándar de Moodle del curso. Para asegurar consistencia entre los tipos de grupos, configure las parámetros de la sección  "Comportamiento a los cambios en Moodle" a "seguir cambios".</p>';
$string['modulenameplural'] = 'Herramientagrupos';
$string['moodlesync'] = 'Comportamiento sobre cambios en Moodle';
$string['moodlesync_help'] = 'Como debería de comportarse herramientasgrupo si los miembros de grupo de Moodle son añadidos/eliminados o si se eliminan grupos únicos';
$string['movedown'] = 'Mover 1 abajo';
$string['moveup'] = 'Mover 1 arriba';
$string['mustbegt0'] = 'Debe ser un número entero mayor o igual a 0 (>= 0)';
$string['mustbegtoeqmin'] = 'Debe ser mayor que o igual al mínimo';
$string['mustbeposint'] = 'Tiene que ser un número entero positivo (>= 1).';
$string['must_specify_groupingname'] = '¡Usted tiene que proporcionar un nombre para este agrupamiento!';
$string['mygroups_only_label'] = 'Mostrar solamente las entradas orígen que yo califiqué';
$string['nameschemenotunique'] = 'Los nombres de grupos de este esquema  de nombre no son únicos ({$a}). Por favor, elija otro  o use # (índice numérico) o @ (índice alfabético) para crear nombres únicos de grupo.';
$string['name_scheme_tags'] = '<span class="tag firstname">[firstname]</span>
<span class="tag lastname">[lastname]</span>
<span class="tag idnumber">[idnumber]</span>
<span class="tag username">[username]</span>
<span class="tag alpha">@</span>
<span class="tag number">#</span>';
$string['namingscheme'] = 'Nombrar esquema';
$string['noaccess'] = '¡Usted no tiene acceso a este módulo (¿posiblemente Usted no pertenece al grupo correcto?)!';
$string['nobody_queued'] = 'Nadie en cola';
$string['no_conflictfree_to_display'] = 'No hay grupos-sin-conflicto para mostrar. ¡Por eso, en su lugar trataremos de mostrar a todos!';
$string['no_data_to_display'] = '¡No hay datos de grupo(s) para mostrar!';
$string['no_grades_present'] = 'Sin calificaciones para mostrar';
$string['nogroupingselected'] = '¡No se han seleccionado agrupamientos!';
$string['no_groupmembers_to_display'] = 'No hay miembros de grupo para mostrar. ¡Por eso, en su lugar trataremos de mostrar a todos los grupos!';
$string['nogroups'] = 'Sin grupos en este curso.';
$string['nogroupsactive'] = 'No hay grupos activos en este grouptool.';
$string['nogroupschoose'] = 'Elegir grupos';
$string['nogroupscreate'] = 'Crear grupos';
$string['nogroupsinactive'] = 'No hay grupos inactivos en este grouptool.';
$string['no_groups_to_display'] = '¡Sin grupos para mostrar!';
$string['nogrouptools'] = '¡No hay grouptools!';
$string['nonconflicting'] = 'Sin conflictos';
$string['no_queues_to_resolve'] = '¡No hay consultas presentes para resolver!';
$string['noregistrationdue'] = 'ilimitado';
$string['no_registrations'] = 'Sin registros';
$string['nosmallgroups'] = 'Evitar grupos pequeños';
$string['nosmallgroups_help'] = '¡ Si se habilita, asegura que cada grupo al menos lleno al 70% de su tamaño! ¡ Si algún (o más precisamente, si el último) grupo sería llenado a menos del 70%, los usuarios de este último grupo se repartirán entre los otros grupos, causándoles que tengan más miembros de los especificados !';
$string['not_allowed_to_show_members'] = '¡Usted no tiene permiso para ver esta información!';
$string['no_target_selected'] = 'No hay destino para la operación de copia seleccionada. ¡Usted debe seleccionar al menos 1 destino!';
$string['not_graded_by_me'] = 'Calificado por otro usuario';
$string['nothing_to_push'] = '¡Nada para empujar!';
$string['not_in_queue_or_registered'] = '{$a->username} no está ni registrado, ni en la cola en el grupo {$a->groupname}';
$string['not_permitted'] = 'No permitido';
$string['not_registered'] = '¡Usted aun no está registrado!';
$string['no_users_to_display'] = '¡Sin usuarios para mostrar!';
$string['nowhere_queued'] = 'No en cola';
$string['number_of_students'] = 'Número de estudiantes';
$string['occupied'] = 'Ocupado';
$string['onenewgrouping'] = 'En UN nuevo agrupamiento';
$string['onenewgroupingpergroup'] = 'Un agrupamiento POR grupo';
$string['orientation'] = 'Orientación del PDF';
$string['overflowwarning'] = '¡Si Usted continúa importando, el tamaño del grupo en la instancia {$a->instancename} será excedido!';
$string['overview'] = 'Vista general';
$string['overview_alt'] = 'Vista general sobre grupos y miembros de grupo';
$string['overview_tab'] = 'Vista del grupo';
$string['overview_tab_alt'] = 'Abrir vista de grupo';
$string['overwrite_label'] = 'Sobre-escribir calificaciones existentes';
$string['place_allocated_in_group_success'] = 'El grupo {$a->groupname} ha sido exitosamente marcado para registro';
$string['pluginadministration'] = 'Adminsitración de herramientagrupo';
$string['pluginname'] = 'Herramientagrupo';
$string['portrait'] = 'Retrato';
$string['preview'] = 'Vista previa';
$string['queue'] = 'Cola';
$string['queue_and_multiple_reg_title'] = 'Colas y registros múltiples';
$string['queued'] = 'En cola';
$string['queued_in_group_info'] = '{$a->username} puesto en cola en el grupo {$a->groupname}';
$string['queued_on_rank'] = 'En cola en ranking #{$a}';
$string['queueing_is'] = 'La cola es';
$string['queue_in_group'] = '¿Proceder a poner en cola a {$a->username} en grupo {$a->groupname}?';
$string['queue_in_group_success'] = 'Se puso exitosamente en cola a {$a->username} en grupo {$a->groupname}!';
$string['queues'] = 'Colas';
$string['queuesgrp'] = 'Cola y máximos lugares en cola';
$string['queuesizeerror'] = 'El máximo de entradas en cola tiene que ser un número entero positivo (>= 1)';
$string['queues_max'] = 'Lugares-en-cola máximos simultáneos por participante';
$string['queuespresent'] = '¡Las colas ya están presentes! Éstas serán eliminadas si Usted continúa. ¡Para continuar, oprima nuevamente el botón para Guardar!';
$string['queuespresenterror'] = 'Hay usuarios enlistados en colas. Usted no puede desactivar las colas hasta que éstas se hayn resuelto.';
$string['queue_you_in_group'] = '¿Proceder a ponerlo a Usted en cola en el grupo {$a->groupname}?';
$string['queue_you_in_group_success'] = 'A USted se le puso exitosamente en la cola en el grupo {$a->groupname}!';
$string['rank'] = 'Ranking';
$string['recreate_group'] = 'Recrear grupo';
$string['reference_grade_feedback'] = 'Calificación-referencia / Retroalimentación';
$string['refresh_table_button'] = 'Refrescar vista previa';
$string['reg_in_full_group'] = '¡El registro de {$a->username} en el grupo {$a->groupname} no es posible, porque el grupo está lleno!';
$string['register'] = 'Registrar';
$string['registered'] = 'Registrado';
$string['registered_in_group_info'] = '{$a->username} registrado en grupo {$a->groupname}';
$string['registered_on_rank'] = 'Registrado en ranking #{$a}';
$string['register_in_group'] = '¿Está Usted seguro de querer registrar a {$a->username} en el grupo {$a->groupname}?';
$string['register_in_group_success'] = 'Se registró exitosamente a {$a->username} en el grupo {$a->groupname}!';
$string['register_you_in_group'] = '¿Está Usted seguro de querer registrar(se) en el grupo {$a->groupname}?';
$string['register_you_in_group_success'] = 'Usted se ha registrado exitosamente en el grupo {$a->groupname}!';
$string['register_you_in_group_successmail'] = '¡Usted se registró exitosamente en el grupo {$a->groupname}!';
$string['register_you_in_group_successmailhtml'] = '¡Usted se registró exitosamente en el grupo {$a->groupname}!';
$string['registrationdue'] = 'Se espera el registro en';
$string['registration_missing'] = '1 registro faltante';
$string['registration_period_end'] = 'Fin del registro p ara';
$string['registration_period_start'] = 'Principio del registro para';
$string['registrations'] = 'Registros-de-grupo';
$string['registrations_missing'] = 'Faltan {$a} registros';
$string['reg_not_open'] = 'El egistro no es posible por el momento. Tal vez ya pasó la fecha límite o no estaba permitida en lo absoluto.';
$string['reg_you_in_full_group'] = 'El registro en el grupo {$a->groupname} no es posible, ¡porque el grupo está lleno!';
$string['renamed_group'] = '¡Grupo renombrado!';
$string['rename_failed'] = '¡Falló el renombrado!';
$string['reset_agrps'] = 'Reiniciar grupos activos';
$string['reset_agrps_help'] = 'Reiniciar todos los grupos de curso para que sean inactivos para grouptools. ¡ Esto también eliminará todos los registros y la cola en grouptools de este curso !';
$string['reset_queues'] = 'Reiniciar colas';
$string['reset_queues_help'] = 'Las colas son eliminadas automáticamente si se reinician los grupos activos.';
$string['reset_registrations'] = 'Reiniciar registros';
$string['reset_registrations_help'] = 'Laos registros son eliminados automáticamente si se reinician los grupos activos.';
$string['reset_transparent_unreg'] = 'Des-registrar a todos los miembros de grupo empujados';
$string['reset_transparent_unreg_help'] = 'Quitar a todos los usuarios de aquellos grupos que estén representados por grupos-herramientagrupo activos';
$string['resize'] = 'Cambiar tamaño';
$string['resized_group'] = '¡Tamaño de grupo cambiado!';
$string['resolve_queue'] = 'Resolver colas';
$string['resolve_queue_legend'] = 'Resolver colas';
$string['resolve_queue_title'] = 'Resolver colas pendientes';
$string['select'] = 'Seleccionar';
$string['selected'] = 'Seleccionado';
$string['selectfromcohort'] = 'Seleccionar miembros de la cohorte';
$string['selfregistration'] = 'Registro';
$string['selfregistration_alt'] = 'Registrar a uno omás gruos (dependiendo de las configuraciones)';
$string['setactive'] = 'Activar';
$string['setinactive'] = 'Desactivar';
$string['showafterdue'] = 'Todos -después de la fecha \'esperado para\'';
$string['show_members'] = 'Mostrar miembros del grupo';
$string['showownafterdue'] = 'propio - después de la fecha límite';
$string['showownafterreg'] = 'propio - después del registro';
$string['size'] = 'Tamño del grupo';
$string['size_grp'] = 'Configuraciones del tamaño del grupo';
$string['size_grp_help'] = 'Si se activa el tamaño del grupo, son limitados los números máximos de miembros para cada grupo (configurado para la instancia completa vía campo de texto). Si adicionalmente se activa "tamaño individual", el tamaño de grupo puede ser definido en la lista siguiente.';
$string['skipped'] = 'Saltado';
$string['sortlist_no_data'] = '¡Actualmente no hay grupos presentes!';
$string['source'] = 'Origen';
$string['source_missing'] = '¡No hay origen a partir del cual copiar!';
$string['sources_missing'] = '¡Hay al menos un grupo sin un orígen elegido desde el cual copiar!';
$string['start'] = 'Inicio';
$string['status'] = 'Estatus';
$string['status_help'] = '<ul><li><span style="font-weight:bold">✔</span> registrado en grupo de Moodley en Herramientagrupo</li><li><span style="font-weight:bold">?</span> registrado en grupo de Moodle pero NO en Herramientagrupo</li><li><span style="font-weight:bold">+</span> registrado en Herramientagrupo pero No en grupo de Moodle</li><li><span style="font-weight:bold">1, 2, 3...</span> en la cola para Herramientagrupo</li></ul>';
$string['successfully_deleted_groups'] = '¡Se eliminaron exitosamente grupos!';
$string['switched_to_all_groups'] = '¡Se cambió el filtro de grupo para todos los grupos!';
$string['target'] = 'Objetivo';
$string['toolessregspresent'] = 'Al menos 1 usuario está registrado en un grupo de menos,; por lo tanto, el mínimo de grupos para escoger deberá ser como máximo de {$a}.';
$string['too_many_queue_places'] = '¡No puede ponerse en cola a {$a->username} en el grupo {$a->groupname} porque {$a->username} ya está en la cola de demasiados grupos!';
$string['toomanyregs'] = 'Atención: En al menos un grupo hay más miembros del grupo que los especificados en el tamaño de nuevo grupo deseado.<br />Reduzca los miembros del grupo en los grupos antes de cambiar el tamaño del grupo.';
$string['too_many_regs'] = '¡El usuario ya está registrado/en-cola en demasiados grupos¡';
$string['toomanyregspresent'] = 'Al menos 1 usuario está registrado en demasiados grupos,; por lo tanto, el máximo de grupos para escoger deberá ser como mínimo de {$a}.';
$string['total'] = 'Total';
$string['unqueue'] = 'Quitar de la cola';
$string['unqueue_from_group'] = '¿Continuar quitando a {$a->username} de la cola del grupo {$a->groupname}?';
$string['unqueue_from_group_success'] = 'Se quitó exitosamente a {$a->username} de la cola para el grupo {$a->groupname}!';
$string['unqueue_you_from_group'] = '¿Continuar qutándolo a usted de la cola del grupo {$a->groupname}?';
$string['unqueue_you_from_group_success'] = '¡Se quitó a Usted exitosamente de la cola del grupo {$a->groupname}!';
$string['unreg'] = 'Desregistrar';
$string['unreg_from_group'] = '¿Continuar des-registrándo a {$a->username} del grupo {$a->groupname}?';
$string['unreg_from_group_success'] = 'Se des-registró exitosamente a  {$a->username} del grupo {$a->groupname}!';
$string['unreg_is'] = 'Des-registro';
$string['unreg_not_alowed'] = '¿No está permitido el des-registro!';
$string['unreg_you_from_group'] = '¿Continuar des-registrándolo a Usted del grupo {$a->groupname}?';
$string['unreg_you_from_group_success'] = '¡Usted fue des-registrado exitosamente del grupo {$a->groupname}!';
$string['update_grouplist_success'] = 'Se actualizaron exitosamente los grupos activos!';
$string['updatemdlgrps'] = 'Registrar en grupos-Moodle';
$string['use_all_or_chosen'] = 'Usar todo o seleccionado';
$string['use_all_or_chosen_help'] = 'Seleccione "Todos" para crear un agrupamiento para todos los grupos de curso. Use "Seleccionados" para crear agrupamientos solamente para los grupos elegidos.';
$string['use_individual'] = 'Usar tamaño individual por grupo';
$string['use_individual_help'] = 'Anular el tamaño de grupo global con valor individual para cada grupo. Esto se configura mediante la lista de grupo ordenable al fondo.';
$string['use_queue'] = 'Usar colas';
$string['user_has_too_less_regs'] = '¡El des-registro/sacar-de-la-cola no es posible porque {$a->username} está registrado/en-la-cola en demasiado pocos grupos!';
$string['user_is_deleted'] = 'La cuenta-de-usuario encontrada (ID {$a->id}, Nombre {$a->fullname}) ya está eliminada. Por lo tanto, no es posible inscribirle en este curso.';
$string['userlist'] = 'Lista de usuarios';
$string['userlist_alt'] = 'Ver lista de usuarios y sus registros. Exportar datos acerca de usuarios y sus grupos en diferentes formatos (PDF, texto simple, Excel, etc).';
$string['userlist_help'] = 'Lista de ID-numbers separados por uno o más de los siguientes caracteres <ul><li>[,] coma</li><li>[;] punto_y_coma</li><li>[ ] espacio</li><li>[\\n] línea-nueva</li><li>[\\r] retorno-de-carro</li><li>[\\t] tabulador</li></ul>';
$string['userlist_tab'] = 'Vista del curso';
$string['userlist_tab_alt'] = 'Abrir vista del curso';
$string['user_moved'] = 'El usuario con ID {$a->userid} ha sido movido del grupo {$a->agrpid} al {$a->current_grp} ({$a->current_text})';
$string['user_move_prev'] = 'El usuario con ID {$a->userid} seá movido del grupo {$a->agrpid} al {$a->current_grp} ({$a->current_text})';
$string['user_not_found'] = '¡ No pudo encontrarse al usuario {$a} !';
$string['users_tab'] = 'Participantes';
$string['users_tab_alt'] = 'Mostrar participantes';
$string['use_size'] = 'Activar';
$string['viewmoodlegroups'] = 'A grupos Moodle';
$string['with_selection'] = 'Con seleccionados...';
$string['you_are_already_marked'] = '¡Usted ya marcó a este grupo para registro!';
$string['you_are_already_queued'] = 'Usted ya está en cola en el grupo {$a->groupname}!';
$string['you_are_already_registered'] = '¡Usted ya está registrado en el grupo {$a->groupname}!';
$string['you_are_not_in_queue_or_registered'] = 'Usted no está ni registrado ni en la cola en el grupo {$a->groupname}';
$string['you_change_group_to_success'] = '¡Cambio de grupo exitoso! Usted está ahora registrado en el grupo {$a->groupname}!';
$string['you_have_too_less_regs'] = '¡El des-registro/ sacarlo-de-la-cola no es posible, porque Usted está registrado/en la cola de muy pocos grupos!';
$string['you_have_too_many_queue_places'] = '¡Usted no puede hacer cola en el grupo {$a->groupname} porque Usted ya está haciendo cola en demasiados grupos!';
$string['your_place_allocated_in_group_success'] = 'Usted ha marcado exitosamente al grupo {$a->groupname} para registro';
