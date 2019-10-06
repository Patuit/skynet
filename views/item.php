<div class="col-lg-4 col-md-6">
  <div class="cart">
    <div class="head">
      <div class="tarif-button">
        <h2>Тариф "<?= $value['title']; ?>"</h2>
      </div>
    </div>
    <div class="body">
      <div class="price">Период оплаты — <?= $value2['month'] ?></div>
      <div class="price"><?=  ($value2['price'] / $value2['pay_period']) . " &#8381;/мес" ?></div>
      <p>разовый платеж — <?= $value2['price'] ?> &#8381;</p>
      <p>со счёта спишеся — <?= $value2['price'] ?> &#8381;</p>
      <div class="light">
        <p>вступит в силу — сегодня</p>
        <p>активно до — <?= $value2['new_payday'] ?></p>
      </div>
    </div>
    <div class="footer">
      <a href="https://www.sknt.ru/">узнать подробнее на сайте www.sknt.ru</a>
    </div>
  </div>
</div>
