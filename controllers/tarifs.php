  <div class="col-lg-4 col-md-6">
    <div class="cart">
      <div class="head">
        <div class="tarif-button" data-key="<?php echo [$key][0]; ?>">
          <h2>Тариф "<?php echo $obj['tarifs'][$key]['title']; ?>"</h2>
        </div>
      </div>
      <div class="body">
        <div class="speed"><?php echo $obj['tarifs'][$key]['speed']; ?> Мбит/с</div>
        <div class="price"><?php echo $value['minPrice'] . "-" . $value['maxPrice'] . " &#8381;/мес" ?></div>
        <?php
        if ($obj['tarifs'][$key]['free_options']) {
          echo "<div class='add-text'>";
          foreach ($obj['tarifs'][$key]['free_options'] as $key2 => $value2) {
            echo "<p> $value2 </p>";
          }
          echo "</div>";
        }
         ?>
        <div class="arrov"></div>
      </div>
      <div class="footer">
        <a href="https://www.sknt.ru/">узнать подробнее на сайте www.sknt.ru</a>
      </div>
    </div>
  </div>
