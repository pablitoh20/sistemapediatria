<?php
if (getenv('MY_VAR') == 1) {
  $app="/app";
}else {
  $app="";
}
header("Location: $app/sistemapediatria/login.php");
?>
