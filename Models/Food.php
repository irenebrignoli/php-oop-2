<?php

require_once __DIR__ . "/Product.php";
class Food extends Product{
  public $type; //(umido o secco)
  public $age;
  public $for_sterilised;  //(si, no)

}