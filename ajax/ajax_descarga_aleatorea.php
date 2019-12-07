<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/sistemapediatria/funciones.php');
$cantidad = $_POST['cantidad'];
$curso=$_POST['curso'];
descarga_aleatorea($ids,$cantidad);
