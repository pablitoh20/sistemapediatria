<?php
if (getenv('LIVE') == 1) {
  $app="/app";
}else {
  $app="";
}
header("Location: $app/sistemapediatria/login.php");
?>
