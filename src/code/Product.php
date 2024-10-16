<?php
class Product {
  private $name;
  private $basePrice;
  private $manufacturer;
  private $weight;
  private $volume;
  private $tax;

  public function __construct($name, $basePrice, $manufacturer, $weight, $volume, $tax = 0.07) {
    $this->name = $name;
    $this->basePrice = $basePrice;
    $this->manufacturer = $manufacturer;
    $this->weight = $weight;
    $this->volume = $volume;
    $this->tax = $tax;
  }

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

  function setVolume($volume) {
    $this->volume = $volume;
  }

  function salePrice() {

  }

  function shippingCost() {
    
  }
}