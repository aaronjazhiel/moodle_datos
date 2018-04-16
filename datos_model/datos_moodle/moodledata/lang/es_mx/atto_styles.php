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
 * Strings for component 'atto_styles', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   atto_styles
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['config'] = 'Configuración de Estilos';
$string['config_desc'] = 'Configuración para la herramienta (\'\'widget\'\') de estilos para Atto en formato JSON.
<hr />
Por ejemplo:<br />
{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Blue box (caja azul)",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "block",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "box blue"<br />
},{<br />
&nbsp;&nbsp;&nbsp;&nbsp;"title": "Red text (Texto rojo)",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"type": "inline",<br />
&nbsp;&nbsp;&nbsp;&nbsp;"classes": "red"<br />
}<br />
<hr />
El atributo del <em>type</em> (tipo) define el nombre para el estilo dentro del \'\'widget\'\' de estilos de Atto.<br />
<br />
Un título también puede soportar el filtro multi-idiomas de Moodle (si estuviera habilitado)), pero necesitará que se \'\'escapen\'\' comillas dobles adicionales junto con una diagonal invertida.<br />
Por favor, lea el archivo README del plugin para un ejemplo.<br />
<hr />
El atributo del <em>tipo</em> puede contener uno de estos dos valores: "block" o "inline".<br />
<br />
"block" creará una \'\'div tag\'\' (marca divisoria) con la(s) clase(s) dada(s) y actuará como un elemento de nivel de bloque estándar. Esto asumirá control sobre del elemento del nivel del bloque actual y puede aplicar para más que solamente el texto actualmente seleccionado.<br />
<br />
"inline" crará una\'\'tag\'\' (marca que abarca) con la(s) clase(s) actual(es) y actuará como un elemento en-línea estándar. Esto solamente aplica al texto actualmente seleccionado.
<hr />
El atributo de <em>classes</em> toma el nombre de clase CSS que será aplicado al texto en-línea/en-bloque.<br />
<br />
Pueden definirse múltiples clases para cada ítem, separadas por un espacio. Estas serán aplicada al texto en-línea/del-bloque.<br />
<br />
Las definiciones de clase CSS no pueden hacerse dentro de este plugin. Usted tendra que añadir sus definiciones de clases CSS a su tema o en configuraciones HTML adicionales de Moodle.
<hr />
En instalaciones de Moodle con temas basados en (\'\'bootstrap\'\') inicio  (especialmente con el tema <em>Más (\'\'More\'\')</em> y <em>Limpio (\'\'Clean\'\')</em>, Usted puede también crear estilos con clases CSS de bootstrap en lugar de definir sus propias clases.
<br /><br />
Por ejemplo:<br />
{<br />
    "title": "Caja de unidad Héroe (\'\'Hero unit\'\')",<br />
    "type": "block",<br />
    "classes": "hero-unit"<br />
},{<br />
    "title": "Bien (Well)",<br />
    "type": "block",<br />
    "classes": "well"<br />
},{<br />
    "title": "Texto informativo (Info text)",<br />
    "type": "inline",<br />
    "classes": "label label-info"<br />
},{<br />
    "title": "Texto advertencia (Warning text)",<br />
    "type": "inline",<br />
    "classes": "label label-warning"<br />
}<br /><br />
Para más información acerca de clases de inicio (\'\'bootstrap classes\'\'), por favor, visite los enlaces siguientes en la documentación de Bootstrap 2.3:
<ul>
<li><a href="http://getbootstrap.com/2.3.2/components.html#labels-badges">Bootstrap labels and badges</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#alerts">Bootstrap alerts</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#misc">Bootstrap helper classes</a></li>
</ul>';
$string['nostyle'] = 'Sin Estilo';
$string['pluginname'] = 'Estilos';
$string['settings'] = 'Configuraciones de Estilos';
