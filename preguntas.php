<?php
session_start();
if (!isset($_SESSION['user'])) {
  echo "error";die();
}else {
include('header.php');
include('funciones.php');

  $curso="";
  $idCurso=$_GET['curso'];

  switch ($idCurso) {
    case '1':
      $curso="Primer";
        break;
    case '2':
      $curso="Segundo";
        break;
    case '3':
      $curso="Tercer";
        break;
    case '4':
       $curso="Cuarto";
         break;
    default:
      // code...
      break;
  }

 ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include('menu.php'); ?>


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include('topbar.php') ?>
        <!-- End of Topbar -->
        <div class="notification" style="background:red;z-index:1;">Pregunta Eliminada Correctamente!</div>

        <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Preguntas <?php echo $curso ?> Año de Pediatria</h6>
            </div>

            <div class="card-body">
              <form class="" action="ajax/ajax_descarga_aleatorea.php" method="post" id="formulario_descarga_aleatorea">
                <input type="hidden" name="curso" id="curso" value="<?php echo $idCurso ?>">
                <input type="number" name="cant_pregs" style="display:inline;" placeholder="cant pregs" id="cant_pregs"  class="form-control col-sm-1" value="">
                <button type="submit" form="formulario_descarga_aleatorea" id="descarga_aleatorea"  class="btn btn-success">Descarga Aleatorea</button>
              </form>
              <br><br>
              <button disabled type="submit" form="form1" class="btn btn-success pull-right"  id="descarga" value="<?php $_GET['curso'] ?>">Descargar Seleccionadas</button>&nbsp&nbsp<span><strong>Preguntas seleccionadas: <span id="seleccionadas">0</span></strong></span><br></br>

              <div class="table-responsive">

                <form class="" action="ajax/ajax_descarga_manual.php" method="POST" id="form1">
                  <table>
                    <td style="padding-bottom:7px;">Descarga con respuestas</td>
                    <td>&nbsp&nbsp<input class="form-control " style="width:20px; display:inline;" type="checkbox" name="descarga_con_respuestas" value="1"> </td>
                  </table>
                  <input type="hidden" name="curso" id="curso" value="<?php echo $idCurso ?>">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                      <tr>
                        <th>Número</th>
                        <th>Pregúnta</th>
                        <th>Respuesta</th>
                        <th>Fecha creación</th>
                        <th>Fecha modificación</th>
                        <th>Seleccionar</th>
                        <th>Eliminar</th>
                      </tr>
                    </thead>
                      <?php
                        $preguntas=getPreguntas($_GET['curso']);
                        while ($pregunta = pg_fetch_array($preguntas)) {
                          $id=$pregunta['id_pregunta'];
                          $pre=$pregunta['pregunta'];
                          $fecha_creacion=$pregunta['fecha_creacion'];
                          $fecha_modificacion=$pregunta['fecha_modificacion'] != "0000-00-00" ? $pregunta['fecha_modificacion'] : "";
                          $respuesta=$pregunta['respuesta'] != "" ? $pregunta['respuesta'] : "";
                          echo "<tr data-name='$id'>
                                <td style='width:10px;'><a href='editar.php?id=$id'>".$id."</a></td>
                                <td width='530px;'>". $pre."</td>
                                <td>". $respuesta."</td>
                                <td>". $fecha_creacion."</td>
                                <td>". $fecha_modificacion."</td>
                                <td style='width:5px; height:5px;'> <input style='width:20px;'  name='conjunto_de_preguntas[]' value=".$id." class='form-control seleccionar' type='checkbox' name='' value=''></td>
                                <td><input  data-value=".$id." type='button' class='btn btn-danger eliminar_pregunta' value='Eliminar'></td>
                            </tr> ";
                        }
                       ?>
                    <tbody>
                    </tbody>
                  </table>
                </form>

              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
        <?php include('footer.php') ?>

      </div>
      <!-- End of Main Content -->

</div>
<?php } ?>
