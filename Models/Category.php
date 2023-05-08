<?php

class Category{
  public $name;
  public $icon;
  public function __construct($_name, $_icon){
    $this->name = $_name;
    $this->icon= $_icon;
  }


}

//'<i class="fa-solid fa-cat fs-4"></i>';
//'<i class="fa-solid fa-dog fs-4"></i>';