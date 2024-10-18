<?php
include "../code/Perishable.php";
$showResults = 'per';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="./style/perishableCard.css">
</head>

<body>
  <?php
  switch ($showResults) {
    case 'all':

      break;
    case 'per':
      require_once "./partials/showPerishables.php";
    default:
      break;
  }


  ?>


</body>

</html>