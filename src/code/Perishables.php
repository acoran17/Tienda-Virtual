<?php
include "Product.php";

class Perishables extends Product{
  private $cadDate = null;
  public function __construct($name, $basePrice, $manufacturer, $weight, $volume) { 
    parent::__construct($name, $basePrice, $manufacturer, $weight, $volume);
    $this->cadDate = DateTime::createFromFormat('Y-m-d', '0-0-0');
  }
  public function setCadDate(int $day,int $month,int $year){
    //$this->date = date('d/m/Y',mktime(0,0,0,$month,$day,$year));

    $this->cadDate->setTime(0,0,0);
    $this->cadDate->setDate($year, $month, $day);
  }
  public function getCadDate(){
    return $this->cadDate;
  }

}