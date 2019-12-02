<?php
require_once('../funciones.php');

$curso=$_POST['curso'];
$content=$_POST['content'];
guardarPregunta($curso,$content);
$cantidad=getNumeroDePreguntas($curso);
echo $cantidad;
