<div class="prev-page" id="get-tarifs">
  <i class="fas fa-angle-left"></i>
</div>
<?php
  $keyTarif = $_POST['keyTarif'];
  $obj = $_POST['dataJSON'];
  foreach ($obj['tarifs'][$keyTarif]['tarifs'] as $key => $value) {
    include "../views/month.php";
  }
 ?>
