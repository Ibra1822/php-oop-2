<?php 

class Sit extends Product{

public $title;
public $comfortable;
public $size;
public $race;

public function __construct($_name,$_brand, Category $_category,$_price,$_image,$_comfortable,$_size,$_race,$_title)
{
parent::__construct($_name,$_brand,$_category,$_price,$_image);
$this -> comfortable = $_comfortable;
$this -> size = $_size;
$this -> race = $_race;
$this -> title = $_title;
}

public function changeComfortable(){
  if ($this -> comfortable === true) {
    echo 'Comodo';
  }elseif($this -> comfortable === false){
    echo  'Non Comodo';

  }

}

}

?>