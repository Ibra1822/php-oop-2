<?php 

class Food extends Product {

  public $title;
  public $weight;
  public $ingredients;
  public $taste;
  public $healthy;

  public function __construct($_name,$_brand, Category $_category,$_price,$_image,$_weight,$_ingredients,$_taste,$_healthy,$_title)
  {
    parent::__construct($_name,$_brand, $_category,$_price,$_image);  
    $this -> weight = $_weight;
    $this -> ingredients = $_ingredients;
    $this -> taste = $_taste;
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