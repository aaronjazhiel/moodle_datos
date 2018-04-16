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
 * Strings for component 'admin', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   admin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessdenied'] = 'Acceso denegado';
$string['accounts'] = 'Cuentas';
$string['addcategory'] = 'Agregar una categoría';
$string['additionalhtml'] = 'HTML adicional';
$string['additionalhtml_desc'] = 'Estas opciones le permiten especificar código HTML que desee añadir en todas las páginas. Puede establecer el código HTML que se añadirá dentro de la etiqueta HEAD de la página, inmediatamente después de que se haya abierto la etiqueta BODY, o inmediatamente antes de que la etiqueta BODY se cierre. <br /> Hacer esto le permite agregar encabezados o pies de página personalizados en cada página, o añadir fácilmente soporte para servicios como Google Analytics, con independencia de su tema elegido .';
$string['additionalhtmlfooter'] = 'Antes de cerrar BODY';
$string['additionalhtmlfooter_desc'] = 'Este contenido se agregará a cada página justo antes de que se cierre la etiqueta BODY.';
$string['additionalhtmlhead'] = 'Dentro del HEAD (Encabezado)';
$string['additionalhtmlhead_desc'] = 'Este contenido se agregará al final de la etiqueta HEAD en cada página.';
$string['additionalhtml_heading'] = 'HTML adicional que se añade a cada página.';
$string['additionalhtmltopofbody'] = 'Cuando BODY está abierto';
$string['additionalhtmltopofbody_desc'] = 'Este contenido se agregará a cada página justo después de que se abra la etiqueta BODY.';
$string['admincategory'] = 'Categoría: {$a}';
$string['adminseesall'] = 'Los administradores ven todo';
$string['adminseesallevents'] = 'Los administradores ven todos los eventos';
$string['adminseesownevents'] = 'Los administradores son como los demás usuarios';
$string['advancedfeatures'] = 'Características avanzadas';
$string['allcountrycodes'] = 'Todos los códigos de país';
$string['allowbeforeblock'] = 'La lista autorizada será procesada en primer lugar';
$string['allowbeforeblockdesc'] = 'Por defecto, se procesará en primer lugar la lista de IPs bloqueadas; si la opción se activa, la lista de IPs permitidas se procesará antes que la lista bloqueada.';
$string['allowblockstodock'] = 'Permitir que los bloques se \'orillen a la orilla\' (dock)';
$string['allowcategorythemes'] = 'Permitir temas por categoría';
$string['allowcoursethemes'] = 'Permitir temas en el curso';
$string['allowediplist'] = 'Lista de direcciones IP permitidas';
$string['allowemailaddresses'] = 'Dominios de Email permitidos';
$string['allowframembedding'] = 'Permitir incrustación de marco';
$string['allowframembedding_help'] = 'Si se habilita, este sitio podría ser incrustado en un marco en un sistema remotto, como se recomienda al usar el plugin de inscripción de \'Publicar como una herramienta LTI\'. De lo contrario, se recomienda dejar deshabilitada la incrustación de marco por razones de seguridad.';
$string['allowguestmymoodle'] = 'Permitir a los invitados acceso al Tablero';
$string['allowobjectembed'] = 'Permitir marcas EMBED (incrustar) y OBJECT (objeto)';
$string['allowthemechangeonurl'] = 'Permitir cambios de tema en la URL';
$string['allowuserblockhiding'] = 'Permitir a los usuarios ocultar bloques';
$string['allowuserswitchrolestheycantassign'] = 'Permitir a los usuarios sin la capacidad para asignar roles poder de cambiar de rol';
$string['allowuserthemes'] = 'Permitir temas de usuario';
$string['alternativefullnameformat'] = 'Formato alternativo de nombre completo';
$string['alternativefullnameformat_desc'] = 'Esto define como se muestran los nombres a los usuarios con la capacidad de viewfullnames  (por defecto los usuarios con el rol de Mánager, profesor o profesor sin-derechos-de-edición).  Se pueden usar remplazables (\'\'placeholders\'\') igual que en la configuración para  el "Formato de nombre completo".';
$string['appearance'] = 'Apariencia';
$string['aspellpath'] = 'Ruta a aspell';
$string['authentication'] = 'Autenticación';
$string['authpreventaccountcreation'] = 'Evitar la creación de cuentas al autenticarse';
$string['authpreventaccountcreation_help'] = 'Cuando un usuario se autentica, si aún no existe su cuenta, se crea una en el sitio de forma automática. Si se utiliza una base de datos externa para la autenticación, por ejemplo LDAP, pero se desea restringir el acceso al sitio solo a los usuarios con una cuenta existente, esta opción debe estar habilitada. Las nuevas cuentas tendrán que ser creadas manualmente o mediante la función de carga de usuarios por archivo de texto. Tenga en cuenta que este ajuste no se aplica a la autenticación MNet.';
$string['authsettings'] = 'Gestionar la autenticación';
$string['autolang'] = 'Detección automática de idioma';
$string['autologinguests'] = 'Ingreso automático de invitados';
$string['availablelicenses'] = 'Licencias disponibles';
$string['availablesearchareas'] = 'Áreas disponibles para búsqueda';
$string['availableto'] = 'Disponible para';
$string['backgroundcolour'] = 'Color Transparente';
$string['backups'] = 'Respaldos';
$string['backup_shortname'] = 'Usar nombre del curso en el nombre del archivo de copia de seguridad';
$string['backup_shortnamehelp'] = 'Usar el nombre del curso como parte del nombre del archivo de copia de seguridad (en vez de usar el ID del curso).';
$string['badwordsconfig'] = 'Escriba su lista de palabras censuradas, separadas por comas';
$string['badwordsdefault'] = 'Si la lista personalizada está vacía, se usará una lista por defecto contenida en el paquete de idioma.';
$string['badwordslist'] = 'Lista personalizada de palabras censuradas';
$string['blockediplist'] = 'Lista de IP bloqueadas';
$string['blockeditingmenu'] = 'Menús para edición del bloque';
$string['blockeditingmenu_desc'] = 'Si se habilita, muchos de los íconos de edición del bloque mostrados cuando está activada la edición se mostrarán dentro de un menú desplegable. Esto reduce el contenido en pantalla, al ocultar los íconos hasta que sean necesitados.';
$string['blockinstances'] = 'Instancias';
$string['blockmultiple'] = 'Múltiples';
$string['blockprotect'] = 'Proteger instancias';
$string['blockprotect_help'] = 'Si bloquea (pone seguro a)  un tipo particular de bloque, entonces nadie podrá añadir o eliminar instancias de dicho bloque. (Desde luego, Usted podrá des-bloquearlo después si necesitara editar instancias).

Esta opción se utiliza principalmente para proteger los bloques de navegación y configuración, cuya recuperación en caso de eliminación accidental puede ser muy compleja.';
$string['blocksettings'] = 'Gestionar bloques';
$string['blockunprotect'] = 'Desproteger';
$string['bloglevel'] = 'Visibilidad del blog';
$string['bookmarkadded'] = 'Marcador (bookmark) agregado.';
$string['bookmarkalreadyexists'] = 'Usted ya ha marcado (bookmark) esta página';
$string['bookmarkdeleted'] = 'Marcador (bookmark) borrado';
$string['bookmarkthispage'] = 'Marcar (bookmark) esta página';
$string['cacheapplication'] = 'Caché de aplicación';
$string['cacheapplicationhelp'] = 'Los items cacheados se comparten entre todos  los usuarios y caducan por una TTL determinada';
$string['cachejs'] = 'Caché Javascript';
$string['cachejs_help'] = 'El almacenamiento en caché y la conversión Javascript mejoran enormemente el rendimiento de carga de la página. Se recomienda para los sitios de producción. Los desarrolladores probablemente querrán desactivar esta función.';
$string['cacherequest'] = 'Solicitar caché';
$string['cacherequesthelp'] = 'Caché específica de usuario que caduca cuando se completa la solicitud. Diseñada para remplazar áreas en donde estamos usando los almacenamientos estáticos.';
$string['cachesession'] = 'Caché de la sesión';
$string['cachesessionhelp'] = 'Caché específica del usuario que caduca cuando termina la sesión del usuario. Diseñada para aliviar el abotagamiento/fatiga de la sesión.';
$string['cachesettings'] = 'Configuraciones de caché';
$string['caching'] = 'Cacheando';
$string['calendarexportsalt'] = 'Salado de exportación de calendarios';
$string['calendarsettings'] = 'Calendario';
$string['calendartype'] = 'Tipo de calendario';
$string['calendartype_desc'] = 'Elija un tipo de calendario por defecto para todo el sitio. Esta configuración no puede anularse en las configuraciones del curso, ni por usuarios en su perfil personal.';
$string['calendar_weekend'] = 'Días del fin de semana';
$string['cannotdeletemodfilter'] = 'No puede desinstalar \'{$a->filter}\' porque es parte del módulo \'{$a->module}\'.';
$string['cannotuninstall'] = '{$a} no se puede desinstalar.';
$string['cfgwwwrootslashwarning'] = 'Ha definido $CFG->wwwroot incorrectamente en su archivo config.php. Ha incluído un carácter \'/\' al final. Por favor, elimínelo. De lo contrario, aparecerán errores extraños tales como <a href=\'http://tracker.moodle.org/browse/MDL-11061\'>MDL-11061</a>.';
$string['cfgwwwrootwarning'] = 'Ha definido $CFG->wwwroot incorrectamente en su archivo config.php. No se corresponde con la URL que usted está usando para acceder a esta página. Por favor, corríjalo. De lo contrario, aparecerán errores extraños tales como <a href=\'http://tracker.moodle.org/browse/MDL-11061\'>MDL-11061</a>.';
$string['change'] = 'cambiar';
$string['checkboxno'] = 'No';
$string['checkboxyes'] = 'Sí';
$string['choosefiletoedit'] = 'Elija un archivo para editar';
$string['cleanup'] = 'Limpieza';
$string['clianswerno'] = 'n';
$string['cliansweryes'] = 's';
$string['cliincorrectvalueerror'] = 'Error, valor incorrecto  "{$a->value}" para "{$a->option}"';
$string['cliincorrectvalueretry'] = 'Valor incorrecto, por favor, inténtelo de nuevo';
$string['clistatusdisabled'] = 'Estatus: deshabilitado';
$string['clistatusenabled'] = 'Estatus: habilitado';
$string['clistatusenabledlater'] = 'estatus: se habilitará el modo de mantenimiento CLI en {$a}';
$string['clitypevalue'] = 'valor del tipo';
$string['clitypevaluedefault'] = 'valor del tipo, pulse Enter para utilizar el valor por defecto ({$a})';
$string['cliunknowoption'] = 'Opciones no reconocidas:
{$a}
Por favor, utilice la opción Ayuda.';
$string['cliupgradefinished'] = 'Actualización de comando de línea finalizado con éxito.';
$string['cliupgradenoneed'] = 'No se necesita actualizar la versión instalada {$a}. ¡Gracias por comprobarlo!';
$string['cliyesnoprompt'] = 'escriba s (sí) o n (no)';
$string['commentsperpage'] = 'Comentarios mostrados por página';
$string['commonactivitysettings'] = 'Ajustes comunes';
$string['commonfiltersettings'] = 'Ajustes comunes de filtro';
$string['commonsettings'] = 'Ajustes comunes';
$string['componentinstalled'] = 'Componente instalado';
$string['computedfromlogs'] = 'Calculado a partir de las bitácoras desde {$a}.';
$string['condifmodeditdefaults'] = 'Los valores que fije aquí definen los valores por defecto que se usan cuando Usted crea una actividad nueva.';
$string['confeditorhidebuttons'] = 'Seleccione los botones que deberían estar ocultos en el editor HTML.';
$string['configallcountrycodes'] = 'Esta es la lista de países que pueden ser seleccionados en varios lugares, por ejemplo, en el perfil de un usuario. Si está vacía (por defecto) se utilizaría originalmente la lista de \'countries.php\' en el paquete de idioma Inglés estándar, o actualmente, su traducción al español de México. Esta es la lista de la norma ISO 3166-1. De otra forma, Usted puede especificar una lista separada por comas de los códigos, por ejemplo, \'MX,US,CA,GT\' para México, Estados Unidos, Canadá y Guatemala. Si se agregan aquí nuevos códigos, que no sean estándar, tendrá que añadirlos a los archivos countries.php en idioma inglés \'en\' y también en su paquete de idioma (es_mx).';
$string['configallowassign'] = 'Puede permitir a las personas que tienen los roles de la izquierda asignar algunos de los roles de la columna a otras personas';
$string['configallowblockstodock'] = 'Si se activa y está soportado por el tema seleccionado, los usuarios pueden optar por mover los bloques a una barra lateral (dock) especial en la orilla';
$string['configallowcategorythemes'] = 'Si activa esta opción, los temas pueden ajustarse al nivel de la categoría. Esto afectará a todas las categorías y cursos de nivel inferior (\'hijos\') a menos que tengan especificado su propio tema. ADVERTENCIA: Habilitar esta opción puede afectar al rendimiento.';
$string['configallowcoursethemes'] = 'Si activa esta opción, se permitirá a los cursos ajustar sus propios temas. Los temas de los cursos pasan por alto cualesquiera otras opciones de tema (sitio, usuario o sesión)';
$string['configallowemailaddresses'] = 'Si desea restringir todas las direcciones nuevas de correo a dominios particulares, lístelos aquí separados por espacios. El resto de los dominios será rechazado; por ejemplo, <strong>miescuela.edu.mx .gov.mx</strong>';
$string['configallowguestmymoodle'] = 'Si se habilita, los invitados podrán tener acceso al Tablero, de lo contrario se redireccionarán a la página principal del sitio.';
$string['configallowobjectembed'] = 'Como medida de seguridad por defecto, los usuarios normales no podrán incrustar en el código HTML objetos multimedia (como  Flash) dentro del texto utilizando las marcas explícitas EMBED y OBJECT (si bien podrá hacerse con seguridad utilizando el filtro mediaplugins). Active la opción si desea permitir incrustar objetos multimedia.';
$string['configallowoverride'] = 'Puede permitir a las personas que tengan los roles de la izquierda anular algunos de los roles de la columna';
$string['configallowoverride2'] = 'Seleccione qué rol(es) puede(n) ser invalidado(s) por cada rol de la columna izquierda.<br />Note que estos ajustes sólo se aplican a los usuarios que tienen la capacidad \'moodle/role:override\' o la capacidad \'moodle/role:safeoverride\' permitidas.';
$string['configallowswitch'] = 'Seleccione a qué roles puede cambiar un usuario, de entre los roles que ya tiene asignados. Además de una entrada en esta tabla el usuario debe tener también la capacidad moodle/role:switchroles para poder cambiar.<br />Tome nota de que solamente es posible cambiar a roles que tengan la capacidad moodle/course:view capability, y que no tengan la capacidad moodle/site:doanything , por lo que algunas columnas de esta tabla están deshabilitadas.';
$string['configallowthemechangeonurl'] = 'Si está activado, el tema se puede cambiar mediante la adición de theme={themename} a cualquier URL de sitio Moodle (por ejemplo: mymoodlesite.com/?theme=afterburner ) o <br />&theme=themename a cualquier URL interna de Moodle URL (por ejemplo: mymoodlesite.com/course/view.php?id=2&theme=afterburner ).Moodle.';
$string['configallowuserblockhiding'] = '¿Desea que los usuarios puedan mostrar u ocultar bloques laterales en el sitio? Esta opción usa Javascript y \'cookies\' para recordar el estado de cada bloque colapsable, y sólo afecta al modo en que cada usuario ve la información.';
$string['configallowuserswitchrolestheycantassign'] = 'Por defecto, moodle/role:assign se requiere para que los usuarios puedan cambiar de rol. Activar esta opción remueve este requisito y resulta en que los roles disponibles en el menú "Cambiar rol a" sean determinados por la configuración en la tabla de "Permitir asignación de roles" exclusivamente. Se recomienda que la configuración de esta tabla NO permita que los usuarios cambien hacia un rol con mayores capacidades que su rol actual.';
$string['configallowuserthemes'] = 'Si se activa esta opción, los usuarios podrán elegir sus propios temas. Los temas personales de los usuarios anulan los temas del sitio (pero no los temas del curso)';
$string['configallusersaresitestudents'] = 'En lo que concierne a las actividades de la portada del sitio, ¿deberían TODOS los usuarios ser considerados como estudiantes? Si la respuesta es "Sí", cualquier usuario con cuenta confirmada podrá participar como estudiante en tales actividades. Si la respuesta es "No", sólo los usuarios que ya participan en al menos un curso podrán tomar parte en las actividades de la página principal. Sólo los administradores y profesores especialmente asignados pueden actuar como profesores en las actividades de la portada.';
$string['configauthenticationplugins'] = 'Por favor, seleccione los plugins de autenticación que desea utilizar y póngalos en el orden de operación.';
$string['configautolang'] = 'Detectar idioma por defecto desde el ajuste del navegador. Si está deshabilitado, se utiliza el idioma por defecto del sitio.';
$string['configautologinguests'] = '¿Deberá permitirse a los visitantes automáticamente el acceso como invitados cuando entran a los cursos con acceso de invitado?';
$string['configbloglevel'] = 'Esta opción le permite restringir el nivel en el que pueden verse los blogs de los usuarios en este sitio. Advierta que se especifica el contexto máximo de quien los ve, pero no de quien envía mensajes ni de los tipos de mensaje enviados al blog. Los blogs pueden también deshabilitarse completamente si así lo desea.';
$string['configcalendarcustomexport'] = 'Habilitar exportación de rango de fechas personalizado de  calendario';
$string['configcalendarexportsalt'] = 'Esta cadena de caracteres aleatorios se utiliza para mejorar las claves de seguridad (tokens) de autenticación utilizadas para la exportación de los calendarios. Tenga en cuenta que todas las claves de seguridad actuales quedarán invalidadas si modifica esta sal.';
$string['configcookiehttponly'] = 'Habilita la nueva característica de PHP 5.2.0: se instruye a los navegadores para que envíen una \'cookie\' sólo a petición de http reales. Las \'cookies\' no deberían ser accesibles desde lenguajes de script. No todos los navegadores pueden ejecutar esta opción, y podría no ser compatible con el código actual. Ayuda a prevenir algunos tipos de ataques XSS.';
$string['configcookiesecure'] = 'Si el servidor únicamente está aceptando conexiones https, se recomienda habilitar el envío de \'cookies\' seguras. Si la opción está activada, asegúrese por favor de que el servidor web no acepta http:// o configure redirección permanente a direcciones https:// e idealmente envíe headers HSTS. Cuando una dirección <em>wwwroot</em> no comienza con https:// esta configuración es ignorada.';
$string['configcountry'] = 'Si selecciona un país, dicho país quedará como valor por defecto para nuevos usuarios o cuentas. Si se encuentra en México, elija México. Para forzar a los usuarios a elegir un país, deje la opción sin seleccionar.';
$string['configcourseoverviewfilesext'] = 'Lista separada por comas de extensiones permitidas para los archivos de vista general de curso';
$string['configcourseoverviewfileslimit'] = 'El número de archivos que se pueden añadir al resumen del curso.';
$string['configcourserequestnotify'] = 'Escriba el nombre de usuario a quien se enviará una notificación cuando se solicite un nuevo curso';
$string['configcourserequestnotify2'] = 'Usuarios a quienes se notificará cuando un nuevo curso sea solicitado. En esta lista figuran únicamente los usuarios que pueden aprobar las solicitudes de curso.';
$string['configcoursesperpage'] = 'Introduzca el número de cursos a ser mostrados por página en un listado de cursos.';
$string['configcourseswithsummarieslimit'] = 'El número máximo de cursos a mostrar en un listado de cursos, incluyendo resúmenes, antes de revertir a un listado más simple.';
$string['configcronclionly'] = 'El correr el cron desde un navegador web puede exponer información privilegiada a usuarios anónimos. Por esto, se recomienda solamente correr cron desde la línea de comando o configurarle una contraseña a cron para el acceso remoto.';
$string['configcronremotepassword'] = 'Esto significa que el \'\'script\'\' cron.php no puede ejecutarse desde un navegador web sin suministrar la contraseña usando el siguiente formato para la URL:<pre>http://sitio.ejemplo.com/admin/cron.php?password=abrete_sesamo
</pre>Si se deja vacío, no se necesita contraseña.';
$string['configcurlcache'] = 'Tiempo de vigencia (en segundos) de la caché cURL.';
$string['configcustommenuitems'] = 'Puede diseñar aquí un menú personalizado que los temas gráficos pueden mostrar. Cada línea consta de un texto del menú, un enlace URL (opcional), una herramienta (opcional) y un código de idioma o lista separada por comas de códigos de idiomas (opcional, para mostrar la línea solamente a usuarios del idioma seleccionado), separados por el caracter de línea vertical | (AltGr + 1). Puede especificar una estructura de submenús haciendo uso de guiones, y pueden usarse divisores añadiendo una línea de uno o más caracteres # donde lo desee. Por ejemplo:
<pre>
Comunidad Moodle |http://moodle.org
-Moodle soporte gratuito|http://moodle.org/support
-Moodle desarrollo|http://moodle.org/development
--Moodle Tracker|http://tracker.moodle.org
--Moodle Documentación en Español|http://docs.moodle.org/all/es/Página_Principal
-Moodle Noticias|http://moodle.org/news
Moodle comercial
-Moodle alojamiento comercial|http://moodle.com/hosting
-Moodle soporte comercial|http://moodle.com/support
</pre>';
$string['configcustomusermenuitems'] = 'Usted puede configurar los contenidos del menú del usuario (con excepción del enlace para salirse, el cual es añadido automáticamente). Cada línea está separada por caracteres de | y consiste de 1) una cadena de texto en el formato de  "langstringname, componentname" o como texto simple, 2) una URL, y 3) un ícono que puede ser un ícono de pix o una URL. Pueden usarse divisores al añadir una línea de uno omás caracteres # en donde se quiera.';
$string['configdbsessions'] = 'Si se habilita, esta opción usará la base de datos para almacenar información sobre las sesiones actuales. Note que la modificación de este ajuste desconectará a todos los usuarios, incluído Usted. Si Usted está usando MySQL, por favor asegúrese de que \'max_allowed_packet\' en el archivo my.cnf (o en el archivo my.ini) sea al menos de 4M. Se pueden configurar directamente otros manejadores de sesión en config.php,  Vea config-dist.php para mayor información. Esta opción desaparece si Usted especifica manejador de sesión en el archivo config.php.';
$string['configdebug'] = 'Si activa esta opción, se incrementará el error_reporting de PHP, de modo que recibirá más advertencias. Sólo resulta útil para los desarrolladores.';
$string['configdebugdisplay'] = 'Si activa esta opción, el reporte de errores irá a la página HTML. Es práctico pero rompe XHTML, JS, \'cookies\' y cabeceras HTTP en general. Si deshabilita esta opción, se enviarán las salidas a las bitácoras del servidor, permitiendo una mejor depuración. El parámetro de configuración de PHP <b>error_log</b> controla a qué bitácora va el error.';
$string['configdebugpageinfo'] = 'Habilítelo si desea que la información de la página aparezca en el pie de página.';
$string['configdebugsmtp'] = 'Activa la depuración con información detallada durante el envío de correos electrónicos al servidor SMTP.';
$string['configdebugvalidators'] = 'Activar si quiere disponer de enlaces a servidores externos de validación en el pie de página. Es posible que necesite crear un nuevo usuario con nombre_de_usuario  <em>w3cvalidator</em> , y permitir el acceso de invitados. Estos cambios pueden facilitar el acceso no autorizado al servidor, ¡no lo haga en los sitios de producción!';
$string['configdefaulthomepage'] = 'Determina cuál será la página principal para los usuarios ingresados';
$string['configdefaultrequestcategory'] = 'Los cursos solicitados por los usuarios serán ubicados automáticamente en esta categoría.';
$string['configdefaultrequestedcategory'] = 'Categoría por defecto en la que incluir los cursos solicitados, en el caso de que sean aprobados.';
$string['configdefaultuserroleid'] = 'A todos los usuarios autenticados se les asignarán las capacidades del rol que usted especifique aquí, en el nivel del sitio, ADEMÁS de cualesquiera otros roles que puedan tener. El rol por defecto es el de Usuario Autenticado (Authenticated user). Advierta que esto no entrará en conflicto con otros roles que el usuario tenga a menos que Usted prohiba capacidades (prohibit capabilities). Simplemente asegura que todos los usuarios tengan capacidades que no son asignables a nivel de curso (por ejemplo: enviar entradas al blog, gestionar su propio calendario, etc.).';
$string['configdeleteincompleteusers'] = 'Después de este período se eliminarán todas las cuentas no validadas completamente.';
$string['configdeleteunconfirmed'] = 'Si está usando una autenticación basada en email, éste es el período dentro del cual se aceptará una respuesta enviada por los usuarios. Pasado ese período, se eliminarán todas las cuentas no confirmadas.';
$string['configdenyemailaddresses'] = 'Para denegar direcciones de email de dominios particulares, escriba aquí una lista de ellos. El resto de los dominios serán aceptados. Para denegar subdominios escriba el dominio precedido por un punto \'.\' Por ejemplo, <strong>hotmail.com (para dominios) .yahoo.mx (para los subdominios)</strong>';
$string['configdisableuserimages'] = 'Desactiva la posibilidad de que los usuarios cambien las imágenes de sus perfiles.';
$string['configdisplayloginfailures'] = 'Esto muestra información a los usuarios  sobre los anteriores intentos de ingreso al sistema fallidos.';
$string['configdndallowtextandlinks'] = 'Activar o desactivar la función "Arrastrar y Soltar" texto y enlaces a una página del curso, junto con el arrastrar y soltar los archivos. Tenga en cuenta que el arrastre de texto en Firefox, o entre diferentes navegadores no siempre es confiable y puede dar lugar a que no se suba nada, o que suba texto corrupto.

PERO si funciona bien,  hace mucho más fácil el trabajo de maestros, alumnos y administradores...';
$string['configdoclang'] = 'Este idioma será usado en los enlaces para las páginas de documentación.';
$string['configdocroot'] = 'Define la ruta a Moodle Docs para proporcionar documentación específica según el contexto, mediante enlaces hacia \'Moodle Docs para esta página\' .en el pie de cada página. Si deja vacío este espacio, desaparecerá el enlace hacia \'Moodle Docs para esta página\'.

Puede cambiar esta opción si desea tener su propia documentación personalizada en línea. No obstante, si lo hace así, asegúrese de que las rutas de su documentación siguen el mismo formato que http://docs.moodle.org.';
$string['configdoctonewwindow'] = 'Si habilita esta opción los enlaces a Moodle Docs se mostrarán en una nueva ventana.';
$string['configeditordictionary'] = 'Este valor será usado si el corrector de ortografía (aspell) no tiene un diccionario para el idioma propio de los usuarios.';
$string['configeditorfontlist'] = 'Seleccione los tipos de letra (fonts) que deberían aparecer en la lista del menú emergente del editor.';
$string['configemailchangeconfirmation'] = 'Cuando los usuarios cambien su dirección de correo electrónico en sus perfiles de usuario, se requerirá confirmación del correo electrónico.';
$string['configenableblogs'] = 'Esta configuración les proporciona a todos los usuarios su propio blog.';
$string['configenablecalendarexport'] = 'Habilitar la exportación o suscripción a los calendarios.';
$string['configenablecomments'] = 'Habilitar comentarios';
$string['configenablecourserequests'] = 'Permite que cualquier usuario solicite la creación de un curso.';
$string['configenabledevicedetection'] = 'Permite la detección de teléfonos móviles, móviles inteligentes, tabletas o dispositivos por defecto (PC de escritorio, PC portátil, etc.) para la aplicación de temas u otras características.';
$string['configenablemobilewebservice'] = 'Habilitar el servicio para dispositivos móviles para la aplicación oficial Moodle u otra aplicación que lo solicite. Para más información lea la {$a}';
$string['configenablerssfeeds'] = 'Si se habilita, se generan canales RSS por varias características dentro del sitio, tales como blogs, foros, actividades de base de datos y glosarios. Tome nota de que también deberán habilitarse los canales RSS para los módulos de actividad particulares.';
$string['configenablerssfeedsdisabled'] = 'No está disponible porque los canales RSS están desactivados en todo el sitio. Para activarlos, vaya a Variables en Admin - Configuración.';
$string['configenablerssfeedsdisabled2'] = 'Los canales RSS están deshabilitados en el nivel servidor. Para activarlos, vaya a los ajustes de las Variables en Configuración -> Administración.';
$string['configenablesafebrowserintegration'] = 'Agrega la opción "Requerir Examen Seguro del Navegador" para el campo "Seguridad del navegador "en el formato de configuración del examen. Ver http://www.safeexambrowser.org/ para más información. Nota: los exámenes seguros requieren que la computadora y el navegador estén correctamente configurados, lo que no siempre sucede en los cafés internet y las casas de los usuarios de México.';
$string['configenablestats'] = 'Si selecciona \'sí\', el cronjob de Moodle procesará las bitácoras y recopilará algunas estadísticas. Dependiendo de la cantidad de tráfico del sitio, esta operación puede demorarse. Si activa esta opción, podrá ver algunos gráficos y estadísticas interesantes sobre cada uno de sus cursos, o bien sobre todo el sitio.';
$string['configenabletrusttext'] = 'Por defecto, Moodle limpiará siempre a fondo el texto escrito por los usuarios a fin de eliminar cualesquiera \'scripts\', medios, etc., que pudieran constituir un riesgo para la seguridad. El sistema de contenido confiable es una forma de otorgar a determinados usuarios en los que usted confía la capacidad para incluir estas características avanzadas en su contenido sin interferencias. Para activar este sistema, necesita en primer lugar activar este ajuste, y luego otorgar permiso de Contenido confiable a un rol específico de Moodle. Los textos creados o subidos por tales usuarios serán marcados como confiables y no serán sometidos a limipieza antes de ser mostrados.';
$string['configenablewebservices'] = 'Los servicios Web permiten a otros sistemas acceder a este Moodle y realizar operaciones. Para mayor seguridad esta característica debe ser desactivada a menos que realmente la esté utilizando.';
$string['configenablewsdocumentation'] = 'Habilitar la auto-generación de documentación de servicios web. Un usuario puede tener acceso a su propia documentación en su página de claves de seguridad {$a}. Solo se muestra la documentación de los protocolos habilitados.';
$string['configerrorlevel'] = 'Seleccionar la cantidad de advertencias PHP que desea mostrar. La mejor elección es \'Normal\'.';
$string['configexportlookahead'] = 'Días de anticipación durante exportación';
$string['configexportlookback'] = 'Días hacia el pasado durante exportación';
$string['configextendedusernamechars'] = 'Este ajuste permite a los estudiantes usar cualesquiera caracteres en sus nombresdeusuario (note que eso no afecta a sus nombres reales). El valor por defecto es "NO", lo que restringe los nombres_de_usuario a caracteres alfanuméricos en minúsculas, guión bajo (_), guión (-), símbolo de punto (.) o de arroba (@). Tenga en cuenta que en México es frecuente que las computadoras confundan la disposición del teclado Latinoamericano con Español, lo que comunmente resulta en acentos equivocados (à en lugar de á)...';
$string['configextramemorylimit'] = 'Algunas secuencias de comandos como búsqueda, respaldar/restaurar o cron requieren más memoria. Establezca valores más altos para los sitios grandes.';
$string['configfilterall'] = 'Filtrar todas las cadenas, incluyendo cabeceras, títulos, barra de navegación, etc. Esto resulta muy útil cuando se usa el filtro multi-idioma; de otro modo, únicamente se ocasionará una sobrecarga en el sitio para obtener escasas ganancias.';
$string['configfiltermatchoneperpage'] = 'Los filtros de enlace automático sólo generarán un enlace único a la primera instancia de texto coincidente que se encuentre en la página completa, pasando por alto el resto.';
$string['configfiltermatchonepertext'] = 'Los filtros de enlace automático sólo generarán un enlace único a la primera instancia de texto coincidente que se encuentre en cada elemento de texto (e.g., recurso, bloque) de la página, pasando por alto el resto. Este ajuste no se tendrá en cuenta si la opción de "uno por página" es <i>sí</i>.';
$string['configfilteruploadedfiles'] = 'Esta opción posibilita que Moodle procese con los filtros todos los archivos HTML y de texto subidos antes de mostrarlos.';
$string['configforcelogin'] = 'Normalmente la portada del sitio y las listas de los cursos (pero no los cursos) pueden ser leídos por cualquiera sin necesidad de escribir su nombre de usuario y contraseña. Si desea forzar a los visitantes a acceder al sitio antes de poder ver CUALQUIER CONTENIDO, debería activar esta opción.';
$string['configforceloginforprofiles'] = 'Esta opción obliga a ingresar al sitio con una cuenta válida (no como invitado) antes de poder ver la página del perfil de cualquier usuario. Si deshabilita esta opción puede darse el caso de que algunos usuarios publiquen anuncios (spam) u otro contenido inapropiado en sus perfiles y este contenido será visible para todo el mundo.';
$string['configfrontpage'] = 'Los elementos seleccionados se mostrarán en la portada del sitio.';
$string['configfrontpagecourselimit'] = 'Número máximo de cursos';
$string['configfrontpagecourselimithelp'] = 'Número máximo de cursos a mostrarse en la portada del sitio en los listados de cursos.';
$string['configfrontpageloggedin'] = 'Los elementos seleccionados se mostrarán en la portada del sitio cuando un usuario ingresa.';
$string['configfullnamedisplay'] = 'Esto define como se verán los nombres cuando se muestren completos. Para la mayoría de los sitios mono-lingües, la configuración por defecto más eficiente sería "Nombre  Apellidos", pero Usted puede elegir usar solo nombres y ocultar los apellidos.

Usted puede usar el valor por defecto \'language\' (así, en inglés y sin las comillas), para que esto lo decida la configuración del paquete de idioma actual. En este paquete de Español de México la configuración por defecto es nombre apellidos, pero algunos idiomas tienen reglas diferentes.

Los sustituíbles (placeholders) que se pueden usar son: firstname, lastname, firstnamephonetic, lastnamephonetic, middlename, y alternatename

Los sustituíbles deberán escribirse en idioma inglés.

Sus significados son: nombre, apellidos, nombre_fonético, apellido_fonético, segundo_nombre y nombre_alterno (alias o apodo).';
$string['configgeoipfile'] = 'Ubicación del archivo binario GeoIP City. Este archivo no forma parte de la distribución de Moodle y debe obtenerse de forma independiente en <a href="http://www.maxmind.com/">MaxMind</a>. Puede adquirir una versión comercial u optar por la versión gratuita. Simplemente descargue <a href="http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz" >http://geolite.maxmind.com/download/geoip/database/GeoLiteCity.dat.gz</a> y extráigalo en el directorio "{$a}" de su servidor.';
$string['configgetremoteaddrconf'] = 'Si su servidor está detrás de un \'proxy reverso\' (para mejorar la respuesta), puede usar esta opción para especificar en qué cabeceras HTTP se puede confiar que contengan la dirección IP remota. Las cabeceras se leen por orden, usando la primera que esté disponible.';
$string['configgradebookroles'] = 'Esta configuración le permite controlar quien aparece en el libro de calificaciones. Los usuarios necesitan tener al menos uno de estos roles en un curso para poder aparecer en el libro de calificaciones del curso. Es muy importante que esté activada la casilla de estudiante o no les podrán calificar sus tareas y exámenes..';
$string['configgradeexport'] = 'Elija qué formatos de exportación del libro de calificaciones constituyen su método principal para exportar calificaciones. Los plugins elegidos ajustarán y usarán un campo ("últimos exportados") para cada calificación. Por ejemplo, esto podría dar como resultado que los registros exportados se identificaran como "nuevos" o "actualizados". Si no está seguro de cómo hacer esto, no marque nada.';
$string['confighiddenuserfields'] = 'Para aumentar la privacidad de los estudiantes, seleccione qué campos de información sobre el usuario desea ocultar a otros usuarios distintos de los profesores del curso o los administradores (mánagers). Mantenga pulsada la tecla CTRL para seleccionar varios campos.

Por favor cuide los datos personales de los usuarios y considere IMPORTANTE tener la precaución de  no escribir ni permitir el acceso no-autorizado a "datos personales sensibles" (estado de salud, información genética, creencias religiosas, filosóficas y morales, afiliación sindical, opiniones políticas, orígen racial o étnico, preferencia sexual, ...) que pudieran causarle responsabilidades o riesgos innecesarios a Usted y a la Institución.

Por favor si está en México le recomendamos que consulte la página y siga las indicaciones del <a href="http://www.ifai.gob.mx">Instituto Federal de Acceso a la Información y Protección de Datos</a>';
$string['configidnumber'] = 'Esta opción especifica si

(a) No se pide a los usuarios un número de ID,

(b) Se les pide un número de ID pero pueden dejarlo en blanco o

(c) Se les pide un número de ID y no pueden dejarlo en blanco.

En caso afirmativo, el número de ID del Usuario se muestra en su Perfil.';
$string['configintro'] = 'En esta página puede especificar un número de variables de configuración que ayudan a Moodle a trabajar adecuadamente en su servidor. Que esto no le preocupe demasiado: los valores por defecto funcionarán bien y, en todo caso, siempre podrá volver a esta página y cambiar los ajustes.';
$string['configintroadmin'] = 'En esta página debería configurar su cuenta de administrador principal, que le dará un control absoluto sobre el sitio. Asegúrese de que usa un nombre_de_usuario y contraseña seguros, así como una dirección de correo electrónico válida. Más adelante podrá crear más cuentas de administrador.';
$string['configintrosite'] = 'Esta página le permite configurar la portada y dar un nombre a su nuevo sitio. Puede volver aquí más adelante y cambiar estos ajustes en cualquier momento usando los menús de Administración.';
$string['configiplookup'] = 'Cuando usted hace clic en una dirección IP (e.g., 34.12.222.93), como sucede en llas bitácoras, se mostrará un mapa con la mejor aproximación posible de la ubicación de la IP. Para hacer esto, existen diferentes plugins entre los que puede elegir, y cada uno de ellos tiene ventajas e inconvenientes.';
$string['configkeeptagnamecase'] = 'Marque esta opción si desea que los nombres de marca (tags) conserven la configuración de minúsculas/MAYÚSCULAS original tal como fueron introducidos por los usuarios que los crearon.';
$string['configlang'] = 'Elija un idioma por defecto para el sitio completo. Los usuarios pueden más tarde elegir otra opción en el menú de idiomas o en su perfil personal.
Si está en México, elija Español - Mexico.
Si está en España elija Español - Internacional.';
$string['configlanglist'] = 'Deje esto en blanco para dejar que los usuarios elijan cualquier idioma presente en la instalación de Moodle. Sin embargo, puede acortar el menú escribiendo una lista de códigos de los idiomas que desee separada por comas. Por ejemplo, en,es_es,es_mx,fr,it';
$string['configlangmenu'] = 'Decida si quiere o no mostrar el menú de idiomas de propósito general en la página de inicio, en la de ingreso , etc. Esto no afecta a la posibilidad que los usuarios tienen de elegir su idioma preferido en su propio perfil.';
$string['configlangstringcache'] = 'Guarda en la caché todas las cadenas del idioma en archivos compilados dentro del directorio de datos. Si está traduciendo Moodle o cambiando cadenas en el código fuente de Moodle, entonces puede desactivar esto. De lo contrario, déjelo activo en beneficio del rendimiento.';
$string['configlatinexcelexport'] = 'Elegir la codificación para exportaciones en formato Excel.';
$string['configlocale'] = 'Elija una localización para el sitio (esto afectará al formato de idioma y a las fechas). Necesita tener estos datos de localización instalados en su sistema operativo (en Linux sería es_MX.UTF-8). En la mayoría de los casos o si no sabe qué elegir, debería dejarlo vacío.';
$string['configloginhttps'] = 'Esta opción hace que Moodle use una conexión https segura en la página de ingreso (proporcionando un ingreso seguro) para volver luego a la URL http normal. PRECAUCIÓN: esta opción REQUIERE que el https esté habilitado específicamente en el servidor web. En caso contrario, USTED MISMO SERÁ EXPULSADO DEL SITIO.';
$string['configloglifetime'] = 'Esta opción especifica durante cuánto tiempo desea conservar las bitácoras de actividad de cada usuario. Las bitácoras anteriores serán eliminadas. Es mejor que la cifra sea alta (por si las necesita) pero si el servidor está muy ocupado y hay problemas de funcionamiento, tal vez convenga acortar el tiempo. No se recomiendan valores menores de 30 porque en ese caso puede que las estadísticas no funcionen correctamente.';
$string['configlookahead'] = 'Días de previsión';
$string['configmaxbytes'] = 'Esta opción especifica el tamaño máximo que deben tener los archivos subidos al sitio. Está limitada por los ajustes post_max_size y upload_max_size de  PHP y por el ajuste LimitRequestBody de Apache. A su vez, la opción limita el rango de tamaños que pueden elegirse en el nivel de curso o de módulo. Si se elige la opción \'Límite de Servidor\' se usará el máximo permitido por el servidor.';
$string['configmaxconsecutiveidentchars'] = 'Las contraseñas no deben tener más de este número de caracteres idénticos consecutivos. Utilice el 0 para deshabilitar esta comprobación.';
$string['configmaxeditingtime'] = 'Esta opción especifica cuánto tiempo tienen los usuarios para reeditar los mensajes enviados al foro, la retroalimentación del diario, etc. Normalmente 30 minutos es un valor adecuado.';
$string['configmaxevents'] = 'Eventos de previsión';
$string['configmaxusersperpage'] = 'Número máximo de usuarios mostrados dentro del selector de usuarios en curso, grupo, cohorte, servicio web, etc.';
$string['configmessaging'] = '¿Desea habilitar el sistema de mensajería entre los usuarios del sitio?';
$string['configmessagingallowemailoverride'] = 'Permitirle a los usuarios que las notificaciones por mensajes de correo electrónico se envíen a una dirección de correo diferente a la que aparece en su perfil';
$string['configmessagingdeletereadnotificationsdelay'] = 'Las notificaciones ya leídas pueden borrarse para ahorrar espacio. ¿Al cabo de cúanto tiempo después de ser leída puede borrarse?';
$string['configmessaginghidereadnotifications'] = 'Ocultar las notificaciones ya leídas, como las aportaciones a los foros, cuando esté viendo el historial de mensajes';
$string['configminpassworddigits'] = 'Las contraseñas deben tener al menos tantos dígitos.';
$string['configminpasswordlength'] = 'Las contraseñas deben tener al menos este número de caracteres.';
$string['configminpasswordlower'] = 'Las contraseñas deben tener al menos este número de minúsculas.';
$string['configminpasswordnonalphanum'] = 'Las contraseñas deben tener al menos este número de caracteres no alfanuméricos (%,$,#,.,/,=...). Tenga en cuenta que en México es frecuente que al configurar las computadoras se confunda la disposición del teclado LatinoAmericano de México con el teclado Español de España, lo que dificulta muchísimo localizar los caracteres de #,@,%,&,/,(,),=,?,¿,¡,!,",+,<,> y las letras acentuadas (à/á). El caracter especial más accesibles en ambos teclados parecería ser $  por lo que se sugiere encarecidamente recomendar el empleo del signo $ para evitar quejas.';
$string['configminpasswordupper'] = 'Las contraseñas deben tener al menos este número de MAYÚSCULAS.';
$string['configmobilecssurl'] = 'Un archivo CSS para personalizar su interfaz para dispositivo móvil';
$string['configmodchooserdefault'] = '¿Debería el selector de actividades ser presentado por defecto a los usuarios?';
$string['configmycoursesperpage'] = 'Número máximo de cursos que se mostrará en cualquier lista de cursos propios de un usuario';
$string['configmymoodleredirect'] = 'Esta opción fuerza a los no administradores a dirigirse a /my al ingresar y reemplaza la navegación de nivel superior del sitio con /my';
$string['configmypagelocked'] = 'Este ajuste impide que la página por defecto sea editada por cualquiera que no sea administrador';
$string['confignavcourselimit'] = 'Limita el número de cursos mostrados al usuario cuando aún no se ha registrado o no se ha inscrito en ningún curso.';
$string['confignavshowallcourses'] = 'Esta configuración determina si es que los usuarios que están inscritos en cursos pueden ver Cursos (listado de todos los cursos) en la navegación, adicionalmente a Mis Cursos (listado de los cursos en donde ellos están inscritos).';
$string['confignavshowcategories'] = '<p>Mostrar las categorías de curso en la barra de navegación y en los bloques de navegación. </p> <p>No afecta a los cursos en los que el usuario está actualmente inscrito, de manera que todavía aparecerán en la lista \'Mis cursos\' sin categorías.</p>';
$string['confignotifyloginfailures'] = 'Enviar notificaciones de fallas al ingresar a estos usuarios seleccionados. Esto requiere un almacén interno de bitácora (por ejemplo, Logstore estándar) para habilitarse.';
$string['confignotifyloginthreshold'] = 'Si las notificaciones de intentos de ingreso fallidos están activas, ¿cuántos intentos fallidos son necesarios para enviar una notificación al respecto a un usuario o a una dirección IP?';
$string['confignotloggedinroleid'] = 'Los usuarios que no están ingresados en el sitio serán tratados como si tuvieran este rol en el contexto del sitio. \'Invitado\' es casi siempre lo que usted quiere aquí, pero quizás desearía crear roles que sean más o menos restrictivos. Cosas como poner mensajes requieren que el usuario se identifique (ingrese) adecuadamente';
$string['configopentogoogle'] = 'Si activa esta opción, se permitirá a Google entrar al sitio como Invitado. Además, quien acceda al sitio vía búsqueda en Google accederá automáticamente como Invitado. Note que esta opción sólo proporciona acceso transparente a los cursos que ya permiten el acceso a invitados.';
$string['configoverride'] = 'Definido en config.php';
$string['configpasswordpolicy'] = 'Si se activa esta opción, Moodle contrastará las contraseñas del usuario con especificaciones de validez de contraseñas. Use los ajustes de más abajo para fijar tales especificaciones (serán pasadas por alto si selecciona \'No\').';
$string['configpasswordresettime'] = 'Esto especifica el tiempo que tiene la gente para validar una solicitud para reiniciar una contraseña antes de que caduque. Usualmente 30 minutos es un buen valor.';
$string['configpathtodu'] = 'Ruta a du (probablemente algo parecido a /usr/bin/du). Si escribe esto, las páginas que muestran el contenido del directorio se ejecutarán mucho más rápidamente cuando los directorios contengan muchos archivos.';
$string['configperfdebug'] = 'Si activa esta opción, aparecerá la información sobre el rendimiento en el pie de página del tema estándar.';
$string['configprofileroles'] = 'Lista de roles que son visibles en los perfiles de usuario y en la página de participación.';
$string['configprofilesforenrolledusersonly'] = 'Para prevenir el abuso de los creadores de spam, se ocultan las descripciones del perfil de los usuarios que aún no están inscritos en ningún curso. Los usuarios nuevos deben inscribirse en al menos un curso antes de que puedan agregar la descripción del perfil.';
$string['configprotectusernames'] = 'Por defecto, forget_password.php no muestra ninguna indicación que permita adivinar nombres_de_usuario o direcciones de email.';
$string['configproxybypass'] = 'Lista separada por comas de los nombres de host (parciales) o direcciones IP que deberían saltar el proxy (por ejemplo, 192.168., .mydomain.com)';
$string['configproxyhost'] = 'Si este <b>servidor</b> necesita usar un proxy (e.g., un cortafuegos) para acceder a Internet, escriba aquí el nombre del proxy. En caso contrario, déjelo en blanco.';
$string['configproxypassword'] = 'Contraseña necesaria para acceder a internet a través del proxy; dejar vacío en caso contrario (se requiere extensión PHP cURL).';
$string['configproxyport'] = 'Si este servidor necesita usar un servidor proxy, escriba aquí el puerto del proxy.';
$string['configproxytype'] = 'Tipo de proxy web (se requiere extensión PHP5 y cURL para apoyo SOCKS5).';
$string['configproxyuser'] = 'Nombre_de_usuario necesario para acceder a internet a través del proxy; dejar vacío en caso contrario (se requiere extensión PHP cURL).';
$string['configrecaptchaprivatekey'] = 'Cadena de caracteres (clave privada) usada para comunicarse entre su servidor Moodle y el servidor recaptcha.net. Las claves ReCAPTCHApueden obtenerse de <a target="_blank" href="https://www.google.com/recaptcha">Google reCAPTCHA</a>.';
$string['configrecaptchapublickey'] = 'Cadena de caracteres (clave pública) usados para mostrar el elemento reCAPTCHA en el formato de acceso. LAs claves ReCAPTCHA pueden obtenerse de <a target="_blank" href="https://www.google.com/recaptcha">Google reCAPTCHA</a>.';
$string['configrequestcategoryselection'] = 'Permitir la selección de una categoría al solicitar un curso';
$string['configrequestedstudentname'] = 'Término utilizado para \'estudiante\' en los cursos solicitados';
$string['configrequestedstudentsname'] = 'Término utilizado para \'estudiantes\' en los cursos solicitados';
$string['configrequestedteachername'] = 'Término utilizado para \'profesor\' en los cursos solicitados';
$string['configrequestedteachersname'] = 'Término utilizado para \'profesores\' en los cursos solicitados';
$string['configsectioninterface'] = 'Interfaz';
$string['configsectionmail'] = 'Correo electrónico';
$string['configsectionmaintenance'] = 'Mantenimiento';
$string['configsectionmisc'] = 'Misceláneo';
$string['configsectionoperatingsystem'] = 'Sistema Operativo';
$string['configsectionpermissions'] = 'Permisos';
$string['configsectionrequestedcourse'] = 'Solicitudes de cursos';
$string['configsectionsecurity'] = 'Seguridad';
$string['configsectionstats'] = 'Estadísticas';
$string['configsectionuser'] = 'Usuario';
$string['configsecureforms'] = 'Moodle puede usar un nivel adicional de seguridad cuando acepta datos provenientes de formatos web. Si la opción está activada, se contrastará la variable HTTP_REFERER del navegador con la dirección del formato actual. En muy pocos casos esto ocasiona problemas si el usuario utiliza un cortafuegos (por ejemplo: ZoneAlarm) configurado para desmontar su HTTP_REFERER del tráfico web. El síntoma consiste en quedarse \'atascado\' en un formato. Si, pongamos por caso, los usuarios tuvieran problemas con la página de ingreso, quizás conviniera desactivar la opción, aun con el riesgo de dejar el sitio más vulnerable a ataques de fuerza bruta. En caso de duda, seleccione la opción \'Sí\'.';
$string['configsessioncookie'] = 'Esta opción personaliza el nombre de la \'cookie\' usada para las sesiones de Moodle. Es opcional, y resulta útil únicamente para evitar que las \'cookies\' se confundan cuando hay más de una copia de Moodle ejecutándose en el mismo sitio web.';
$string['configsessioncookiedomain'] = 'Le permite cambiar el dominio donde están disponibles las cookies de Moodle. Es útil para la personalización de Moodle (por ejemplo, la autenticación o plugins de inscripción) que necesitan compartir información de la sesión de Moodle con una aplicación web en otro subdominio. <strong> ADVERTENCIA: se recomienda dejar este ajuste en el valor por defecto (vacío) - un valor incorrecto impedirá todos los ingresos al sitio </strong>.';
$string['configsessioncookiepath'] = 'Si necesita cambiar el lugar al que los navegadores envían las \'cookies\' de Moodle, cambie esta opción para especifirar un subdirectorio de su sitio web. En caso contrario, \'/\' por defecto funcionará correctamente.';
$string['configsessiontimeout'] = 'Si los usuarios conectados al sitio están inactivos durante mucho tiempo (sin cargar páginas), serán desconectados automáticamente (se terminará su sesión). Esta variable especifica el tiempo de inactividad antes de la desconexión.';
$string['configshowcommentscount'] = 'Mostrar el número de comentarios. Supone una consulta más cuando se muestre el enlace a los comentarios';
$string['configshowicalsource'] = 'Mostrar información acerca del orígen para los eventos de iCal';
$string['configshowsiteparticipantslist'] = 'Todos los estudiantes y profesores del sitio aparecerán en la lista de participantes. ¿Quién puede ver esa lista?';
$string['configsitedefaultlicense'] = 'Licencia predeterminada del sitio';
$string['configsitedefaultlicensehelp'] = 'Licencia predeterminada para publicar contenidos en este sitio';
$string['configsitemaxcategorydepth'] = 'Profundidad máxima de la categoría';
$string['configsitemaxcategorydepthhelp'] = 'Esta opción especifica la profundidad máxima de las categorías-hijo expandidas al mostrar las categorías o lista combo. Las categorías de nivel más profundo aparecerán como enlaces y los usuarios pueden expandirlos con solicitud AJAX.';
$string['configslasharguments'] = 'Los \'Slash arguments\' (usando <em>PATH_INFO</em>) son requeridos para que se muestren correctamente los paquetes SCORM y recursos con múltiples-archivos. Si su servidor no soporta los \'slash arguments\' y Usted no puede configurarlos, esta configuración se puede deshabilitar, aunque esto causará que las cosas no funcionen.<br />Nota: El empleo de \'slash arguments\' será necesario en versiones futuras de Moodle.';
$string['configsmartpix'] = 'Cuando se activa, los inconos se sirven a través de un script PHP que busca el tema actual, luego todos los temas padre, luego la carpeta /pix de Moodle. Esto reduce la necesidad de duplicar archivos de imágenes dentro de los temas, pero tiene un pequeño costo de rendimiento.';
$string['configstartwday'] = 'Día en que comienza la semana';
$string['configstatsfirstrun'] = 'Esta opción especifica el momento a partir del cual deberían procesarse las bitácoras <b>la primera vez</b> que el cronjob procesa las estadísticas. Si el sitio tiene mucho tráfico y el servidor es compartido, probablemente no sea una buena idea comenzar demasiado pronto, puesto que se tardará mucho tiempo y se consumirán muchos recursos. (Nótese que en esta opción 1 mes equivale a 28 días, en tanto que en los gráficos y reportes generados, 1 mes equivale a 1 mes de calendario).';
$string['configstatsmaxruntime'] = 'El procesamiento estadístico puede ser muy intenso, de modo que conviene combinar este campo y el siguiente para especificar cuándo y durante cuánto tiempo funcionará.';
$string['configstatsmaxruntime2'] = 'El procesamiento de datos estadísticos puede ser muy intenso. Especifique el tiempo máximo permitido para recopilar las estadísticas de un día. El número máximo de días procesados en una ejecución del cron es de 31.';
$string['configstatsmaxruntime3'] = 'Especifique el tiempo máximo permitido para calcular las estadísticas de un día, teniendo en cuenta que el procesamiento de datos estadísticos supone una gran carga para el servidor. El número máximo de días procesados en un trabajo de cron puede especificarse más abajo.';
$string['configstatsruntimedays'] = 'Especifique el número máximo de días procesados en cada ejecución de análisis de datos estadísticos. Una vez que las estadísticas estén actualizadas, sólo se procesará un día, de modo que deberá ajustar este valor dependiendo de la carga de su servidor, reduciéndolo si se necesitan ejecuciones más cortas del cron.';
$string['configstatsruntimestart'] = '¿En qué momento comenzará a trabajar el cronjob que procesa las estadísticas? Por favor, especifique distintas horas si existen varios sitios  Moodle en el mismo servidor físico.';
$string['configstatsuserthreshold'] = 'Este ajuste especifica el número mínimo de usuarios inscritos en un curso para que este valor sea incluido en los cálculos de las estadísticas.';
$string['configstrictformsrequired'] = 'Si está activado, se impide a los usuarios introducir un espacio en blanco o un salto de línea en los campos obligatorios de los formatos.';
$string['configstripalltitletags'] = 'Desactive esta opción para permitir marcas HTML en los nombres de actividades y recursos.';
$string['configsupportemail'] = 'Esta dirección email se publicará a los usuarios del sitio como aquella a la que deberán dirigirse cuando necesiten ayuda de tipo general (por ejemplo, cuando un usuario nuevo crea su propia cuenta). Si se deja en blanco, no se dispondrá de una dirección de ayuda del tipo mencionado.';
$string['configsupportname'] = 'Este es el nombre de una persona u otra entidad  que ofrece ayuda general por medio de una dirección email o una página web.';
$string['configsupportpage'] = 'Esta dirección email se publicará a los usuarios del sitio como aquella a la que deberán dirigirse cuando necesiten ayuda de tipo general (por ejemplo, cuando un usuario nuevo crea su propia cuenta). Si se deja en blanco, no se suministrará el enlace correspondiente.';
$string['configtempdatafoldercleanup'] = 'Remover archivos temporales más antiguos que el tiempo seleccionado de la carpeta de datos.';
$string['configthemedesignermode'] = 'Habitualmente todas las imágenes del tema y hojas de estilo se almacenan en caché en los navegadores y en el servidor durante un tiempo muy largo, para mejorar el rendimiento. Si va a rediseñar los temas o desarrollar código, es probable que desee activar este modo para que no se guarden versiones en la caché. Advertencia: esto hará que su sitio sea más lento para todos los usuarios mientras esté activado. Opcionalmente también puede restablecer la caché manualmente desde la página del selector de temas.';
$string['configthemelist'] = 'Deje esta opción en blanco para permitir que se utilice cualquier tema válido. Si quiere acortar el menú de temas, puede especificar una lista de nombres separados por comas. Por ejemplo: standard,orangewhite';
$string['configtimezone'] = 'Ésta es la  zona horaria POR DEFECTO para mostrar fechas -aunque cada usuario puede anular esta configuración en su perfil. Los quehaceres  agendados de CRON y otras configuraciones del servidor  están especificadas en esta zona horaria. Usted debería de cambiar esta configuración en el caso de que se muestre como \'Zona horaria inválida\' (Invalid timezone).

Se le recomienda que seleccione una zona horaria por su nombre, que sea específica para su región (América/Cd de México, América/Cancún, América/Chihuahua/...).

La hora oficial en México está definida en <a href="http://www.cenam.mx/hora_oficial/">la página de hora oficial del Centro Nacional de Metrología</a>.';
$string['configuseblogassociations'] = '¿Deberían los usuarios poder organizar su blog asociando entradas con los cursos y con los módulos de curso?';
$string['configuseexternalyui'] = 'En lugar de usar archivos locales, usar archivos disponibles en línea en servidores Yahoo&#145;s. ADVERTENCIA: Esto requiere una conexión de internet; de otro modo, AJAX no funcionará en el sitio.';
$string['configuserquota'] = 'El número máximo de bytes que un usuario puede almacenar en sus carpetas de archivos privados.{$a->bytes} bytes == {$a->displaysize}';
$string['configusesitenameforsitepages'] = 'Si está habilitado se utilizará el nombre corto del sitio en lugar de la cadena de texto \'páginas del sitio\' en la navegación por las páginas del sitio';
$string['configusetags'] = '¿Habilitar la funcionalidad de marcas (tags) para todo el sitio?';
$string['configvariables'] = 'Variables';
$string['configverifychangedemail'] = 'Habilita la verificación de direcciones de email cambiadas usando ajustes de dominios de correo electrónico permitidos y denegados. Si esta opción está deshabilitada, los dominios se fuerzan sólo cuando se crean usuarios nuevos.';
$string['configvisiblecourses'] = 'Mostrar normalmente los cursos de categorías ocultas';
$string['configwarning'] = 'Sea cuidadoso al modificar estos resultados (valores extraños pueden ocasionar problemas).';
$string['configyuicomboloading'] = 'Esta opción permite la optimización de carga de archivos de bibliotecas YUI. Esta opción debe estar habilitada en los centros de producción por razones de rendimiento.';
$string['confirmation'] = 'Confirmación';
$string['confirmdeletecomments'] = 'Está a punto de eliminar comentarios, ¿está seguro?';
$string['confirmed'] = 'Confirmado';
$string['cookiehttponly'] = 'Sólo \'cookies\' http';
$string['cookiesecure'] = 'Sólo \'cookies\' seguras';
$string['country'] = 'País por defecto';
$string['coursecontact'] = 'Responsables (contactos) del curso';
$string['coursecontact_desc'] = 'Esta opción le permite controlar quién aparece en la descripción del curso. Los usuarios deben tener al menos uno de estos roles en un curso a fin de poder mostrarlos en la descripción de ese curso.';
$string['courselistshortnames'] = 'Mostrar nombres extendidos de cursos';
$string['courselistshortnames_desc'] = 'Si se habilita, se mostrarán tanto el nombre corto del curso como el nombre completo en las listas de cursos. Si se requiere, los nombres extendidos del curso pueden personalizarse al editar  la cadena de texto de idioma \'courseextendednamedisplay\' , mediante la personalización del idioma.';
$string['coursemgmt'] = 'Gestionar cursos y categorías';
$string['courseoverview'] = 'Visión global del curso';
$string['courserequestnotify'] = 'Notificación de solicitud de curso';
$string['courserequestnotifyemail'] = 'El usuario {$a->user} ha solicitado un nuevo curso en {$a->link}';
$string['courserequests'] = 'Solicitudes de cursos';
$string['courserequestspending'] = 'Solicitudes de curso pendientes';
$string['courses'] = 'Cursos';
$string['coursesperpage'] = 'Cursos por página';
$string['courseswithsummarieslimit'] = 'Cursos con límite de resúmenes';
$string['creatornewroleid'] = 'Rol de los creadores en cursos nuevos';
$string['creatornewroleid_help'] = 'Si el usuario no tiene aún permiso para administrar el nuevo curso, el usuario es inscrito automáticamente utilizando este rol.';
$string['cron'] = 'Cron';
$string['cronclionly'] = 'Ejecución de cron sólo mediante línea_de_comandos';
$string['cronerrorclionly'] = 'Lo sentimos, el acceso por internet a esta pagina ha sido desactivado por el administrador.';
$string['cronerrorpassword'] = 'Lo sentimos, Usted no ha proporcionado una contrasena valida para acceder a esta página';
$string['cron_help'] = 'El script de cron.php corre varios quehaceres a diferentes intervalos agendados, tales como enviar notificaciones Email de publicaciones en foro.este script debría de correr regularmente - idealmente cada minuto.';
$string['cronremotepassword'] = 'Contraseña de cron para acceso remoto';
$string['cronwarning'] = 'El <a href="{$a}">script de mantenimiento de cron.php </a>  no ha sido ejecutado durante las últimas 24 horas.';
$string['cronwarningcli'] = 'El script de mantenimiento interfaz_de_línea_de_comando/cron.php no ha sido ejecutado durante las últimas 24 horas.';
$string['ctyperequired'] = 'Con el fin de mejorar el rendimiento del sitio y ofrecer compatibilidad multilingüe, Moodle requiere la extensión ctype de PHP.';
$string['curlcache'] = 'cURL caché TTL';
$string['curlrequired'] = 'La extensión cURL PHP ahora es requerida por Moodle con el fin de comunicarse con los repositorios de Moodle.';
$string['curltimeoutkbitrate'] = 'Bitrate (en Kbps) a emplear cuando se calcula tiempo cURL';
$string['curltimeoutkbitrate_help'] = 'Esta configuración se usa para calcular un tiempo (timeout) apropiado en solicitudes cURL grandes. Como parte del cálculo, se hace una solicitud HTTP HEAD para determinar el tamaño del contenido. El ponerlo a 0 desabilita esta solicitud.';
$string['currenttheme'] = 'Tema actual';
$string['customcheck'] = 'Otras comprobaciones';
$string['custommenu'] = 'Menú personalizado';
$string['custommenuitems'] = 'Ítems del menú personalizado';
$string['customusermenuitems'] = 'Ítems del menú del usuario';
$string['datarootsecurityerror'] = '<p><strong>¡ADVERTENCIA DE SEGURIDAD!</strong></p><p>Su directorio dataroot está en una ubicación errónea y está expuesto a la web. Esto significa que cualquiera desde cualquier lugar puede acceder a todos sus archivos privados y que algunos de ellos podrían ser usados por un cracker para obtener acceso no autorizado al sitio.</p>
<p>Usted <em>debe</em> cambiar el directorio dataroot ({$a}) a una nueva ubicación fuera de su directorio web público y actualizar el correspondiente ajuste de <code>$CFG->dataroot</code> en su config.php.</p>';
$string['datarootsecuritywarning'] = 'La configuración de su sitio podría no ser segura. Por favor, asegúrese de que su directorio raíz ({$a}) no es accesible directamente vía web.';
$string['dbsessions'] = 'Usar la base de datos para información de la sesión';
$string['debug'] = 'Mensajes de depuración';
$string['debugall'] = 'TODOS: Mostrar todos los mensajes razonables de depuración PHP';
$string['debugdeveloper'] = 'DESARROLLADOR: mensajes extra de depuración Moodle para desarrolladores';
$string['debugdisplay'] = 'Mostrar mensajes de depuración';
$string['debugging'] = 'Depuración (debugging)';
$string['debugminimal'] = 'MÍNIMO: Mostrar sólo errores fatales';
$string['debugnone'] = 'NINGUNO: No mostrar errores ni advertencias';
$string['debugnormal'] = 'NORMAL: Mostrar errores, advertencias y avisos';
$string['debugpageinfo'] = 'Mostrar información de la página';
$string['debugsmtp'] = 'Depurar envío de emails';
$string['debugstringids'] = 'Mostrar el origen de las cadenas de idiomas';
$string['debugstringids_desc'] = 'Esta opción está diseñada para ayudar a los traductores. Cuando esta opción está activada, si se agrega el parámetro strings =1 para una petición de URL, se mostrará el archivo de idioma y el identificador de cadena al lado de cada cadena que se emite.';
$string['debugvalidators'] = 'Mostrar enlaces de validación';
$string['defaultcity'] = 'Ciudad por defecto';
$string['defaultcity_help'] = 'La ciudad introducida aquí será la ciudad por defecto al crear nuevas cuentas de usuario.';
$string['defaultformatnotset'] = 'Error al determinar el formato por defecto del curso. Por favor revise las configuraciones del sitio.';
$string['defaulthomepage'] = 'Página de inicio predeterminada para los usuarios';
$string['defaultrequestcategory'] = 'Categoría por defecto de las solicitudes de curso';
$string['defaultsettinginfo'] = 'Valor por defecto: {$a}';
$string['defaultuserroleid'] = 'Rol por defecto de todos los usuarios';
$string['deleteincompleteusers'] = 'Eliminar usuarios incompletos después de';
$string['deleteunconfirmed'] = 'Eliminar usuarios no confirmados después de';
$string['deleteuser'] = 'Eliminar usuario';
$string['density'] = 'Densidad';
$string['denyemailaddresses'] = 'Dominios de Email denegados';
$string['development'] = 'Desarrollo';
$string['devicedetectregex'] = 'Expresiones regulares para la detección de dispositivos';
$string['devicedetectregex_desc'] = '<p>Por defecto Moodle puede detectar dispositivos del tipo \'por defecto\' (PC de escritorio, PC portátil, etc.) dispositivos móviles (teléfonos y pequeños dispositivos como PDAs), tabletas (iPads, tabletas Android) y \'antiguos\' (usuarios de Internet Explorer 6). Se puede usar el selector de temas para aplicar temas diferentes a cada uno de ellos. Este ajuste admite expresiones regulares que permiten detectar tipos de dispositivos extra (éstos tienen precedencia sobre los tipos por defecto).</p><p>Por ejemplo, podría introducir la expresión regular \'/(MIDP-1.0|Maemo|Windows CE)/\' para detectar algunos teléfonos usados habitualmente con determinada característica y añadir el valor \'telefonocaracteristica\'. Esto añade \'telefonocaracteristica\' en el selector de temas, lo que permite añadir un tema para usarse con estos dispositivos. El resto de teléfonos seguirán usando el tema seleccionado para los tipos de dispositivos móviles.</p>';
$string['devicedetectregexexpression'] = 'Expresión regular';
$string['devicedetectregexvalue'] = 'Valor devuelto';
$string['devicetype'] = 'Tipo de dispositivo';
$string['devlibdirpresent'] = 'Los directorios con librerías de desarrollo como <em>vendor</em> o <em>node_modules</em> sno deber´ían de estar presentes en sitios públicos. Vea <a href="{$a->moreinfourl}">reporte de vista general de seguridad</a> para más detalles.';
$string['disableuserimages'] = 'Desactivar imágenes en el perfil del usuario';
$string['displayerrorswarning'] = 'No se recomienda habilitar el ajuste PHP <em>display_errors</em> en sitios en producción debido a que algunos mensajes de error pueden revelar información sensible sobre su servidor.';
$string['displayloginfailures'] = 'Mostrar intentos de ingreso fallidos';
$string['dndallowtextandlinks'] = 'Subir texto/enlaces mediante "Arrastrar y Soltar"';
$string['doclang'] = 'Idioma para documentación';
$string['docroot'] = 'Raíz de Moodle Docs';
$string['doctonewwindow'] = 'Abrir en nueva ventana';
$string['download'] = 'Descargar';
$string['durationunits'] = 'unidades de duración';
$string['edithelpdocs'] = 'Editar documentos de ayuda';
$string['editlang'] = '<b>Edición</b>';
$string['editorbackgroundcolor'] = 'Color del fondo';
$string['editordictionary'] = 'Diccionario del editor';
$string['editorfontfamily'] = 'Familia de tipos de letra (fonts)';
$string['editorfontlist'] = 'Lista de tipos de letra (fonts)';
$string['editorfontsize'] = 'Tamaño del tipo de letra (font) por defecto';
$string['editorhidebuttons'] = 'Botones ocultos';
$string['editorkillword'] = 'Filtro formato Word';
$string['editorspelling'] = 'Corrector de ortografía editor';
$string['editorspellinghelp'] = 'Activar o desactivar corrector de ortografía. Cuando está activado, el <strong>aspell</strong> debe estar instalado en el servidor.';
$string['editstrings'] = 'Editar palabras o frases';
$string['emailchangeconfirmation'] = 'Confirmación de cambio de email';
$string['emoticonalt'] = 'Texto alternativo';
$string['emoticoncomponent'] = 'Componente de imagen';
$string['emoticonimagename'] = 'Nombre de la imagen';
$string['emoticons'] = 'Emoticones';
$string['emoticons_desc'] = 'Este formato define los \'emoticons\' (o iconos gestuales o \'caritas\') usados en su sitio.

Para eliminar una fila de la tabla, guarde el formato con un valor vacío en cualquiera de los campos obligatorios.

Para registrar un nuevo \'emoticon\', rellene los campos de la última fila en blanco.

Para restablecer todos los campos en los valores predeterminados, siga el enlace de arriba.

* Texto (obligatorio) - Este texto será reemplazado por la imagen de icono gestual. Debe haber al menos dos caracteres de longitud.

* Nombre de la imagen (obligatorio) - El nombre del archivo de imagen del icono gestual sin la extensión, como en la carpeta de componentes pix.

* Componente de imagen (obligatorio) - El componente que proporciona el ícono.

* Texto alternativo (opcional) - identificador de cadena y los componentes del texto alternativo de los iconos gestuales.';
$string['emoticonsreset'] = 'Reconfigurar los emoticonos a los valores predeterminados';
$string['emoticontext'] = 'Texto';
$string['emptysettingvalue'] = 'Vacío';
$string['enableblogs'] = 'Habilitar blogs';
$string['enablecalendarexport'] = 'Habilitar exportación de calendario';
$string['enablecomments'] = 'Habilitar comentarios';
$string['enablecourserequests'] = 'Habilitar solicitudes de curso';
$string['enablecssoptimiser'] = 'Habilitar el optimizador de CSS';
$string['enablecssoptimiser_desc'] = 'Cuando se habilita, CSS se someterá a un proceso de optimización antes de ser cacheado. El optimizador procesa el CSS y remueve las reglas y estilos duplicados, y también los espacios en blanco que pueden ser removidos y reformatea. Por favor tenga en cuenta que habilitar esto al mismo tiempo que se habilita el modo de diseñador de temas es pesadísimo para el rendimiento, pero le ayudará a los diseñadores de temas gráficos para crear CSS optimizado.';
$string['enabled'] = 'Habilitado';
$string['enabledevicedetection'] = 'Habilitar detección de dispositivos';
$string['enableglobalsearch'] = 'Habilitar búsqueda global';
$string['enableglobalsearch_desc'] = 'Si se habilita, los datos serán indexados (indizados) y sinconizados por un quehacer agendado del sistema.';
$string['enablegravatar'] = 'Activar Gravatar';
$string['enablegravatar_help'] = 'Cuando se habilita Moodle intentará buscar una imagen de perfil de usuario desde Gravatar si el usuario no ha subido una imagen';
$string['enablemobilewebservice'] = 'Habilitar servicio web para dispositivos móviles';
$string['enablerecordcache'] = 'Habilitar caché de registro';
$string['enablerssfeeds'] = 'Habilitar canales RSS';
$string['enablesafebrowserintegration'] = 'Habilitar integración con Safe Exam Browser';
$string['enablesearchareas'] = 'Habilitar áreas para búsqueda';
$string['enablestats'] = 'Habilitar estadísticas';
$string['enabletrusttext'] = 'Habilitar contenido confiable';
$string['enablewebservices'] = 'Habilitar servicios web';
$string['enablewsdocumentation'] = 'Documentación de servicios web';
$string['enrolinstancedefaults'] = 'Valores predeterminados de instancias de inscripción';
$string['enrolinstancedefaults_desc'] = 'Ajustes predeterminados de inscripción en nuevos cursos.';
$string['enrolmultipleusers'] = 'Inscribir a los usuarios';
$string['environment'] = 'Entorno';
$string['environmenterrortodo'] = 'Debe resolver todos los problemas de entorno (errores) encontrados arriba antes de proceder a instalar esta versión de Moodle';
$string['environmenterrorupgrade'] = 'Advertencia: ¡ Debería resolver todos los problemas (errores) del entorno encontrados antes de proceder con la actualización de esta versión de Moodle ! Actualizar sin arreglar estos requisitos podría causar problemas como pérdida de datos. ¿ Está seguro que desea continuar con la actualización ?';
$string['environmentmustfixsetting'] = 'El ajuste PHP debe cambiarse.';
$string['environmentok'] = 'Su entorno de servidor cumple todos los requisitos mínimos.';
$string['environmentrecommendcustomcheck'] = 'Si esta comprobación falla, ello indica un problema potencial';
$string['environmentrecommendinstall'] = 'debería estar instalado y activado para conseguir los mejores resultados';
$string['environmentrecommendversion'] = 'versión {$a->needed} es recomendada y está ejecutando {$a->current}';
$string['environmentrequirecustomcheck'] = 'esta prueba debe pasar';
$string['environmentrequireinstall'] = 'debe estar instalado y activado';
$string['environmentrequireversion'] = 'versión {$a->needed} es obligatoria y está ejecutando {$a->current}';
$string['environmentsettingok'] = 'detectado ajuste recomendado';
$string['environmentshouldfixsetting'] = 'El ajuste PHP debe cambiarse.';
$string['environmentxmlerror'] = 'Error leyendo la información sobre el entorno ({$a->error_code})';
$string['errordeletingconfig'] = 'Ha ocurrido un error al eliminar los registros de configuración del plugin \'{$a}\'.';
$string['errorsetting'] = 'No pudo guardarse el ajuste:';
$string['errorwithsettings'] = 'Algunos ajustes no se han cambiado debido a un error:';
$string['eventshandlersinuse'] = 'Los siguientes plugins en su sistema están usando manejadores API de Eventos 1 deprecados (Events 1 API deprecated handlers): \'{$a}\'. Por favor actualízelos a usar Events 2 API. Vea https://docs.moodle.org/dev/Event_2#Event_dispatching_and_observers.';
$string['everyonewhocan'] = 'Todos los que puedan \'{$a}\'';
$string['exceptions'] = 'excepciones';
$string['execpathnotallowed'] = 'La configuración de rutas locales y rutas hacia ejecutables está deshabilitada en config.php';
$string['experimental'] = 'Experimental';
$string['experimentalsettings'] = 'Configuraciones experimentales';
$string['extendedusernamechars'] = 'Permitir caracteres extendidos en nombres_de_usuarios';
$string['extramemorylimit'] = 'Límite de memoria de PHP extra';
$string['fatalsessionautostart'] = '<p>Se ha detectado un error de configuración grave; por favor notifique al administrador del servidor. </p><p>Para que funcione correctamente, Moodle requiere que el administrador cambie la configuración de PHP. </p><p> <code> session.auto_start </code> debe establecerse en <code>off </code>. </p> <p>Esta configuración se controla editando <code> php.ini </code>, la configuración de Apache/IIS <br /> o el archivo <code>. htaccess </code> en el servidor. </p>';
$string['filecreated'] = 'Archivo nuevo creado';
$string['filestoredin'] = 'Guardar archivo en la carpeta:';
$string['filestoredinhelp'] = 'Dónde se almacenará el archivo';
$string['filterall'] = 'Filtrar todas las cadenas';
$string['filtermatchoneperpage'] = 'Filtrar una coincidencia por página';
$string['filtermatchonepertext'] = 'Filtrar una coincidencia por texto';
$string['filters'] = 'Filtros';
$string['filtersettings'] = 'Gestionar filtros';
$string['filtersettingsgeneral'] = 'Ajustes generales de filtro';
$string['filteruploadedfiles'] = 'Filtrar archivos subidos';
$string['forcelogin'] = 'Forzar a los usuarios a ingresar';
$string['forceloginforprofileimage'] = 'Forzar a los usuarios a ingresar para ver imágenes de usuarios';
$string['forceloginforprofileimage_help'] = 'Si se habilita, los usuarios deben ingresar para ver las imágenes del perfil y la imágen por defecto de usuario será empleada en todos los correos electrónicos de notificación.';
$string['forceloginforprofiles'] = 'Forzar a los usuarios a ingresar para ver los perfiles';
$string['forcetimezone'] = 'Forzar zona horaria';
$string['formatuninstallwithcourses'] = 'Hay {$a->count} cursos que usan {$a->format}. Sus formatos serán cambiados a {$a->defaultformat} (el formato por defecto para este sitio). Algunos datos específicos de este formato se pueden perder. ¿Está Usted seguro de querer hacerlo?';
$string['frontpage'] = 'Portada';
$string['frontpagebackup'] = 'Respaldo de la portada';
$string['frontpagedefaultrole'] = 'Rol por defecto en la portada';
$string['frontpagefilters'] = 'Filtros de la portada';
$string['frontpageloggedin'] = 'Elementos de la portada al entrar al sitio';
$string['frontpageoverrides'] = 'Anulaciones de permisos en la portada';
$string['frontpagequestions'] = 'Preguntas de la portada';
$string['frontpagerestore'] = 'Restauración de la portada';
$string['frontpageroles'] = 'Roles de la portada';
$string['frontpagesettings'] = 'Ajustes de la portada';
$string['fullnamedisplay'] = 'Formato de nombre completo';
$string['fullnamedisplayprivate'] = 'Formato de nombre completo - privado';
$string['gdrequired'] = 'La extensión GD actualmente es requerida por Moodle para la conversión de imágenes.';
$string['generalsettings'] = 'Ajustes generales';
$string['geoipfile'] = 'Archivo de datos de ciudades de GeoIP';
$string['getremoteaddrconf'] = 'Fuente de direcciones IP registradas';
$string['globalsearch'] = 'Búsqueda global';
$string['globalsearchmanage'] = 'Gestionar búsqueda global';
$string['googlemapkey3'] = 'Clave de Google Maps API V3';
$string['googlemapkey3_help'] = 'Necesita introducir una clave especial para utilizar Google Maps para visualizar la búsqueda de la dirección IP. Puede obtener dicha clave gratuitamente en <a href="https://developers.google.com/maps/documentation/javascript/tutorial#api_key" target="_blank">https://developers.google.com/maps/documentation/javascript/tutorial#api_key</a>';
$string['gotofirst'] = 'Ir a la primera cadena ausente';
$string['gradebook'] = 'Libro de calificaciones';
$string['gradebookroles'] = 'Roles calificados';
$string['gradeexport'] = 'Principales métodos de exportación de calificaciones';
$string['gravatardefaulturl'] = 'URL imagen Gravatar por defecto';
$string['gravatardefaulturl_help'] = 'Gravatar requiere una imagen por defecto para mostrar en caso que no encontrara una imagen para un usuario dado. Proporcione la URL completa para una imagen. Si deja vacío este campo, Moodle intentará usar la imagen por defecto más apropiada para la página que está viendo. Observe también que Gravatar tiene un número de códigos que pueden usarse para  <a href="https://en.gravatar.com/site/implement/images/#default-image">generar imágenes por defecto</a>.';
$string['groupenrolmentkeypolicy'] = 'Política de inscripción de grupos';
$string['groupenrolmentkeypolicy_desc'] = 'Activando esta opción hará que Moodle compruebe que la clave de inscripción de grupo cumple la política de claves de acceso válidas.';
$string['guestroleid'] = 'Rol para invitado';
$string['guestroleid_help'] = 'Este rol se le asigna automáticamente a los invitados. También se asigna, temporalmente, por medio del plugin de inscripción de invitados a los usuarios que no están inscritos en un curso.';
$string['helpadminseesall'] = '¿Pueden los administradores ver todos los eventos del calendario o sólo los que les conciernen?';
$string['helpcalendarcustomexport'] = 'Habilitar exportación de rango de fechas personalizado de  calendario. Las exportaciones de calendario deben habilitarse antes de que esto funcione.';
$string['helpexportlookahead'] = '¿Con cuantos días de anticipación deben buscarse eventos en el calendario durante la exportación para la opción de exportación personalizada?';
$string['helpexportlookback'] = '¿Con cuantos días en el pasado deben buscarse eventos en el calendario durante la exportación para la opción de exportación personalizada?';
$string['helpforcetimezone'] = 'Puede permitir que los usuarios seleccionen su zona horaria, o forzarla para todos (por ejemplo: América/Cd de México).';
$string['helpshowicalsource'] = 'Habilite esta configuración si quiere mostrar el nombre de la suscripción a iCal y el enlace para eventos importados de iCal.';
$string['helpsitemaintenance'] = 'Para actualizaciones y otras tareas. Si se habilita, su sitio Moodle sólo será accesible para los administradores.';
$string['helpstartofweek'] = '¿Qué día comienza la semana?';
$string['helpupcominglookahead'] = '¿Cuántos días debe considerar el calendario por defecto para eventos próximos?';
$string['helpupcomingmaxevents'] = '¿Cuántos eventos próximos se mostrarán como máximo a los usuarios?';
$string['helpweekenddays'] = '¿Cuántos días de la semana se considerarán como \'fin de semana\' y se mostrarán con un color diferente?';
$string['hiddenuserfields'] = 'Ocultar campos de usuario';
$string['hidefromall'] = 'Ocultar a todos los usuarios';
$string['hidefromnone'] = 'No ocultar a nadie';
$string['hidefromstudents'] = 'Ocultar a estudiantes';
$string['htmleditor'] = 'Editor HTML';
$string['htmleditorsettings'] = 'Ajustes del editor HTML';
$string['htmlsettings'] = 'Ajustes HTML';
$string['http'] = 'HTTP';
$string['httpsecurity'] = 'Seguridad HTTP';
$string['hubs'] = 'Hubs';
$string['iconvrequired'] = 'Es necesario instalar la extensión ICONV';
$string['ignore'] = 'Ignorar';
$string['includemoduleuserdata'] = 'Incluir datos del usuario del módulo';
$string['incompatibleblocks'] = 'Bloques imcompatibles';
$string['incompleteunicodesupport'] = 'La configuración actual de MySQL o MariaDB está usando \'utf8\'. Este conjunto de caracteres no soporta caracteres de cuatro bytes, los que incluyen algunos emoticones. El tratar de usar estos caracteres resultará en un error al actualizar un registro, y cualquier información enviada a la base de datos se perderá. Por favor, considere cambiar sus configuraciones hacia \'utf8mb4\'. Ve la documentación para los detalles completos.';
$string['indexdata'] = 'Indexar (indizar) datos';
$string['installhijacked'] = 'La instalación debe finalizarse desde la misma dirección IP original';
$string['installsessionerror'] = 'No se puede inicializar sesión de PHP, por favor, verifique que su navegador acepta \'cookies\'.';
$string['intlrecommended'] = 'La extensión internacional se utiliza para mejorar el soporte a la internacionalización, como en el caso de la ordenación de localidades.';
$string['intlrequired'] = 'La extensión Int es necesaria para mejorar e soporte de intarnacionalización, como por ejemplo al ordenar con respecto a  locale y nombres internacionales de dominio.';
$string['invalidsection'] = 'Sección no válida.';
$string['invaliduserchangeme'] = 'El nombre_de_usuario "changeme" es reservado: no puede crear una cuenta con ese nombre (que significa "cámbiame").';
$string['ipblocked'] = 'Actualmente este sitio no está disponible.';
$string['ipblocker'] = 'Bloqueador de IP';
$string['ipblockersyntax'] = 'Ponga cada entrada en una sola línea. Son entradas válidas cada una de las siguientes:

 <br> * direcciones IP completas (como <B>192.168.10.1</B> ) que coinciden con un solo host <br>

 * las direcciones parciales (como <B>192.168 .</B>), que coinciden con cualquier dirección que comienza con estos números <br>

 * las notación CIDR (por ejemplo, <B>231.54.211.0/20</B>) <br>

 * los rangos de direcciones IP (como <B>231.3.56.10-20</B>) donde el rango se aplica a la última parte de la dirección <br>

Los nombres de dominio (como \'ejemplo.com\') no son compatibles.

Las líneas en blanco se ignoran.';
$string['iplookup'] = 'Búsqueda de dirección IP';
$string['iplookupgeoplugin'] = 'El servicio <a href="http://www.geoplugin.com">geoPlugin</a> se emplea actualmente para buscar información geográfica. Para tener resultados más exactos, le recomendamos instalar una copia local de la base de datos MaxMind GeoLite.';
$string['iplookupinfo'] = 'Por defecto Moodle utiliza el servidor gratuito en línea NetGeo (The Internet Geographic Database) para buscar la ubicación de las direcciones IP. Desafortunadamente, ha cesado el mantenimiento de esta base de datos, y puede devolver información <em>totalmente errónea</em>.
Se recomienda instalar una copia local de la base de datos GeoLite City, desde MaxMind.<br />
La ubicación de la dirección IP se muestra en un mapa simple, o usando Google Maps. Para activar los mapas interactivos necesita tener una cuenta Google y aplicar la clave API de Google Maps.';
$string['iplookupmaxmindnote'] = 'Este producto incluye los datos GeoLite creados por MaxMind, disponibles en <a href="http://www.maxmind.com/">http://www.maxmind.com/</a>.';
$string['ishttpswarning'] = 'Se ha detectado que su sitio no está asegurado mediante HTTPS. Es altamente recomendable que migre su sitio a HTTPS para aumentar la seguridad y mejorar la integración con otros sistemas';
$string['keeptagnamecase'] = 'Mantener minús/MA de tags';
$string['lang'] = 'Idioma por defecto';
$string['langcache'] = 'Guardar en caché el menú de idioma';
$string['langcache_desc'] = 'Cachear el menú de idiomas. Si se habilita, la lista de idiomas disponibles se almacena en caché. La caché se refresca automáticamente cuando se instala o elimina un paquete de idioma por medio de la herramienta de gestión de paquetes de idiomas incorporada. Si instala un paquete de idioma manualmente, deberá usar la característica "Purgar todas las cachés" para refrescar la lista cacheada (Administración del sitio, Desarrollo, Experimental, Purgar todas las cachés).';
$string['langlist'] = 'Idiomas en el menú de idioma';
$string['langmenu'] = 'Mostrar menú de idioma';
$string['langpackwillbeupdated'] = 'Durante la actualización, Moodle intentará actualizar el paquete de idioma seleccionado actualmente.';
$string['langstringcache'] = 'Guardar en caché todas las cadenas del idioma';
$string['languagesettings'] = 'Ajustes de idioma';
$string['latinexcelexport'] = 'Codificación Excel';
$string['legacyfilesaddallowed'] = 'Permitir añadir a los archivos heredados del curso';
$string['legacyfilesaddallowed_help'] = 'Si un curso tiene archivos heredados, permite que los nuevos archivos y carpetas se le añadan.';
$string['legacyfilesinnewcourses'] = 'Archivos heredados en los cursos nuevos';
$string['legacyfilesinnewcourses_help'] = 'De forma predeterminada, los archivos heredados sólo están disponibles en los cursos actualizados desde versiones anteriores de Moodle (1.9.x a 2.0 por ejemplo). Tenga en cuenta que algunas características como respaldo y restauración de actividades individuales no son compatibles con esta configuración.';
$string['libcurlwarning'] = 'Se ha detectado que libcurl no tiene soporte para CURLOPT_PROTOCOL. Se recomienda tener una instalación actualizada de libcurl por razones de seguridad.';
$string['licensesettings'] = 'Configuración de licencias';
$string['linkadmincategories'] = 'Enlazar categorías administrativas';
$string['linkadmincategories_help'] = 'Si se habilita, las categorías de ajustes de administración se mostrarán como enlaces en la navegación y conducirán a las páginas de categoría de administración';
$string['linkcoursesections'] = 'Siempre ligar secciones de curso';
$string['linkcoursesections_help'] = 'Tratar siempre de proporcionar un enlace para secciones de curso. Las secciones de curso generalmente solo son mostradas como enlaces si el formato del curso muestra solamente una sección por página. Si se habilita esta configuración, siempre se proporcionará un enlace.';
$string['loading'] = 'Cargando';
$string['localetext'] = '\'Locale\' del sitio';
$string['localstringcustomization'] = 'Personalización local del idioma';
$string['location'] = 'Ubicación';
$string['locationsettings'] = 'Ajustes de ubicación';
$string['locked'] = 'Bloqueado';
$string['lockoutduration'] = 'Duración del bloqueo de la cuenta';
$string['lockoutduration_desc'] = 'La cuenta bloqueada es des-bloqueada automáticamente después de este tiempo.';
$string['lockoutemailbody'] = 'Su cuenta con nombre_de_usuario {$a->username} en el servidor \'{$a->sitename}\' fue bloqueada después de haber tenido múltiples intentos fallidos para entrar.

Para desbloquear inmediatamente la cuenta, vaya a la dirección siguiente

{$a->link}

En la mayoría de los programas de correo electrónico, esto debería de aparecer como un enlace en texto azul, el cual puede Usted elegir. Si esto no funciona, entonces copie la dirección y péguela en la barra de dirección de su ventana de navegador de internet.

Si necesita ayuda, por favor contacte con el administrador del sitio,
{$a->admin}';
$string['lockoutemailsubject'] = 'Su cuenta en {$a} fue bloqueada';
$string['lockouterrorunlock'] = 'Se proporcionó información inválida para des-bloquear la cuenta.';
$string['lockoutthreshold'] = 'Umbral para bloquear cuenta';
$string['lockoutthreshold_desc'] = 'Seleccione el número de intentos de entrar fallidos que resultarán en que se bloquee la cuenta. Esta característica puede ser abusada en los ataques por negación de servicio.';
$string['lockoutwindow'] = 'Ventana de observación de bloqueo de cuenta';
$string['lockoutwindow_desc'] = 'Tiempo de observación para el umbral para bloquear cuenta; si no hubiera intentos fallidos, el contador del umbral se reinicia después de este tiempo.';
$string['log'] = 'Bitácoras';
$string['logguests'] = 'Registro del acceso de invitados';
$string['logguests_help'] = 'Esta configuración habilita el registro de acciones para cuentas de invitados o usuarios no registrados. En determinados sitios se podría desactivar esta opción por razones de rendimiento. Se recomienda mantener esta opción habilitada en los sitios en producción.';
$string['loginhttps'] = 'Usar HTTPS para ingresos';
$string['loginpageautofocus'] = 'Formato de página de enfoque automático de ingreso';
$string['loginpageautofocus_help'] = 'Al activar esta opción se mejora la usabilidad de la página de ingreso al sitio, pero el enfoque automático de campos puede ser considerado como un problema de accesibilidad.';
$string['loginpasswordautocomplete'] = 'Impedir que se auto-complete la contraseña en el formato de ingreso.';
$string['loginpasswordautocomplete_help'] = 'Si se habilita, los usuarios no tendrán permitido guardar su contraseña de su cuenta en su navegador.';
$string['loglifetime'] = 'Mantener bitácoras por';
$string['logstorenotrequired'] = 'Almacen de bitácora no requerido';
$string['logstoressupported'] = 'Almacenes de bitácora que soportan este reporte';
$string['longtimewarning'] = '<b>Por favor, tenga en cuenta que este proceso puede durar mucho.</b>';
$string['maintenancemode'] = 'En Modo Mantenimiento';
$string['maintenancemodeisscheduled'] = 'Este sitio cambiará a modo de mantenimiento en {$a->min} minutos {$a->sec} segundos';
$string['maintfileopenerror'] = '¡Error al abrir los archivos de mantenimiento!';
$string['maintinprogress'] = 'Mantenimiento en curso...';
$string['manageformats'] = 'Gestionar formatos de curso';
$string['manageformatsgotosettings'] = 'El formato por defecto puede cambiarse en {$a}';
$string['managelang'] = 'Administrar';
$string['managelicenses'] = 'Administrar licencias';
$string['manageqbehaviours'] = 'Gestionar comportamientos de preguntas.';
$string['manageqtypes'] = 'Administrar tipos de preguntas';
$string['maturity100'] = 'Beta';
$string['maturity150'] = 'Candidato para liberación';
$string['maturity200'] = 'Versión estable';
$string['maturity50'] = 'Alfa';
$string['maturityallowunstable'] = 'Sugerencia: Usted podría querer correr este script con la opción --allow-unstable';
$string['maturitycoreinfo'] = 'Su sitio está actualmente ejecutando código inestable  "{$a}" en desarrollo.';
$string['maturitycorewarning'] = 'La versión de Moodle que usted va a instalar o actualizar contiene código inestable "{$a}" en desarrollo, que no es adecuado para usarse en la mayoría de los sitios de producción. Si esto no es lo que Usted deseaba, entonces asegúrese de instalar o actualizar a una versión de una rama "ESTABLE" del código de Moodle. Vea Moodle Docs para más detalles.';
$string['maxbytes'] = 'Tamaño máximo del archivo subido';
$string['maxconsecutiveidentchars'] = 'Caracteres consecutivos idénticos';
$string['maxeditingtime'] = 'Tiempo máximo para editar mensajes';
$string['maxtimelimit'] = 'Límite de tiempo máximo';
$string['maxtimelimit_desc'] = 'Para restringir el máximo tiempo de ejecución PHP que Moodle permitirá sin mostrar ningun mensaje de salida, escriba aquí un valor en segundos. 0 significa que se usan las restricciones por defecto de Moodle. Si tiene un servidor frontal (front-end) con su propio límite de tiempo, configure este valor más bajo, para recibir errores de PHP en bitácoras. No aplica para \'\'scripts\'\' de Interfaz por Línea de Comandos.';
$string['maxusersperpage'] = 'Máximo de usuarios por página';
$string['mbstringrecommended'] = 'La instalación de la librería opcional MBSTRING es muy recomendable para mejorar el rendimiento del sitio, especialmente si su sitio está soportando idiomas no latinos.';
$string['mediapluginavi'] = 'Habilitar filtro .avi';
$string['mediapluginflv'] = 'Habilitar filtro .flv';
$string['mediapluginimg'] = 'Habilitar la incrustación automática de imágenes enlazadas';
$string['mediapluginmov'] = 'Habilitar filtro .mov';
$string['mediapluginmp3'] = 'Habilitar filtro .mp3';
$string['mediapluginmpg'] = 'Habilitar filtro .mpg';
$string['mediapluginogg'] = 'Habilitar el filtro .ogg';
$string['mediapluginogv'] = 'Habilitar el filtro .ogv';
$string['mediapluginram'] = 'Habilitar filtro .ram';
$string['mediapluginrm'] = 'Habilitar filtro .rm';
$string['mediapluginrpm'] = 'Habilitar filtro .rpm';
$string['mediapluginswf'] = 'Habilitar filtro .swf';
$string['mediapluginswfnote'] = 'Como medida de seguridad por defecto, no se permite a los usuarios incrustar archivos flash swf.';
$string['mediapluginwmv'] = 'Habilitar filtro .wmv';
$string['mediapluginyoutube'] = 'Habilitar el filtro de enlaces de YouTube';
$string['messaging'] = 'Habilitar sistema de mensajería';
$string['messagingallowemailoverride'] = 'Anulación de notificación por email';
$string['messagingdeletereadnotificationsdelay'] = 'Eliminar las notificaciones ya leídas';
$string['messaginghidereadnotifications'] = 'Ocultar las notificaciones ya leídas';
$string['minpassworddigits'] = 'Dígitos';
$string['minpasswordlength'] = 'Longitud de la contraseña';
$string['minpasswordlower'] = 'Minúsculas';
$string['minpasswordnonalphanum'] = 'Caracteres no alfanuméricos (como . $ ? / * - + # @)';
$string['minpasswordupper'] = 'MAYÚSCULAS';
$string['misc'] = 'Misceláneos';
$string['mnetrestore_extusers'] = 'Este respaldo contiene cuentas de usuario de red Moodle remotas las cuales serán recuperadas como parte del proceso.';
$string['mnetrestore_extusers_admin'] = '<strong> Nota: </strong> Este archivo de respaldo parece venir de otra instalación diferente de Moodle y contiene cuentas de usuario remoto de Moodle Network. El proceso de restauración intentará hacer coincidir los host de Moodle Network con todos los usuarios creados. Los que no coincidan se conectarán automáticamente mediante autenticación interna (en lugar de la de Mnet). La bitácora de restauración le informará al respecto.';
$string['mnetrestore_extusers_mismatch'] = '<strong>Nota:</strong> Este archivo de respaldo aparentemente se origina de una instalación diferente de Moodle y contiene cuentas de red Moodle remotas que pueden fallar al intentar recuperarlas. Esta operación no está soportada. Si usted está seguro que fue creada en esta instalación de Moodle, o puede asegurarse de que todos los hosts de red Moodle necesarios están configurados, entonces podría intentar la restauración.';
$string['mnetrestore_extusers_noadmin'] = '<strong> Nota: </strong> Este archivo de respaldo parece venir de otra instalación de Moodle y contiene cuentas de usuario de Moodle Network. No tiene permiso para ejecutar este tipo de restauración. Póngase en contacto con el administrador del sitio o bien, restaure este curso sin ningún tipo de información de usuario (módulos, archivos ...)';
$string['mnetrestore_extusers_switchuserauth'] = 'El usuario remoto de Moodle Network {$a->username} (proveniente de {$a->mnethosturl}) ha cambiado a usuario autenticado {$a->auth} local.';
$string['mobile'] = 'Móvil (Mobile)';
$string['mobilecssurl'] = 'CSS';
$string['modchooserdefault'] = 'Por defecto del selector de actividades';
$string['modeditdefaults'] = 'Valores predeterminados para la configuración de la actividad';
$string['modeditingmenu'] = 'Menús para edición de actividad';
$string['modeditingmenu_desc'] = 'Si se habilita, muchos de los íconos de edición de actividad mostrados cuando está activada la edición se mostrarán dentro de un menú desplegable. Esto reduce el contenido en pantalla, al ocultar los íconos hasta que sean necesitados.';
$string['modsettings'] = 'Gestionar actividades';
$string['modulesecurity'] = 'Seguridad del módulo';
$string['moodleorghubname'] = 'Moodle.net';
$string['multilangforceold'] = 'Forzar sintaxis vieja multi-idioma: <span> sin la class="multilang" y &lt;lang&gt;';
$string['mustenablestats'] = 'Las estadísticas aún no se han habilitado en este sitio.';
$string['mycoursesperpage'] = 'Número de cursos';
$string['mydashboard'] = 'Tablero de control por defecto del sistema';
$string['mymoodle'] = 'Tablero';
$string['mymoodleredirect'] = 'Forzar a los usuarios a usar Mi Moodle';
$string['mypage'] = 'Página de Tablero por defecto';
$string['mypagelocked'] = 'Bloquear página por defecto';
$string['myprofile'] = 'Página de perfil por defecto';
$string['navadduserpostslinks'] = 'Añada enlaces para ver los mensajes del usuario';
$string['navadduserpostslinks_help'] = 'Si está habilitado, dos enlaces se añadirán a la navegación del usuario  para ver las discusiones que el usuario ha comenzado y los mensajes que el usuario ha hecho en foros en todo el sitio o en cursos específicos.';
$string['navcourselimit'] = 'Límite del curso';
$string['navexpandmycourses'] = 'Mostrar Mis Cursos inicialmente expandidos en la página del Tablero';
$string['navexpandmycourses_desc'] = 'Cuando se activa, Mis cursos se mostrarán inicialmente expandidos en el bloque de navegación del Tablero.';
$string['navigationupgrade'] = 'Esta actualización introduce dos nuevos bloques de navegación que sustituirán a estos bloques: Administración, Cursos, Actividades y Participantes. Si tiene establecido algún permiso especial en estos  bloques debe asegurarse de que todo se está comportando como usted desea.';
$string['navshowallcourses'] = 'Mostrar todos los cursos';
$string['navshowcategories'] = 'Mostrar las categorías de los cursos';
$string['navshowfrontpagemods'] = 'Mostrar las actividades de la portada en la navegación';
$string['navshowfrontpagemods_help'] = 'Si se habilita, las actividades de la portada se mostrarán en la navegación debajo de las páginas del sitio.';
$string['navshowfullcoursenames'] = 'Mostrar nombres completos de cursos';
$string['navshowfullcoursenames_help'] = 'Si se habilita, los cursos en la navegación se mostrarán usando sus nombres completos en lugar de los nombres cortos.';
$string['navshowmycoursecategories'] = 'Mostrar categorías de mis cursos';
$string['navshowmycoursecategories_help'] = 'Si se habilita, los cursos en la rama de mis cursos se mostrarán por categorías.';
$string['navsortmycoursessort'] = 'Ordenar mis cursos';
$string['navsortmycoursessort_help'] = 'Determina si se enlistan los cursos debajo de Mis cursos de acuerdo al orden (por ejemplo, en el órden elegido en Configuraciones > Administración del sitio > Cursos > Añadir/editar cursos)  o alfabéticamente por configuración del curso.';
$string['neverdeleteruns'] = 'Nunca eliminar ejecuciones';
$string['nobookmarksforuser'] = 'No tiene ningun marcador (bookmarks)';
$string['nodatabase'] = 'Ninguna base de datos';
$string['nohttpsformobilewarning'] = 'Se recomienda que se habilite HTTPS con un certificado válido. La aplicación Moodle siempre intentará usar una conexión segura en primer lugar.';
$string['nomissingstrings'] = 'No hay cadenas sin traducir';
$string['nonewsettings'] = 'No se han agregado nuevos ajustes durante esta actualización.';
$string['nonexistentbookmark'] = 'El marcador  (bookmark) solicitado no existe';
$string['noresults'] = 'No hay resultados.';
$string['noroles'] = 'No roles';
$string['nosupportedlogstore'] = 'No se encontró algún almacén de bitácora soportado';
$string['notifications'] = 'Notificaciones';
$string['notifyloginfailures'] = 'Enviar por correo electrónico los ingresos fallidos a';
$string['notifyloginthreshold'] = 'Umbral para notificaciones email';
$string['notloggedinroleid'] = 'Rol de los visitantes';
$string['numberofmissingstrings'] = 'Número de cadenas faltantes: {$a}';
$string['numberofstrings'] = 'Número total de cadenas: {$a->strings}<br />Faltantes: {$a->missing} ({$a->missingpercent}&nbsp;%)';
$string['opcacherecommended'] = 'El cacheo de opcodes de PHP mejora el desempeño y disminuye los requisitos de memoria. Se recomienda y se soporta completamente la extensión OPcache.';
$string['opensslrecommended'] = 'Instalar la librería opcional OpenSSL es altamente recomendado -- activa la funcionalidad de red de Moodle (\'Moodle Networking\').';
$string['opensslrequired'] = 'Actualmente es necesaria la extensión  PHP  OpenSSL para que Moodle proporcione servicios criptográficos más fuertes.';
$string['opentogoogle'] = 'Abierta a Google';
$string['optionalmaintenancemessage'] = 'Mensaje de mantenimiento opcional';
$string['order1'] = 'Primero';
$string['order2'] = 'Segundo';
$string['order3'] = 'Tercero';
$string['order4'] = 'Cuarto';
$string['passwordchangelogout'] = 'Salir del sitio después de cambiar contraseña';
$string['passwordchangelogout_desc'] = 'Si se habilita, cuando se cambie una contraseña, se terminan todas las sesiones de navegador, aparte de la sesión en la que se especificó la nueva contraseña. (Esta configuración no afecta los cambios de contraseña mediante subida masiva de usuarios).';
$string['passwordpolicy'] = 'Política de contraseñas';
$string['passwordresettime'] = 'Tiempo máximo para validación de solicitud de reiniciar contraseña';
$string['passwordreuselimit'] = 'Límite de rotación de contraseña';
$string['passwordreuselimit_desc'] = 'Número de veces que el usuario debe de cambar sus contraseñas antes de que se le permita re-usar una contraseña. Se almacenan las \'hashes\' de las contraseñas usadas anteriormente en una tabla de datos local. Esta característica puede no ser compatible con algunos plugins externos de autenticación.';
$string['pathtodot'] = 'Ruta a "dot"';
$string['pathtodot_help'] = 'La ruta al ejecutable de dot. Probablemente algo así como /usr/bin/dot. Para poder generar gráficos de archivos DOT, debe tener instalado el ejecutable de dot y señalar hacia esa dirección. Observe que, por ahora, esto solo se emplea para las caracteristicas experimentales en desarrollo de perfilado (Profiling)  en Moodle.';
$string['pathtodu'] = 'Ruta a du';
$string['pathtogs'] = 'Ruta hacia ghostscript';
$string['pathtogs_help'] = 'En la mayoría  de las instalaciones Linux, esto puede dejarse como \'/usr/bin/gs\'. En Windows esto será algo como  \'c:\\gs\\bin\\gswin32c.exe\' (asegúrese de que no haya espacios en la ruta - si fuera necesaro, copie los archivos \'gswin32c.exe\' y \'gsdll32.dll\' hacia una nueva carpeta sin un espacio en la ruta)';
$string['pathtopgdump'] = 'Ruta a pg_dump';
$string['pathtopgdumpdesc'] = 'Sólo es necesario entrar si usted tiene má de un pg_dump en su sistema (por ejemplo, si tiene instalada más de una versión de postgresql)';
$string['pathtopgdumpinvalid'] = 'Ruta no válida a pg_dump: o bien es errónea, o bien no se encuentra el ejecutable';
$string['pathtopsql'] = 'Ruta a psql';
$string['pathtopsqldesc'] = 'Esto sólo es necesario si tiene más de un psql en su sistema (por ejemplo, si tiene instalada más de una versión de postgresql)';
$string['pathtopsqlinvalid'] = 'Ruta a psql no válida: o bien es errónea, o bien no es ejecutable';
$string['pathtounoconv'] = 'Ruta hacia convertido de documentos unoconv';
$string['pathtounoconv_help'] = 'Ruta hacia convertido de documentos unoconv. Este es un ejecutable que es capaz de convertir entre formatos de documentos soportados por LibreOffice. Esto es opcional, pero si se especificara, Moodle lo usará para convertir automáticamente entre formatos de documentos. Esto es usado para soportar un mayor rango de archivos de entrada para la característica de anotar tarea PDF.';
$string['pcreunicodewarning'] = 'Se recomienda encarecidamente usar la extensión PCRE PHP que sea compatible con caracteres Unicode.';
$string['perfdebug'] = 'Información de rendimiento';
$string['performance'] = 'Rendimiento';
$string['pgcluster'] = 'Cluster PostgreSQL';
$string['pgclusterdescription'] = 'Parámetro de versión/cluster PostgreSQL para operaciones de línea de comandos. Si sólo tiene un postgresql en su sistema o no está seguro de qué es esto, déjelo en blanco.';
$string['phpfloatproblem'] = 'Detectado problema inesperado en el manejo de números flotantes PHP - {$a}';
$string['pleaserefreshregistration'] = 'Su sitio está sido registrado. El registro se actualizó por última vez en {$a}.<br />El quehacer agendado del sistema  \'Site registration\' (Registro del sitio) mantiene actualizado su registro. Usted también puede actualizar su registro manualmente en cualquier momento.';
$string['pleaserefreshregistrationunknown'] = 'Su sitio ha sido registrado, pero se desconoce la fecha de registro. Por favor, actualice su registro usando el botón para \'Actualizar registro\', o asegúrese  de que está habilitado el quehacer agendado del sistema de \'Registro del sitio\', para que su registro sea actualizado automáticamente.';
$string['plugin'] = 'Plugin';
$string['plugins'] = 'Plugins';
$string['pluginscheck'] = 'Revisión de dependencias del plugin';
$string['pluginscheckfailed'] = 'Falló la revisión de dependencias para {$a->pluginslist}';
$string['pluginschecktodo'] = '¡ Debe resolver todos los requisitos para plugins antes de proceder a la instalación de esta versión de Moodle !';
$string['pluginsoverview'] = 'Vista general de plugins';
$string['pluginsoverviewsee'] = 'Vea la página sobre <a href="{$a->url}">vista general de plugins</a> para más detalles.';
$string['profilecategory'] = 'Categoría';
$string['profilecategoryname'] = 'Nombre de la categoría (debe ser único)';
$string['profilecategorynamenotunique'] = 'Este nombre de categoría ya está en uso';
$string['profilecommonsettings'] = 'Ajustes comunes';
$string['profileconfirmcategorydeletion'] = 'Hay {$a} campo/s en esta categoría que serán movidos a la categoría superior (o inferior de estar en la categoría más superior).<br />¿Aún desea eliminar ésta categoría?';
$string['profileconfirmfielddeletion'] = 'Hay {$a} registro/s de usuario para este campo que serán eliminados. <br />¿Aún desea eliminar este campo?';
$string['profilecreatecategory'] = 'Crear una nueva categoría de perfiles';
$string['profilecreatefield'] = 'Crear un nuevo campo de perfil:';
$string['profilecreatenewcategory'] = 'Creando una nueva categoría';
$string['profilecreatenewfield'] = 'Creando un nuevo campo de perfil \'{$a}\'';
$string['profiledefaultcategory'] = 'Otros campos';
$string['profiledefaultchecked'] = 'Seleccionado por defecto';
$string['profiledefaultdata'] = 'Valor por defecto';
$string['profiledeletecategory'] = 'Eliminando una categoría';
$string['profiledeletefield'] = 'Eliminando el campo \'{$a}\'';
$string['profiledescription'] = 'Descripción del campo';
$string['profiledscript'] = 'Este script ha sido perfilado';
$string['profiledscriptview'] = 'Ver información de perfil para este script';
$string['profileeditcategory'] = 'Editando la categoría {$a}';
$string['profileeditfield'] = 'Editando el campo de perfil {$a}';
$string['profilefield'] = 'Campo de perfil';
$string['profilefieldcolumns'] = 'Columnas';
$string['profilefieldispassword'] = '¿Es éste un campo de contraseña?';
$string['profilefieldlink'] = 'Enlace';
$string['profilefieldlink_help'] = 'Para transformar el texto en un enlace, introduzca una URL que contenga $$, donde $$ se sustituye por el texto. Por ejemplo, para transformar una ID de Twitter en un enlace, introduzca http://twitter.com/$$.';
$string['profilefieldlinktarget'] = 'Enlazar objetivo';
$string['profilefieldmaxlength'] = 'Longitud máxima';
$string['profilefieldrows'] = 'Filas';
$string['profilefields'] = 'Campos de perfil del usuario';
$string['profilefieldsize'] = 'Mostrar tamaño';
$string['profileforceunique'] = '¿Deberían ser únicos los datos?';
$string['profileinvaliddata'] = 'Valor no válido';
$string['profilelocked'] = '¿Está este campo bloqueado?';
$string['profilemenudefaultnotinoptions'] = 'El valor por defecto no está entre las opciones';
$string['profilemenunooptions'] = 'No se han suministrado opciones de menú';
$string['profilemenuoptions'] = 'Opciones de menú (una por línea)';
$string['profilemenutoofewoptions'] = 'Debe proporcionar al menos dos opciones';
$string['profilename'] = 'Nombre';
$string['profilenofieldsdefined'] = 'No se han definido campos';
$string['profilerequired'] = '¿Es este campo necesario?';
$string['profileroles'] = 'Roles de perfil visibles';
$string['profilesforenrolledusersonly'] = 'Perfiles sólo para usuarios inscritos';
$string['profileshortname'] = 'Nombre corto (debe ser único)';
$string['profileshortnamenotunique'] = 'Este nombre corto ya está en uso';
$string['profilesignup'] = '¿Mostrar en la página para inscribirse?';
$string['profilespecificsettings'] = 'Ajustes específicos';
$string['profilevisible'] = '¿Quién puede ver este campo?';
$string['profilevisibleall'] = 'Todos pueden verlo';
$string['profilevisible_help'] = '<p>Se puede asignar a cada campo personalizado uno de tres ajustes de visibilidad: invisible, a todo el mundo y usuario. El ajuste \'invisible\' normalmente es decidido por un administrador que quiere mantener la privacidad de los datos de los usuarios. El ajuste \'usuario\' es seleccionado normalmente para un campo que contiene información delicada, en tanto que la opción \'todo el mundo\' puede usarse para cualquier tipo de información.</p>';
$string['profilevisiblenone'] = 'No visible';
$string['profilevisibleprivate'] = 'Visible por el usuario';
$string['profiling'] = 'Perfilado (profiling)';
$string['profilingallowall'] = 'Perfilado (profiling) continuo';
$string['profilingallowall_help'] = 'Si activa esta configuración, entonces en cualquier momento podrá emplear el parámetro PROFILEALL en cualquier lugar (PGC) para habilitar el perfilado (profiling) de todos los scripts ejecutados durante  una sesión Moodle. De forma análoga, puede emplear el parámetro PROFILEALLSTOP para detenerlo.';
$string['profilingallowme'] = 'Perfilado selectivo';
$string['profilingallowme_help'] = 'Si activa esta configuración, entonces selectivamente podrá emplear el parámetro PROFILEME en cualquier lugar (PGC) para habilitar el perfilado de ese script. De forma análoga, puede emplear el parámetro DONTPROFILEME para evitar que ocurra el perfilado.';
$string['profilingautofrec'] = 'Perfilado (profiling) automático';
$string['profilingautofrec_help'] = 'Al configurar esta característica, una solicitud (aleatoria, basada en la frecuencia especificada -1 de N) será elegida y perfilada automáticamente, guardando los resultados para análisis posterior. Observe que esta forma de perfilar observa la configuración de incluir/excluir. Si la pone a 0 se desactiva el perfilado automático.';
$string['profilingenabled'] = 'Habilitar perfilado (profiling)';
$string['profilingenabled_help'] = 'Si habilita esta configuración, el perfilado (profiling) estará disponible en este sitio y podrádefinir su comportamiento al configurar las opciones siguientes.';
$string['profilingexcluded'] = 'Excluir perfilado (profiling)';
$string['profilingexcluded_help'] = 'Lista de URLs (separadas por comas, absolute skipping wwwroot, llamables) que serán excluidas de perfilarse de las que están definidas dentro de la configuración de "Perfila estas".';
$string['profilingimportprefix'] = 'Prefijo de importación de perfilado';
$string['profilingimportprefix_desc'] = 'Para detección más fácil, todas las corridas de perfilado importadas serán prefijadas con el valor aquí especificado.';
$string['profilingincluded'] = 'Perfila estas';
$string['profilingincluded_help'] = 'Lista de URLs (separadas por comas, absolute skipping wwwroot, llamables) que serán automáticamente perfiladas. Por ejemplo: /index.php, /course/view.php. Tambien acepta el comodín * en cualquier posición, como por ejemplo en: /mod/forum/*, /mod/*/view.php.';
$string['profilinglifetime'] = 'Mantener las corridas de perfilado (profiling)';
$string['profilinglifetime_help'] = 'Especifica el tiempo que quiere mantener la información sobre antiguas corridas de perfilado. Las más anteriores serán podadas periodicamente. Observe que esto excluye cualquier perfilado marcado como "corrida de referencia".';
$string['protectusernames'] = 'Proteger nombres_de_usuarios';
$string['proxybypass'] = 'hosts que saltan el proxy';
$string['proxyhost'] = 'host del proxy';
$string['proxypassword'] = 'Contraseña del proxy';
$string['proxyport'] = 'Puerto proxy';
$string['proxytype'] = 'Tipo de proxy';
$string['proxyuser'] = 'nombre_de_usuario del proxy';
$string['purgecaches'] = 'Purgar todas las cachés';
$string['purgecachesconfirm'] = 'Moodle puede guardar en caché los temas, javascript, cadenas de idioma, texto filtrado, RSS feeds y muchos otros datos. La purga de estos datos en el servidor forzará a los navegadores de los clientes a actualizar la información y usted se asegurará de que los usuarios están viendo la información con los cambios más recientes. No se corre ningún riesgo por hacerlo, aunque su sitio podría parecer algo más lento en un principio hasta que el servidor y los clientes vuelven a actualizar la información, guardándose nuevamente los datos en la caché.';
$string['purgecachesfinished'] = 'Todas las cachés han sido purgadas';
$string['question'] = 'Pregunta';
$string['questionbehaviours'] = 'Comportamientos de las preguntas';
$string['questioncwqpfscheck'] = 'Una o más preguntas \'aleatorias\' de un examen se disponen para seleccionar preguntas de una mezcla de categorías de pregunta compartidas y no compartidas. Puede ver un reporte más detallado <a href="{$a->reporturl}">aquí</a> o consultar la página de Moodle Docs <a href="{$a->docsurl}">here</a>.';
$string['questioncwqpfsok'] = 'Bueno. No existen preguntas \'aleatorias\' en sus exámenes que estén ajustadas para seleccionar preguntas a partir de una mezcla de categorías de pregunta compartidas y no compartidas.';
$string['questiontype'] = 'Tipo de pregunta';
$string['questiontypes'] = 'Tipos de preguntas';
$string['quizattemptsupgradedmessage'] = 'En Moodle 2.1 hubo una actualización mayor a las preguntas. Era posible retrasar partes de la actualización de la BasedeDatos para realizarlas después. Antes de actualizar a Moodle 2.7 debe completarse esta actualización.';
$string['recaptchaprivatekey'] = 'Clave secreta ReCAPTCHA';
$string['recaptchapublickey'] = 'Clave ReCAPTCHA del sitio';
$string['register'] = 'Registre su sitio';
$string['registermoodleorg'] = 'Cuando Usted registre su sitio';
$string['registermoodleorgli1'] = 'Usted es añadido a una lista de correo de bajo volúmen para notificaciones importantes como alertas de seguridad y nuevas versiones liberadas de Moodle.';
$string['registermoodleorgli2'] = 'Las estadísticas acerca de su sitio serán añadidas a las {$a} de la comunidad mundial Moodle.';
$string['registerwithmoodleorg'] = 'Registrar su sitio';
$string['registration'] = 'Registro';
$string['registration_help'] = 'Se le recomienda registrar su sitio para recibir notificaciones acerca de alertas de seguridad y tener acceso a Moodle.net, nuestra plataforma para compartir cursos.';
$string['registrationwarning'] = 'Su sitio aún no está registrado.';
$string['releasenoteslink'] = 'Si desea información sobre esta versión de Moodle, por favor vea <a target="_blank" href="{$a}">Release Notes</a> (o su traducción al Español)';
$string['rememberusername'] = 'Recordar nombre_de_usuario';
$string['rememberusername_desc'] = 'Activar si desea almacenar las cookies permanentes con nombres_de_usuarios durante el ingreso. ¡Las cookies permanentes se podrían considerar  como riesgo/invasión potencial  para la privacidad del usuario si se utilizan sin su consentimiento!';
$string['reportsmanage'] = 'Gestionar reportes';
$string['requestcategoryselection'] = 'Habilitar selección de categoría';
$string['requiredentrieschanged'] = '<strong>IMPORTANTE - LÉALO, POR FAVOR<br />(Este mensaje de advertencia sólo aparecerá durante esta actualización)</strong><br />Debido a la solución de un \'bug\', cambiará el comportamiento de las actividades base de datos que utilizan los ajustes \'Entradas requeridas\' y \'Entradas requeridas antes de ver los ajustes\'. Puede ver una explicación más detallada de estos cambios en <a href="http://moodle.org/mod/forum/discuss.php?d=110928" target="_blank">el foro del módulo base de datos</a>. El funcionamiento esperado de estos ajustes puede consultarse asimismo en <a href="http://docs.moodle.org/en/Adding/editing_a_database#Required_entries" target="_blank">Moodle Docs</a>. <br /><br />Este cambio afecta a las siguientes bases de datos de su sistema: (Por favor, guarde ahora esta lista y, después de la actualización, compruebe que estas actividades siguen funcionando del modo que desea el profesor.)<br/><strong>{$a->text}</strong><br/>';
$string['requiremodintro'] = 'Requerir descripción de la actividad';
$string['requiremodintro_desc'] = 'Si se habilita, los usuarios serán forzados a escribir una descripción para cada actividad.';
$string['requires'] = 'Requiere';
$string['restorecourse'] = 'Restaurar curso';
$string['restorernewroleid'] = 'Rol de los restauradores en los cursos';
$string['restorernewroleid_help'] = 'Si el usuario no tiene todavía permiso para administrar el curso recién restaurado, se le asignar este permiso automáticamente y se le da de alta en caso necesario. Seleccione "Ninguno" si no quiere que los restauradores puedan gestionar todos los cursos restaurados.';
$string['reverseproxy'] = 'Proxy reverso';
$string['riskconfig'] = 'Los usuarios podrían cambiar la configuración y el comportamiento del sitio';
$string['riskconfigshort'] = 'Riesgo de configuración';
$string['riskdataloss'] = 'Los usuarios podrían destruir grandes cantidades de contenido o la información';
$string['riskdatalossshort'] = 'Riesgo de pérdida de datos';
$string['riskmanagetrust'] = 'Los usuarios podrían cambiar los ajustes de confianza de otros usuarios';
$string['riskmanagetrustshort'] = 'Gestionar ajustes fiables';
$string['riskpersonal'] = 'Los usuarios podrían acceder a información privada de otros usuarios';
$string['riskpersonalshort'] = 'Riesgo de privacidad';
$string['riskspam'] = 'Los usuarios podrían enviar \'spam\' a usuarios del sitio o a otros';
$string['riskspamshort'] = 'Riesgo de spam';
$string['riskxss'] = 'Los usuarios podrían agregar archivos y textos que permiten \'scripting\' a través del sitio (XSS)';
$string['riskxssshort'] = 'Riesgo XSS';
$string['roleswithexceptions'] = '{$a->roles}, con {$a->exceptions}';
$string['rssglobaldisabled'] = 'Deshabilitado en el nivel servidor';
$string['save'] = 'Guardar';
$string['savechanges'] = 'Guardar cambios';
$string['search'] = 'Buscar';
$string['searchengine'] = 'Motor de búsqueda';
$string['searchinsettings'] = 'Ajustes de búsqueda';
$string['searchresults'] = 'Resultados de la búsqueda';
$string['searchsetupinfo'] = 'Configuración de búsqueda';
$string['sectionerror'] = 'Error de sección';
$string['secureforms'] = 'Usar formato adicional de seguridad';
$string['security'] = 'Seguridad';
$string['selectdevice'] = 'Seleccionar dispositivo';
$string['selectsearchengine'] = 'Seleccionar motor de búsqueda';
$string['selecttheme'] = 'Seleccionar Tema para el dispositivo {$a}';
$string['server'] = 'Servidor';
$string['serverchecks'] = 'Comprobaciones del servidor';
$string['serverlimit'] = 'Límite del servidor';
$string['sessionautostartwarning'] = '<p>Se ha detectado un error de configuración grave; por favor notifique al administrador del servidor. </p><p>Para que funcione correctamente, Moodle requiere que el administrador cambie la configuración de PHP. </p><p> <code> session.auto_start </code> debe establecerse en <code>off </code>. </p> <p>Esta configuración se controla editando <code> php.ini </code>, la configuración de Apache/IIS <br /> o el archivo<code>. htaccess </code> en el servidor. </p>';
$string['sessioncookie'] = 'Prefijo de las \'cookies';
$string['sessioncookiedomain'] = 'Dominio de las \'cookies';
$string['sessioncookiepath'] = 'Ruta de las \'cookies';
$string['sessionhandling'] = 'Gestión de la sesión';
$string['sessiontimeout'] = 'Tiempo límite';
$string['settingfileuploads'] = 'La subida de archivos es necesaria para el funcionamiento normal, por favor, actívela en la configuración PHP.';
$string['settingmemorylimit'] = 'Memoria insuficiente, defina un valor mayor de la memoria en la configuración de PHP (memory_limit)';
$string['settingsafemode'] = 'Moodle no es totalmente compatible con el modo seguro, por favor, pida al administrador del servidor que lo desactive. La ejecución de Moodle en modo seguro no es compatible, se producirán diversos problemas si lo hace.';
$string['setupsearchengine'] = 'Configurar motor de búsqueda';
$string['showcommentscount'] = 'Mostrar número de comentarios';
$string['showdetails'] = 'Mostrar detalles';
$string['showuseridentity'] = 'Mostrar identidad de usuario';
$string['showuseridentity_desc'] = 'Al seleccionar o buscar usuarios, y cuando se muestran las listas de usuarios, estos campos se mostrarán adicionalmente al nombre completo. Los campos sólo se muestran a los usuarios que tienen la capacidad moodle/site:viewuseridentity (por defecto solamente a profesores y mánagers). Esta opción tiene más sentido si selecciona uno o dos campos obligatorios en su institución (por ejemplo: número_de_cuenta, RFC y CURP).

Por favor cuide los datos personales de los usuarios y considere IMPORTANTE tener la precaución de  no escribir ni permitir el acceso no-autorizado a "datos personales sensibles" (estado de salud, información genética, creencias religiosas, filosóficas y morales, afiliación sindical, opiniones políticas, orígen racial o étnico, preferencia sexual, ...) que pudieran causarle responsabilidades o riesgos innecesarios a Usted y a la Institución.

Por favor si está en México le recomendamos que consulte la página y siga las indicaciones del <a href="http://www.ifai.gob.mx">Instituto Federal de Acceso a la Información y Protección de Datos</a>';
$string['simplexmlrequired'] = 'Moodle requiere ahora la extensión SimpleXML de PHP.';
$string['sitemaintenance'] = 'Este sitio está en fase de mantenimiento y no está disponible en este momento';
$string['sitemaintenancemode'] = 'Modo de mantenimiento';
$string['sitemaintenanceoff'] = 'El modo de mantenimiento está desactivado y el sitio vuelve a funcionar con normalidad';
$string['sitemaintenanceon'] = 'El sitio está en modo mantenimiento (sólo los administradores tienen acceso).';
$string['sitemaintenanceoncli'] = 'Su sitio actualmente está en modo de mantenimiento CLI (interfaz por línea de comandos), no se permite el acceso vía web.';
$string['sitemaintenancewarning'] = 'El sitio está en modo mantenimiento (sólo los administradores tienen acceso). Para ponerlo en funcionamiento de nuevo, <a href="maintenance.php">desactive el modo de mantenimiento</a>.';
$string['sitemaintenancewarning2'] = 'Su sitio se encuentra actualmente en modo de mantenimiento (solo los administradores pueden iniciar sesión). Para devolver este sitio a la operación normal, <a href="{$a}">desactive el modo de mantenimiento</a>.';
$string['sitepolicies'] = 'Políticas del sitio';
$string['sitepolicy'] = 'URL con la política del sitio';
$string['sitepolicyguest'] = 'URL con la política del sitio para invitados';
$string['sitepolicyguest_help'] = 'Si su política exige que todos los invitados lean y acepten sus condiciones antes de usar el sitio, especifique aquí la URL que muestra esta información; en caso contrario, déje el campo en blanco. Este campo de configuración puede contener  cualquier dirección URL pública.
<p>Nota: El acceso de usuarios no registrados pueden evitarse \'forzando a los usuarios a ingresar\'. </p>';
$string['sitepolicy_help'] = 'Si su política exige que todos los usuarios lean y acepten sus condiciones antes de usar el sitio, especifique aquí la URL que muestre esta información; en caso contrario, deje el campo en blanco. Este campo de configuración puede contener  cualquier dirección URL pública.';
$string['sitesectionhelp'] = 'Si se selecciona, se mostrará una sección de tópico/tema en la portada del sitio.';
$string['slasharguments'] = 'Usar argumentos \'slash';
$string['slashargumentswarning'] = 'Se recomienda que se habilite el uso de  \'\'slash arguments\'\'. En un futuro será necesario hacerlo. Para más detalles, vea la documentación <a href="https://docs.moodle.org/all/es/Usando_slash_arguments">Usando slash arguments</a>.';
$string['smartpix'] = 'Búsqueda de \'smart pix';
$string['soaprecommended'] = 'La instalación de la extensión opcional SOAP es útil para los servicios web y para algunos plugins complementos.';
$string['sort_fullname'] = 'Nombre completo del curso';
$string['sort_idnumber'] = 'Número de ID del curso';
$string['sort_shortname'] = 'Nombre corto del curso';
$string['sort_sortorder'] = 'Criterio de ordenamiento';
$string['spellengine'] = 'Motor ortográfico';
$string['spelllanguagelist'] = 'Lista de ortografía de idiomas';
$string['splrequired'] = 'Moodle requiere ahora la extensión SPL de PHP.';
$string['stats'] = 'Estadísticas';
$string['statsfirstrun'] = 'Intervalo máximo de procesamiento';
$string['statsmaxruntime'] = 'Tiempo de ejecución máximo';
$string['statsmoodleorg'] = 'estadísticas';
$string['statsruntimedays'] = 'Días para procesar';
$string['statsruntimestart'] = 'Ejecutar en';
$string['statsuserthreshold'] = 'Umbral para el usuario';
$string['stickyblocks'] = 'Bloques pegajosos (sticky)';
$string['stickyblockscourseview'] = 'Página del curso';
$string['stickyblocksduplicatenotice'] = 'Si cualquier bloque que agregue aquí está ya presente en una página en particular, el resultado será un duplicado.<br />Únicamente el bloque agregado no será editable, en tanto que el duplicado podrá editarse.';
$string['stickyblocksmymoodle'] = 'Mi moodle';
$string['stickyblockspagetype'] = 'Tipo de página a configurar';
$string['strictformsrequired'] = 'Validación estricta de campos obligatorios';
$string['stripalltitletags'] = 'Eliminar marcas HTML de todos los nombres de actividad';
$string['supportcontact'] = 'Contacto de soporte';
$string['supportemail'] = 'Email de soporte';
$string['supportname'] = 'Nombre del soporte';
$string['supportpage'] = 'Página de soporte';
$string['suspenduser'] = 'Suspender cuenta de usuario';
$string['switchlang'] = 'Cambiar directorio de idioma';
$string['systempaths'] = 'Rutas del sistema';
$string['tablenosave'] = 'Los cambios de la tabla superior se guardan automáticamente.';
$string['tablesnosave'] = 'Los cambios en la tabla de arriba se guardan automáticamente.';
$string['tabselectedtofront'] = 'En tablas con tabuladores, la fila con el tabulador actualmente seleccionado debería colocarse en el frente';
$string['tabselectedtofronttext'] = 'Poner en primer término la fila de pestañas seleccionada';
$string['taskautomatedbackup'] = 'Respaldos automatizados';
$string['taskbackupcleanup'] = 'Limpiar bitácoras y tablas de respaldo';
$string['taskbadgescron'] = 'Otorgar insignias';
$string['taskblogcron'] = 'Sincronizar blogs externos';
$string['taskcachecleanup'] = 'Remover entradas de caché caducas';
$string['taskcachecron'] = 'Procesamiento en segundo plano para cachés';
$string['taskcalendarcron'] = 'Enviar notificaciones de calendarios';
$string['taskcheckforupdates'] = 'Revisar actualizaciones';
$string['taskcompletiondaily'] = 'Finalización marcada como iniciada';
$string['taskcompletionregular'] = 'Calcular datos de finalización regular';
$string['taskcontextcleanup'] = 'Limpiar contextos';
$string['taskcreatecontexts'] = 'Crear contextos faltantes';
$string['taskdeletecachetext'] = 'Eliminar registros antiguos de cache de texto';
$string['taskdeleteincompleteusers'] = 'Eliminar usuarios incompletos';
$string['taskdeleteunconfirmedusers'] = 'Eliminar usuarios no-confirmados';
$string['taskeventscron'] = 'Procesamiento en segundo plano para eventos';
$string['taskfiletrashcleanup'] = 'Limpiar archivos en basura';
$string['taskglobalsearchindex'] = 'Indización (indexación) de búsqueda global';
$string['taskglobalsearchoptimize'] = 'Optimización de la indización (indexación) de búsqueda global';
$string['taskgradecron'] = 'Procesamiento en segundo plano para libro de calificaciones';
$string['tasklegacycron'] = 'Procesamiento de cron antiguo para plugins';
$string['taskmessagingcleanup'] = 'Procesamiento en segundo plano para mensajería';
$string['taskpasswordresetcleanup'] = 'Limpiar intentos de reiniciar contraseña';
$string['taskplagiarismcron'] = 'Procesamiento en segundo plano para cron antiguo de plugins de detección de plagio';
$string['taskportfoliocron'] = 'Procesamiento en segundo plano para plugins de portafolio';
$string['taskquestioncron'] = 'Procesamiento en segundo plano para motor de preguntas';
$string['taskregistrationcron'] = 'Registro del sitio';
$string['tasksendfailedloginnotifications'] = 'Enviar notificaciones de ingreso fallido';
$string['tasksendnewuserpasswords'] = 'Enviar nuevas contraseñas de usuario';
$string['tasksessioncleanup'] = 'Limpiar sesiones antiguas';
$string['taskstatscron'] = 'Procesamiento en segundo plano para estadísticas';
$string['tasktagcron'] = 'Procesamiento en segundo plano para marcas (tags)';
$string['tasktempfilecleanup'] = 'Eliminar archivos temporales pasmados';
$string['tempdatafoldercleanup'] = 'Limpiar archivos de datos temporales más antiguos de';
$string['testsiteupgradewarning'] = 'Usted actualmente está usando el sitio de prueba  {$a}; para actualizarlo apropiadamente, use la herramienta de interfaz por línea de comando';
$string['themedesignermode'] = 'Modo de diseño de temas';
$string['themelist'] = 'Lista de temas';
$string['themenoselected'] = 'No hay tema seleccionado';
$string['themeresetcaches'] = 'Borrar cachés de temas';
$string['themeselect'] = 'Cambiar tema';
$string['themeselector'] = 'Selector de temas';
$string['themesettings'] = 'Ajustes de temas';
$string['therewereerrors'] = 'Hay errores en sus datos';
$string['thirdpartylibrary'] = 'Biblioteca';
$string['thirdpartylibrarylocation'] = 'Localización';
$string['thirdpartylibs'] = 'Bibliotecas (librerías) de terceros';
$string['timezone'] = 'Zona horaria por defecto';
$string['timezoneforced'] = 'Esta opción está forzada por el administrador del sitio';
$string['timezoneinvalid'] = 'Zona horaria inválida "{$a}"';
$string['timezoneisforcedto'] = 'Forzar a todos los usuarios a utilizar';
$string['timezonenotforced'] = 'Los usuarios pueden elegir su propia zona horaria';
$string['timezonephpdefault'] = 'Zona horaria de PHP por defecto ({$a})';
$string['timezoneserver'] = 'Zona horaria del servidor ({$a})';
$string['tokenizerrecommended'] = 'Se recomienda instalar la extensión opcional PHP Tokenizer -- Mejora la funcionalidad red de Moodle (\'Moodle Networking\').';
$string['tools'] = 'Herramientas de administración';
$string['toolsmanage'] = 'Gestionar herramientas de administración';
$string['unattendedoperation'] = 'Operación no atendida';
$string['unbookmarkthispage'] = 'Desmarcar (un-bookmark) esta página';
$string['unicoderequired'] = 'Es necesario que almacene todos sus datos en formato Unicode (UTF-8). Las instalaciones nuevas deberían ejecutarse en bases de datos cuyo juego de caracteres por defecto fuera Unicode. Si está realizando una actualización, debería llevar a cabo el proceso de migración UTF-8 (vea al respecto la página de Administración).';
$string['uninstallplugin'] = 'Desinstalar';
$string['unlockaccount'] = 'Des-bloquear cuenta';
$string['unoconvwarning'] = 'La versión de unoconv que Usted ha instalado no está soportada. La característica de calificar Tarea de Moodle requiere la versión 0.7 o superior.';
$string['unsettheme'] = 'Des-seleccionar tema';
$string['unsupported'] = 'No admitido';
$string['unsupporteddbfileformat'] = 'Su base de datos tiene tablas que usan Antelope como el formato de archivo. El soporte completo para UTF-8 en MySQL y MariaDB requiere el formato de archivo Barracuda. Por favor, convierta las tablas al formato de archivo Barracuda. Vea la documentación <a href="https://docs.moodle.org/all/es/Administraci%C3%B3n_por_l%C3%ADnea_de_comando">Administración por línea de comando</a> para detalles acerca de una herramienta para convertir tablas de InnoDB a Barracuda.';
$string['unsupporteddbfilepertable'] = 'Para soporte completo de UTF-8, ambos MySQL y MariaDB requieren que Usted cambie su configuración MySQL \'innodb_file_per_table\' a \'ON\'. Vea la documentación para más detalles.';
$string['unsupporteddblargeprefix'] = 'Para soporte completo de UTF-8, ambos MySQL y MariaDB requieren que Usted cambie su configuración MySQL \'innodb_large_prefix\' a \'ON\'. Vea la documentación para más detalles.';
$string['unsupporteddbstorageengine'] = 'El motor de almacenamiento de la BasedeDatos usada ya no está soportado';
$string['unsupporteddbtablerowformat'] = 'Su BasedeDatos tiene tablas que usan Antelope como el formato de archivo. Se le recomienda que convierta las tablas al archivo de formato Barracuda. Vea la documentación <a href="https://docs.moodle.org/all/es/Administraci%C3%B3n_por_l%C3%ADnea_de_comando">Administración por línea de comando</a> para los detalles sobre una herramienta para convertir las tablas de InnoDB a Barracuda.';
$string['unsupportedphpversion7'] = 'La versión 7 de PHP no está soportada';
$string['unsupportedphpversion71'] = 'La versión 7.1 de PHP no está soportada.';
$string['unsupportedphpversion72'] = 'PHP versión 7.2 no está soportado.';
$string['unsuspenduser'] = 'Activar cuenta de usuario';
$string['updateaccounts'] = 'Actualizar cuentas existentes';
$string['updateautocheck'] = 'Revisar automáticamente si hay actualizaciones disponibles';
$string['updateautocheck_desc'] = 'Si se habilita, su sitio revisará automáticamente si hay actualizaciones disponibles para el código de Moodle y todos sus plugins adicionales. Si existe una nueva actualización disponible, se enviará una notificación a los administradores del sitio.';
$string['updateavailable'] = '¡Hay una nueva versión de Moodle disponible!';
$string['updateavailabledetailslink'] = 'Vea {$a->url} para más detalles';
$string['updateavailableforplugin'] = '¡Hay nuevas versiones disponibles para algunos de sus plugins!';
$string['updateavailableinstall'] = 'Instalar esta actualización';
$string['updateavailableinstallall'] = 'Instalar actualizaciones disponibles ({$a})';
$string['updateavailableinstallallhead'] = 'Instalando actualizaciones disponibles';
$string['updateavailable_moreinfo'] = 'Más información...';
$string['updateavailablenot'] = 'Su código de Moodle parece estar actualizado';
$string['updateavailablerecommendation'] = 'Se le recomienda encarecidamente que actualice su sitio a la versión más reciente para obtener todas las composturas recientes para problemas y seguridad.';
$string['updateavailable_release'] = 'Moodle {$a}';
$string['updateavailable_version'] = 'Versión {$a}';
$string['updatecomponent'] = 'Actualizar componente';
$string['updateminmaturity'] = 'Madurez de código requerida';
$string['updateminmaturity_desc'] = 'Notificar sobre actualizaciones disponibles sólamente si el código disponible tiene al menos el nivel de madurez seleccionado. Las actualizaciones para los plugins que no declaran su nivel de madurez del código siempre son reportadas sin importar esta configuración.';
$string['updatenotificationfooter'] = 'Su sitio Moodle {$a->siteurl} está configurado para revisar automáticamente las actualizaciones disponibles. Usted está recibiendo este mensaje por ser el administrador del sitio. Usted puede deshabilitar las revisiones automáticas de actualizaciones disponibles en la sección sobre Administración del Sitio del bloque de Administración. Usted puede personalizar el envío de este mensaje por medio de su página de preferencias.';
$string['updatenotifications'] = 'Notificaciones de actualización';
$string['updatenotificationsubject'] = 'Existen actualizaciones disponibles para Moodle ({$a->siteurl})';
$string['updatenotifybuilds'] = 'Notificar acerca de nuevos lotes (builds) disponibles';
$string['updatenotifybuilds_desc'] = 'Si se habilita, la actualización disponible para el código de Moodle también se reportará cuando exista un nuevo lote (build) disponible para la versión actual. Los lotes (builds) son desarrollos contínuos de una versión dada de Moodle. Son generalmente liberados una vez por semana. Si se deshabilita, la actualización disponible solamente será reportada cuando exista una versión superior de Moodle liberada. Las revisiones para los plugins no son afectadas por esta configuración.';
$string['upgradeerror'] = 'Error desconocido de actualización {$a->plugin} a la versión {$a->version}, no se puede continuar.';
$string['upgradeforumread'] = 'Se ha añadido una nueva característica en Moodle 1.5 tpara seguimiento de mensajes leídos/no-leídos.<br />Para emplear esta característica Usted necesita <a href="{$a}">actualizar sus tablas</a>.';
$string['upgradeforumreadinfo'] = 'Se ha incorporado a Moodle 1.5 una nueva funcionalidad para rastrear mensajes enviados al foro leídos y no leídos. Para hacer uso de ella, necesita actualizar sus tablas con toda la información concerniente a los mensajes existentes. Dependiendo del tamaño del sitio, esto puede llevar mucho tiempo (horas) y hacer un uso intensivo de la base de datos, de modo que es mejor llevar a cabo esta operación durante un período de tranquilidad. Sin embargo, el sitio continuará funcionando durante la actualización y los usuarios no se verán afectados. Una vez que comience este proceso, debería dejarlo terminar (i.e., mantenga abierta la ventana del navegador). En todo caso, si detiene el proceso cerrando la ventana, no se preocupe, siempre podrá recomenzar.<br /><br />¿Desea comenzar el proceso de actualización ahora?';
$string['upgradekeyreq'] = 'Clave para actualización necesaria';
$string['upgradekeyset'] = 'Clave para actualización (dejar vacía para no configurarla)';
$string['upgradelogs'] = 'Para conseguir una funcionalidad total, sus bitácoras antiguas deben ser actualizadas. <a href="{$a}">Más información</a>';
$string['upgradelogsinfo'] = 'Recientemente se han llevado a cabo algunos cambios en la forma en que se almacenan las bitácoras. Para poder ver sus bitácoras antiguas clasificadas por actividad, esas bitácoras se deben actualizar. Dependiendo del tamaño de su sitio, este proceso puede tardar bastante tiempo (varias horas) puesto que habrá de consultar continuamente la base de datos. Una vez iniciado el proceso debe permitir que llegue a su fin (manteniendo la ventana de su navegador abierta). No se preocupe: durante este proceso su sitio funcionará correctamente para los otros usuarios.<br /><br /> ¿Desea actualizar sus registros ahora?';
$string['upgradepluginsfirst'] = 'Se recomienda que primero instale todas las actualizaciones disponibles';
$string['upgradepluginsinfo'] = 'Actualizando plugins';
$string['upgradepluginsinfo_help'] = 'Existen actualizaciones disponibles para algunos de sus plugins. Usted debería de instalarlas todas antes de actualizar la BasedeDatos de Moodle. Si su sitio no soporta el despliegue de actualizaciones automático, Usted tiene que descargar e instalar manualmente  las nuevas versiones de los plugins a su servidor.';
$string['upgradesettings'] = 'Nuevos ajustes';
$string['upgradesettingsintro'] = 'Los ajustes que se muestran más abajo se agregaron durante la última actualización de Moodle. Realice los cambios necesarios a los valores por defecto y luego haga clic en el botón "Guardar cambios" al final de esta página.';
$string['upgradestalefiles'] = 'Se han detectado versiones mezcladas de Moodle, la actualización no puede continuar.';
$string['upgradestalefilesinfo'] = 'El proceso de actualización de Moodle se ha pausado debido a que se han detectado scripts PHP de cuando menos dos versiones principales de Moodle en el directorio de Moodle.

Esto puede causar problemas significativos más adelante, por lo que, para continuar, Usted debe asegurarse que el directorio de Moodle solamente contenga archivos de únicamente una versión.

La manera recomendada de limpiar su directorio Moodle es la siguiente:

* renombre el directorio actual de Moodle a "moodle_old"
* cree un nuevo directorio Moodle que solamente contenga archivos, o bien de una descarga de un paquete Moodle estándar o bien de los repositorios GIT de Moodle
* mueva el archivo original config.php y cualquier plugin no-estándar desde el directorio "moodle_old" hacia el nuevo directorio Moodle.

En cuanto tenga un directorio Moodle limpio, refresque esta página para continuar con el proceso de actualización de Moodle.

Esta advertencia a menudo es causada por descomprimir un paquete estándar de Moodle sobre una versión previa de Moodle. Si bien esto podría ser aceptable para actualizaciones menores, se recomienda firmemente NO HACERLO para actualizaciones mayores de Moodle.

Esta advertencia también pudiera ser causada por un checkout incompleto o una operación incompleta de actualización desde el repositorio GIT, en cuyo caso Usted puede necesitar simplemente esperar a que se complete la operación, o tal vez, correr el comando adecuado de  limpieza (clean up) y volver a intentar la operación.

Puede encontrar más información en la documentación sobre actualización en <a href="{$a}">{$a}</a>';
$string['upgradestart'] = 'Actualizar base de datos Moodle ahora';
$string['upgradesure'] = '<p>Sus archivos Moodle han sido modificados, y Usted está a punto de actualizar automáticamente su servidor a esta versión:</p>
<p><strong>{$a}</strong></p>
<p>Una vez que haga esto, no podrá volver atrás. Por favor, note que este proceso puede tomar bastante tiempo.</p>
<p>¿Está seguro de que quiere actualizar este servidor a esta versión?</p>';
$string['upgradetimedout'] = 'Se acabó el tiempo de actualización; por favor, reinicie la actualización.';
$string['upgradingdata'] = 'Actualizando los datos';
$string['upgradinglogs'] = 'Actualizando bitácoras';
$string['upgradingversion'] = 'Actualizando a la nueva versión';
$string['upwards'] = 'en adelante';
$string['useblogassociations'] = 'Habilitar asociaciones';
$string['useexternalyui'] = 'Usar librerías YUI en línea';
$string['user'] = 'Usuario';
$string['userbulk'] = 'Acciones masivas con usuarios';
$string['userbulkdownload'] = 'Exportar usuarios como';
$string['userdefaultpreferences'] = 'Preferencias por defecto del usuario';
$string['userlist'] = 'Mirar lista de usuarios';
$string['userpolicies'] = 'Políticas para el usuario';
$string['userpreference'] = 'Preferencias del usuario';
$string['userquota'] = 'Cuota del usuario';
$string['users'] = 'Usuarios';
$string['usesitenameforsitepages'] = 'Usa el nombre del sitio en las páginas del sitio';
$string['usetags'] = 'Habilitar funcionalidad de las marcas (tags)';
$string['validateerror'] = 'Este valor no es válido';
$string['verifychangedemail'] = 'Restringir los dominios cuando se modifique el correo electrónico';
$string['warningcurrentsetting'] = 'Valor actual no válido: {$a}';
$string['warningiconvbuggy'] = 'iSu versión de la biblioteca de iconv no soporta el modificador  //IGNORE . Usted debe instalar la extensión mbstring que puede emplearse en su lugar para limpiar cadenas que contengan caracteres UTF-8 inválidos.';
$string['webproxy'] = 'Proxy web';
$string['webproxyinfo'] = 'Rellene las siguientes opciones si su servidor Moodle no puede acceder directamente a internet. Es necesario para descargar datos de contexto, paquetes de idioma, canales RSS, zonas horarias, etc.<br /><em>Es muy recomendable la extensión PHP cURL.</em>';
$string['xmlrpcrecommended'] = 'La extensión opcional xmlrpc será necesaria para la funcionalidad de la Red Moodle, la conexión a un hub o a los Servicios Web (Web Services)';
$string['yuicomboloading'] = 'Carga de combo YUI';
$string['ziprequired'] = 'Moodle requiere ahora la extensión Zip PHP. Ya no se usan ni las binarias info-ZIP ni la librería PclZip.';
