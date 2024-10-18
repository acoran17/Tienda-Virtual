<?php
include "../code/Perishable.php";
require_once "./storeItems.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php


  foreach ($allProducts[0] as $key => $value) {
    echo "<p>";

    if ($value instanceof Perishable) {
      printf("<strong>Nombre:</strong> %s", $value->getName());
      echo "<ul>";
      printf("<li><strong>Precio sin tax:</strong> %s</li>", $value->getBasePrice());
      printf("<li><strong>Fecha:</strong> %s</li>", $value->getExpirationDate()->format('d/m/Y'));
      echo "</ul>";
    }

    echo "</p>";
  }



  //print_r($obj->getExpDate());
  //print_r($obj->daysToExpire());
  ?>

</body>

</html>