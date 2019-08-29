<div class="col-lg-4 col-md-6">
  <div class="cart">
    <div class="head">
      <h2><?php echo $month[$key] ?></h2>
    </div>
    <div class="body">
      <div class="price"><?php echo "$minPrice[$key] - $maxPrice[$key] Р/мес" ?></div>
      <?php
      if ($obj['tarifs'][$key]['tarifs'][$key2]['pay_period'] === 1) {
        echo "<div class='add-text'><p>разовый платёж - $obj['tarifs'][$key]['tarifs'][$key2]['price'] / $obj['tarifs'][$key]['tarifs'][$key2]['pay_period'] </p></div>";
      }
       ?>
      <div class="arrov"></div>
    </div>
  </div>
</div>
