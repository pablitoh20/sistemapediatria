<?php
require_once($_SERVER["DOCUMENT_ROOT"].'/sistemapediatria/conexion.php');
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

           header("Location: /sistemapediatria/inicio.php");
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
  $pregunta=htmlspecialchars($parametros['content']);
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

function preguntas_descarga_manual($curso,$ids){
  global $con;
  $ids=implode(',',$ids);

  $query="SELECT * FROM preguntas WHERE curso=$curso AND id_pregunta IN ($ids)";
  $query_result=mysqli_query($con,$query);
  $i=1;
  $pregunta='';
  while($arrow=mysqli_fetch_array($query_result,MYSQLI_ASSOC)){
    $pregunta.=$i.") ".htmlspecialchars_decode(html_entity_decode($arrow['pregunta']))."\n";
    $i++;
  }

  return $pregunta;
}
