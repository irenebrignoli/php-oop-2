<?php

require_once __DIR__ . "/Category.php";
class Product{
  public $name;
  public $categories; //(gatto o cane)
  public $brand;
  public $image;
  private $price;

  public function __construct(string $_name, array $_categories, string $_brand, $_image, float $_price){
    $this->name = $_name;
    $this->categories = $_categories;
    $this->brand = $_brand;
    $this->image = $_image;
    $this->price = $_price;
  }

  public function getPrice(){
    return $this->price;
  }

  public function getClassName(){
    return get_class($this);
  }

}