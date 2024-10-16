<?php
class Products {
  private $name;
  private $basePrice;
  private $manufacturer;
  private $weight;
  private $volume;

  function getName() {
    return $this->name;
  }

  function setName($name) {
    $this->name = $name;
  }

  function getbasePrice() {
    return $this->basePrice;
  }

  function setbasePrice($basePrice) {
    $this->basePrice = $basePrice;
  }

  function getManufacturer() {
    return $this->manufacturer;
  }

  function setManufacturer($manufacturer) {
    $this->manufacturer = $manufacturer;
  }

  function getWeight() {
    return $this->weight;
  }

  function setWeight($weight) {
    $this->weight = $weight;
  }

  function getVolume() {
    return $this->volume;
  }

  function setVolume() {
    $this->volume = $volume;
  }

  function salePrice() {

  }

  function shippingCost() {
    
  }
}