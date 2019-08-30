<div class="col-lg-4 col-md-6">
  <div class="cart">
    <div class="head">
      <div class="tarif-button" data-key="<?php echo [$key][0]; ?>">
        <h2>Тариф "<?php echo $value['title']; ?>"</h2>
      </div>
    </div>
    <div class="body">
      <div class="price">Период оплаты — <?php echo $value2['month'] ?></div>
      <div class="price"><?php echo  ($value2['price'] / $value2['pay_period']) . " &#8381;/мес" ?></div>
      <p>разовый платеж — <?php echo $value2['price'] ?> &#8381;</p>
      <p>со счёта спишеся — <?php echo $value2['price'] ?> &#8381;</p>
      <div class="light">
        <p>вступит в силу — сегодня</p>
        <p>активно до — <?php echo $value2['new_payday'] ?></p>
      </div>
      <div class="arrov"></div>
    </div>
    <div class="footer">
      <a href="https://www.sknt.ru/">узнать подробнее на сайте www.sknt.ru</a>
    </div>
  </div>
</div>
