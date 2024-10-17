<?php
include "Product.php";

class Perishable extends Product
{
  private $expirationDate = null;

  /**
   *  Perishable constructor.
   *
   * @param  string $name
   * @param  float $basePrice
   * @param  string $manufacturer
   * @param  float $weight
   * @param  float $volume
   */
  public function __construct(string $name, float $basePrice, string $manufacturer, float $weight, float $volume)
  {
    parent::__construct($name, $basePrice, $manufacturer, $weight, $volume);
    $this->expirationDate = DateTime::createFromFormat('Y-m-d', '0-0-0');
  }

  /**
   * Set the expiration Date.
   *
   * @param  int $day   
   * @param  int $month 
   * @param  int $year  
   */
  public function setExpDate(int $day, int $month, int $year)
  {
    $this->expirationDate->setTime(0, 0, 0);
    $this->expirationDate->setDate($year, $month, $day);
  }
  /**
   * Returns number of days to Expire.
   *
   * @return int 
   */
  public function daysToExpire(): int
  {
    if (!$this->isExpired()) {
      $interval = $this->dateDiff();
      return ((int)$interval->days);
    } else {
      return -1;
    }
  }
  /**
   * Check if product is expired
   *
   * @return bool
   */
  public function isExpired(): bool
  {
    $interval = $this->dateDiff();
    if ($interval->invert == 1 || $interval->d <= 0) {
      return true;
    }
    return false;
  }

  /**
   * Return the difference between current date and expiration date.
   *
   * @return DateInterval
   */
  public function dateDiff(): DateInterval
  {
    $interval = $this->getCurrDate()->diff($this->getExpDate());
    return $interval;
  }

  /**
   * Return the current date.
   *
   * @return DateTime
   */
  public function getCurrDate(): DateTime
  {
    $aux = new DateTime();
    return $aux;
  }
  /**
   * Return expiration date.
   *
   * @return DateTime
   */
  public function getExpDate(): DateTime
  {
    return $this->expirationDate;
  }
}