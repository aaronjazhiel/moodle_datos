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
 * Strings for component 'assignfeedback_editpdf', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   assignfeedback_editpdf
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtoquicklist'] = 'Añadir a listarápida';
$string['annotationcolour'] = 'Color de anotación';
$string['black'] = 'Negro';
$string['blue'] = 'Azul';
$string['cannotopenpdf'] = 'No puede abrirse el archivo PDF. El archivo puede estar corrupto o en un formato no soportado.';
$string['clear'] = 'Limpiar';
$string['colourpicker'] = 'Selector de color';
$string['command'] = 'Comando:';
$string['comment'] = 'Comentarios';
$string['commentcolour'] = 'Color de comentario';
$string['commentcontextmenu'] = 'Menú de contexto de comentario';
$string['couldnotsavepage'] = 'No pudo guardarse la página {$a}';
$string['currentstamp'] = 'Sello';
$string['deleteannotation'] = 'Eliminar anotación';
$string['deletecomment'] = 'Eliminar comentario';
$string['deletefeedback'] = 'Eliminar PDF retroalimentación';
$string['downloadablefilename'] = 'feedback.pdf';
$string['downloadfeedback'] = 'Descargar PDF retroalimentación';
$string['draftchangessaved'] = 'Anotaciones en borrador guardadas';
$string['drag'] = 'Arrastrar';
$string['editpdf'] = 'Anotar PDF';
$string['editpdf_help'] = 'Anotar los envíos de estudiantes directamente en el navegador y producir un PDF editado descargable.';
$string['enabled'] = 'Anotar PDF';
$string['enabled_help'] = 'Si se habilita, el profesor podrá crear archivos de PDF con anotaciones al calificar la tarea. Ésto le permite al profesor añadir comentarios, dibujos y sellos directamente sobre el trabajo de los alumnos. Las anotaciones se hacen en el navegador de Internet y no se requieren programas adicionales.';
$string['errorgenerateimage'] = 'Error al generar imagen con ghostscript,  información para depuración: {$a}';
$string['errorpdfpage'] = 'Hubo un error al generar esta página.';
$string['filter'] = 'Filtrar comentarios...';
$string['generatefeedback'] = 'Generar PDF con retroalimentación';
$string['generatingpdf'] = 'Generando el PDF...';
$string['gotopage'] = 'Ir a página';
$string['green'] = 'Verde';
$string['gsimage'] = 'Imagen para prueba de Ghostscript';
$string['highlight'] = 'Resaltar';
$string['jsrequired'] = 'Para hacer anotaciones a documentos PDF se requiere JavaScript. Por favor, habilite JavaScript en su navegador para usar esta característica.';
$string['launcheditor'] = 'Arrancar el editor de PDF...';
$string['line'] = 'Línea';
$string['loadingeditor'] = 'Cargando editor de PDF';
$string['navigatenext'] = 'Página siguiente';
$string['navigateprevious'] = 'Página anterior';
$string['output'] = 'Salida:';
$string['oval'] = 'Óvalo';
$string['pagenumber'] = 'Página {$a}';
$string['pagexofy'] = 'Página {$a->page} de {$a->total}';
$string['pathtogspathdesc'] = 'Por favor, tome nota que Anotación en PDF requiere que la ruta hacia ghostscript se configure en {$a}.';
$string['pathtounoconvpathdesc'] = 'Por favor tome nota de que Anotar PDF equiere que se configure la ruta hacia unoconv en  {$a}.';
$string['pen'] = 'Pluma';
$string['pluginname'] = 'Hacer anotaciones a PDF';
$string['preparesubmissionsforannotation'] = 'Preparar envíos para anotación';
$string['rectangle'] = 'Rectángulo';
$string['red'] = 'Rojo';
$string['result'] = 'Resultado:';
$string['searchcomments'] = 'Buscar comentarios';
$string['select'] = 'Seleccionar';
$string['stamp'] = 'Sello';
$string['stamppicker'] = 'Selector de sellos';
$string['stamps'] = 'Sellos';
$string['stampsdesc'] = 'Los sellos deben ser archivos de imágenes. Éstas imágenes pueden usarse con la herramienta de sellos para hacer anotaciones al PDF.';
$string['test_doesnotexist'] = 'La ruta hacia Ghostscript señala a un archivo inexistente';
$string['test_empty'] = 'La ruta hacia Ghostscript está vacía - por favor escriba la ruta correcta';
$string['testgs'] = 'Probar ruta a Ghostscript';
$string['test_isdir'] = 'La ruta hacia Ghostscript señala a una carpeta; por favor incluya el programa ghostscript dentro de la ruta que especifique';
$string['test_notestfile'] = 'Falta el PDF de prueba';
$string['test_notexecutable'] = 'La ruta hacia Ghostscript señala hacia un archivo que no es ejecutable';
$string['test_ok'] = 'La ruta hacia Ghostscript parece estar OK - por favor revise que Usted pueda ver el mensaje dentro de la imagen inferior';
$string['test_unoconv'] = 'Probar ruta de unoconv';
$string['test_unoconvdoesnotexist'] = 'La ruta de unoconv no apunta hacia el programa unoconv. Por favor, revise sus configuraciones de la ruta.';
$string['test_unoconvdownload'] = 'Descargar el archivo PDf de prueba convertido.';
$string['test_unoconvisdir'] = 'La ruta hacia unoconv apunta hacia una carpeta; por favor, incluya al programa unoconv en la ruta que Usted especifique';
$string['test_unoconvnotestfile'] = 'Falta el documento de prueba para convertirlo en PDF';
$string['test_unoconvnotexecutable'] = 'La ruta de unoconv apunta hacia un archivo que no es ejecutable';
$string['test_unoconvok'] = 'La ruta de unoconv paraece estar configurada apropiadamente.';
$string['test_unoconvversionnotsupported'] = 'La versión de unoconv que Usted ha instalado no está soportada. La característica de calificación de Tarea de Moodle requiere la versión 0.7 o superior.';
$string['tool'] = 'Herramienta';
$string['toolbarbutton'] = '{$a->tool} {$a->shortcut}';
$string['viewfeedbackonline'] = 'Ver PDF anotado...';
$string['white'] = 'Blanco';
$string['yellow'] = 'Amarillo';
