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
 * Strings for component 'block_xp', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   block_xp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Acciones';
$string['activityoresourceis'] = 'La actividad o recurso es {$a}';
$string['addacondition'] = 'Añadir una condición';
$string['addarule'] = 'Añadir una regla';
$string['addrulesformhelp'] = 'La última columna define la cantidad de puntos de experiencia  ganados cuando se cumple el criterio.';
$string['admindefaultrulesintro'] = 'Las reglas siguientes serán usadas como opciones por defecto para cursos en los que se añada el bloque.';
$string['admindefaultsettingsintro'] = 'Las reglas siguientes serán usadas como opciones por defecto cuando el bloque sea recién añadido a un curso.';
$string['admindefaultvisualsintro'] = 'Lo siguiente será usado como opciones por defecto cuando el bloque sea recién añadido a un curso.';
$string['anonymity'] = 'Anonimato';
$string['anonymity_help'] = 'Esta configuración controla si es que los participantes pueden verse mutuamente sus nombres y avatares.';
$string['awardaxpwhen'] = '<strong>{$a}</strong> puntos de experiencia son ganados cuando:';
$string['basexp'] = 'Base del algoritmo';
$string['blockappearance'] = 'Apariencia del bloque';
$string['cachedef_filters'] = 'Filtros de Niveles';
$string['cachedef_ruleevent_eventslist'] = 'Lista de algunos eventos';
$string['cannotshowblockconfig'] = 'Usualmente yo mostraría aquí las configuraciones de la apariencia, pero no pude encontrar el bloque de Usted. Para cambiar la apariencia del bloque, regrésese [aquí]({$a}) (o en donde Usted haya añadido el bloque), active el modo de edición, y siga la opción para "Configurar"en el menú desplegable del bloque. Si Usted no puede encontrar el bloque, añádalo nuevamente a su curso.';
$string['cannotshowblockconfigsys'] = 'Usualmente yo mostraría aquí las configuraciones de apariencia, pero no pude encontrar su bloque. Podría ser que faltara de la  [Portada]({$a->fp}) y del [Tablero por defecto]({$a->mysys}) de sus usuarios, o podría estar presente en ambos. Para editar estas configuraciones desde aquí, asegúrese de que solamente aparezca en una de elllas.';
$string['changelevelformhelp'] = 'Si Usted cambia el número de niveles, las insignias de nivel personalizadas estarán deshabilitadas temporalmente a fin de evitar niveles sin insignias. Si Usted cambia el número de niveles vaya a la página de \'Visuales\' para rehabilitar las insignias personalizadas una vez que Usted haya guardado este formato.';
$string['cheatguard'] = 'Guarda contra Trampas';
$string['coefxp'] = 'Coeficiente del algoritmo';
$string['colon'] = '{$a->a}: {$a->b}';
$string['configdescription'] = 'Introducción';
$string['configdescription_help'] = 'Una breve introducción mostrada en el bloque, debajo del nivel del estudiante. Los estudiantes tienen la habilidad para no hacer caso del mensaje, en cuyo caso no lo verán nuevamente.';
$string['configheader'] = 'Ajustes';
$string['configrecentactivity'] = 'Mostrar recompensas recientes';
$string['configrecentactivity_help'] = 'Cuando se habilita, el bloque mostrará una lista corta de eventos recientes que recompensaron al estudiante con puntos.';
$string['configtitle'] = 'Título';
$string['configtitle_help'] = 'El título del bloque.';
$string['congratulationsyouleveledup'] = '¡Felicitaciones!';
$string['coolthanks'] = '¡Bueno, gracias!';
$string['courselog'] = 'Bitácora del curso';
$string['coursereport'] = 'Reporte del curso';
$string['courserules'] = 'Reglas del curso';
$string['coursesettings'] = 'Configuraciones del curso';
$string['coursevisuals'] = 'Visuales del curso';
$string['customizelevels'] = 'Personalizar los niveles';
$string['dangerzone'] = 'Zona de peligro';
$string['defaultlevels'] = 'Niveles por defecto';
$string['defaultrules'] = 'Reglas por defecto';
$string['defaultrulesformhelp'] = 'Esas son las reglas por defecto proporcionadas por el plugin; automáticamente dan puntos  por defecto e ignoran algunos eventos redundantes. Sus propias reglas de Usted tienen precedencia sobre ellas.';
$string['defaultsettings'] = 'Configuraciones por defecto';
$string['defaultvisuals'] = 'Visuales por defecto';
$string['deletecondition'] = 'Eliminar condición';
$string['deleterule'] = 'Eliminar regla';
$string['description'] = 'Descripción';
$string['difference'] = 'Difer.';
$string['discoverlevelupplus'] = 'Descubra ¡ Sube de Nivel ! Plus';
$string['dismissnotice'] = 'No considerar aviso';
$string['displayeveryone'] = 'Mostrar todos';
$string['displaynneighbours'] = 'Mostrar {$a} vecinos';
$string['displayoneneigbour'] = 'Mostrar un vecino';
$string['displayparticipantsidentity'] = 'Mostrar identidad de participantes';
$string['displayrank'] = 'Mostrar \'\'ranking\'\'';
$string['displayrelativerank'] = 'Mostrar un \'\'ranking\'\' relativo';
$string['enablecheatguard'] = 'Habilitar guardia contra trampas';
$string['enablecheatguard_help'] = 'La guardia contra trampas ofrece un mecanismo simple para prevenir que los estudiantes abusen del sistema al usar técnicas obvias como el refrescar la misma página de forma interminable, o rpetir la misma acción una, y otra, y otra vez.';
$string['enableinfos'] = 'Habilitar página de información';
$string['enableinfos_help'] = 'Cuando se configura a \'No\', los estudiantes no podrán ver la página de información.';
$string['enableladder'] = 'Habilitar la escalera';
$string['enableladder_help'] = 'Cuando se configura a \'No\', los estudiantes no podrán ver la escalera.';
$string['enablelevelupnotif'] = 'Habilitar notificación de subida de nivel';
$string['enablelevelupnotif_help'] = 'Cuando se configura a \'Si\', a los estudiantes se les mostrará una ventana emergente felicitándolos por el nuevo nivel alcanzado.';
$string['enablelogging'] = 'Habilitar bitácoras';
$string['enablexpgain'] = 'Habilitar ganancia de puntos';
$string['enablexpgain_help'] = 'Cuando se configura como \'NO\', nadie podrá ganar puntos en el curso. Ésto es útil para congelar los puntos ganados, o para habilitarlo en un cierto punto en el tiempo.

Por favor tome nota de que ésto también puede ser controlado con mayor granularidad al usar la capacidad \'block/xp:earnxp\'.';
$string['errorformvalues'] = 'Hay algunos problemillas en los valores del formato, por favor, arréglelos.';
$string['errorlevelsincorrect'] = 'El número mínimo de niveles es 2';
$string['errornotalllevelsbadgesprovided'] = 'No se han proporcionado todas las insignias. Faltantes: {$a}';
$string['errorunknownevent'] = 'Error: evento desconocido';
$string['errorunknownmodule'] = 'Error: módulo desconocido';
$string['errorxprequiredlowerthanpreviouslevel'] = 'Los puntos requeridos es menor o igual al nivel anterior.';
$string['eventis'] = 'El evento es {$a}';
$string['eventname'] = 'Nombre del evento';
$string['eventproperty'] = 'Propiedad del evento';
$string['eventtime'] = 'Hora del evento';
$string['event_user_leveledup'] = 'Usuario subido de nivel';
$string['for1day'] = 'Por 1 día';
$string['for1month'] = 'Por 1 mes';
$string['for1week'] = 'Por 1 semana';
$string['for3days'] = 'Por 3 días';
$string['forever'] = 'Para siempre';
$string['forthewholesite'] = 'para todo el sitio';
$string['give'] = 'dar';
$string['hideparticipantsidentity'] = 'Ocultar identidad de participantes';
$string['hiderank'] = 'Ocultar \'\'ranking\'\'';
$string['incourses'] = 'en cursos.';
$string['infos'] = 'información';
$string['invalidxp'] = 'Valor de puntos inválido';
$string['keeplogs'] = 'Mantener bitácoras';
$string['ladder'] = 'Escalera';
$string['ladderadditionalcols'] = 'Columnas adicionales';
$string['ladderadditionalcols_help'] = 'Esta configuración determina cuales columnas adicionales son mostradas en la escalera. Presione la tecla CTRL o CMD al mismo tiempo que hace click para seleccionar más de una columna, o para des-seleccionar una columna seleccionada.';
$string['level'] = 'Nivel';
$string['levelbadges'] = 'Insignias del nivel';
$string['levelbadgesformhelp'] = 'Nombre los archivos [nivel].[extensión del archivo],por ejemplo: 1.png, 2.jpg, etc... El tamaño recomendado de imagen es 100x100.';
$string['levelcount'] = 'Número de niveles';
$string['leveldesc'] = 'Descripción del nivel';
$string['levels'] = 'Niveles';
$string['levelswillbereset'] = '¡Advertencia! Al guardar este formato se recalcularán los niveles para todos!';
$string['levelup'] = '¡Sube de nivel!';
$string['levelupplus'] = '¡ Sube de Nivel ! Plus';
$string['levelx'] = 'Nivel #{$a}';
$string['likenotice'] = '<strong>¿Le agrada el plugin?</strong> Por favor, tómese un momentopara  <a href="{$a->moodleorg}" target="_blank">añadirlo a sus favoritos</a> en Moodle.org y <a href="{$a->github}" target="_blank">poenrle estrella en GitHub</a>.';
$string['limitparticipants'] = 'Limitar participantes';
$string['limitparticipants_help'] = 'Esta configuración controla quien es mostrado en el tablero-de-liderazgo. Los vecinos son los participantes rankeados por arriba y por abajo del usuario actual. Por ejemplo, al elegir \'Mostrar dos vecinos\', solamente los dos participantes rankeados directamente arribita y abajito del usuario actual serán mostrados.';
$string['logging'] = 'Ingresando';
$string['maxactionspertime'] = 'Máx acciones en lapso de tiempo';
$string['maxactionspertime_help'] = 'El número máximo de acciones que contarán para puntos durante el lapso de tiempo dado. Cualquier acción subsecuente será ignorada. Cuando este valor está vacío, o es igual a cero, no aplica.';
$string['movecondition'] = 'Mover condición';
$string['moverule'] = 'Mover regla';
$string['navinfos'] = 'Info';
$string['navladder'] = 'Escalera';
$string['navlevels'] = 'Niveles';
$string['navlog'] = 'Bitácora';
$string['navpromo'] = 'Plus';
$string['navreport'] = 'Reporte';
$string['navrules'] = 'Reglas';
$string['navsettings'] = 'Configuraciones';
$string['navvisuals'] = 'Visuales';
$string['participant'] = 'Participante';
$string['participatetolevelup'] = '¡Participe en el curso para ganar puntos de experiencia y subir de nivel!';
$string['pickaconditiontype'] = 'Elegir un tipo de condición';
$string['pluginname'] = '¡Sube de nivel!';
$string['pointsintimelinker'] = 'por';
$string['pointsrequired'] = 'Puntos requeridos';
$string['progress'] = 'Progreso';
$string['promocontactintro'] = 'Contáctenos para más información. ¡No mordemos y contestamos rápidamente!';
$string['promocontactus'] = 'Póngase en contacto';
$string['promoemailusat'] = 'Mándenos un Email a _levelup@branchup.tech_.';
$string['promoerrorsendingemail'] = '¡Órale! No pudimos enviar el mensaje... por favor mándenos un Email directamente a : {$a}. ¡Gracias!';
$string['promoifpreferemailusat'] = 'Psst! Si Usted lo prefiere, mándenos directamente un Email a _{$a}_.';
$string['promointro'] = '¡El complemento adicional para  _Level up!_ que libera su potencial completo !';
$string['promoyourmessagewassent'] = 'Gracias; su mensaje fue enviado. Le contestaremos muy pronto.';
$string['property:action'] = 'Acción del evento';
$string['property:component'] = 'Componente del evento';
$string['property:crud'] = 'Evento CRUD';
$string['property:eventname'] = 'Nombre del evento';
$string['property:target'] = 'Meta del evento';
$string['rank'] = 'Ranking';
$string['ranking'] = '\'\'Ranking\'\'';
$string['ranking_help'] = 'El \'\'ranking\'\' es la posición absoluta del usuario actual en la escalera. El \'\'ranking\'\' relativo es la diferencia en puntos de experiencia entre un usuario y sus vecinos.';
$string['reallyresetdata'] = '¿Realmente desea reiniciar los niveles y puntos de todos en este curso?';
$string['reallyresetgroupdata'] = '¿Realmente reiniciar los niveles y puntos de todos en este grupo?';
$string['reallyreverttopluginsdefaults'] = '¿Realmente reiniciar las reglas por defecto a los valores por defecto sugeridos por el plugin? Esta acción no es reversible.';
$string['recentrewards'] = 'Recompensas recientes';
$string['requires'] = 'Requiere';
$string['resetcoursedata'] = 'Reiniciar datos del curso';
$string['resetgroupdata'] = 'Reiniciar datos del grupo';
$string['reverttopluginsdefaults'] = 'Revertir a valores por defecto del plugin';
$string['reverttopluginsdefaultsintro'] = 'Use el botón inferior si le gustaría revertir a los valores por defecto delplugin.';
$string['reward'] = 'Recompensa';
$string['rule'] = 'Regla';
$string['rulecm'] = 'Actividad o recurso';
$string['rulecmdesc'] = 'La actividad o recurso es \'{$a->contextname}\'.';
$string['rule:contains'] = 'contiene';
$string['rule:eq'] = 'es igual a';
$string['rule:eqs'] = 'es estrictamente igual a';
$string['ruleevent'] = 'Evento específico';
$string['ruleeventdesc'] = 'El evento es \'{$a->eventname}\\';
$string['rule:gt'] = 'es mayor que';
$string['rule:gte'] = 'es mayor o igual a';
$string['rule:lt'] = 'es menor que';
$string['rule:lte'] = 'es menor o igual a';
$string['ruleproperty'] = 'Propiedad del evento';
$string['rulepropertydesc'] = 'La propiedad \'{$a->property}\' {$a->compare} \'{$a->value}\'.';
$string['rule:regex'] = 'coincide con el regex';
$string['ruleset'] = 'Conjuneto de condiciones';
$string['ruleset:all'] = 'TODAS las condiciones son verdaderas';
$string['ruleset:any'] = 'CUALQUIERA de las condiciones es verdadera';
$string['ruleset:none'] = 'NINGUNA de las condiciones es verdadera';
$string['rulesformhelp'] = '<p>Este plugin hace uso de EVENTOS para otorgar puntos para acciones llevadas a cabo por los estudiantes. Puede utilizar el formato siguiente para agregar sus propias reglas y ver las que vienen por defecto.</p>
<p>Se aconseja que revise la <a href="{$a->log}">bitácora</a> del plugin para identificar qué eventos se disparan cuando se llevan a cabo ciertas acciones en el curso y también para leer más sobre eventos: <a href="{$a->list}">lista de todos los eventos</a>, <a href="{$a->doc}">Documentos del desarrollador</a>.</p>
<p>Finalmente, queremos hacer notar que el plugin ignora:
<ul>
<li>Las acciones llevadas a cabo por el administrador, invitados y usuarios no ingresados al sitio.</li>
<li>Las acciones llevadas a cabo por usuarios sin la capacidad <em>block/xp:earnxp</em>.</li>
<li>Acciones repetidas en breves intervalos de tiempo, a fin de prevenir trampas.</li>
 <li>Eventos que sean marcados como <em>anónimos</em>, comopor ejemoplo, en una Retroalimentación anónima.</li>
<li>Y los eventos de nivel educativo que no sean  <em>Participativos</em>.</li>
</ul>
</p';
$string['send'] = 'Enviar';
$string['someoneelse'] = 'Alguien más';
$string['somethinghappened'] = 'Algo pasó';
$string['taskcollectionloggerpurge'] = 'Purgar bitácoras de colección';
$string['timebetweensameactions'] = 'Tiempo requerido entre acciones idénticas';
$string['timebetweensameactions_help'] = 'El tiempo mínimo requerido antes de que una acción que ya ha sucedido previamente sea aceptada nuevamente. Una acción es considerada idéntica si fue puesta en el mismo contexto y objeto; el leer una publicación de foro será considerada idéntica si se lee nuevamente la misma publicación. Cuando el valor está vacío, o es igual a cero, no aplica.';
$string['timeformaxactions'] = 'Lapso de tiempo para acciones máx.';
$string['timeformaxactions_help'] = 'El lapso de tiempo (en segundos) durante el cual el usuario no debería exceder el número máximo de acciones.';
$string['tinytimedays'] = '{$a}d';
$string['tinytimehours'] = '{$a}h';
$string['tinytimeminutes'] = '{$a}m';
$string['tinytimenow'] = 'ahora';
$string['tinytimeolderyearformat'] = '%b %Y';
$string['tinytimeseconds'] = '{$a}s';
$string['tinytimeweeks'] = '{$a}sem';
$string['tinytimewithinayearformat'] = '%b %e';
$string['total'] = 'Total';
$string['unknowneventa'] = 'Evento desconocido ({$a})';
$string['updateandpreview'] = 'Subir y previsualizar';
$string['urlaccessdeprecated'] = 'El acceso vía esta URL está deprecado; por favor actualice sus enlaces.';
$string['usealgo'] = 'Usar el algoritmo';
$string['usecustomlevelbadges'] = 'Usar insignias de nivel personalizadas';
$string['usecustomlevelbadges_help'] = 'Cuando Usted configura a Si, debe proporcionar una imagen para cada nivel.';
$string['value'] = 'Valor';
$string['valuessaved'] = 'Los valores se han guardado exitosamente.';
$string['viewtheladder'] = 'Ver la escalera';
$string['visualsintro'] = 'Subir imágenes para personalizar la apariencia de los niveles.';
$string['wewillreplyat'] = 'Le contestaremos a: _{$a}_.';
$string['when'] = 'Cuando';
$string['wherearexpused'] = '¿Donde se usan los puntos?';
$string['wherearexpused_desc'] = 'Cuando se configura a \'En cursos\', los puntos ganados solamente contarán para el curso en donde se añadió el bloque. Cuando se configura a \'Para todo el sitio\', un usuario se \'subirá de nivel\' en el sitio en lugar de selectivamente por curso; se usarán todos los puntos ganados en todo el sitio.';
$string['whoops'] = '¡ Órale !';
$string['xp'] = 'Puntos de experiencia';
$string['xp:addinstance'] = 'Añadir un nuevo bloque';
$string['xp:earnxp'] = 'Ganar puntos';
$string['xpgaindisabled'] = 'Ganancia depuntos deshabilitada';
$string['xp:myaddinstance'] = 'Añadir el bloque a mi Tablero';
$string['xprequired'] = 'XP requerida';
$string['xptogo'] = '[[{$a}]] que faltan';
$string['xp:view'] = 'Ver el bloque y sus páginas relacionadas';
$string['youreachedlevela'] = '¡ Usted ha alcanzado el nivel {$a} !';
$string['yourmessage'] = 'Su mensaje';
$string['yourownrules'] = 'Sus propias reglas de Usted';
