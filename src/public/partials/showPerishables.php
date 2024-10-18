<?php
require_once "./storeItems.php";



foreach ($storePerishableProducts as $value) {
  echo "<p>";
  echo $value->getBasePrice();
  echo "</p>";
}