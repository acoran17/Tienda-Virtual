<?php
require_once "./storeItems.php";
?>
<div class="itemsContainer">

  <?php foreach ($storePerishableProducts as $value): ?>
  <div class="cardPerishable">
    <h3 class="persihableTitle"><?php echo $value->getName() ?></h3>
    <p>
      <strong>Fabricante: </strong><?php echo $value->getManufacturer() ?>
    </p>

  </div>
  <?php endforeach; ?>
</div>