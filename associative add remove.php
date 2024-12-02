<?php
$student = array("Name" => "Nachiket", "Age" => 20, "Course" => "BCA");

$student+= ["Batch" => "SYBCA"]; 
echo "After adding the element: <br>";
foreach ($student as $x => $y){
    echo "$x : $y <br>";
}

$data1 = array_diff($student, [20]);
echo "After removing the element: <br>";
foreach ($data1 as $x => $y){
    echo "$x : $y <br>";
}
?>