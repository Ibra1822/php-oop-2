<?php 

class Product{

public $name;
public $brand;
public $category;
public $price;
public $image;  

public function __construct($_name,$_brand, Category $_category,$_price,$_image)
{

$this -> name = $_name;
$this -> brand = $_brand;
$this -> category = $_category;
$this -> price = $_price;
$this -> image = $_image;


}


}


