<?php
include "../code/Perishable.php"

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
  $obj = new Perishable("Nombre", 10.5, "proveedor", 200, 1000);
  $obj->setExpDate(28, 11, 2024);
  print_r($obj->daysToExpire());



  //print_r($obj->getExpDate());
  //print_r($obj->daysToExpire());
  ?>

</body>

</html>