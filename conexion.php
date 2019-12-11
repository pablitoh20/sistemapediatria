<?php

/*$host='127.0.0.1';
$user='root';
$pass='';
$db='SistemaExamenesPediatria';

$con=mysqli_connect($host,$user,$pass,$db) or die();
*/
$con = pg_connect("host=ec2-174-129-254-217.compute-1.amazonaws.com dbname=d2rhleqfkoibp user=mnebvrgxcnyoqs password=635159d96965b30d026ab51bb6b5e7d68ac38817df4de895a45804659f849708");


/*para conexion servidor */
//$con=mysqli_connect("localhost","bienestar","kxrbnWzq1ds9Sa","bienestar") or die("No se pudo conectar con el servidor");?>
