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

  public function getPrice(){
    return $this->price;
  }

  public function returnIcon(){

    foreach($this->category as $Category){

      if($Category->name == 'Cat'){
        echo '<i class="fa-solid fa-cat fs-4"></i>';
      }else if($Category->name == 'Dog'){
        echo '<i class="fa-solid fa-dog fs-4"></i>';
      }else if($Category->name == 'Dog' && 'Cat'){
        echo '<i class="fa-solid fa-cat fs-4"></i>';
        echo '<i class="fa-solid fa-dog fs-4"></i>';
      }
    }
  }
}