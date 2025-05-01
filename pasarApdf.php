<?php

// ver si hay errores
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
//echo( 'hola xD');
require 'vendor/autoload.php';
use Dompdf\Dompdf;
$options = new \Dompdf\Options();
$options->set('isRemoteEnabled', true);
$options->set('isHtml5ParserEnabled', true);


// se crea un objeto de la clase DOMPDF
$pdf = new DOMPDF($options);
// resolución y tamaño del papel
$pdf->set_option( 'dpi' , '120' );
$pdf->set_paper("A4", "portrait");
//portrait landscape (mejor ... hay margenes a los lados modificcar el css el html) - landscape (tiene margenes)

// se recupera los datos pasado por post. por ahora la fecha para probar que funciona.

$fecha = isset($_POST['fecha']) ? $_POST['fecha'] : null;
// lunes
$actividadLunes = isset($_POST['actividadLunes']) ? $_POST['actividadLunes'] : null;
$tiempoLunes = isset($_POST['tiempoLunes']) ? $_POST['tiempoLunes'] : null;
$observacionesLunes = isset($_POST['observacionesLunes']) ? $_POST['observacionesLunes'] : null;
// Martes
$actividadMartes = isset($_POST['actividadMartes']) ? $_POST['actividadMartes'] : null;
$tiempoMartes = isset($_POST['tiempoMartes']) ? $_POST['tiempoMartes'] : null;
$observacionesMartes = isset($_POST['observacionesMartes']) ? $_POST['observacionesMartes'] : null;
// Miércoles
$actividadMiercoles = isset($_POST['actividadMiercoles']) ? $_POST['actividadMiercoles'] : null;
$tiempoMiercoles = isset($_POST['tiempoMiercoles']) ? $_POST['tiempoMiercoles'] : null;
$observacionesMiercoles = isset($_POST['observacionesMiercoles']) ? $_POST['observacionesMiercoles'] : null;
// Jueves
$actividadJueves = isset($_POST['actividadJueves']) ? $_POST['actividadJueves'] : null;
$tiempoJueves = isset($_POST['tiempoJueves']) ? $_POST['tiempoJueves'] : null;
$observacionesJueves = isset($_POST['observacionesJueves']) ? $_POST['observacionesJueves'] : null;
// Viernes
$actividadViernes = isset($_POST['actividadViernes']) ? $_POST['actividadViernes'] : null;
$tiempoViernes = isset($_POST['tiempoViernes']) ? $_POST['tiempoViernes'] : null;
$observacionesViernes = isset($_POST['observacionesViernes']) ? $_POST['observacionesViernes'] : null;


//var_dump($aPDF);

// para incluir el html para transformar a pdf. (sin modificar el html) las 4 lineas
ob_start();
include 'vista/hoja2.php';
$html_para_pdf = ob_get_clean();
$pdf->load_html($html_para_pdf);

$pdf->render(); //este comando renderiza el PDF
$output = $pdf->output(); //extrae el contenido renderizado del PDF
// muestra en el navegador y descarga
$pdf->stream('test.pdf?t=' . time());
//file_put_contents('mipdf.pdf', $output); //guarda el PDF en un fichero llamado mipdf.pdf

