<?php
include "../code/Perishable.php";
$showResults = 'prod';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="./style/card.css">
  <link rel="stylesheet" type="text/css" href="./style/base.css">
</head>

<body>
  <?php
  switch ($showResults) {
    case 'all':

      break;
    case 'prod':
      require_once "./partials/showAllProducts.php";

    default:
      break;
  }


  ?>


</body>

</html>