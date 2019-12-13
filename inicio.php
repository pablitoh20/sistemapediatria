<?php
session_start();
if (!isset($_SESSION['user'])) {
  echo "error";die();
}else {

include('header.php'); ?>

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

          <!-- Page Heading -->


          <div class="container">
            <img style="width:100%;height:auto;max-width: 400px;"  src="img/tresminion.png" alt="">

          </div>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include('footer.php');   // code...
      // code...
    }

?>
