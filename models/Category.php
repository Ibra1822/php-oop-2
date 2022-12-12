<?php
 class Category{
  
  public $type;
  public $like;
  public function __construct($_type , $_like)
  {
    $this -> type = $_type;
    $this -> like = $_like;
  }

  function addPic(){
    if ($this -> type === 'dog') {
      $class =  'fa-solid fa-dog';
    }else if ($this -> type === 'cat') {
      $class = 'fa-solid fa-cat';
    }else{
      $class = 'fa-solid fa-square-full';
    }
    return $class;
  }

 }

?>

