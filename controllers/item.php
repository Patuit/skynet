<?php
  $idTarif = $_POST['idTarif'];
  $obj = $_POST['dataJSON'];
  foreach ($obj['tarifs'] as $key => $value) {
    foreach ($value['tarifs'] as $key2 => $value2) {
      if ($value2['ID'] === $idTarif) {
        $keyTarif = $key;
        $body = include "../views/item.php";
      }
    }
  }
  ?>
  <div class="prev-page" id="get-month" data-key="<?= $keyTarif ?>">
    <i class="fas fa-angle-left"></i>
  </div>
