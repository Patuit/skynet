<?php
  $idTarif = $_POST['idTarif'];
  $obj = $_POST['dataJSON'];
  foreach ($obj['tarifs'] as $key => $value) {
    foreach ($value['tarifs'] as $key2 => $value2) {
      if ($value2['ID'] === $idTarif) {
        include "../views/item.php";
      }
    }
  }
 ?>
