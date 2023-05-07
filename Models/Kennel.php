<?php

require_once __DIR__ . "/Product.php";
class Kennel extends Product{
  public $material;
  public $size;
  public $ambient; //(interno o esterno)
  public $color;
}