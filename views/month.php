<div class="col-lg-4 col-md-6">
  <div class="cart">
    <div class="head">
      <h2 class="tarif-item" data-id="<?php echo $value['ID']; ?>"><?php echo $value['month']; ?></h2>
    </div>
    <div class="body">
      <div class="price"><?php echo $value['price'] / $value['pay_period'] ?> &#8381;/мес</div>
      <p>разовый платёж — <?php echo $value['price'] ?> &#8381;</p>
      <?php
      if ($value['pay_period'] !== '1') {
        echo "<p>скидка — " . (($obj['tarifs'][$keyTarif]['maxPrice'] * $value['pay_period']) - $value['price']) . "</p>";
      }
      ?>
      <div class="arrov"></div>
    </div>
  </div>
</div>
