<?php
if (getenv('LIVE') == 1) {
  $app="/app";
}else {
  $app="";
}
include('header.php');
 ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <?php include('menu.php'); ?>
    <?php
    if (isset($_POST['button'])) {
      sleep(2);
      actualizarPregunta($_POST);
    }
     ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include('topbar.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="notification">Pregunta Editada Correctamente!</div>

        <div class="container-fluid">
          <?php
          if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $pregunta=pg_fetch_row(buscarPregunta($_GET['id']));
            $value1 = (1 == $pregunta[1]) ? 'selected' : ''; // $r is set to 'Yes'
            $value2 = (2 == $pregunta[1]) ? 'selected' : ''; // $r is set to 'Yes'
            $value3 = (3 == $pregunta[1]) ? 'selected' : ''; // $r is set to 'Yes'
            $value4 = (4 == $pregunta[1]) ? 'selected' : ''; // $r is set to 'Yes'
          }

           ?>

          <!-- DataTales Example -->
          <div class="card ">
            <div class="card-header ">
              <h6 class="m-0 font-weight-bold text-primary">Nueva Pregunta</h6>
            </div>
            <div class="card-body">
              <form class="form-group" action="" method="post">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                <div class="form-group">
                  <label for="year">Año:</label>
                  <select required class="form-control" name="year">
                    <option value="">Select</option>
                    <option <?php echo $value1 ?> value="1">Primer año</option>
                    <option <?php echo $value2 ?> value="2">Segundo año</option>
                    <option <?php echo $value3 ?> value="3">Tercer año</option>
                    <option <?php echo $value4 ?> value="4">Cuarto año</option>

                  </select>
                </div>
                <div class="form-group">
                  <label for="year">Respuesta correcta:</label>
                  <input type="text" name="respuesta" value="<?php if(isset($pregunta[3])){echo $pregunta[3];} ?>" class="form-control" placeholder="respuesta correcta">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Pregunta</label>
                  <textarea name="content" class="form-control"   value="" id="mytextarea" rows="8" cols="100"><?php if(isset($pregunta[2])){echo $pregunta[2];} ?></textarea>
                </div>

                <div class="form-group">
                  <button type="" class="btn btn-primary " onclick="SubmitForm()" name="button">Actualizar</button>
                </div>
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    <?php include('footer.php') ?>
    <script src="https://cdn.tiny.cloud/1/9qsxcm5ia9lc28qmi8mm8gkwtuyfovbzfair4ml34ya4uhqp/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
      selector: '#mytextarea',
      height: 400,
      menubar: false,
      plugins: [
        'advlist autolink lists link image charmap print preview anchor',
        'searchreplace visualblocks code fullscreen',
        'insertdatetime media table paste code help wordcount'
      ],
      toolbar: 'undo redo | formatselect | ' +
      ' bold italic backcolor | alignleft aligncenter ' +
      ' alignright alignjustify | bullist numlist outdent indent |' +
      ' removeformat | help',

    });
    </script>
