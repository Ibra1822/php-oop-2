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
    if ($this -> type === 'Dog') {
      $class =  'fa-solid fa-dog';
    }else if ($this -> type === 'Cat') {
      $class = 'fa-solid fa-cat';
    }else{
      $class = 'fa-solid fa-square-full';
    }
    return $class;
  }

 }

?>

