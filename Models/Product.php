<?php

class Product{
  public $name;
  public $category; //(gatto o cane)
  public $brand;
  public $image;
  private $price;

  public function __construct(string $_name, array $_category, string $_brand, $_image, float $_price){
    $this->name = $_name;
    $this->category = $_category;
    $this->brand = $_brand;
    $this->image = $_image;
    $this->price = $_price;
  }
}