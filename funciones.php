<?php
include('conexion.php');


function login($params){
       global $con;
       $username=$params['user'];
       $pass=$params['password'];
       $username=mysqli_real_escape_string($con,$username);
       $pass=mysqli_real_escape_string($con,$pass);

       $query_login="SELECT * FROM usuario WHERE user='{$username}'";
       $query_login_result=mysqli_query($con,$query_login);
       if (!$query_login_result) {
         die("QUERY FAILED".''.mysqli_error($con));
       }else {
         $row=mysqli_fetch_array($query_login_result);
         if (($username == $row['user'])&&(md5($pass) == $row['password'])){ //me logeo
           $_SESSION['user']=$row['user'];
           $_SESSION['user_id']=$row['user_id'];

           header("Location: /SistemaDeExamenes/inicio.php");
         }
        }
  }

function getPreguntas($año){
    global $con;
    $query="SELECT * FROM preguntas WHERE curso=$año";
    $query_result=mysqli_query($con,$query);
  return $query_result;
}

function getNumeroDePreguntas($año){
  global $con;
  $query_login="SELECT * FROM preguntas WHERE curso=$año";
  $query_login_result=mysqli_query($con,$query_login);
  return mysqli_num_rows($query_login_result);
}

function guardarPregunta($parametros){
  global $con;
  $curso=$parametros['year'];
  $pregunta=$parametros['content'];
  $query="INSERT INTO `preguntas`(`curso`, `pregunta`)
                VALUES ($curso,'$pregunta')";
  if (mysqli_query($con,$query)) {
    return 1;
  }else {
    die('QUERY FAILED'.mysqli_error());
  }
}

function buscarPregunta($id){
  global $con;
  $query="SELECT * FROM preguntas WHERE id_pregunta=$id";
  $query_result=mysqli_query($con,$query);
  return $query_result;
}
function actualizarPregunta($param){
  global $con;
  $id=$param['id'];
  $curso=$param['year'];
  $pregunta=$param['content'];
  $query="UPDATE `preguntas` SET `curso`=$curso,`pregunta`='$pregunta' WHERE id_pregunta=$id";
  $query_result=mysqli_query($con,$query);
}

function eliminar_pregunta($id){
  global $con;
  $query="DELETE FROM preguntas WHERE id_pregunta=$id";
  $query_result=mysqli_query($con,$query);
  return $query_result;
}
