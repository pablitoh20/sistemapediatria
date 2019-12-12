<?php

include('funciones.php');
include('header.php');
if (isset($_POST['login'])) {
  login($_POST);
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/login.css">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/bossbaby.png" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form class="" action="" method="post">
      <input autocomplete="off" type="text" id="user" class="fadeIn second" name="user" placeholder="Usuario">
      <input autocomplete="off"  style="-webkit-text-security: disc;-moz-text-security: disc;" type="text" id="password" class="fadeIn third" name="password" placeholder="Contraseña">
      <input type="submit" name="login" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <p>Sistema de Examenes Pediatriá</p>
    </div>

  </div>
</div>
