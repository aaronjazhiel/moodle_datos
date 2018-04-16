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
 * Strings for component 'message_email', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   message_email
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowattachments'] = 'Permitir anexos';
$string['allowusermailcharset'] = 'Permitir al usuario elegir el juego de caracteres';
$string['configallowattachments'] = 'Habilitar esta configuración permitirá el envío de anexos de archivos (como por ejemplo,  insignias) a los mensajes de Email enviados desde el sitio.';
$string['configallowusermailcharset'] = 'Si se habilita esta opción, los usuarios podrán especificar su propio juego de caracteres en sus preferencias de mensajería.';
$string['configemailonlyfromnoreplyaddress'] = 'Si se habilita, todos los Emails se enviarán empleando la dirección de sin-respuesta como la dirección de "De". Esto puede usarse para evitar que los controles contra chatarra en sistemas de correo externos bloqueen los Emails.';
$string['configmailnewline'] = 'Caracteres de línea nueva usados en los mensajes de correo electrónico. CRLF es necesario de acuerdo con RFC 822bis; algunos servidores realizan una conversión automática desde LF a CRLF, en tanto que otros realizan una conversión incorrecta de CRLF a CRCRLF y; finalmente, otros rechazarán los correos con LF vacío (qmail, por ejemplo). Intente modificar este ajuste si tiene problemas con correos sin entregar o con nuevas líneas dobles.';
$string['confignoreplyaddress'] = 'A veces los emails son enviados en nombre de algun usuario (por ejemplo, mensajes a un foro). La dirección email especificada aquí se usará como dirección "De" en aquellos casos en que los receptores no deban contestarle directamente al usuario (por ejemplo, cuando un usuario elige mantener oculta su dirección).';
$string['configsitemailcharset'] = 'Esta configuración especifica el juego de caracteres por defecto para todos los Emails enviados desde este sitio.';
$string['configsmtpauthtype'] = 'Esto configura el tipo de autenticación a usar en servidor SMTP.';
$string['configsmtphosts'] = 'Escriba el nombre completo de uno o más servidores SMTP locales que Moodle usará para enviar correo (por ejemplo, \'mail.a.com\' o \'mail.a.com;mail.b.com\'). Para especificar un puerto no convencional (diferente al puerto 25), puede usar la sintaxis [servidor]:[puerto]  (por ejemplo, \'mail.a.com:587\'. Para conexiones seguras usualmente se emplea el puerto 465 con SSL, el puerto 587 usualmente se emplea con TLS. Si lo deja en blanco, Moodle usará el método PHP por defecto para enviar correo.';
$string['configsmtpmaxbulk'] = 'Número máximo de mensajes enviados por sesión SMTP. La agrupación de mensajes puede agilizar el envío de emails. Valores inferiores a 2 fuerzan la creación de una nueva sesión SMTP para cada email.';
$string['configsmtpsecure'] = 'Si el servidor SMTP requiere conexión segura, especifique el tipo de protocolo correcto.';
$string['configsmtpuser'] = 'Si antes ha especificado un servidor SMTP, y el servidor requiere autenticación, escriba aquí el nombre_de_usuario y la contraseña.';
$string['email'] = 'Enviar notificaciones email a';
$string['emailonlyfromnoreplyaddress'] = '¿Mandar siempre los Emails desde la dirección de "sin-respuesta" ?';
$string['ifemailleftempty'] = 'Dejar vacío para enviar notificaciones a {$a}';
$string['mailnewline'] = 'Caracteres de línea nueva en correo electrónico';
$string['none'] = 'Ninguna';
$string['noreplyaddress'] = 'Dirección de \'sin-respuesta\' (no-reply)';
$string['pluginname'] = 'Email';
$string['sitemailcharset'] = 'Conjunto de caracteres';
$string['smtpauthtype'] = 'Tipo de Autenticación SMTP';
$string['smtphosts'] = 'hosts SMTP';
$string['smtpmaxbulk'] = 'Límite de sesión SMTP';
$string['smtppass'] = 'Contraseña SMTP';
$string['smtpsecure'] = 'Seguridad SMTP';
$string['smtpuser'] = 'Nombre_de_usuario SMTP';
