<?php
class Normal extends Service
{
  private string $name;
  private float $basePrice;
  private string $manufacturer;
  private float $tax;

  public function __construct(string $name, float $basePrice, string $manufacturer, $tax = 0.07)
  {
    parent::__construct();
    $this->name = $name;
    $this->basePrice = $basePrice;
    $this->manufacturer = $manufacturer;
    $this->tax = $tax;
  }
  /**
   * Return the sale price.
   *
   * @return float
   */
  function salePrice()
  {
    return $this->basePrice + ($this->basePrice * $this->tax);
  }

  /**
   * Get service name.
   *
   * @return void
   */
  public function getName()
  {
    return $this->name;
  }

  /**
   * Set service name.
   *
   * @param  string $name
   */
  public function setName(string $name)
  {
    $this->name = $name;
  }

  /**
   * Return service base price.
   *
   * @return float
   */
  public function getBasePrice(): float
  {
    return $this->basePrice;
  }

  /**
   * Set service base price.
   *
   * @param  float $basePrice
   */
  public function setBasePrice(float $basePrice)
  {
    $this->basePrice = $basePrice;
  }

  /**
   * Return the service manufacturer.
   *
   * @return string
   */
  public function getManufacturer(): string
  {
    return $this->manufacturer;
  }

  /**
   * Set service manufacturer.
   *
   * @param  string $manufacturer
   */
  public function setManufacturer(string $manufacturer)
  {
    $this->manufacturer = $manufacturer;
  }


  /**
   * Get the servivce tax.
   *
   * @return float
   */
  public function getTax(): float
  {
    return $this->tax;
  }

  /**
   * Set servivce tax.
   *
   * @param  float $tax
   */
  public function setTax(float $tax)
  {
    $this->tax = $tax;
  }
}