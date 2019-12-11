<?php
if (getenv('LIVE') == 1) {
  $app="/app";
}else {
  $app="";
}
require_once($_SERVER["DOCUMENT_ROOT"].$app.'/sistemapediatria/conexion.php');
function login($params){
       global $con;
       $username=$params['user'];
       $pass=$params['password'];
       $username=pg_escape_string($con,$username);
       $pass=pg_escape_string($con,$pass);

       $query_login="SELECT * FROM usuario WHERE nombre_usuario='{$username}'";
       $query_login_result=pg_query($con,$query_login);
       if (!$query_login_result) {
         die("QUERY FAILED".''.mysqli_error($con));
       }else {
         $row=pg_fetch_array($query_login_result);
         var_dump($row);
         if (($username == $row['nombre_usuario'])&&(md5($pass) == $row['password'])){ //me logeo
           session_start();
           $_SESSION['user']=$row['nombre_usuario'];
           $_SESSION['user_id']=$row['nombre_usuario'];

           header("Location: /sistemapediatria/inicio.php");
         }
        }
  }

function getPreguntas($año){
    global $con;
    $query="SELECT * FROM preguntas WHERE curso=$año";
    $query_result=pg_query($con,$query);
  return $query_result;
}

function getNumeroDePreguntas($año){
  global $con;
  $query_login="SELECT * FROM preguntas WHERE curso=$año";
  $query_login_result=pg_query($con,$query_login);
  return mysqli_num_rows($query_login_result);
}

function guardarPregunta($parametros){
  global $con;
  $curso=$parametros['year'];
  $pregunta=$parametros['content'];
  $respuesta=$parametros['respuesta'];
  $fecha_modificacion=date('Y-m-d');

  $query="INSERT INTO preguntas(curso,pregunta,respuesta,fecha_creacion)
                VALUES ($curso,'$pregunta','$respuesta','$fecha_modificacion')";
  if (pg_query($con,$query)) {
    return 1;
  }else {
    die('QUERY FAILED'.mysqli_error());
  }
}

function buscarPregunta($id){
  global $con;
  $query="SELECT * FROM preguntas WHERE id_pregunta=$id";
  $query_result=pg_query($con,$query);
  return $query_result;
}
function actualizarPregunta($param){
  global $con;
  $id=$param['id'];
  $curso=$param['year'];
  $pregunta=$param['content'];
  $respuesta=$param['respuesta'];
  $fecha_modificacion=date('Y-m-d');

  $query="UPDATE preguntas
          SET curso=$curso,pregunta='$pregunta',respuesta='$respuesta',fecha_modificacion='$fecha_modificacion'
          WHERE id_pregunta=$id";
  $query_result=pg_query($con,$query);
}

function eliminar_pregunta($id){
  global $con;
  $query="DELETE FROM preguntas WHERE id_pregunta=$id";
  $query_result=pg_query($con,$query);
  return $query_result;
}

function preguntas_descarga_manual($curso,$ids,$respuesta){
  global $con;
  $ids=implode(',',$ids);

  $query="SELECT * FROM preguntas WHERE curso=$curso AND id_pregunta IN ($ids)";
  $query_result=pg_query($con,$query);
  $i=1;
  $pregunta='';
  while($arrow=pg_fetch_array($query_result)){
    $cuerpo_pregunta=$arrow['pregunta'];

    $pregunta.="$i)$cuerpo_pregunta";
    $i++;
    if ($respuesta) {
      $pregunta.=" <strong style='background-color: #FFFF00'>RESPUESTA: ".$arrow['respuesta']."</strong><br>";
    }
  }


  return $pregunta;
}
