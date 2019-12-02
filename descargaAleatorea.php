<?php
include('conexion.php');
$curso=$_POST['curso'];
$query = "SELECT * FROM `preguntas` WHERE curso=1";
$query_result=mysqli_query($con,$query);
$row=mysqli_fetch_array($query_result);

foreach ($row as $key ) {
  echo $key['id_pregunta'];
}
