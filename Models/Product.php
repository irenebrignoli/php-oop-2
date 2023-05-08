<?php

require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/../Traits/Colorable.php";
class Product{

  use Colorable;
  public $name;
  public $categories; //(gatto o cane)
  public $brand;
  public $image;
  private $price;
  protected $quantity;

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

  /**
     * Inserisce quantità rimasta prodotto
     * 
     * metodo richiamabile pubblicamente
     * @param int $num numero intero quantità
     * @return int ritorna il num corretto inserito
     */
  public function setQuantity($num){

        if (!is_numeric($num)) {
            throw new Exception('Il valore passato deve essere un numero');
        } else if (!is_int($num)) {
            throw new Exception('Il numero deve essere intero');
        }
    return $this->quantity = $num;
  }

}