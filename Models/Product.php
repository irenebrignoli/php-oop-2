<?php

class Product{
  public $name;
  public $category;
  public $image;
  private $price;

  public function __construct($_name, $_category, $_image, $_price){
    $this->name = $_name;
    $this->category = $_category;
    $this->image = $_image;
    $this->price = $_price;
  }
}