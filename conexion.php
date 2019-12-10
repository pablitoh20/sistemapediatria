<?php

/*$host='127.0.0.1';
$user='root';
$pass='';
$db='SistemaExamenesPediatria';

$con=mysqli_connect($host,$user,$pass,$db) or die();
*/
$con = pg_connect("host=ec2-174-129-253-27.compute-1.amazonaws.com dbname=d6i0htst325322 user=xscqjrpsobfewa password=b6a846234b9c08a39cd8dda7a751bdb24e719e9d69706e7159964a3c37f58fcd");


/*para conexion servidor */
//$con=mysqli_connect("localhost","bienestar","kxrbnWzq1ds9Sa","bienestar") or die("No se pudo conectar con el servidor");?>
