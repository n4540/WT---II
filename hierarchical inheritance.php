<?php
class Data1{
    public $x;
    public $y;

    public function setdata($x,$y)
    {
        $this->x=$x;
        $this->y=$y;
    }
   

}

class Op extends Data1{
    
    public function add()
    {

        echo "Addition is ".$this->x+$this->y."<br>";
    }

}

class Op1 extends Data1{
    public function sub()
    {

        echo "Subtraction is ".$this->x-$this->y."<br>";
    }

}

$obj1=new Op();
$obj1->setdata(30,40);
$obj1 -> add();

$obj2=new Op1();
$obj2->setdata(70,40);
$obj2 -> sub();

?>
