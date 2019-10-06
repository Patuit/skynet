<?php
  if (!$obj) {
    $obj = $_POST['dataJSON'];
  }
  foreach ($obj['tarifs'] as $key => $value) {
    ?>
    <div class="col-lg-4 col-md-6">
      <div class="cart">
        <div class="head">
          <div>
            <h2 class="tarif-button">Тариф "<?= $obj['tarifs'][$key]['title']; ?>"</h2>
          </div>
        </div>
        <div class="body row mr-0 justify-content-between">
          <div>
            <div class="speed"><?= $obj['tarifs'][$key]['speed']; ?> Мбит/с</div>
            <div class="price"><?= $value['minPrice'] . "-" . $value['maxPrice'] . " &#8381;/мес" ?></div>
            <?php
            if ($obj['tarifs'][$key]['free_options']) {
              echo "<div class='add-text'>";
              foreach ($obj['tarifs'][$key]['free_options'] as $key2 => $value2) {
                echo "<p> $value2 </p>";
              }
              echo "</div>";
            }
             ?>
         </div>
          <div class="arrov row align-items-center m-0 p-2" id="get-month" data-key="<?= [$key][0]; ?>">
            <i class="fas fa-angle-right"></i>
          </div>
        </div>
        <div class="footer">
          <a href="https://www.sknt.ru/">узнать подробнее на сайте www.sknt.ru</a>
        </div>
      </div>
    </div>

    <?php
  }
 ?>
