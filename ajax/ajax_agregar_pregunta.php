<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/sistemapediatria/funciones.php');

$curso=$_POST['curso'];
$content=$_POST['content'];
guardarPregunta($curso,$content);
$cantidad=getNumeroDePreguntas($curso);
echo $cantidad;
