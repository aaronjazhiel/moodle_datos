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
 * Strings for component 'search_elastic', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   search_elastic
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addfail'] = 'No se pudo añadir documento al índice';
$string['fileindexing'] = 'Habilitar indización de archivo';
$string['fileindexing_help'] = 'Habilitar indización de archivo para este plugin. Con esta opción activada, Usted necesitará ingresar deetalles del servicio Tika en las "Configuraciones de indización de archivo" debajo.';
$string['fileindexsettings'] = 'Configuraciones de indización de archivo';
$string['fileindexsettings_desc'] = 'Ingresar los detalles para el servicio Tika. Estos son necesarios si se habilita indización de archivo arriba.';
$string['hostname'] = 'Nombre del host';
$string['hostname_desc'] = 'El FQDN (Nombre del Dominio Completamente Calificado) del puntofinal (endpoint) del motor';
$string['imageindex'] = 'Habilitar indizado de imágenes';
$string['imageindex_desc'] = 'Cuando se habilita, Moodle usará AWS Rekognition para indizar imágenes. Si se habilita, también deberá de habilitarse Indizado de Archivo y configurarse arriba.';
$string['index'] = 'Índice';
$string['index_desc'] = 'Índice del espacio_de_nombre (namespace) para almacenar datos de búsqueda en el backend';
$string['indexfail'] = 'No se pudo crear índice';
$string['maxlabels'] = 'Etiquetas Máximas';
$string['maxlabels_desc'] = 'El número máximo de etiqueetas resultantes regresadas por Rekognition.';
$string['minconfidence'] = 'Confianza mínima';
$string['minconfidence_desc'] = 'Rekognition solamente regresará etiquetas con una confianza arriba dee esto';
$string['noconfig'] = 'Falta configuración de Elasticsearch';
$string['noserver'] = 'Puntofinal (endpoint) de Elasticsearch inalcanzable';
$string['pluginname'] = 'Elastic';
$string['pluginname_desc'] = 'Backend de búsqueda para el motor de búsqueda Elasticsearch';
$string['port'] = 'Puerto';
$string['port_desc'] = 'El puerto del puntofinal (endpoint) del motor Elasticsearch';
$string['region'] = 'Región';
$string['region_desc'] = 'La región AWS en donde está la instancia Elasticsearch, por ejemplo ap-southeast-2';
$string['rekognitionsettings'] = 'Configuraciones de AWS Rekognition';
$string['rekognitionsettings_desc'] = 'Ajustes para configurar reconocimiento de imágenes e indización usando el servicio AWS Rekognition.';
$string['rekregion'] = 'Región';
$string['rekregion_desc'] = 'La rgión AWS en donde está el servicio Rekognition; por ejemplo us-west-2';
$string['reksigningkeyid'] = 'ID de clave';
$string['reksigningkeyid_desc'] = 'La ID de la clave a usar para acceder a Rekognition.';
$string['reksigningsecretkey'] = 'Clave secreta';
$string['reksigningsecretkey_desc'] = 'La clave secreta a usar para acceder a Rekognition.';
$string['searchinfo'] = 'Consultas de búsqueda';
$string['searchinfo_help'] = 'El campo a ser buscado puede ser especificado al prefijar la consulta de búsqueda con \'title:\', \'content:\', \'name:\', o \'intro:\'. Por ejemplo, buscar \'title:news\' regresaría resultados con la palabra \'news\' en el título.

Pueden usarse los operadores Booleanos (\'AND\', \'OR\') para combinar o excluir palabras clave.

Los caracteres comodin (\'*\' or \'?\' ) pueden ser usados para representar caracteres en la consulta de búsqueda.';
$string['sendsize'] = 'Solicitar tamaño';
$string['sendsize_desc'] = 'Algunos provedores Elasticsearch tales como AWS tienen un límite en que tan grande puede ser la carga útil (payload) HTTP. Por lo tanto, nosotros la limitamos a un tamaño en bytes.';
$string['signing'] = 'Habilitar señalización de solicitud';
$string['signing_desc'] = 'Cuando se habilita Moodle firmará cada solicitud a Elasticsearch con las credenciales debajo';
$string['signingkeyid'] = 'ID de clave';
$string['signingkeyid_desc'] = 'La ID de la clave a usar para solicitudes de ingreso';
$string['signingsecretkey'] = 'Clave Secreta';
$string['signingsecretkey_desc'] = 'La clave secreta a usar para solicitudes de ingreso';
$string['signingsettings'] = 'Configuraciones de solicitud de ingreso';
$string['signingsettings_desc'] = 'Si su configuración Elasticsearch usa Solicitud de Firma, habiíite lay configúrela debajo.

Esto generalmente solo aplica si Usted está usando Amaxon Web Service (AWS) para proporcionar su Puntofinal (endpoint) Elasticsearch';
$string['tikahostname'] = 'Nombre del host de Tika';
$string['tikahostname_desc'] = 'El FQDN (Nombre del Dominio Completamente Calificado) del puntofinal (endpoint) de Apache Tika';
$string['tikaport'] = 'Puerto de Tika';
$string['tikaport_desc'] = 'El Puerto del puntofinal (endpoint) de Apache Tika';
$string['tikasendsize'] = 'Tamaño máximo del archivo';
$string['tikasendsize_desc'] = 'El enviar archivos grandees a Tika puede causar problemas de falta de memoria. Por eso, lo limitamos a un tamaño en bytes.';
