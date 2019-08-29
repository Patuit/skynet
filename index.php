<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Тестовое задание</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jQuery.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
  </head>
  <body>
    <?php
      $json = file_get_contents("http://sknt.ru/job/frontend/data.json");
      $obj = json_decode($json,true);
      foreach ($obj['tarifs'] as $key => $value) {
        foreach ($obj['tarifs'][$key]['tarifs'] as $key2 => $value2) {
          $allPrice[$key2] = $obj['tarifs'][$key]['tarifs'][$key2]['price'] / $obj['tarifs'][$key]['tarifs'][$key2]['pay_period'];
          preg_match('/\((.+)\)/', $obj['tarifs'][$key]['tarifs'][$key2]['title'], $matches);
          if (!$matches[1]) {
            $month[$key][$key2] = '1 месяц';
          } else {
            $month[$key][$key2] = $matches[1];
          }
        }
        $maxPrice[$key] = max($allPrice);
        $minPrice[$key] = min($allPrice);
      }
      var_dump($month);

    ?>
    <div class="container-fluid">
      <div class="container">
        <div class="row">
            <?php
              if ($obj['result'] === 'ok') {
                foreach ($obj['tarifs'] as $key => $value) {
                  include "block/tarifs.php";
                }
              }
            ?>
        </div>
      </div>
    </div>
  </body>
</html>
