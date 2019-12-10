<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/sistemapediatria/funciones.php');

$curso=$_POST['curso'];
$content=$_POST['content'];
$respuesta=$_POST['respuesta'];
guardarPregunta($curso,$content,$respuesta);
$cantidad=getNumeroDePreguntas($curso);
echo $cantidad;
