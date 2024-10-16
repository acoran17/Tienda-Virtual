<?php
include "../code/Perishables.php"

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
  $obj = new Perishables("Nombre", 10.5, "proveedor", 200, 1000); 
  $obj->setCadDate(10,10,2024);
  print_r($obj->getCadDate());
  var_dump($obj->getCadDate());
  ?>
  
</body>
</html>