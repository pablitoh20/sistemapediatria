<?php
session_start();
if (!isset($_SESSION['user'])) {
  echo "error";die();
}else {

include('header.php');
include('funciones.php');

 ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include('menu.php'); ?>
    <?php if (isset($_POST['button'])) {
      sleep(2);
      guardarPregunta($_POST);
    } ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include('topbar.php') ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="notification col-sm-12">Pregunta Agregada Correctamente!</div>

        <div class="container-fluid">



          <!-- DataTales Example -->
          <div class="card ">
            <div class="card-header ">
              <h6 class="m-0 font-weight-bold text-primary">Nueva Pregunta</h6>
            </div>
            <div class="card-body">
              <form class="form-group" action="" method="post">
                <div class="form-group">
                  <label for="year">Año:</label>
                  <select required class="form-control" name="year">
                    <option value="">Select</option>
                    <option value="1">Primer año</option>
                    <option value="2">Segundo año</option>
                    <option value="3">Tercer año</option>
                    <option value="4">Cuarto año</option>

                  </select>
                </div>
                <div class="form-group">
                  <label for="year">Respuesta correcta:</label>
                  <input type="text" name="respuesta" value="" class="form-control" placeholder="respuesta correcta">
                </div>
                <div class="form-group">
                  <label for="formGroupExampleInput2">Pregunta</label>
                  <textarea name="content" class="form-control" id="editorAgregar" rows="8" cols="80"></textarea>
                </div>
                <div class="form-group">
                  <button type="" class="btn btn-primary " onclick="SubmitForm()" name="button">Agregar</button>
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
      selector: '#editorAgregar',
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
<?php
} ?>
