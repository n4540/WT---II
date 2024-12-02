<?php
  class Data{
  public $name; 
  function __construct($name){
     $this->name=$name;
     echo $name."<br>";
  }
  function __destruct(){
    echo"end";
  }
  }
  $obj1=new Data("Nachiket");
?>