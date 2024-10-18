<?php



$prodPerishable1 = new Perishable("1KG de carne", 5, "Matadero Juan", 1, 3000);
$prodPerishable1->setExpirationDate(4, 9, 2024);

$prodPerishable2 = new Perishable("2KG de carne", 2, "Matadero Juan", 2, 6000);
$prodPerishable2->setExpirationDate(21, 10, 2024);

$prodPerishable3 = new Perishable("3KG de carne", 3, "Matadero Juan", 3, 9000);
$prodPerishable3->setExpirationDate(15, 11, 2024);



$storeProducts[] = [
  $prod1 = new Product("Móvil", 999.99, "Apple", 0.5, 2000),
  $prod2 = new Product("Pórtatil", 999.99, "Hp", 5, 10000),
];

$storePerishableProducts = [
  $prodPerishable1,
  $prodPerishable2,
  $prodPerishable3,
];