<?php
include('header.php');
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

              <button type="submit" class="btn btn-success pull-right" id="descarga" value="<?php $_GET['curso'] ?>">Descargar</button>&nbsp&nbsp<span><strong>Preguntas seleccionadas: <span id="seleccionadas">0</span></strong></span><br></br>

              <div class="table-responsive">

                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      <th>Número</th>
                      <th>Pregúnta</th>
                      <th>Seleccionar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                    <?php
                      $preguntas=getPreguntas($_GET['curso']);
                      while ($pregunta = mysqli_fetch_array($preguntas)) {
                        $id=$pregunta['id_pregunta'];
                        $pre=$pregunta['pregunta'];
                        echo "<tr data-name='$id'>
                              <td style='width:10px;'><a href='editar.php?id=$id'>".$id."</a></td>
                              <td>". $pre."</td>
                              <td style='width:5px; height:5px;'> <input style='width:20px;' name='conjunto_de_preguntas[]' value=".$id." class='form-control seleccionar' type='checkbox' name='' value=''></td>
                              <td><button class='btn btn-danger eliminar_pregunta' onclick='eliminarPregunta($id)' >Eliminar</button></td>
                          </tr> ";
                      }
                     ?>
                  <tbody>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
        <?php include('footer.php') ?>

      </div>
      <!-- End of Main Content -->

</div>
