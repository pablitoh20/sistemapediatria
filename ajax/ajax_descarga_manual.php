<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/sistemapediatria/funciones.php');
$curso = $_POST['curso'];
$conjunto_de_preguntas=$_POST['conjunto_de_preguntas'];
$preguntas=preguntas_descarga_manual($curso,$conjunto_de_preguntas);
$td='';
$i=1;

echo "

      EXAMEN:
      INSTRUCTORES DE RESIDENTES:
      JEFE DE RESIDENTES:
      TOTAL DE PREGUNTAS:
      TIEMPO 90 MINUTOS
      MINIMO DE APROBACION: 12 PREGUNTAS

LA CALIFICACION SERA EXPRESADA EN PORCENTAJE, SIENDO EL MAXIMO 100/100 Y EL MINIMO DE APROBACION 60/100

LEA ATENTAMENTE LAS PREGUNTAS:


NOMBRE Y APELLIDO:
DNI:
NOTA





SUGRENCIAS \n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";


echo $preguntas;

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=examen.docx");
header("Pragma: no-cache");
header("Expires: 0");
