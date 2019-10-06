<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>Тестовое задание</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/font-awesome.js"></script>
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
            $obj['tarifs'][$key]['tarifs'][$key2] += ['month'=>'1 месяц'];
          } else {
            $obj['tarifs'][$key]['tarifs'][$key2] += ['month'=>$matches[1]];
          }
        }
        sort($obj['tarifs'][$key]['tarifs']);
        $obj['tarifs'][$key] += ['maxPrice'=>max($allPrice)];
        $obj['tarifs'][$key] += ['minPrice'=>min($allPrice)];

        $jsonPHP = json_encode($obj);
      }
    ?>
    <script type="text/javascript">
    var dataJSON=<?=$jsonPHP?>;
    </script>
    <div class="container-fluid">
      <div class="container">
        <div class="row body-tarifs">
            <?php
              include "controllers/tarifs.php";
            ?>
        </div>
      </div>
    </div>
    <script src="js/jQuery.min.js" charset="utf-8"></script>
    <script src="js/bootstrap.min.js" charset="utf-8"></script>
    <script src="js/main.js" charset="utf-8"></script>
  </body>
</html>
