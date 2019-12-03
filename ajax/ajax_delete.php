<?php

require_once($_SERVER["DOCUMENT_ROOT"].'/sistemapediatria/funciones.php');
if (isset($_POST['id']) && is_numeric($_POST['id'])) {
  eliminar_pregunta($_POST['id']);
}
