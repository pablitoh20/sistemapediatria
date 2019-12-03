<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/sistemapediatria/funciones.php');

$cantidad = $_POST['cantidad'];
$curso=$_POST['curso'];
if (is_numeric($cantidad)) {
  $cantidad=getNumeroDePreguntas($curso);
  $rand = range(1, 13);
  shuffle($rand);
  var_dump($rand);
}
