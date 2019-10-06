<div class="col-lg-4 col-md-6">
  <div class="cart">
    <div class="head">
      <h2 class="tarif-item"><?= $value['month']; ?></h2>
    </div>
    <div class="body row mr-0 justify-content-between">
      <div>
      <div class="price"><?= $value['price'] / $value['pay_period'] ?> &#8381;/мес</div>
      <p>разовый платёж — <?= $value['price'] ?> &#8381;</p>
      <?php
      if ($value['pay_period'] !== '1') {
        echo "<p>скидка — " . (($obj['tarifs'][$keyTarif]['maxPrice'] * $value['pay_period']) - $value['price']) . "</p>";
      }
      ?>
    </div>
      <div class="arrov row align-items-center m-0 p-2" id="get-item" data-id="<?= $value['ID']; ?>">
        <i class="fas fa-angle-right"></i>
      </div>
    </div>
  </div>
</div>
