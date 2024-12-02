<?php
class Data{
    public $n1;
    public $n2;

    function display($n1,$n2){
        $this -> n1 = $n1;
        $this -> n2 = $n2;
    }
}
class Operation extends Data{
    function add(){
        echo "Addition is ".$this -> n1 + $this -> n2."<br>";
    }
    function multiply(){
        echo "Multiplication is ".$this -> n1 * $this -> n2."<br>";
    }
}

$obj1 = new Operation();
$obj1 -> display(30,40);
$obj1 -> add();
$obj1 -> multiply();
