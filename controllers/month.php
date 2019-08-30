<?php
  $keyTarif = $_POST['keyTarif'];
  $obj = $_POST['dataJSON'];
  // print "<script>console.log(dataJSON)</script>";
  foreach ($obj['tarifs'][$keyTarif]['tarifs'] as $key => $value) {
    include "../views/month.php";
  }
 ?>
