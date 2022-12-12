<?php 

class Food extends Product {

  public $weight;
  public $ingredients;
  public $taste;
  public $healthy;

  public function __construct($_name,$_brand, Category $_category,$_price,$_image,$_weight,$_ingredients,$_taste,$_healthy)
  {
    parent::__construct($_name,$_brand, $_category,$_price,$_image);  
    $this -> weight = $_weight;
    $this -> ingredients = $_ingredients;
    $this -> taste = $_taste;
    $this -> healthy = $_healthy;
    
  }
}  


?>