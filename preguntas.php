<?php
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
  include('header.php');

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

        <!-- Begin Page Content -->
        <div class="container-fluid">


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Preguntas <?php echo $curso ?> Año de Pediatria</h6>
            </div>
            <div class="card-body">


              <div class="table-responsive">
                <div class="row col-sm-3">
                  <form class="" action="descargaAleatorea.php" method="post">
                    <input type="hidden" name="curso" value="<?php echo $idCurso ?>">
                    <input type="number" name="cantidad" class="form-control col-sm-4" value="">
                    <input type="submit" class="btn btn-success" name="descarga" value="Descarga Aleatorea">
                  </form>
                </div>


                </div><br>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                  <thead>
                    <tr>
                      <th>Número</th>
                      <th>Pregúnta</th>
                      <th>Respuesta</th>
                      <th>Seleccionar</th>
                    </tr>
                  </thead>
                    <?php
                      $preguntas=getPreguntas($_GET['curso']);
                      while ($pregunta = mysqli_fetch_array($preguntas)) {
                        $id=$pregunta['id_pregunta'];
                        $pre=$pregunta['pregunta'];
                        $respuesta=$pregunta['respuesta'];
                        echo "<tr>
                              <td style='width:10px;'><a href='editar.php?id=$id'>".$id."</a></td>
                              <td>".$pre."</td>
                              <td>".$respuesta."</td>
                              <td style='width:5px; height:5px;'> <input style='width:20px;' name='conjunto_de_preguntas[]'  class='form-control' type='checkbox' name='' value=''></td>
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
