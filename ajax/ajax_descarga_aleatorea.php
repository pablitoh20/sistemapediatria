<?php
include('../funciones.php');
$curso = $_POST['curso'];
$cantidad_de_preguntas=$_POST['cant_pregs'];

if (isset($_POST['descarga_con_respuestas'])){
  $respuesta=true;
}else {
  $respuesta=false;
}
$preguntas=preguntas_descarga_aleatorea($curso,$cantidad_de_preguntas,$respuesta);
$td='';


echo "<HTML>
<BODY>

      EXAMEN:<br>
      INSTRUCTORES DE RESIDENTES:<br>
      JEFE DE RESIDENTES:<br>
      TOTAL DE PREGUNTAS:<br>
      TIEMPO 90 MINUTOS<br>
      MINIMO DE APROBACION: 12 PREGUNTAS<br><br>

LA CALIFICACION SERA EXPRESADA EN PORCENTAJE, SIENDO EL MAXIMO 100/100 Y EL MINIMO DE APROBACION 60/100<br><br>

LEA ATENTAMENTE LAS PREGUNTAS:<br><br>


NOMBRE Y APELLIDO:<br>
DNI:<br>
NOTA<br>
<br><br><br><br>




SUGRENCIAS:
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br>

$preguntas";



header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=examen.docx");
header("Pragma: no-cache");
header("Expires: 0");
