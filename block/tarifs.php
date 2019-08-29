  <div class="col-lg-4 col-md-6">
    <div class="cart">
      <div class="head">
        <h2>Тариф "<?php echo $obj['tarifs'][$key]['title']; ?>"</h2>
      </div>
      <div class="body">
        <div class="speed"><?php echo $obj['tarifs'][$key]['speed']; ?> Мбит/с</div>
        <div class="price"><?php echo "$minPrice[$key] - $maxPrice[$key] Р/мес" ?></div>
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
