<?php

class Toy extends Product{
public $title;
public $size;
public $healthy;

public function __construct($_name,$_brand, Category $_category,$_price,$_image,$_size,$_healthy,$_title)
{
  parent::__construct($_name,$_brand, $_category,$_price,$_image);

  $this -> size = $_size;
  $this -> healthy = $_healthy;
  $this -> title = $_title;
}

public function changeHealthy(){
  if ($this -> healthy === true) {
    return 'Salutare';
  }elseif($this -> healthy === false){
    return 'Non Salutare';
  }
}

}

?>