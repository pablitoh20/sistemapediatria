<?php

require_once('../funciones.php');
if (isset($_POST['id']) && is_numeric($_POST['id'])) {
  eliminar_pregunta($_POST['id']);
}
